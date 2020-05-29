@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <div class="row dash-row">
            <div class="col-xl-4">
                <div class="stats stats-primary">
                    <h3 class="stats-title"> Pengguna </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">114</div>
                            <div class="stats-change">
                                <span class="stats-percentage">+25%</span>
                                <span class="stats-timeframe">dari bulan sebelumnya</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="stats stats-success ">
                    <h3 class="stats-title"> Pemasukan </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-cart-arrow-down"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">Rp 2,490,000</div>
                            <div class="stats-change">
                                <span class="stats-percentage">+17.5%</span>
                                <span class="stats-timeframe">from last month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="stats stats-danger">
                    <h3 class="stats-title"> Barang </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="spur-card-title"> Notifications </div>
                    </div>
                    <div class="card-body ">
                        <div class="notifications">
                            <a href="#!" class="notification">
                                <div class="notification-icon">
                                    <i class="fas fa-inbox"></i>
                                </div>
                                <div class="notification-text">New comment</div>
                                <span class="notification-time">21 days ago</span>
                            </a>
                            <a href="#!" class="notification">
                                <div class="notification-icon">
                                    <i class="fas fa-inbox"></i>
                                </div>
                                <div class="notification-text">New comment</div>
                                <span class="notification-time">21 days ago</span>
                            </a>
                            <a href="#!" class="notification">
                                <div class="notification-icon">
                                    <i class="fas fa-inbox"></i>
                                </div>
                                <div class="notification-text">New comment</div>
                                <span class="notification-time">21 days ago</span>
                            </a>
                            <div class="notifications-show-all">
                                <a href="#!">Show all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection