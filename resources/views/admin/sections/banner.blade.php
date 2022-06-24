@extends('admin.master')

@section('admin')
    <div class="profile-setting mt-25">
        <div class="container-fluid">
            <form action="{{ route('home.blog') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $bannerData->id }}">
                <div class="row">
                    <div class="col-xxl-3 col-lg-4 col-sm-5">
                        <!-- Profile Acoount -->
                        <div class="card mb-25">
                            <div class="card-body text-center p-0">

                                <div class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                                    <div class="ap-img mb-20 pro_img_wrapper">
                                        <input id="profile_img" type="file" name="profile_img" class="d-none">
                                        <label for="profile_img">
                                            <img class="ap-img__main rounded-circle wh-120" id="previewProfile" src="{{ !empty($bannerData->profile_img) ? url('admin/img/' . $bannerData->profile_img) : url('admin/img/no-img.jpg') }}" alt="profile">
                                            <span class="cross" id="remove_pro_pic">
                                                <span data-feather="camera"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="ap-nameAddress pb-3">
                                        <h5 class="ap-nameAddress__title">{{ $bannerData->name }}</h5>
                                        <p class="ap-nameAddress__subTitle fs-14 m-0">{{ $bannerData->designation }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Profile Acoount End -->
                    </div>
                    <div class="col-xxl-9 col-lg-8 col-sm-7">
                        <div class="mb-50">
                            <!-- Edit Profile -->
                            <div class="edit-profile">
                                <div class="card">
                                    <div class="card-header px-sm-25 px-3">
                                        <div class="edit-profile__title">
                                            <h6>Banner Edit</h6>
                                            <span class="fs-13 color-light fw-400">Set up your personal information</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="edit-profile__body mx-lg-20">
                                            <div>
                                                <div class="row w-100">
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-20">
                                                            <label for="names">Name</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="{{ $bannerData->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-20">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" value="{{ $bannerData->email }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">

                                                        <div class="form-group mb-20">
                                                            <label for="designation">Designation</label>
                                                            <input type="text" class="form-control" id="designation" name="designation" value="{{ $bannerData->designation }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">

                                                        <div class="form-group mb-20">
                                                            <label for="projects">Projects</label>
                                                            <input type="tel" class="form-control" id="projects" name="projects" value="{{ $bannerData->projects }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">

                                                        <div class="form-group mb-20">
                                                            <label for="clients">Projects</label>
                                                            <input type="tel" class="form-control" id="clients" name="clients" value="{{ $bannerData->clients }}">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-sm-6">

                                                        <div class="form-group mb-20">
                                                            <label for="projects">Projects</label>
                                                            <input type="tel" class="form-control" id="projects" name="projects" value="">
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-20">
                                                            <label for="bio">Bio</label>
                                                            <textarea class="form-control" id="bio" name="bio" rows="5">{{ $bannerData->bio }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="button-group d-flex flex-wrap pt-30 mb-15">

                                                            <button class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">update profile
                                                            </button>

                                                            <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit Profile End -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
