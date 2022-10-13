<!-- select -->
<!-- Content Wrapper. Contains page content -->
<style>
    .table_wrapper {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Rekap Absensi
            <small>Lihat Rekap Presensi</small>
        </h1>
    </section>

    <div class="box center-block">
        <div class="box-body">
            <div>
                <form>
                    <table>
                        <tbody>
                            <tr>
                                <td width="5%">
                                    <label>Dari Tanggal : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="date" name="start_date" class="form-control float-right" id="reservation">
                                    </div>
                                </td>
                                <td width="15%">
                                    <label>Sampai Tanggal : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="date" name="end_date" class="form-control float-right" id="reservation">
                                    </div>
                                </td>
                                <td width="10%">
                                    <label></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <a href="<?php echo base_url('dashboard/rekapAbsen') ?>">
                                            <button class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"></i>
                                                Tampilkan Data
                                            </button>
                                        </a>
                                    </div>
                                </td>
                                <td width="55%">
                                    <label></label>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <br>
            <form method="POST" action="<?php echo base_url('dashboard/exportEtpCsv') ?>">
                <table>
                    <tbody>
                        <tr>
                            <td width="5%">
                                <label>Dari Tanggal : </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="date" name="start" class="form-control float-right" id="reservation">
                                </div>
                            </td>
                            <td width="15%">
                                <label>Sampai Tanggal : </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="date" name="end" class="form-control float-right" id="reservation">
                                </div>
                            </td>
                            <td width="10%">
                                <label></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <!-- <a href=""> -->
                                    <button class="btn btn-primary btn-sm" type="submit">
                                        <i class="fa fa-download"></i>
                                        Export Data
                                    </button>
                                    <!-- </a> -->
                                </div>
                            </td>
                            <td width="55%">
                                <label></label>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <br>
            <div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Total Absen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($rekapAbsen as $data) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data->nama ?></td>
                                <td><?php echo $data->total_absen ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</div>
</div>
</section>


<!-----Modal Tambah Jadwal------>
<?php //include 'modaljadwal/inputjadwal.php';
?>