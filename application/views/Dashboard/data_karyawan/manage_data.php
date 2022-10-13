<?php
$nama = '';
$email = '';
$noTelp = '';
$url = '';
if ($edit == true) {
  $title = "Edit";
  $nama = $karyawan->nama;
  $email = $karyawan->email;
  $noTelp = $karyawan->no_telp;
  $url = base_url('dashboard/editKaryawan?id='.$karyawan->id);
} else {
  $title = "Input";
  $url = base_url('dashboard/inputKaryawan');
}
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php echo $title ?> Data Karyawan
            <small>Data Karyawan</small>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Form <?php echo $title ?> Data Karyawan</h3>
                <div class="box-tools pull-right">
                    <a href="<?php echo base_url('dashboard/dataKaryawan') ?>" class="btn btn-sm btn-flat btn-warning">
                        <i class="fa fa-arrow-left"></i> Batal
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <form role="form" action="<?php echo $url ?>" method="post">
                            <?php if (isset($_SESSION['message']['msg'])) : ?>
                            <div id="message">
                                <!-- message -->
                                <div class="alert <?php echo $_SESSION['message']['color'] ?>">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4><i class="icon fa fa-check"></i> <?php echo $_SESSION['message']['title'] ?>!
                                    </h4>
                                    <?php echo $_SESSION['message']['msg'] ?>
                                </div>
                                <!-- message end -->
                            </div>
                            <?php endif; ?>
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Karyawan</label>
                                    <input type="text" value="<?php echo $nama ?>" name="nama_karyawan"
                                        class="form-control" id="exampleInputPassword1" placeholder="Nama Karyawan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" value="<?php echo $email ?>" name="email"
                                        class="form-control" id="exampleInputPassword1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Telp.</label>
                                    <input type="text" value="<?php echo $noTelp ?>" name="no_hp"
                                        class="form-control" id="exampleInputPassword1" placeholder="No Telphone">
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--<div class="form-group">-->
<!--    <label for="exampleInputEmail1">Nama Paket</label>-->
<!--    <textarea class="texteditor" name="isi"></textarea>-->
<!--</div>-->