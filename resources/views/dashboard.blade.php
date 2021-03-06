@extends('layouts.vertical')


@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title align-items-center">
    <div class="col-sm-4 col-xl-6">
        <h4 class="mb-1 mt-0">Dashboard</h4>
    </div>
    <div class="col-sm-8 col-xl-6">
        <form class="form-inline float-sm-right mt-3 mt-sm-0">
            <div class="form-group mb-sm-0 mr-2">
                <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class='uil uil-file-alt mr-1'></i>Download
                    <i class="icon"><span data-feather="chevron-down"></span></i></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                        <span>Email</span>
                    </a>
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                        <span>Print</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                        <span>Re-Generate</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Active Users</span>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-revenue-chart" class="apex-charts"></div>
                        <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                            0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">In-Active Users</span>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-product-sold-chart" class="apex-charts"></div>
                        <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i>
                            0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                            Customers</span>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-new-customer-chart" class="apex-charts"></div>
                        <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                            0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Pending Requests</span>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-new-visitors-chart" class="apex-charts"></div>
                        <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i>
                            0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Loan Request</span>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-new-visitors-chart" class="apex-charts"></div>
                        <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i>
                            0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Withdraw Request</span>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-new-visitors-chart" class="apex-charts"></div>
                        <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i>
                            0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Deposit Request</span>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-new-visitors-chart" class="apex-charts"></div>
                        <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i>
                            0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- stats + charts -->
<!-- row -->

<!-- products -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-primary btn-sm float-right">
                    <i class='uil uil-export ml-1'></i> Export
                </a>
                <h5 class="card-title mt-0 mb-0 header-title">Recent Transactions</h5>

                <div class="table-responsive mt-4">
                    <table class="table table-hover table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Currency</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Grand Total</th>
                                <th scope="col">Charge</th>
                                <th scope="col">DR/CR</th>
                                <th scope="col">Type</th>
                                <th scope="col">Method</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{--  <tr>
                                <td>#98753</td>
                                <td>Marco Lightweight Shirt</td>
                                <td>Mark P</td>
                                <td>$125.49</td>
                                <td>Mark P</td>
                                <td>Mark P</td>
                                <td>$125.49</td>
                                <td>$125.49</td>
                                <td><span class="badge badge-soft-success py-1">Delivered</span>
                                </td>
                            </tr>
          --}}
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->

<!-- widgets -->

<!-- end row -->
@endsection

@section('script')
<!-- optional plugins -->
<script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- init js -->
<script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
@endsection