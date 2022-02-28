@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="tab-content tab-transparent-content">
            <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="mb-2 text-dark font-weight-normal">Data Obat Masuk</h5>
                                <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                                <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mt-4 mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                                {{-- <p class="mt-4 mb-0">Completed</p>
                                <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Data Obat Terjual</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mt-4 mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                            {{-- <p class="mt-4 mb-0">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Pemasukan</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mt-4 mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                            {{-- <p class="mt-4 mb-0">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Pengeluaran</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mt-4 mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                            {{-- <p class="mt-4 mb-0">Decreased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- content-wrapper ends -->
@endsection