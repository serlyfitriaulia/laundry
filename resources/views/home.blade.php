@extends('layouts.admin')

@section('content-admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <!-- task, page, download counter  start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <a href="{{ url('pesanan') }}"><h4 class="text-c-purple">Pesanan</h4></a>
                                                <h6 class="text-muted m-b-0">Data Pesanan</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-pencil-alt f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <a href="{{ url('detailpesanan') }}"><h4 class="text-c-purple">Detail Pesanan</h4></a>
                                                <h6 class="text-muted m-b-0">Data Detail Pesanan</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-receipt f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <a href="{{ url('pelanggan') }}"><h4 class="text-c-purple">Pelanggan</h4></a>
                                                <h6 class="text-muted m-b-0">Data Pelanggan</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-user f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <a href="{{ url('pembayaran') }}"><h4 class="text-c-purple">Pembayaran</h4></a>
                                                <h6 class="text-muted m-b-0">Data Pembayaran</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-money f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <a href="{{ url('layanan') }}"><h4 class="text-c-purple">Layanan</h4></a>
                                                <h6 class="text-muted m-b-0">Data Layanan</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-package f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <a href="{{ url('antarjemput') }}"><h4 class="text-c-purple">Antar Jemput</h4></a>
                                                <h6 class="text-muted m-b-0">Data Antar Jemput</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-truck f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <a href="{{ url('pegawai') }}"><h4 class="text-c-purple">Pegawai</h4></a>
                                                <h6 class="text-muted m-b-0">Data Pegawai</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-id-badge f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- task, page, download counter  end -->

                            <!--  sale analytics start -->
                            <div class="col-xl-12 col-md-12">
                                <div class="card" style="background-image: url('/img/femsly2.jpeg'); ">
                                    <div class="card-header">
                                        <h5></h5>
                                        <span class="text-muted"> <a href="https://www.amcharts.com/" target="_blank"></a> </span>
                                        {{-- <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                    <div class="card-block">
                                        <div id="sales-analytics" style="height: 400px;"></div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col">
                                                <h4>$256.23</h4>
                                                <p class="text-muted">This Month</p>
                                            </div>
                                            <div class="col-auto">
                                                <label class="label label-success">+20%</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <canvas id="this-month" style="height: 150px;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card quater-card">
                                    <div class="card-block">
                                        <h6 class="text-muted m-b-15">This Quarter</h6>
                                        <h4>$3,9452.50</h4>
                                        <p class="text-muted">$3,9452.50</p>
                                        <h5>87</h5>
                                        <p class="text-muted">Online Revenue<span class="f-right">80%</span></p>
                                        <div class="progress"><div class="progress-bar bg-c-blue" style="width: 80%"></div></div>
                                        <h5 class="m-t-15">68</h5>
                                        <p class="text-muted">Offline Revenue<span class="f-right">50%</span></p>
                                        <div class="progress"><div class="progress-bar bg-c-green" style="width: 50%"></div></div>
                                    </div>
                                </div>
                            </div> --}}
                            <!--  sale analytics end -->

                            <!--  project and team member start -->
                            {{-- <div class="col-xl-8 col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Projects</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        <div class="chk-option">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label class="check-task">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                            <i class="cr-icon fa fa-check txt-default"></i>
                                                                        </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        Assigned</th>
                                                    <th>Name</th>
                                                    <th>Due Date</th>
                                                    <th class="text-right">Priority</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="chk-option">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label class="check-task">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                            </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                            <div class="d-inline-block">
                                                                <h6>John Deo</h6>
                                                                <p class="text-muted m-b-0">Graphics Designer</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Able Pro</td>
                                                    <td>Jun, 26</td>
                                                    <td class="text-right"><label class="label label-danger">Low</label></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="chk-option">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label class="check-task">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                            </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                            <div class="d-inline-block">
                                                                <h6>Jenifer Vintage</h6>
                                                                <p class="text-muted m-b-0">Web Designer</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Mashable</td>
                                                    <td>March, 31</td>
                                                    <td class="text-right"><label class="label label-primary">high</label></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="chk-option">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label class="check-task">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                            </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                            <div class="d-inline-block">
                                                                <h6>William Jem</h6>
                                                                <p class="text-muted m-b-0">Developer</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Flatable</td>
                                                    <td>Aug, 02</td>
                                                    <td class="text-right"><label class="label label-success">medium</label></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="chk-option">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label class="check-task">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                            </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                            <div class="d-inline-block">
                                                                <h6>David Jones</h6>
                                                                <p class="text-muted m-b-0">Developer</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Guruable</td>
                                                    <td>Sep, 22</td>
                                                    <td class="text-right"><label class="label label-primary">high</label></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="text-right m-r-20">
                                                <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card ">
                                    <div class="card-header">
                                        <h5>Team Members</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <div class="card-block">
                                        <div class="align-middle m-b-30">
                                            <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>David Jones</h6>
                                                <p class="text-muted m-b-0">Developer</p>
                                            </div>
                                        </div>
                                        <div class="align-middle m-b-30">
                                            <img src="assets/images/avatar-1.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>David Jones</h6>
                                                <p class="text-muted m-b-0">Developer</p>
                                            </div>
                                        </div>
                                        <div class="align-middle m-b-30">
                                            <img src="assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>David Jones</h6>
                                                <p class="text-muted m-b-0">Developer</p>
                                            </div>
                                        </div>
                                        <div class="align-middle m-b-30">
                                            <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>David Jones</h6>
                                                <p class="text-muted m-b-0">Developer</p>
                                            </div>
                                        </div>
                                        <div class="align-middle m-b-10">
                                            <img src="assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>David Jones</h6>
                                                <p class="text-muted m-b-0">Developer</p>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <!--  project and team member end -->
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
                <div id="styleSelector"> </div>
            </div>
        </div>
    </div>
</div>
@endsection
