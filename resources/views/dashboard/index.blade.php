<x-layout-dashboard>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xxl-8 mb-6 order-0">
                <div class="card">
                <div class="d-flex align-items-start row">
                    <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">Congratulations John! 🎉</h5>
                        <p class="mb-6">
                        Kamu memiliki persentase keadiran yang cukup tinggi<br />Klik tombol dibawah untuk detail 
                        </p>
                        <a href="/rekap" class="btn btn-sm btn-outline-primary">Detail</a>
                    </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-6">
                        <img
                        src="{{ asset('assets') }}/img/illustrations/man-with-laptop.png"
                        height="175"
                        class="scaleX-n1-rtl"
                        alt="View Badge User" />
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <h5 class="pb-1 mb-5     d-flex align-items-center">
                <i class="menu-icon tf-icons bx bx-pie-chart"></i>
                <span>Overview</span>
            </h5>
            <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-6 mb-6">
                        <div class="card h-100">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets') }}/img/icons/unicons/paypal.png" alt="paypal" class="rounded" />
                            </div>
                            </div>
                            <p class="mb-1">Kehadiran</p>
                            <h4 class="card-title mb-3">23</h4>
                            <small class="text-danger fw-medium"> 30%</small>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mb-6">
                        <div class="card h-100">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets') }}/img/icons/unicons/paypal.png" alt="paypal" class="rounded" />
                            </div>
                            </div>
                            <p class="mb-1">Tidak Hadir</p>
                            <h4 class="card-title mb-3">30</h4>
                            <small class="text-danger fw-medium"> 70%</small>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h5 class="pb-1 mb-5 d-flex align-items-center">
            <i class="menu-icon tf-icons bx bx-calendar"></i>
            <span>Jadwal hari ini</span>
        </h5>
        <div class="row">
            <div class="card text-start">
                <div class="card-body">
                    <h5 class="card-title">Alpro</h5>
                    <p class="card-text">Materi: array dan queue</p>
                    <div class="text-muted">10:30 - 11:40</div>
                </div>
                <form action="" class="card-footer">
                    <button type="submit" class="btn btn-primary">Absen</button>
                </form>
            </div>
        </div>
    </div>
</x-layout-dashboard>