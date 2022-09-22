// Fiserv Construct 2.1.0 by JP Larson, Copyright 2020 Fiserv. All rights reserved.
class Fiserv {
    constructor(options) {
        this.logTime("Init Start");
        this.packageName = options && options.packageName ? options.packageName : this.constructor.name;
        Fiserv.register(this);
    }
    static message(msg) {
        if (!msg || typeof msg !== "object") return new Error(`Invalid Message, Object expected.`);
        if (!this.registry) return new Error(`Missing Registry`);
        for (let key in this.registry) {
            const thisPackage = this.registry[key];
            for (let i = 0; i < thisPackage.length; i++) {
                const thisInstance = thisPackage[i];
                if (typeof thisInstance.onmessage === "function") thisInstance.onmessage(msg);
            }
        }
    }
    static register(call) {
        if (!call) return new Error(`Invalid Call`);
        if (!this.registry) this.registry = {};
        if (!this.registry[call.constructor.name]) this.registry[call.constructor.name] = [];
        if (this.registry[call.constructor.name].indexOf(call) !== -1) return call.logError(`An instance cannot be logged more than once.`);
        this.registry[call.constructor.name].push(call);
    }
    static get timeLog() {
        if (!this._timeLog) return;
        const report = this._timeLog;
        report.duration = report[report.length - 1].timeStamp - report[0].timeStamp;
        return report;
    }
    set nodeList(nList) {
        if (!nList || typeof nList !== "object") return this.logError(`Invalid "nodeList"`);
        this.addPointer(nList);
        this._nodeList = nList;
    }
    set options(options) {
        if (!options) return;
        if (typeof options !== "object") return this.logError(`Invalid "options"`);
        Object.assign(this, options);
    }
    set template(htmlString) {
        if (!htmlString) return this.logError(`Missing "template"`);
        this._template = this.parseHTML(htmlString);;
    }
    get nodeList() { return this._nodeList; }
    get template() { return this._template; }
    get timeLog() {
        const report = [];
        for (let i = 0; i < Fiserv._timeLog.length; i++) {
            const thisEntry = Fiserv._timeLog[i];
            if (thisEntry.instance === this) report.push(thisEntry);
        }
        if (!report.length) return this.logError(`No time logs for this instance.`);
        report.duration = report[report.length - 1].timeStamp - report[0].timeStamp;
        return report;
    }
    addPointer(nList) {
        if (!nList.length) nList[this.packageName] = this;
        for (let i = 0; i < nList.length; i++) {
            nList[i][this.packageName] = this;
        }
    }
    clean(args) { return this.logError(`This package is missing a custom clean function.`); }
    logTime(label) {
        if (!Fiserv.timeLog) Fiserv._timeLog = [];
        Fiserv._timeLog.push({
            "timeStamp": performance.now(),
            "instance": this,
            "label": label ? label : null
        });
    }
    logError(args, callback) {
        let error = new Error(args);
        if (callback && typeof callback === "function") error = new Error(callback(args));
        if (!Fiserv.errorLog) this.errorLog = [];
        this.errorLog.push(error);
        if (this.throwErrors) throw error;
        if (window.console && window.console.warn) console.warn(error.stack);
    }
    parseHTML(htmlString) {
        if (!htmlString || typeof htmlString !== "string") return this.logError(`Invalid HTML String`);
        const domNodes = new DOMParser().parseFromString(htmlString, "text/html").querySelectorAll("body > *");
        if (!domNodes) return this.logError(`Invalid HTML String`);
        this.addPointer(domNodes);
        return domNodes;
    }
}




class Expander extends Fiserv {
    constructor(options) {
        //Parent/Super Constructor Call
        super(options);

        //Default Properties
        this.nodeList = document.querySelectorAll('[class*="Table-Expandable"]'),
            this.additionalOffsetTop = 10, // Added offset height to the scroll baseOffsetTopObject
            this.animationend = false,
            this.animationDuration = 500,
            this.baseOffsetTopObject = document.querySelectorAll('header')[0], // Fixed object that overlays the scrollable content area.
            this.baseOffset = '2rem', // Added with baseOffsetTopObject to be the total offset.
            this.debugging = true,
            this.defaultClass = 'Table-Expandable',
            this.displayedMobileOnly = document.getElementById('tabtoexpander'),
            this.hash = '',
            this.openFirstExpandable = false,
            this.openAll = false,
            this.pageLinkSupport = true,
            this.scrollToExpanders = false;

        //Default Overrides
        this.options = options;

        //Initialize Needed Functions
        this.init();

        //Complete Time Stamp
        this.logTime(`Init End`);
    }

    bindCallbacks() {
        this.clean = this.clean.bind(this);
        this.completeCallback = this.completeCallback.bind(this);
        this.applyExpander = this.applyExpander.bind(this);
        this.initPageLinkSupport = this.initPageLinkSupport.bind(this);
        //this.openExpandersFromQuerystring = this.openExpandersFromQuerystring.bind(this);
        return true;
    }

    clean() {
        window.removeEventListener("resize", this.applyExpander);
        if (typeof this.elementsAdded !== "object") {
            for (let i = this.elementsAdded.length - 1; i >= 0; i--) {
                let children = this.elementsAdded[i].childNodes;
                for (let j = 0; i < children.length; j++) {
                    children[j].style.transformOrigin = "";
                    children[j].style.transform = "";
                    children[j].style.marginTop = "";
                    children[j].style.marginBottom = "";
                    this.elementsAdded[i].insertAdjacentElement('afterend', children[j]);
                }
                this.elementsAdded[i].parentNode.removeChild(this.elementsAdded[i]);
            }
        }
        return true;
    }

    init() {
        if (!this.applyExpander()) return false;
        //if (!this.openExpandersFromQuerystring()) return false;
        this.bindCallbacks();
        this.completeCallback();
        return true;
    }

    completeCallback() {
        Fiserv.message(this);
    }

    onmessage(obj) {
        switch (obj.packageName) {
            case "CmsInclude":
                if (obj.load) {
                    this.applyExpander();
                }
                break;
        }
    }

    autoExpansionDetection(node) {
        if (!node) { return false; }
        let enableAutoExpansion = false;
        if ((this.openFirstExpandable && i === 0) || this.openAll) {
            enableAutoExpansion = true;
        }
        if (node.className.match('-Initial-Open') && !node.previousElementSibling.className.match('-Initial-Open')) {
            enableAutoExpansion = true;
        }
        if (node.className.match('-All-Open')) {
            enableAutoExpansion = true;
        }
        if (enableAutoExpansion) {
            node.classList.add('expanded');
        }
    }

    animationDetectionAndMessaging(node) {
        if (!node) { return false; }
        let enableMessaging = false;

        if (enableMessaging) {
            this.animationend = true;
            Fiserv.message(this);
            this.animationend = false;
        }
    }

    expandExpander(node) {
        node.classList.add('expanded');
        node.children[0].setAttribute('aria-expanded', 'true');
    }

    collapseExpander(node) {
        node.classList.remove('expanded');
        node.children[0].setAttribute('aria-expanded', 'false');
    }

    expanderHashChange(nodeList) {
        if (!window.location.hash) return;
        if (!document.querySelector(window.location.hash)) return;
        try {
            if (document.querySelector(window.location.hash) && document.querySelector(window.location.hash).parentElement.parentElement.parentElement.className.match('Table-Expandable')) {
                let node = document.querySelector(window.location.hash);
                let resetViewToAnchor = function (event) {
                    if (document.querySelector(window.location.hash).parentElement.parentElement.parentElement.className.match('expanded')) { return; }
                };
                document.getElementsByTagName('body')[0].addEventListener("animationend", resetViewToAnchor, false);
                node.parentElement.parentElement.parentElement.classList.add('expanded');
                node.parentElement.parentElement.setAttribute('aria-expanded', 'true');
                setTimeout(function () { window.location = window.location.hash; }, 1000);
            }
        } catch (e) {

        }
    }

    applyExpander() {
        if (!this.elementsAdded) this.elementsAdded = [];
        for (let i = 0; i < this.nodeList.length; i++) {
            const node = this.nodeList[i];
            var expander = []; // Customize with element that is visible only in the mobile view.
            this.autoExpansionDetection(node);

            expander = node.children[0];
            let expandingNode = node.getElementsByTagName('tbody')[0];
            if (!expander.getAttribute('aria-controls')) {
                expander.setAttribute('aria-controls', 'expandable-details-' + (i + 1));
            }
            if (!expander.getAttribute('aria-expanded')) {
                if (node.classList.contains('expanded')) {
                    expander.setAttribute('aria-expanded', 'true');
                } else {
                    expander.setAttribute('aria-expanded', 'false');
                }
            }
            if (!expandingNode.id) {
                expandingNode.id = 'expandable-details-' + (i + 1);
            }
            if (!expandingNode.getAttribute('role')) {
                expandingNode.setAttribute("role", "region");
            }
            if (!expandingNode.getAttribute('tabindex')) {
                expandingNode.setAttribute("tabindex", "-1");
            }

            if (expandingNode.parentElement.querySelectorAll('caption a[id]').length === 0) {
                let anchor = document.createElement('a');
                anchor.id = "expandable-" + (i + 1);
                expander.children[0].prepend(anchor);
            }

            expander.addEventListener("click", () => {
                if (node.classList.contains('expanded')) {
                    this.collapseExpander(node);
                    history.replaceState('', null, "");
                } else {
                    this.expandExpander(node);
                    history.replaceState('', null, "#" + expandingNode.parentElement.querySelectorAll('caption a[id]')[0].id);
                }
            }, false);
        }

        // Adds the ability for anchor links to scroll to element and open expander.
        this.initPageLinkSupport(this.nodeList);

        window.addEventListener("hashchange", this.expanderHashChange(this.nodeList), false);
        window.addEventListener("popstate", this.expanderHashChange(this.nodeList), false);

        this.completeCallback();
        return true;
    }

    getHash() {
        if (window.location.hash) {
            var hash = window.location.hash.substring(1);
            if (hash.length === 0) {
                return false;
            } else {
                return hash;
            }
        } else {
            return false;
        }
    }

    initPageLinkSupport(nodeList) {
        if (!this.pageLinkSupport) return;
        var linksToAnchors = document.querySelectorAll('a[href*=\\#]');
        for (let i = 0; i < linksToAnchors.length; i++) {
            for (let j = 0; j < nodeList.length; j++) {
                let testNode = nodeList[j].querySelectorAll('caption a[id]');
                if (testNode.length > 0 && linksToAnchors[i].hash.substr(1) === testNode[0].id) {
                    linksToAnchors[i].addEventListener("click", function (e) {
                        if (!nodeList[j].classList.contains('expanded')) {
                            nodeList[j].children[0].click();
                        }
                        //this.scrollToElement(matchingObj, this.animationDuration);
                    });
                }
            }
        }
    }

    openExpandersFromQuerystring() {
        if (this.getHash()) {
            if (this.debugging) { console.log('getHash: ' + this.getHash()); }
            this.hash = this.getHash();
            if (!document.getElementById(this.hash)) return;
            if (document.getElementById(this.hash).parentNode.parentNode.parentNode) {
                document.getElementById(this.hash).parentNode.parentNode.parentNode.classList.add('expanded');
            }
        }
    }
}

const expander = new Expander({
    "nodeList": document.querySelectorAll('[class*="Table-Expandable"]')
});