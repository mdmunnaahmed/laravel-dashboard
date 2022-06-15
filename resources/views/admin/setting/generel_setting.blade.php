@extends('admin.master')

@section('admin')
    <div class="mt-50"></div>
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf

        <div class="card card-Vertical card-default card-md mb-4">
            {{-- <div class="card-header">
                <h6>Generel Setting </h6>
            </div> --}}
            <div class="card-body py-md-30">
                <form>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 mb-25">
                            <label class="color-dark fs-14 fw-500 align-center">Site Title</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Site Title">
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-25">
                            <label class="color-dark fs-14 fw-500 align-center">Currency</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Currency">
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-25">
                            <label class="color-dark fs-14 fw-500 align-center">Currency Symbol</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Currency Symbol">
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-25">
                            <label class="color-dark fs-14 fw-500 align-center">Timezone</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Timezone">
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-25">
                            <label class="color-dark fs-14 fw-500 align-center">Site Base Color</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15">
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-25">
                            <label class="color-dark fs-14 fw-500 align-center">Site Secondary Color</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15">
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-25">
                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                <input class="checkbox" type="checkbox" id="check-grp-4">
                                <label for="check-grp-4">
                                    <span class="checkbox-text">Apple</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-25">
                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                <input class="checkbox" type="checkbox" id="check-grp-4">
                                <label for="check-grp-4">
                                    <span class="checkbox-text">Apple</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-25">
                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                <input class="checkbox" type="checkbox" id="check-grp-4">
                                <label for="check-grp-4">
                                    <span class="checkbox-text">Apple</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="layout-button mt-0">
                                <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-50 ">cancel</button>
                                <button type="button" class="btn btn-primary btn-default btn-squared px-50">save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- ends: .card -->

    </form>
@endsection
