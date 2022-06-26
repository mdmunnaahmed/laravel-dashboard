@extends('admin.master')
@section('admin')
    <div class="mt-30"></div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.setting.logo.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-xl-4">
                        <div class="image-upload">
                            <div class="thumb">
                                <div class="avatar-preview">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="profilePicPreview logoPicPrev" style="background-image: url({{ asset('admin/img/' . $setting->logo) }})">
                                                <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="avatar-edit">
                                    <input type="file" class="profilePicUpload" id="profilePicUpload1" accept=".png, .jpg, .jpeg" name="logo">
                                    <label for="profilePicUpload1" class="bg--primary">@lang('Select Logo') </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xl-4">
                        <div class="image-upload">
                            <div class="thumb">
                                <div class="avatar-preview">
                                    <div class="row">
                                        <div class="col-sm-12 mt-sm-0 mt-4">
                                            <div class="profilePicPreview logoPicPrev bg--dark" style="background-image: url({{ asset('admin/img/' . $setting->darkLogo) }})">
                                                <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="avatar-edit">
                                    <input type="file" class="profilePicUpload" id="profilePicUpload3" accept=".png, .jpg, .jpeg" name="darkLogo">
                                    <label for="profilePicUpload3" class="bg--primary">@lang('Select Dark Logo') </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xl-4">
                        <div class="image-upload">
                            <div class="thumb">
                                <div class="avatar-preview">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="profilePicPreview logoPicPrev" style="background-image: url({{ asset('admin/img/' . $setting->favicon) }})">
                                                <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                            <div class="profilePicPreview logoPicPrev bg--dark" style="background-image: url({{ asset('admin/img/' . $setting->favicon) }})">
                                                <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="avatar-edit">
                                    <input type="file" class="profilePicUpload" id="profilePicUpload2" accept=".png" name="favicon">
                                    <label for="profilePicUpload2" class="bg--primary">@lang('Select Favicon')</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn--primary btn-block btn-lg">@lang('Update')</button>
            </form>
        </div>
    </div>
@endsection
