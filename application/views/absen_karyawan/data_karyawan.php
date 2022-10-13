<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen Karyawan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <!-- Panggil Fungsi -->
</head>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('.table-paginate').dataTable();
});
</script>

<body>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="table-responsive">
                    <section class="content-header">
                        <h1>
                            Absensi
                            <small>Karyawan</small>
                        </h1>
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
                    </section>
                    <table class="table table-striped table-bordered table-paginate">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Status Absen</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php 
         foreach($karyawan as $data):
         ?>
                        <tbody>
                            <tr>
                                <td><?= $data->nama ?></td>
                                <td>
                                    <?php if($data->tanggal_absen == date("Y-m-d")){ ?>
                                    <span class="label label-success">Sudah Absen</span>
                                    <?php } else {?>
                                    <span class="label label-danger">Belum Absen</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if($data->tanggal_absen == date("Y-m-d")){ ?>
                                    -
                                    <?php } else {?>
                                        <!-- untuk menghubungkan ke nodejs -->
                                    <button type="button" class="btn btn-info"
                                        onClick="javascript:window.open('http://localhost:4000/<?php echo $data->id.'/'.$data->nama ?>', '_blank');">Absen</button>
                                    <?php } ?>
                                </td>
                            </tr>

                        </tbody>
                        <?php endforeach;?>
                    </table>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
</body>

</html>