<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="<?php echo base_url('assets/adminlte/dist/img/user.png')?>" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
			<p><?php echo $user['name']?></p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>

<ul class="sidebar-menu" data-widget="tree">
	<li class="header">Menu</li>
	<li class="active">
		<a href="<?php echo base_url(); ?>">
			<i class="fa fa-dashboard"></i> <span>Dashboard</span>
		</a>
	</li>


	<li class="nav-item">
		<a href="<?php echo base_url('dashboard/dataKaryawan')?>">
			<i class="fa fa-user"></i>
			<span>Data Karyawan</span>
		</a>
	</li>

	<li class="nav-item">
		<a href="<?php echo base_url('dashboard/rekapAbsen')?>">
			<i class="fa fa-file"></i>
			<span>Rekap Absen</span>
		</a>
	</li>

	
    
</ul>
</section>
