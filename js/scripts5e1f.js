// Personalization v2.3.0 Copyright 2015 Jesse Fowler, Fiserv.  All rights reserved.
// Customized greeting
(function (jQuery) {

    jQuery.fn.fiservgreeting = function (options) {

        var settings = jQuery.extend({
            posttext: ', '
        }, options);

        var $this = this,
            greeting = "",
            nameHtml = "";

        date_now = new Date()

        hour_value = date_now.getHours()
        if (hour_value == 0) {
            greeting = "Good morning"
        }
        else if (hour_value < 12) {
            greeting = "Good morning"
        }
        else if (hour_value == 12) {
            greeting = "Good afternoon"
        }
        else if (hour_value < 17) {
            greeting = "Good afternoon"
        }
        else {
            greeting = "Good evening"
        }
        greeting += settings.posttext;
        $this.each(function (index) {
            jQuery(this).html(greeting)
        });
        return $this;
    }
}(jQuery));

(function (jQuery) {

    jQuery.fn.fiservdateandtime = function (options) {

        var settings = jQuery.extend({
            date: true,
            time: true,
            pretext: " It's ",
            posttext: "."
        }, options);

        var $this = this,
            htmlstr = settings.pretext,
            timeSegway = "";

        if (settings.date) {
            // This array holds the "friendly" day names
            var day_names = new Array(7)
            day_names[0] = "Sunday"
            day_names[1] = "Monday"
            day_names[2] = "Tuesday"
            day_names[3] = "Wednesday"
            day_names[4] = "Thursday"
            day_names[5] = "Friday"
            day_names[6] = "Saturday"

            // This array holds the "friendly" month names
            var month_names = new Array(12)
            month_names[0] = "January"
            month_names[1] = "February"
            month_names[2] = "March"
            month_names[3] = "April"
            month_names[4] = "May"
            month_names[5] = "June"
            month_names[6] = "July"
            month_names[7] = "August"
            month_names[8] = "September"
            month_names[9] = "October"
            month_names[10] = "November"
            month_names[11] = "December"

            // Get the current date
            date_now = new Date()

            // Figure out the friendly day name
            day_value = date_now.getDay()
            date_text = day_names[day_value]

            // Figure out the friendly month name
            month_value = date_now.getMonth()
            date_text += " " + month_names[month_value]

            // Add the day of the month
            date_text += " " + date_now.getDate()

            // Add the year
            date_text += ", " + date_now.getFullYear()

            // Get the minutes in the hour
            minute_value = date_now.getMinutes()
            if (minute_value < 10) {
                minute_value = "0" + minute_value
            }

            htmlstr += date_text;
            timeSegway = " at ";
        }

        if (settings.time) {
            hour_value = date_now.getHours();
            minute_value = date_now.getMinutes();
            if (minute_value < 10) {
                minute_value = "0" + minute_value
            }
            if (hour_value == 0) {
                time_text = timeSegway + (hour_value + 12) + ":" + minute_value + " AM"
            }
            else if (hour_value < 12) {
                time_text = timeSegway + hour_value + ":" + minute_value + " AM"
            }
            else if (hour_value == 12) {
                time_text = timeSegway + hour_value + ":" + minute_value + " PM"
            }
            else if (hour_value < 17) {
                time_text = timeSegway + (hour_value - 12) + ":" + minute_value + " PM"
            }
            else {
                time_text = timeSegway + (hour_value - 12) + ":" + minute_value + " PM"
            }
            htmlstr += time_text;
        }

        $this.each(function (index) {
            jQuery(this).html(htmlstr + settings.posttext)
        });
        return $this;
    }
}(jQuery));

// Personalize
(function (jQuery) {
    jQuery.fn.personalization = function (options) {
        var settings = jQuery.extend(true, {
            personalizationEnable: true,
            localStorageTest: 'personalizephoenixfed',
            localStorageFirstName: 'personalizationFirstName',
            popupForm: jQuery('#personalizationPopup1'),
            nameField: jQuery('#personalizationName')
        }, options),
            init = function (obj) {
                var personalizeMyFinancial = window.localStorage.setItem(settings.localStorageTest, 'true');

                if (settings.popupForm && settings.personalizationEnable && window.localStorage.getItem(settings.localStorageTest)) {
                    var personalizationFirstName = window.localStorage.getItem(settings.localStorageFirstName),
                        spans = obj;

                    var initializepersonalization = function () {
                        settings.popupForm.addClass('active');
                        settings.nameField.focus();
                    };

                    var personalizationInitialize = function () {
                        personalizationFirstName = window.localStorage.getItem(settings.localStorageFirstName);
                        if (spans != '') {
                            if (!personalizationFirstName) {
                                initializepersonalization();
                            } else {
                                settings.popupForm.removeClass('active');
                            }
                            spans.each(function () {
                                var firstNameElement = jQuery('<a href="javascript:void(0)" class="personalizationSetting" style="cursor:pointer"></a>');
                                firstNameElement.on("click", function () {
                                    initializepersonalization();
                                });
                                if (!personalizationFirstName) {
                                    var linkHtml = jQuery(this).html();
                                    firstNameElement.html(linkHtml);
                                } else if (personalizationFirstName != 'Skipped') {
                                    firstNameElement.html(personalizationFirstName);
                                } else {
                                    var linkHtml = jQuery(this).html();
                                    firstNameElement.html(linkHtml);
                                }
                                jQuery(this).html('');
                                jQuery(this).append(firstNameElement);
                            });
                        }
                    };
                    personalizationInitialize();

                    var personalizationClose = jQuery('.personalizationClose');
                    personalizationClose.each(function (index) {
                        jQuery(this).on("click", function () {
                            window.localStorage.setItem(settings.localStorageFirstName, 'Skipped');
                            settings.popupForm.removeClass('active');
                        });
                    });

                    var personalizationPopupClosePerm = jQuery('.personalizationPopupClosePerm');
                    personalizationPopupClosePerm.each(function (index) {
                        jQuery(this).on("click", function () {
                            window.localStorage.setItem(settings.localStorageFirstName, 'Skipped');
                            settings.popupForm.removeClass('active');
                        });
                    });

                    if (jQuery('#personalizationForm')) {
                        jQuery('#personalizationForm').on("submit", function (e) {
                            e.preventDefault();
                            window.localStorage.setItem(settings.localStorageFirstName, settings.nameField.prop('value'));
                            personalizationInitialize();
                            settings.popupForm.removeClass('active');
                        });
                    }
                }
            };
        init(this);
        return this;
    };
}(jQuery));

// Replace with checkmarks v1.0.0 Copyright 2017 Jesse Fowler, Fiserv.  All rights reserved.
(function (jQuery) {
    jQuery.fn.replaceWithCheckmarks = function (options) {
        var settings = jQuery.extend({
            findThis: 'x',
            htmlReplacement: '<span class="checkmark"><span class="visuallyhidden">x</span></span>'
        }, options);
        this.each(function () {
            if (jQuery(this).html() == settings.findThis) {
                jQuery(this).html(settings.htmlReplacement);
            }
        });
        return this;
    };
}(jQuery));

// Scroll Trigger
var initscrolltrigger = function () {

    jQuery(".home #homenav + *").scrollTrigger({
        elementOffset: .15,
        target: jQuery('body'),
        triggerClass: 'nav-fixed'
    });

    jQuery("#gototop").scrollTrigger({
        scrollMin: 150
    });

    jQuery("#thrify-section").scrollTrigger({
        elementOffset: .8
    });

    jQuery(".subsection-callout").scrollTrigger({
        resetOnScrollUp: false,
        elementOffset: .8
    });
};

/* DOM Ready -----------------------------------------------*/
jQuery(document).ready(function () {

    //	Captcha v2.1.0 Copyright 2015 Jesse Fowler, Fiserv.  All rights reserved.
    function initCaptchaField(el, index) {
        var captchaClassName = 'plain', 						// If you want a unique style set the class here, if you want the default set to 'default'. 
            captchaNumbers = el.attr('rel') - 1,
            captchaFieldHTML = '',
            captchaNumberHTML = '',
            i = 0;
        for (i = 0; i <= captchaNumbers; i++) {
            var randomNumber = Math.floor(Math.random() * 10);
            var randomNumberShiftWidth = (Math.random() / 4);
            var plusOrMinusHeight = Math.random() < 0.5 ? -1 : 1;
            var randomNumberShiftHeight = (Math.random() / 4) * plusOrMinusHeight;
            captchaFieldHTML = captchaFieldHTML + '<div alt="' + randomNumber + '" style="transform: translate(' + randomNumberShiftWidth + 'em, ' + randomNumberShiftHeight + 'em)">' + randomNumber + '</div>';
            captchaNumberHTML = captchaNumberHTML + randomNumber.toString();
        }
        var captchaField = jQuery("<div/>", {
            'class': 'captchaField ' + captchaClassName
        });
        var captchaFieldNumbers = jQuery("<div/>", {
            'class': 'captchaFieldNumbers',
            'html': captchaFieldHTML
        });
        var captchaFieldBoxLeft = jQuery("<div/>", {
            'class': 'captchaFieldBoxLeft',
            'html': ''
        });
        var captchaFieldBoxMid = jQuery("<div/>", {
            'class': 'captchaFieldBoxMid',
            'html': ''
        });
        var captchaFieldBoxMidOverlay = jQuery("<div/>", {
            'class': 'captchaFieldBoxMidOverlay',
            'html': ''
        });
        var captchaFieldBoxMidOverlaySecure = jQuery("<div/>", {
            'class': 'captchaFieldBoxMidOverlaySecure',
            'html': ''
        });
        var captchaFieldBoxRight = jQuery("<div/>", {
            'class': 'captchaFieldBoxRight',
            'html': ''
        });
        var captchaFieldRefresh = jQuery("<div/>", {
            'class': 'captchaFieldRefresh'
        });
        captchaFieldRefresh.on({
            "click": function () {
                var parent1 = jQuery(this).parent();
                var parent2 = parent1.parent();
                parent2.remove();
                initCaptchaField(el);
            },
            "mouseover": function () {
                jQuery(this).css('background-position', '-43px 0');
            },
            "mouseout": function () {
                jQuery(this).css('background-position', '0 0');
            }
        });
        var captchaNumber = jQuery("<input/>", {
            'id': 'captchaNumber' + (index + 1),
            'name': 'captchaNumber' + (index + 1),
            'class': 'captchaNumber',
            'value': captchaNumberHTML
        });
        el.prop('value', captchaNumberHTML);
        el.after(captchaField);
        captchaField.append(captchaFieldBoxLeft);
        captchaField.append(captchaFieldBoxMid);
        captchaFieldBoxMid.append(captchaFieldBoxMidOverlay);
        captchaFieldBoxMid.append(captchaFieldBoxMidOverlaySecure);
        captchaField.append(captchaFieldBoxRight);
        captchaFieldBoxRight.append(captchaFieldRefresh);
        captchaFieldBoxMid.append(captchaFieldNumbers);
        captchaFieldNumbers.children('img').each(function (index) {
            var currentBackgroundPosition = jQuery(this).css('background-position');
            /*
            var numberEffects = new Fx.Morph(el, {
                duration: 1000,
                transition: Fx.Transitions.Sine.easeOut
            });
            numberEffects.start({
                'background-position': ['0 0', currentBackgroundPosition]
            });
            */
            jQuery(this).css('background-position', currentBackgroundPosition);
            //jQuery(this).animate({'background-position': currentBackgroundPosition}, 1000);
        });
    }

    function initCaptcha() {
        jQuery('div.captchaField').each(function (index) {
            jQuery(this).remove();
        });
        jQuery('input.captchaNumber').each(function (index) {
            jQuery(this).remove();
        });
        jQuery('input.captcha').each(function (index) {
            initCaptchaField(jQuery(this));
        });
    }
    initCaptcha();

    // Remove unwanted spaces
    jQuery('p').each(function () {
        var $this = jQuery(this);
        if ($this.html().replace(/\s|&nbsp;/g, '').length == 0)
            $this.remove();
    });

    jQuery('body').pageClass();

    jQuery('a.Include-Form').cmsInclude({
        url: "inc_contact-form.aspx",
        async: true,
        success: function () {
            jQuery('#the-form').ajaxPost({
                url: "sendmail52.aspx",
                postContainer: jQuery('#contact'),
            });
            initCaptcha();
        }
    });
    jQuery('a.Include').cmsInclude();;

    // Swipe Toolbar
    var hasSwipedRight = false;
    jQuery("body").on("swiperight", swipeleftHandler);

    function swipeleftHandler(event) {
        jQuery("#toolbar").removeClass('toolbar-active');
    }
    jQuery("body").on("swipeleft", swiperightHandler);

    function swiperightHandler(event) {
        hasSwipedRight = true;
        jQuery("#toolbar").addClass('toolbar-active');
    }
    jQuery("#toolbar").addClass('toolbar-active');
    jQuery("#toolbar").on('mouseenter', function () {
        hasSwipedRight = true;
    }).on('mouseleave', function () {
        hasSwipedRight = false;
    });

    // Responsive Nav
    jQuery("#menuopen").click(function () {
        jQuery("body").toggleClass("opennav");
        jQuery("body").removeClass("openob"); //Hide login     
    });

    jQuery(".nav ul li").click(function () {
        jQuery(this).toggleClass("active");
        //jQuery(this).siblings().removeClass("active"); //closes other tabs
    });

    // Login open and close
    jQuery("#loginopen").click(function () { // Login Show/Hide
        jQuery("body").toggleClass("openob");
        jQuery("body").removeClass("opennav"); //Hide Responsive Nav      
    });

    // Homenav door navigation
    jQuery("ul.nav2 li").click(function () {
        jQuery(this).toggleClass("active");
        //jQuery(this).siblings().removeClass("active"); //closes other tabs
    });
    jQuery("ul.panelnav li").click(function () {
        jQuery(this).toggleClass("active");
        //jQuery(this).siblings().removeClass("active"); //closes other tabs
    });

    // Detect TD has Content
    jQuery("[class*=subsection] .inner-content > table:not('[class*=Table]') td, .Subsection-Table > tbody > tr > td:first-of-type > table:not('[class*=Table]') td").each(function () {
        var $this = jQuery(this);

        if (($this.html().length > 25) || ($this.find('h1,h2,h3,h4,h5').length)) {
            $this.addClass("show");
        }
    });

    jQuery('.greeting').fiservgreeting();
    jQuery('.date-and-time').fiservdateandtime()
    setInterval(function () { jQuery('.date-and-time').fiservdateandtime() }, 60000);
    jQuery('span.firstname').personalization();

    // Add overlay (fade) based on content location
    // Detect TD has Content required
    jQuery(".subsection[style*='url'] .inner-content > table:not('[class*=Table]') > tbody > tr, .Subsection-Table[style*='url'] > tbody > tr > td:first-of-type > table:not('[class*=Table]') > tbody > tr").each(function () {
        var $this = jQuery(this);

        if (jQuery(this).find("td:first-child").hasClass("show") && jQuery(this).find("td:last-child").hasClass("show")) {
        } else if (jQuery(this).find("td:first-child").hasClass("show")) {
            $this.parents(".subsection, .Subsection-Table").addClass("fade-left");
        } else if (jQuery(this).find("td:last-child").hasClass("show")) {
            $this.parents(".subsection, .Subsection-Table").addClass("fade-right");
        }
    });

    // Calls scrollTrigger
    initscrolltrigger();

    jQuery(function () {
        jQuery('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    // Fiserv Random selection v1.0.0 Copyright (c) 2016 Jesse Fowler, Fiserv
    function getRandomIntInclusive(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    (function (jQuery) {
        jQuery.fn.fiservRandom = function (options) {
            var settings = jQuery.extend({
                lightbox: false,
                debug: false
            }, options);

            var $this = jQuery(this),
                randomNumber = getRandomIntInclusive(0, $this.length - 1);
            if (settings.debug) { console.log($this) }
            if (settings.debug) { console.log('randomNumber:' + randomNumber) }
            var resetRandom = function () {
                $this.addClass('random-hidden');
                $this.removeClass('random-active')
            }
            resetRandom();
            $this.eq(randomNumber).removeClass('random-hidden').addClass('random-active');
            if (settings.lightbox && $this.length > 0) {
                var randomId;
                if (typeof $this.eq(randomNumber).attr('id') != "undefined") {
                    randomId = '#' + $this.eq(randomNumber).attr('id');
                } else {
                    $this.eq(randomNumber).attr('id', 'mb_random-' + randomNumber)
                    randomId = '#mb_random-' + randomNumber;
                }
                if (settings.debug) { console.log('randomId:' + randomId) }
                Mediabox.open(randomId, 'Customer Testimonial', '400 100');
            }
            return $this.eq(randomNumber);
        }
    }(jQuery));

    jQuery("#balloon > table").fiservRandom();

    // Navigation panel fix 1.1.0 Copyright 2018 Jesse Fowler, Fiserv.  All rights reserved.
    (function (jQuery) {
        jQuery.fn.navigationPanelFix = function (options) {
            var settings = jQuery.extend(true, {
                tooWideClass: 'edge'
            }, options),
                init = function (obj) {
                    obj.off('mouseenter mouseleave');
                    obj.on('mouseenter mouseleave', function (e) {
                        try {
                            var parentElm = $(this),
                                combinedWidth = Math.abs($('div:first', parentElm).offset().left) + $('div:first', parentElm).width(),
                                bodyWidth = jQuery('body').width();
                            parentElm.removeClass(settings.tooWideClass);
                            if (jQuery('div', parentElm).length) {
                                if (combinedWidth > bodyWidth) {
                                    parentElm.addClass(settings.tooWideClass);
                                } else {
                                    parentElm.removeClass(settings.tooWideClass);
                                }
                            }
                        } catch (e) {
                            // log errors
                        }
                    });
                };
            init(this);
            return this;
        };
    }(jQuery));

    jQuery("#primary > div > ul > li").navigationPanelFix();

    // Target blank for speedbumps.
    var links = document.getElementsByTagName("a");
    for(var i=0; i<links.length; i++) {
        if(links[i].href.match(/speedbump/i) && links[i].href.match(/\?link\=/i) && !links[i].target){
            links[i].target = '_blank';
        }
    }

    // Responsive Zoom 2.2.1 Copyright (c) 2014 Fiserv.  All rights reserved.
    // Requires Modernizr, jQuery
    // Needs to be AFTER any section table/div replacement scripts

    function onWinResize() {
        var windowSize = window.innerWidth;

        // Set page width maximums and minimums
        pageWidth = parseFloat(windowSize);
        if (pageWidth < 1001) {
            try {
                jQuery("body").addClass("mobile");
                jQuery("body").removeClass("desktop");
                //if (hasSwipedRight == false) {
                //    setTimeout(function () {
                //        jQuery("#toolbar").removeClass('toolbar-active');
                //    }, 5000);
                //}
            } catch (err) { }
        } else {
            try {
                jQuery("body").removeClass("mobile");
                jQuery("body").addClass("desktop");
            } catch (err) { }
        }

        //Applies the zoom to an element with the specified classes
        //Example:
        //jQuery(".responsivezoom").responsiveZoom();

        jQuery(".Table-Style").responsiveZoom();
        jQuery(".Table-Product").responsiveZoom();

        jQuery("#primary > div > ul > li").navigationPanelFix();

        onWinResizeInitalized = true;
    }

    // Initializer - Calls Responsive Zoom
    onWinResize();
    var windowWidth = jQuery(window).width();
    var onWinResizer = debounce(function () {
        if (jQuery(window).width() != windowWidth) {
            onWinResize();
            windowWidth = jQuery(window).width();
        }
    }, 500);

    jQuery(window).on('resize', onWinResizer);

    // Replace with checkmarks v1.0.0 Copyright 2017 Fiserv.  All rights reserved.
    jQuery(".Table-Product > * > tr > td > p").add(".Table-Product > * > tr > td").add(".Table-Style > * > tr > td > p").add(".Table-Style > * > tr > td").replaceWithCheckmarks({
        findThis: 'X',
        htmlReplacement: '<span class="checkmark"><span class="visuallyhidden">Yes</span></span>'
    });

    // Scroll to hash ie fix.
    var hash = location.hash.replace('#', '');
    if (hash != '') {
        jQuery('html, body').animate({ scrollTop: jQuery('#' + hash).offset().top }, 1000);
    }
});

jQuery(window).scroll(function () {
    //calls scrollTrigger
    initscrolltrigger();
});

jQuery(window).load(function () {

    setTimeout(function () {
        jQuery('body').addClass('time-mark-1');
    }, 10000)

    if (jQuery('body').hasClass('home')) {
        jQuery(".notice").responsiveSiteNotice();
        // Place directly after the Site Notice 3.1.0 script
        var $body = jQuery("body");
        // Smart App Banners 1.1.0 
        var ua = navigator.userAgent;
        var kindleStrings = ["KFAPWA", "KFAPWI", "KFARWI", "KFASWI", "KFFOWI", "KFGIWI", "KFJWA", "KFJWI", "KFMEWI", "KFOT", "KFSAWA", "KFSAWI", "KFSOWI", "KFTBWI", "KFTHWA", "KFTHWI", "KFTT", "Kindle", "Silk"];
        var isKindle = false;

        for (index = 0; index < kindleStrings.length; index++) {
            var matchRegExp = new RegExp(kindleStrings[index]);
            if (matchRegExp.test(ua)) {
                isKindle = true;
                break;
            }
        }

        var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
        if (mobile) {
            var userAgent = navigator.userAgent.toLowerCase();
            if ((userAgent.search("android") > -1) && (userAgent.search("mobile") > -1) && !isKindle) {
                $body.addClass("android");
            } else if ((userAgent.search("android") > -1) && (userAgent.search("mobile") <= -1) && !isKindle) {
                $body.addClass("android-tablet");
            } else if ((userAgent.search("android") > -1) && (userAgent.search("mobile") > -1) && isKindle) {
                $body.addClass("android");
            } else if ((userAgent.search("android") > -1) && (userAgent.search("mobile") <= -1) && isKindle) {
                $body.addClass("android-tablet");
            } else if (userAgent.search("ipad") > -1) {
                $body.addClass("ipad");
            } else if ((userAgent.search("iphone") > -1) || (userAgent.search("ipod") > -1)) {
                $body.addClass("iphone");
            }
        }
    }
})