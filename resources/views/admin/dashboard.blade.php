@extends('admin.master')

@section('admin')
    <div class="row ">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Ecommerce Dashboard</h4>
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
        <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
            <!-- Card 1 -->
            <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                <div>





                    <div class="overview-content">
                        <h1>7,461</h1>
                        <p>Orders</p>
                        <div class="ap-po-details-time">
                            <span class="color-success"><i class="las la-arrow-up"></i>
                                <strong>25%</strong></span>
                            <small>Since last week</small>
                        </div>
                    </div>

                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">


                            <div>
                                <canvas id="mychart8"></canvas>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 1 End -->
        </div>
        <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
            <!-- Card 2 End  -->
            <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                <div>





                    <div class="overview-content">
                        <h1>$28,947</h1>
                        <p>Revenue</p>
                        <div class="ap-po-details-time">
                            <span class="color-success"><i class="las la-arrow-up"></i>
                                <strong>25%</strong></span>
                            <small>Since last week</small>
                        </div>
                    </div>

                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">


                            <div>
                                <canvas id="mychart9"></canvas>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 End  -->
        </div>
        <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
            <!-- Card 3 -->
            <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                <div>





                    <div class="overview-content">
                        <h1>$3,241</h1>
                        <p>Avg. Order Value</p>
                        <div class="ap-po-details-time">
                            <span class="color-danger"><i class="las la-arrow-down"></i>
                                <strong>25%</strong></span>
                            <small>Since last week</small>
                        </div>
                    </div>

                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">


                            <div>
                                <canvas id="mychart10"></canvas>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 End -->
        </div>
        <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
            <!-- Card 1 -->
            <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                <div>





                    <div class="overview-content">
                        <h1>45.32k</h1>
                        <p>Unique visitors</p>
                        <div class="ap-po-details-time">
                            <span class="color-success"><i class="las la-arrow-up"></i>
                                <strong>35%</strong></span>
                            <small>Since last week</small>
                        </div>
                    </div>

                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">


                            <div>
                                <canvas id="mychart11"></canvas>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 1 End -->
        </div>
        <div class="col-xxl-6 mb-30">

            <div class="card broder-0">
                <div class="card-header">
                    <h6>Total Revenue</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                            <li>
                                <a href="#tl_revenue-week" data-toggle="tab" id="tl_revenue-week-tab" role="tab" aria-selected="false">Week</a>
                            </li>
                            <li>
                                <a href="#tl_revenue-month" data-toggle="tab" id="tl_revenue-month-tab" role="tab" aria-selected="false">Month</a>
                            </li>
                            <li>
                                <a class="active" href="#tl_revenue-year" data-toggle="tab" id="tl_revenue-year-tab" role="tab" aria-selected="true">Year</a>
                            </li>
                        </ul>
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="revenue1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span data-feather="more-horizontal"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="revenue1">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card-header -->
                <div class="card-body pt-0">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel" aria-labelledby="tl_revenue-week-tab">
                            <div class="revenue-labels">
                                <div>
                                    <strong class="text-primary">$72,848</strong>
                                    <span>Current Period</span>
                                </div>
                                <div>
                                    <strong>$52,458</strong>
                                    <span>Previous Period</span>
                                </div>
                            </div>
                            <!-- ends: .performance-stats -->

                            <div class="wp-chart">
                                <div class="parentContainer">


                                    <div>
                                        <canvas id="myChart6W"></canvas>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel" aria-labelledby="tl_revenue-month-tab">
                            <div class="revenue-labels">
                                <div>
                                    <strong class="text-primary">$72,848</strong>
                                    <span>Current Period</span>
                                </div>
                                <div>
                                    <strong>$52,458</strong>
                                    <span>Previous Period</span>
                                </div>
                            </div>
                            <!-- ends: .performance-stats -->

                            <div class="wp-chart">
                                <div class="parentContainer">


                                    <div>
                                        <canvas id="myChart6M"></canvas>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="tl_revenue-year" role="tabpanel" aria-labelledby="tl_revenue-year-tab">
                            <div class="revenue-labels">
                                <div>
                                    <strong class="text-primary">$72,848</strong>
                                    <span>Current Period</span>
                                </div>
                                <div>
                                    <strong>$52,458</strong>
                                    <span>Previous Period</span>
                                </div>
                            </div>
                            <!-- ends: .performance-stats -->

                            <div class="wp-chart">
                                <div class="parentContainer">


                                    <div>
                                        <canvas id="myChart6"></canvas>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card-body -->
            </div>

        </div>
        <div class="col-xxl-6 mb-30">

            <div class="card border-0">
                <div class="card-header">
                    <h6>Source of Revenue Generated</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links mr-3 nav-tabs nav">
                            <li>
                                <a href="#s_revenue-today" class="active" data-toggle="tab" id="s_revenue-today-tab" role="tab" area-controls="s_revenue-table" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a href="#s_revenue-week" data-toggle="tab" id="s_revenue-week-tab" role="tab" area-controls="s_revenue-table" aria-selected="false">Week</a>
                            </li>
                            <li>
                                <a href="#s_revenue-month" data-toggle="tab" id="s_revenue-month-tab" role="tab" area-controls="s_revenue-table" aria-selected="false">Month</a>
                            </li>
                            <li>
                                <a href="#s_revenue-year" data-toggle="tab" id="s_revenue-year-tab" role="tab" area-controls="s_revenue-table" aria-selected="false">Year</a>
                            </li>
                        </ul>
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span data-feather="more-horizontal"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="action">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="s_revenue-today" role="tabpanel" aria-labelledby="s_revenue-today-tab">
                            <div class="table-responsive table-revenue">
                                <table class="table table--default">
                                    <thead>
                                        <tr>
                                            <th>Name of Source</th>
                                            <th>Visitors</th>
                                            <th>Page View</th>
                                            <th>Revenue</th>
                                            <th>Trend</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Direct</td>
                                            <td>3,256</td>
                                            <td>12,156</td>
                                            <td>$2,225</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm1"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>4,658</td>
                                            <td>21,584</td>
                                            <td>$9,753</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm2"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Organic Search</td>
                                            <td>1,698</td>
                                            <td>7,956%</td>
                                            <td>1,159</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm3"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Referral</td>
                                            <td>2,856</td>
                                            <td>8,256</td>
                                            <td>1,456</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm4"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Social Media</td>
                                            <td>9,456</td>
                                            <td>36,478</td>
                                            <td>13,852</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm5"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="s_revenue-week" role="tabpanel" aria-labelledby="s_revenue-week-tab">
                            <div class="table-responsive table-revenue">
                                <table class="table table--default">
                                    <thead>
                                        <tr>
                                            <th>Name of Source</th>
                                            <th>Visitors</th>
                                            <th>Page View</th>
                                            <th>Revenue</th>
                                            <th>Trend</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Direct</td>
                                            <td>3,256</td>
                                            <td>12,156</td>
                                            <td>$2,225</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm1"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>4,658</td>
                                            <td>21,584</td>
                                            <td>$9,753</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm2"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Organic Search</td>
                                            <td>1,698</td>
                                            <td>7,956%</td>
                                            <td>1,159</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm3"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Referral</td>
                                            <td>2,856</td>
                                            <td>8,256</td>
                                            <td>1,456</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm4"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Social Media</td>
                                            <td>9,456</td>
                                            <td>36,478</td>
                                            <td>13,852</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm5"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="s_revenue-month" role="tabpanel" aria-labelledby="s_revenue-month-tab">
                            <div class="table-responsive table-revenue">
                                <table class="table table--default">
                                    <thead>
                                        <tr>
                                            <th>Name of Source</th>
                                            <th>Visitors</th>
                                            <th>Page View</th>
                                            <th>Revenue</th>
                                            <th>Trend</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Direct</td>
                                            <td>3,256</td>
                                            <td>12,156</td>
                                            <td>$2,225</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm1"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>4,658</td>
                                            <td>21,584</td>
                                            <td>$9,753</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm2"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Organic Search</td>
                                            <td>1,698</td>
                                            <td>7,956%</td>
                                            <td>1,159</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm3"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Referral</td>
                                            <td>2,856</td>
                                            <td>8,256</td>
                                            <td>1,456</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm4"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Social Media</td>
                                            <td>9,456</td>
                                            <td>36,478</td>
                                            <td>13,852</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm5"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="s_revenue-year" role="tabpanel" aria-labelledby="s_revenue-year-tab">
                            <div class="table-responsive table-revenue">
                                <table class="table table--default">
                                    <thead>
                                        <tr>
                                            <th>Name of Source</th>
                                            <th>Visitors</th>
                                            <th>Page View</th>
                                            <th>Revenue</th>
                                            <th>Trend</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Direct</td>
                                            <td>3,256</td>
                                            <td>12,156</td>
                                            <td>$2,225</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm1"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>4,658</td>
                                            <td>21,584</td>
                                            <td>$9,753</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm2"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Organic Search</td>
                                            <td>1,698</td>
                                            <td>7,956%</td>
                                            <td>1,159</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm3"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Referral</td>
                                            <td>2,856</td>
                                            <td>8,256</td>
                                            <td>1,456</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm4"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Social Media</td>
                                            <td>9,456</td>
                                            <td>36,478</td>
                                            <td>13,852</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <canvas id="lineChartSm5"></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-4 mb-30">

            <div class="card border-0">
                <div class="card-header">
                    <h6>Top Selling Products</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                            <li>
                                <a class="active" href="#t_selling-today" data-toggle="tab" id="t_selling-today-tab" role="tab" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a href="#t_selling-week" data-toggle="tab" id="t_selling-week-tab" role="tab" aria-selected="true">Week</a>
                            </li>
                            <li>
                                <a href="#t_selling-month" data-toggle="tab" id="t_selling-month-tab" role="tab" aria-selected="true">Month</a>
                            </li>
                            <li>
                                <a href="#t_selling-year" data-toggle="tab" id="t_selling-year-tab" role="tab" aria-selected="true">Year</a>
                            </li>
                        </ul>
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="todo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span data-feather="more-horizontal"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="todo12">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel" aria-labelledby="t_selling-today-tab">
                            <div class="selling-table-wrap">
                                <div class="table-responsive">
                                    <table class="table table--default">
                                        <thead>
                                            <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Samsung Galaxy S8 256GB</td>
                                                <td>$289</td>
                                                <td>339</td>
                                                <td>$60,258</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$29</td>
                                                <td>136</td>
                                                <td>$2,483</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Shoes</td>
                                                <td>$59</td>
                                                <td>448</td>
                                                <td>$19,758</td>
                                            </tr>
                                            <tr>
                                                <td>15" Mackbook Pro</td>
                                                <td>$1,299</td>
                                                <td>159</td>
                                                <td>$197,458</td>
                                            </tr>
                                            <tr>
                                                <td>Apple iPhone X</td>
                                                <td>$899</td>
                                                <td>146</td>
                                                <td>115,254</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-week" role="tabpanel" aria-labelledby="t_selling-week-tab">
                            <div class="selling-table-wrap">
                                <div class="table-responsive">
                                    <table class="table table--default">
                                        <thead>
                                            <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Samsung Galaxy S8 256GB</td>
                                                <td>$289</td>
                                                <td>339</td>
                                                <td>$60,258</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$29</td>
                                                <td>136</td>
                                                <td>$2,483</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Shoes</td>
                                                <td>$59</td>
                                                <td>448</td>
                                                <td>$19,758</td>
                                            </tr>
                                            <tr>
                                                <td>15" Mackbook Pro</td>
                                                <td>$1,299</td>
                                                <td>159</td>
                                                <td>$197,458</td>
                                            </tr>
                                            <tr>
                                                <td>Apple iPhone X</td>
                                                <td>$899</td>
                                                <td>146</td>
                                                <td>115,254</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-month" role="tabpanel" aria-labelledby="t_selling-month-tab">
                            <div class="selling-table-wrap">
                                <div class="table-responsive">
                                    <table class="table table--default">
                                        <thead>
                                            <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Samsung Galaxy S8 256GB</td>
                                                <td>$289</td>
                                                <td>339</td>
                                                <td>$60,258</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$29</td>
                                                <td>136</td>
                                                <td>$2,483</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Shoes</td>
                                                <td>$59</td>
                                                <td>448</td>
                                                <td>$19,758</td>
                                            </tr>
                                            <tr>
                                                <td>15" Mackbook Pro</td>
                                                <td>$1,299</td>
                                                <td>159</td>
                                                <td>$197,458</td>
                                            </tr>
                                            <tr>
                                                <td>Apple iPhone X</td>
                                                <td>$899</td>
                                                <td>146</td>
                                                <td>115,254</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-year" role="tabpanel" aria-labelledby="t_selling-year-tab">
                            <div class="selling-table-wrap">
                                <div class="table-responsive">
                                    <table class="table table--default">
                                        <thead>
                                            <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Samsung Galaxy S8 256GB</td>
                                                <td>$289</td>
                                                <td>339</td>
                                                <td>$60,258</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$29</td>
                                                <td>136</td>
                                                <td>$2,483</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Shoes</td>
                                                <td>$59</td>
                                                <td>448</td>
                                                <td>$19,758</td>
                                            </tr>
                                            <tr>
                                                <td>15" Mackbook Pro</td>
                                                <td>$1,299</td>
                                                <td>159</td>
                                                <td>$197,458</td>
                                            </tr>
                                            <tr>
                                                <td>Apple iPhone X</td>
                                                <td>$899</td>
                                                <td>146</td>
                                                <td>115,254</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-xxl-4 mb-30">

            <div class="card border-0">
                <div class="card-header">
                    <h6>Sales by Location</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links mr-3 nav-tabs nav">
                            <li>
                                <a href="#sb_location-today" class="active" data-toggle="tab" id="sb_location-today-tab" role="tab" area-controls="sb_location-table" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a href="#sb_location-week" data-toggle="tab" id="sb_location-week-tab" role="tab" area-controls="sb_location-table" aria-selected="false">Week</a>
                            </li>
                            <li>
                                <a href="#sb_location-month" data-toggle="tab" id="sb_location-month-tab" role="tab" area-controls="sb_location-table" aria-selected="false">Month</a>
                            </li>
                            <li>
                                <a href="#sb_location-year" data-toggle="tab" id="sb_location-year-tab" role="tab" area-controls="sb_location-table" aria-selected="false">Year</a>
                            </li>
                        </ul>
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="somethings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span data-feather="more-horizontal"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="somethings">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="sb_location-today" role="tabpanel" aria-labelledby="sb_location-today-tab">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="region-map"></div>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive table-top-location">
                                    <table class="table table--default table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Top Location</th>
                                                <th>Order</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>457</td>
                                                <td>$26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>658</td>
                                                <td>$44,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>698</td>
                                                <td>$101,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>856</td>
                                                <td>$2,856</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sb_location-week" role="tabpanel" aria-labelledby="sb_location-week-tab">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="region-map_W"></div>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive table-top-location">
                                    <table class="table table--default table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Top Location</th>
                                                <th>Order</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>457</td>
                                                <td>$26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>658</td>
                                                <td>$44,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>698</td>
                                                <td>$101,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>856</td>
                                                <td>$2,856</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sb_location-month" role="tabpanel" aria-labelledby="sb_location-month-tab">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="region-map_M"></div>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive table-top-location">
                                    <table class="table table--default table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Top Location</th>
                                                <th>Order</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>457</td>
                                                <td>$26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>658</td>
                                                <td>$44,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>698</td>
                                                <td>$101,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>856</td>
                                                <td>$2,856</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sb_location-year" role="tabpanel" aria-labelledby="sb_location-year-tab">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="region-map_Y"></div>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive table-top-location">
                                    <table class="table table--default table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Top Location</th>
                                                <th>Order</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>457</td>
                                                <td>$26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>658</td>
                                                <td>$44,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>698</td>
                                                <td>$101,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>856</td>
                                                <td>$2,856</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-xxl-4 mb-30">
            <div class="revenue-device-chart">

                <div class="card broder-0">
                    <div class="card-header">
                        <h6>Revenue By Device</h6>
                        <div class="card-extra">
                            <ul class="card-tab-links nav-tabs nav" role="tablist">
                                <li>
                                    <a class="active" href="#rb_device-today" data-toggle="tab" id="rb_device-today-tab" role="tab" aria-selected="true">Today</a>
                                </li>
                                <li>
                                    <a href="#rb_device-week" data-toggle="tab" id="rb_device-week-tab" role="tab" aria-selected="false">Week</a>
                                </li>
                                <li>
                                    <a href="#rb_device-month" data-toggle="tab" id="rb_device-month-tab" role="tab" aria-selected="false">Month</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ends: .card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="rb_device-today" role="tabpanel" aria-labelledby="rb_device-today-tab">
                                <div class="revenue-pieChart-wrap">


                                    <div>
                                        <canvas id="chartDoughnut3"></canvas>
                                    </div>


                                </div>
                                <div class="revenue-chart-legend-list">
                                    <div class="revenue-chart-legend d-flex justify-content-between">
                                        <div class="revenue-chart-legend__label">
                                            <span class="label-dot dot-success"></span>
                                            <span>Desktop</span>
                                        </div>
                                        <div class="revenue-chart-legend__data">
                                            <span>$83</span>
                                        </div>
                                        <div class="revenue-chart-legend__percentage">
                                            <span>45%</span>
                                        </div>
                                    </div>
                                    <!-- ends: .revenue-chart-legend -->
                                    <div class="revenue-chart-legend d-flex justify-content-between">
                                        <div class="revenue-chart-legend__label">
                                            <span class="label-dot dot-info"></span>
                                            <span>Mobile</span>
                                        </div>
                                        <div class="revenue-chart-legend__data">
                                            <span>$70</span>
                                        </div>
                                        <div class="revenue-chart-legend__percentage">
                                            <span>30%</span>
                                        </div>
                                    </div>
                                    <!-- ends: .revenue-chart-legend -->
                                    <div class="revenue-chart-legend d-flex justify-content-between">
                                        <div class="revenue-chart-legend__label">
                                            <span class="label-dot dot-warning"></span>
                                            <span>Tablets</span>
                                        </div>
                                        <div class="revenue-chart-legend__data">
                                            <span>$20</span>
                                        </div>
                                        <div class="revenue-chart-legend__percentage">
                                            <span>25%</span>
                                        </div>
                                    </div>
                                    <!-- ends: .revenue-chart-legend -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="rb_device-week" role="tabpanel" aria-labelledby="rb_device-week-tab">
                                <div class="revenue-pieChart-wrap">


                                    <div>
                                        <canvas id="chartDoughnut3W"></canvas>
                                    </div>


                                </div>
                                <div class="revenue-chart-legend-list">
                                    <div class="revenue-chart-legend d-flex justify-content-between">
                                        <div class="revenue-chart-legend__label">
                                            <span class="label-dot dot-success"></span>
                                            <span>Desktop</span>
                                        </div>
                                        <div class="revenue-chart-legend__data">
                                            <span>$483</span>
                                        </div>
                                        <div class="revenue-chart-legend__percentage">
                                            <span>45%</span>
                                        </div>
                                    </div>
                                    <!-- ends: .revenue-chart-legend -->
                                    <div class="revenue-chart-legend d-flex justify-content-between">
                                        <div class="revenue-chart-legend__label">
                                            <span class="label-dot dot-info"></span>
                                            <span>Mobile</span>
                                        </div>
                                        <div class="revenue-chart-legend__data">
                                            <span>$870</span>
                                        </div>
                                        <div class="revenue-chart-legend__percentage">
                                            <span>30%</span>
                                        </div>
                                    </div>
                                    <!-- ends: .revenue-chart-legend -->
                                    <div class="revenue-chart-legend d-flex justify-content-between">
                                        <div class="revenue-chart-legend__label">
                                            <span class="label-dot dot-warning"></span>
                                            <span>Tablets</span>
                                        </div>
                                        <div class="revenue-chart-legend__data">
                                            <span>$420</span>
                                        </div>
                                        <div class="revenue-chart-legend__percentage">
                                            <span>25%</span>
                                        </div>
                                    </div>
                                    <!-- ends: .revenue-chart-legend -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="rb_device-month" role="tabpanel" aria-labelledby="rb_device-month-tab">
                                <div class="revenue-pieChart-wrap">


                                    <div>
                                        <canvas id="chartDoughnut3M"></canvas>
                                    </div>


                                </div>
                                <div class="revenue-chart-legend-list">
                                    <div class="revenue-chart-legend d-flex justify-content-between">
                                        <div class="revenue-chart-legend__label">
                                            <span class="label-dot dot-success"></span>
                                            <span>Desktop</span>
                                        </div>
                                        <div class="revenue-chart-legend__data">
                                            <span>$5,870</span>
                                        </div>
                                        <div class="revenue-chart-legend__percentage">
                                            <span>45%</span>
                                        </div>
                                    </div>
                                    <!-- ends: .revenue-chart-legend -->
                                    <div class="revenue-chart-legend d-flex justify-content-between">
                                        <div class="revenue-chart-legend__label">
                                            <span class="label-dot dot-info"></span>
                                            <span>Mobile</span>
                                        </div>
                                        <div class="revenue-chart-legend__data">
                                            <span>$4,483</span>
                                        </div>
                                        <div class="revenue-chart-legend__percentage">
                                            <span>30%</span>
                                        </div>
                                    </div>
                                    <!-- ends: .revenue-chart-legend -->
                                    <div class="revenue-chart-legend d-flex justify-content-between">
                                        <div class="revenue-chart-legend__label">
                                            <span class="label-dot dot-warning"></span>
                                            <span>Tablets</span>
                                        </div>
                                        <div class="revenue-chart-legend__data">
                                            <span>$2,420</span>
                                        </div>
                                        <div class="revenue-chart-legend__percentage">
                                            <span>25%</span>
                                        </div>
                                    </div>
                                    <!-- ends: .revenue-chart-legend -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .card-body -->
                </div>

            </div>
        </div>
    </div>
    <!-- ends: .row -->
@endsection
