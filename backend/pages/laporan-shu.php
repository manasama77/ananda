<?php
$bulan_sekarang = date('m');
?>
<div class="widget">
	<div class="widget-content">
<div class="row">
	<div class="col-lg-12">
		<h2 class="header">Laporan SISA HASIL USAHA </h2>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-4">
		<h4>Laporan SHU Harian</h4>
		<hr>
		<form class="form-inline" action="#.php" method="post" target="_blank">
			<div class="form-group">
				<label>Tanggal</label>
				<input id="tanggal_harian" name="tanggal_harian" type="text" maxlength="10" class="form-control input-sm">
				<button type="submit" class="btn btn-primary btn-sm">Tampilkan</button>
			</div>
		</form>
	</div>
	<div class="col-lg-offset-1 col-lg-4">
		<h4>Laporan SHU Bulanan</h4>
		<hr>
		<form class="form-inline" action="#.php" method="post" target="_blank">
			<div class="form-group">
				<label>Bulan</label>
				<select id="bulan" name="bulan" class="form-control input-sm">
					<option value="1">Januari</option>
					<option value="2">Febuari</option>
					<option value="3">Maret</option>
					<option value="4">April</option>
					<option value="5">Mei</option>
					<option value="6">Juni</option>
					<option value="7">Juli</option>
					<option value="8">Agustus</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
				</select>
				<button type="submit" class="btn btn-primary btn-sm">Tampilkan</button>
			</div>
		</form>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12">
		<h4>Laporan SHU Berjarak</h4>
		<hr>
		<form class="form-inline" action="laporan-shu-bulanan.php" method="post" target="_blank">
			<div class="form-group">
				<label>Tanggal Awal</label>
				<input id="tanggal_awal" name="tgl_awal" type="text" maxlength="10" class="form-control input-sm">
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>	
				<label>Tanggal Akhir</label>
				<input id="tanggal_akhir" name="tgl_akhir" type="text" maxlength="10" class="form-control input-sm">
				<button type="submit" class="btn btn-primary btn-sm">Tampilkan</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>