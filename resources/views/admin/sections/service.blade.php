@extends('admin.master')

@section('admin')
    @php
    $bannerData = App\Models\Banner::find(1);
    @endphp
    <div class="profile-setting mt-25">
        <div class="container-fluid">
            <form action="{{ route('home.service.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $bannerData->id }}">
                <div class="row">
                    <div class="col-xxl-9 col-lg-8 col-sm-7">
                        <div class="mb-50">
                            <!-- Edit Profile -->
                            <div class="edit-profile">
                                <div class="card">
                                    <div class="card-header px-sm-25 px-3">
                                        <div class="edit-profile__title">
                                            <h6>Add Service</h6>
                                            <span class="fs-13 color-light fw-400">Set up your Services</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="edit-profile__body mx-lg-20">
                                            <div>
                                                <div class="account-profile">
                                                    <div class="form-group"><label for="">Serviec Icon</label></div>
                                                    <div class="ap-img mb-20 pro_img_wrapper">
                                                        <input id="profile_img" type="file" name="profile_img" class="d-none">
                                                        <label for="profile_img">
                                                            <img class="ap-img__main rounded-circle wh-120" id="previewProfile" src="{{ !empty($bannerData->profile_img) ? url('admin/img/' . $bannerData->profile_img) : url('admin/img/no-img.jpg') }}" alt="profile">
                                                            <span class="cross" id="remove_pro_pic">
                                                                <span data-feather="camera"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row w-100">
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-20">
                                                            <label for="title">Service Title</label>
                                                            <input type="text" class="form-control" id="title" name="title" value="{{ $bannerData->name }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-20">
                                                            <label for="des">Service Description</label>
                                                            <textarea class="form-control" id="des" name="des" rows="5">{{ $bannerData->des }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="button-group d-flex flex-wrap pt-30 mb-15">

                                                            <button class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Update Service</button>

                                                            <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel</button>

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
