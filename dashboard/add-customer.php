<? require_once("dashbord-header.php") ?>

<div class="container">
     <h5>Add User</h5>
     <hr>
     <form action="" method="post">

          <div class="row">
               <div class="col">
                    <div class="form-group form-control-sm">
                         <label for="surname">Surname*</label>
                         <input type="text" class="form-control form-control-sm" id="surname" name="surname">
                    </div>
                    <div class="form-group form-control-sm">
                         <label for="otherName">Other Names*</label>
                         <input type="text" class="form-control form-control-sm" id="otherName" name="thername">
                    </div>
                    <div class="form-group form-control-sm">
                         <label for="dateOfBirth">Date of Birth*</label>
                         <input type="date" class="form-control form-control-sm" id="dateOfBirth" name="dateOfBirth">
                    </div>
                    <div class="form-group form-control-sm">
                         <label for="exampleInputPassword1">Gender*</label>
                         <select class="form-control form-control-sm">
                              <option>Gender</option>
                              <option>Female</option>
                              <option>Male</option>
                         </select>
                    </div>
                    <div class="form-group form-control-sm">
                         <label for="phone">Phone</label>
                         <input type="password" class="form-control form-control-sm" id="phone" name="phone">
                    </div>
                    <div class="form-group form-control-sm">
                         <label for="exampleInputEmail1">Email address</label>
                         <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
               </div>

               <div class="col">

                    <div class="form-group form-control-sm">
                         <label for="exampleFormControlTextarea1" class="form-control-sm">Residential Address*</label>
                         <textarea class=" form-control form-control-sm" id="exampleFormControlTextarea1" name="address" rows="3"></textarea>
                    </div>
                    <div class="form-group form-control-sm">
                         <label for="city">City</label>
                         <input type="text" class="form-control form-control-sm" id="city" name="city">
                    </div>
                    <div class="form-group form-control-sm">
                         <label for="state" class="form-control-sm">State*</label>
                         <input type="text" class="form-control form-control-sm" id="state" name="state">
                    </div>
                    <div class="form-group form-control-sm">
                         <label for="exampleInputPassword1 form-control-sm">Zip Code*</label>
                         <input type="text" class="form-control form-control-sm" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-control-sm">
                         <label for="exampleInputPassword1 form-control-sm">Country*</label>
                         <input type="text" class="form-control form-control-sm" id="exampleInputPassword1">
                    </div>
               </div>
          </div>

     </form>
</div>