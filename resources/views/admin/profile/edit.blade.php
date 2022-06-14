@extends('admin.master')

@section('admin')
    <div class="contents">

        <div class="profile-setting ">
            <div class="container-fluid">
                <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">My profile</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">

                                        <div class="form-group mb-0">
                                            <div class="input-container icon-left position-relative">
                                                <span class="input-icon icon-left">
                                                    <span data-feather="calendar"></span>
                                                </span>
                                                <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                                <span class="input-icon icon-right">
                                                    <span data-feather="chevron-down"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <span class="dropdown-item">Export With</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-print"></i> Printer</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-file-pdf"></i> PDF</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-file-text"></i> Google Sheets</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-file-csv"></i> CSV</a>
                                        </div>
                                    </div>
                                    <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-share"></i> Share
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                            <span class="dropdown-item">Share Link</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-facebook"></i> Facebook</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-twitter"></i> Twitter</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-google"></i> Google</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-feed"></i> Feed</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-instagram"></i> Instagram</a>
                                        </div>
                                    </div>
                                    <div class="action-btn">
                                        <a href="#" class="btn btn-sm btn-primary btn-add">
                                            <i class="la la-plus"></i> Add New</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-5">
                            <!-- Profile Acoount -->
                            <div class="card mb-25">
                                <div class="card-body text-center p-0">

                                    <div class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                                        <div class="ap-img mb-20 pro_img_wrapper">
                                            <input id="profile_upload" type="file" name="profile_upload" class="d-none">
                                            <label for="profile_upload">
                                                <img class="ap-img__main rounded-circle wh-120" id="previewProfile" src="{{ !empty($admin_data->profile_img) ? url('admin/img/author/' . $admin_data->profile_img) : url('admin/img/no-img.jpg') }}" alt="profile">
                                                <span class="cross" id="remove_pro_pic">
                                                    <span data-feather="camera"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="ap-nameAddress pb-3">
                                            <h5 class="ap-nameAddress__title">{{ $profile_edit_data->name }}</h5>
                                            <p class="ap-nameAddress__subTitle fs-14 m-0">UI/UX Designer</p>
                                        </div>
                                    </div>
                                    <div class="ps-tab p-20 pb-25">
                                        <div class="nav flex-column text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                <span data-feather="user"></span>Edit profile</a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                <span data-feather="settings"></span>Account
                                                setting</a>
                                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                <span data-feather="key"></span>change password</a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                <span data-feather="users"></span>social profiles</a>
                                            <a class="nav-link" id="v-pills-notification-tab" data-toggle="pill" href="#v-pills-notification" role="tab" aria-controls="v-pills-notification" aria-selected="false">
                                                <span data-feather="bell"></span>notification</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Profile Acoount End -->
                        </div>
                        <div class="col-xxl-9 col-lg-8 col-sm-7">
                            <div class="as-cover">
                                <div class="as-cover__imgWrapper">
                                    <input id="file-upload1" type="file" name="fileUpload" class="d-none">
                                    <label for="file-upload1">
                                        <img src="{{ asset('admin/img/ap-header.png') }}" alt="image" class="w-100">
                                        <span class="ap-cover__changeImgBtn">
                                            <span class="btn btn-outline-primary cover-btn">
                                                <span data-feather="camera"></span>Change
                                                Cover</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-50">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <!-- Edit Profile -->
                                        <div class="edit-profile mt-25">
                                            <div class="card">
                                                <div class="card-header px-sm-25 px-3">
                                                    <div class="edit-profile__title">
                                                        <h6>Edit Profile</h6>
                                                        <span class="fs-13 color-light fw-400">Set up your personal
                                                            information</span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                            <div class="edit-profile__body mx-lg-20">
                                                                <form method="POST" action="">
                                                                    <div class="form-group mb-20">
                                                                        <label for="names">name</label>
                                                                        <input type="text" class="form-control" id="names" name="name" value="{{ $profile_edit_data->name }}">
                                                                    </div>
                                                                    <div class="form-group mb-20">
                                                                        <label for="username">Username</label>
                                                                        <input type="text" class="form-control" id="username" name="username" value="{{ $profile_edit_data->username }}">
                                                                    </div>
                                                                    <div class="form-group mb-20">
                                                                        <label for="email">Email</label>
                                                                        <input type="email" class="form-control" id="email" name="email" value="{{ $profile_edit_data->email }}">
                                                                    </div>
                                                                    <div class="form-group mb-20">
                                                                        <div class="countryOption">
                                                                            <label for="countryOption">
                                                                                country
                                                                            </label>
                                                                            <select class="js-example-basic-single js-states form-control" id="countryOption">
                                                                                <option value="JAN">event</option>
                                                                                <option value="FBR">Venues</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-20">
                                                                        <div class="cityOption">
                                                                            <label for="cityOption">
                                                                                city
                                                                            </label>
                                                                            <select class="js-example-basic-single js-states form-control" id="cityOption">
                                                                                <option value="JAN">event</option>
                                                                                <option value="FBR">Venues</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-20">
                                                                        <label for="company1">company name</label>
                                                                        <input type="text" class="form-control" id="company1" placeholder="Example">
                                                                    </div>
                                                                    <div class="form-group mb-20">
                                                                        <label for="website">website</label>
                                                                        <input type="email" class="form-control" id="website" placeholder="www.example.com">
                                                                    </div>
                                                                    <div class="form-group mb-20">
                                                                        <label for="userBio">user bio</label>
                                                                        <textarea class="form-control" id="userBio" rows="5"></textarea>
                                                                    </div>
                                                                    <div class="form-group mb-20">
                                                                        <div class="skillsOption">
                                                                            <label for="skillsOption">
                                                                                skils
                                                                            </label>
                                                                            <select class="js-example-basic-single js-states form-control" id="skillsOption" multiple="multiple">
                                                                                <option value="JAN">event</option>
                                                                                <option value="FBR">Venues</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group d-flex flex-wrap pt-30 mb-15">


                                                                        <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">update profile
                                                                        </button>

                                                                        <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                        </button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Profile End -->
                                    </div>
                                    <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <!-- Edit Profile -->
                                        <div class="edit-profile mt-25">
                                            <div class="card">
                                                <div class="card-header  px-sm-25 px-3">
                                                    <div class="edit-profile__title">
                                                        <h6>Account setting</h6>
                                                        <span class="fs-13 color-light fw-400">Update your username and manage your
                                                            account</span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                            <div class="edit-profile__body mx-lg-20">
                                                                <form>
                                                                    <div class="form-group mb-20">
                                                                        <label for="name1">username</label>
                                                                        <input type="text" class="form-control" id="name1" placeholder="Duran Clayton">
                                                                        <small id="passwordHelpInline2" class="text-light fs-13">Your
                                                                            Dashboard URL:
                                                                            https://dashboard.com/<span class="color-dark">clayton</span>
                                                                        </small>
                                                                    </div>
                                                                    <div class="form-group mb-1">
                                                                        <label for="email45">email</label>
                                                                        <input type="email" class="form-control" id="email45" placeholder="Contact@example.com">
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                            <div class="d-flex justify-content-between mt-1 align-items-center flex-wrap">
                                                                <div class="text-capitalize py-10">
                                                                    <h6>close account</h6>
                                                                    <span class="fs-13 color-light fw-400">Delete your account and
                                                                        account
                                                                        data</span>
                                                                </div>
                                                                <div class="my-sm-0 my-10 py-10">



                                                                    <button class="btn btn-danger btn-default btn-squared fw-400 text-capitalize">close account
                                                                    </button>





                                                                </div>
                                                            </div>
                                                            <div class="button-group d-flex flex-wrap pt-35 mb-35">



                                                                <button class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Save Changes
                                                                </button>








                                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                </button>





                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Profile End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        @include('admin.auth.change_pass')
                                    </div>
                                    <div class="tab-pane fade " id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <!-- Edit Profile -->
                                        <div class="edit-profile edit-social mt-25">
                                            <div class="card">
                                                <div class="card-header  px-sm-25 px-3">
                                                    <div class="edit-profile__title">
                                                        <h6>social profiles</h6>
                                                        <span class="fs-13 color-light fw-400">Add elsewhere links to your
                                                            profile</span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                            <div class="edit-profile__body mx-lg-20">
                                                                <form>
                                                                    <div class=" mb-30">
                                                                        <label for="socialUrl">facebook</label>
                                                                        <div class="input-group flex-nowrap">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text border-facebook bg-facebook text-white wh-44 radius-xs justify-content-center" id="addon-wrapping1">
                                                                                    <i class="lab la-facebook-f fs-18"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" class="form-control form-control--social" placeholder="Url" aria-label="Username" aria-describedby="addon-wrapping1" id="socialUrl">
                                                                        </div>
                                                                    </div>
                                                                    <div class=" mb-30">
                                                                        <label for="twitterUrl">twitter</label>
                                                                        <div class="input-group flex-nowrap">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text border-twitter bg-twitter text-white wh-44 radius-xs justify-content-center" id="addon-wrapping2">
                                                                                    <i class="lab la-twitter fs-18"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" class="form-control form-control--social" placeholder="@Username" aria-label="Username" aria-describedby="addon-wrapping2" id="twitterUrl">
                                                                        </div>
                                                                    </div>
                                                                    <div class=" mb-30">
                                                                        <label for="webUrl">Website</label>
                                                                        <div class="input-group flex-nowrap">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text border-ruby  bg-ruby text-white wh-44 radius-xs justify-content-center" id="addon-wrapping3">
                                                                                    <i class="las la-basketball-ball fs-18"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" class="form-control form-control--social" placeholder="Url" aria-label="Username" aria-describedby="addon-wrapping3" id="webUrl">
                                                                        </div>
                                                                    </div>
                                                                    <div class=" mb-30">
                                                                        <label for="instagramUrl">instagram</label>
                                                                        <div class="input-group flex-nowrap">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text border-instagram  bg-instagram text-white wh-44 radius-xs justify-content-center" id="addon-wrapping4">
                                                                                    <i class="lab la-instagram fs-18"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" class="form-control form-control--social" aria-describedby="addon-wrapping4" placeholder="Url" id="instagramUrl">
                                                                        </div>
                                                                    </div>
                                                                    <div class=" mb-30">
                                                                        <label for="githubUrl">github</label>
                                                                        <div class="input-group flex-nowrap">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text border-dark  bg-dark  text-white wh-44 radius-xs justify-content-center" id="addon-wrapping5">
                                                                                    <i class="lab la-github fs-18"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" class="form-control form-control--social" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping5" id="githubUrl">
                                                                        </div>
                                                                    </div>
                                                                    <div class=" mb-0">
                                                                        <label for="mediumUrl">medium</label>
                                                                        <div class="input-group flex-nowrap">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text border-dark bg-dark text-white wh-44 radius-xs justify-content-center" id="addon-wrapping6">
                                                                                    <i class="lab la-medium fs-18"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" class="form-control form-control--social" placeholder="Username" aria-label="medium" aria-describedby="addon-wrapping6" id="mediumUrl">
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group d-flex flex-wrap pt-50 mb-15">



                                                                        <button class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Update Social Profiles
                                                                        </button>








                                                                        <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                        </button>





                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Profile End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                                        <!-- Edit Profile -->
                                        <div class="edit-profile edit-social mt-25">
                                            <div class="card">
                                                <div class="card-header px-sm-25 px-3">
                                                    <div class="edit-profile__title">
                                                        <h6>social profiles</h6>
                                                        <span class="fs-13 color-light fw-400">Add elsewhere links to your
                                                            profile</span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="notification-content p-25 border mb-25">
                                                        <div class="notification-content__title d-flex justify-content-between flex-wrap pb-20 text-capitalize">
                                                            <h6 class="fs-15 text-light fw-500 lh-normal">Notifications</h6>
                                                            <a class="text-primary fs-13" href="#">toggle all</a>
                                                        </div>
                                                        <div class="global-shadow radius-xl bg-white">
                                                            <div class="notification-content__body p-25 border-bottom">
                                                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                    <div class="div">
                                                                        <h6>Company News</h6>
                                                                        <span>Get company news, announcements, and product
                                                                            updates</span>
                                                                    </div>
                                                                    <div class="custom-control custom-switch my-lg-0 my-10">
                                                                        <input type="checkbox" class="custom-control-input" id="nc1">
                                                                        <label class="custom-control-label" for="nc1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notification-content__body p-25 border-bottom">
                                                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                    <div class="div">
                                                                        <h6>Meetups Near You</h6>
                                                                        <span>Get company news, announcements, and product
                                                                            updates</span>
                                                                    </div>
                                                                    <div class="custom-control custom-switch my-lg-0 my-10">
                                                                        <input type="checkbox" class="custom-control-input" id="nc2">
                                                                        <label class="custom-control-label" for="nc2"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notification-content__body p-25 border-bottom">
                                                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                    <div class="div">
                                                                        <h6>Opportunities</h6>
                                                                        <span>Get company news, announcements, and product
                                                                            updates</span>
                                                                    </div>
                                                                    <div class="custom-control custom-switch my-lg-0 my-10">
                                                                        <input type="checkbox" class="custom-control-input" id="nc3">
                                                                        <label class="custom-control-label" for="nc3"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notification-content__body p-25">
                                                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                    <div class="div">
                                                                        <h6>Weekly Newsletters</h6>
                                                                        <span>Get company news, announcements, and product
                                                                            updates</span>
                                                                    </div>
                                                                    <div class="custom-control custom-switch my-lg-0 my-10">
                                                                        <input type="checkbox" class="custom-control-input" id="nc4">
                                                                        <label class="custom-control-label" for="nc4"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-content p-25 border mb-25">
                                                        <div class="notification-content__title d-flex justify-content-between flex-wrap pb-20 text-capitalize">
                                                            <h6 class="fs-15 text-light fw-500 lh-normal">Account Activity</h6>
                                                            <a class="text-primary fs-13" href="#">toggle all</a>
                                                        </div>
                                                        <div class="global-shadow radius-xl bg-white">
                                                            <div class="notification-content__body p-25 border-bottom">
                                                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                    <div class="div">
                                                                        <h6>Anyone seeing my profile page</h6>
                                                                    </div>
                                                                    <div class="custom-control custom-switch my-lg-0 my-10">
                                                                        <input type="checkbox" class="custom-control-input" id="nc5">
                                                                        <label class="custom-control-label" for="nc5"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notification-content__body p-25 border-bottom">
                                                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                    <div class="div">
                                                                        <h6>Anyone follow me</h6>
                                                                    </div>
                                                                    <div class="custom-control custom-switch my-lg-0 my-10">
                                                                        <input type="checkbox" class="custom-control-input" id="nc6">
                                                                        <label class="custom-control-label" for="nc6"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notification-content__body p-25 border-bottom">
                                                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                    <div class="div">
                                                                        <h6>Someone mentions me</h6>
                                                                    </div>
                                                                    <div class="custom-control custom-switch my-lg-0 my-10">
                                                                        <input type="checkbox" class="custom-control-input" id="nc7">
                                                                        <label class="custom-control-label" for="nc7"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notification-content__body p-25 border-bottom">
                                                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                    <div class="div">
                                                                        <h6>Someone accepts my invitation</h6>
                                                                    </div>
                                                                    <div class="custom-control custom-switch my-lg-0 my-10">
                                                                        <input type="checkbox" class="custom-control-input" id="nc8">
                                                                        <label class="custom-control-label" for="nc8"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notification-content__body p-25">
                                                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                    <div class="div">
                                                                        <h6>Anyone send me a message</h6>
                                                                    </div>
                                                                    <div class="custom-control custom-switch my-lg-0 my-10">
                                                                        <input type="checkbox" class="custom-control-input" id="nc9">
                                                                        <label class="custom-control-label" for="nc9"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="button-group d-flex flex-wrap pt-25 mb-25">

                                                        <button class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Update notification Profiles
                                                        </button>

                                                        <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Edit Profile End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
