@extends('admin.master')

@section('admin')
    <div class="mt-30"></div>
    @csrf

    <div class="card card-Vertical card-default card-md mb-4">
        <h4 class="custom-title p-4">@php echo $site_title; @endphp</h4>
        <div class="card-header">
            <h6>Generel Setting </h6>
        </div>
        <div class="card-body py-md-30">
            <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-25">
                        <label class="color-dark fs-14 fw-500 align-center">Site Title</label>
                        <input name="site_title" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="{{ $title }}">
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-25">
                        <label class="color-dark fs-14 fw-500 align-center">Currency</label>
                        <input name="currency" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="{{ $setting->currency }}">
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-25">
                        <label class="color-dark fs-14 fw-500 align-center">Currency Symbol</label>
                        <input name="currency_symbol" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="{{ $setting->currency_symbol }}">
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-25">
                        <label class="color-dark fs-14 fw-500 align-center">Timezone</label>
                        <input name="timezone" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="Timezone">
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-25">
                        <label class="color-dark fs-14 fw-500 align-center">Site Base Color</label>
                        <div class="input-group">
                            <span class="input-group-text p-0 border-0">
                                <input name="base_color" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15 colorPicker" value="{{ $setting->base_color }}">
                            </span>
                            <input name="base_color" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15 colorCode" value="{{ $setting->base_color }}">
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-25">
                        <label class="color-dark fs-14 fw-500 align-center">Site Secondary Color</label>
                        <div class="input-group">
                            <span class="input-group-text p-0 border-0">
                                <input name="secondary_color" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15 colorPicker" value="{{ $setting->secondary_color }}">
                            </span>
                            <input name="secondary_color" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15 colorCode" value="{{ $setting->secondary_color }}">
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-25">
                        <div class="form-group">
                            <label for="check-grp-4" class="color-dark fs-14 fw-500 align-center">Agree Policy</label>
                            <input type="checkbox" data-width="100%" data-size="medium" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="50" data-on="Enabled" data-off="Disabled" name="agree_policy" @if ($setting->agree_policy == 1) checked @endif>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-25">
                        <div class="form-group">
                            <label for="check-grp-4" class="color-dark fs-14 fw-500 align-center">User Registration</label>
                            <input type="checkbox" data-width="100%" data-size="medium" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="50" data-on="Enabled" data-off="Disabled" name="user_registration" @if ($setting->user_registration == 1) checked @endif>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-25">
                        <div class="form-group">
                            <label for="check-grp-4" class="color-dark fs-14 fw-500 align-center">Email Verification</label>
                            <input type="checkbox" data-width="100%" data-size="medium" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="50" data-on="Enabled" data-off="Disabled" name="email_verification" @if ($setting->email_verification == 1) checked @endif>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="layout-button mt-0">
                            <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-50 ">cancel</button>
                            <button type="submit" class="btn btn-primary btn-default btn-squared px-50 w-50">Update Setting</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- ends: .card -->
@endsection
