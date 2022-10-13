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
            Data Karyawan
            <small>Lihat Data Karyawan</small>
        </h1>
    </section>

    <div class="box center-block">
        <div class="box-body">
            <td width="40%">
                <label></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <a href="<?php echo base_url('dashboard/viewManageKaryawan')?>">
                        <button class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i>
                            Tambah Data Karyawan
                        </button>
                    </a>
                </div>
            </td>
            <br>
            <div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $no=1;
                    foreach ($dataKaryawann as $data): ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $data->nama?></td>
                            <td><?php echo $data->email?></td>
                            <td><?php echo $data->no_telp?></td>
                            <td align="center">
                                <div class="row">
                                    <a href="<?php echo base_url('dashboard/viewManageeditKaryawan/') . $data->id; ?>">
                                        <button class="btn btn-success btn-sm ">
                                            <i class="fa fa-edit"></i>
                                            Ubah
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modal-default<?php echo $data->id; ?>">
                                        <i class="fa fa-remove"></i>
                                        Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-----Modal Hapus------>
                        <div class="modal fade" id="modal-default<?php echo $data->id; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Yakin Ingin Menghapus data '<?php echo $data->nama ?>' ?
                                        </h4>
                                    </div>
                                    <div class="modal-body" align="center">
                                        <img src="<?php echo base_url('assets/adminlte/dist/img/trash.png') ?>"
                                            style="width: 100px; height: 100px" class="user-image" alt="User Image">
                                    </div>
                                    <form action="<?php echo base_url('dashboard/hapusKaryawan') ?>" method="post">
                                        <input hidden name="id" value="<?php echo $data->id; ?>">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left"
                                                data-dismiss="modal">
                                                Batal
                                            </button>
                                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
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
<?php //include 'modaljadwal/inputjadwal.php';?>