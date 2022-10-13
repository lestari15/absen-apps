<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div></div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3><?= $absenHariIni->total ?></h3>

                            <p>Absen Hari Ini</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-calendar"></i>
                        </div>
                        <!--                        <a href="#" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?= $totalBelumAbsen ?></h3>

                            <p>Karyawan Belum absen</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-calendar"></i>
                        </div>
                        <!--                        <a href="#" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3><?= $totalAbsen->total ?></h3>

                            <p>Absensi Keseluruhan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <!--                        <a href="#" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?= $totalKaryawan->total ?></h3>

                            <p>Total Karyawan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <!--                        <a href="#" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>-->
                    </div>
                </div>
                <div>
                    <div class="col-sm-4">
                        <div>
                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Informasi Akun</h3>
                                </div>
                                <table class="table table-hover">
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>Lestari</td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telphon</th>
                                        <td>089876767</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>trlstr</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- LINE CHART -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Grafik Absensi Karyawan</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body chart-responsive">
                            <div class="chart" id="line-chart" style="height: 300px;"></div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div>

    </section>
    <!-- /.content -->
</div>

