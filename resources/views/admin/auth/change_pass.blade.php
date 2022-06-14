 <!-- Edit Profile -->
 <div class="edit-profile mt-25">
     <div class="card">
         <div class="card-header  px-sm-25 px-3">
             <div class="edit-profile__title">
                 <h6>change password</h6>
                 <span class="fs-13 color-light fw-400">Change or reset your admin password</span>
             </div>
         </div>
         <div class="card-body">
             <div class="row justify-content-center">
                 <div class="col-xxl-6 col-lg-8 col-sm-10">
                     <div class="edit-profile__body mx-lg-20">
                         <form method="POST" action="{{ route('admin.change.pass') }}">
                             @csrf
                             <div class="form-group mb-20">
                                 <label for="old_pass">old passowrd</label>
                                 <input type="password" class="form-control" id="old_pass" name="old_pass">
                             </div>
                             <div class="form-group mb-20">
                                 <label for="password-field">new password</label>
                                 <div class="position-relative">
                                     <input id="password-field" type="password" class="form-control pr-50" name="new_pass">
                                     <span class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                 </div>
                                 @if (count($errors))
                                     @foreach ($errors->all() as $error)
                                         <small id="passwordHelpInline text-danger" class="text-light fs-13">{{ $error }}</small>
                                     @endforeach
                                 @else
                                 @endif
                             </div>
                             <div class="form-group mb-1">
                                 <label for="password-field">confirm password</label>
                                 <div class="position-relative">
                                     <input id="password-field" type="password" class="form-control pr-50" name="confirm_pass">
                                     <span class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                 </div>
                             </div>
                             <div class="button-group d-flex flex-wrap pt-45 mb-35">
                                 <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Save Changes</button>

                                 <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Edit Profile End -->
