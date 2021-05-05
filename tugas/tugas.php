<html>
<head>
	<title>Form HTML Pada PHP | JagoWebDev.com</title>
	<style>
		body {
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 120px;
			cursor: pointer;
		}
		label {
			width: 120px;
			display: block;
			float: left;
		}
		.checkbox, .radio {
			float:none;
			width: auto;
		}
		.row::after {
			content: "";
			display: block;
			clear:both;
		}
		.row {
			margin-bottom: 5px;
			clear: both;
		}
		.options {
			float:left;
		}
	</style>
</head>
<body>
	<h1>Form Input</h1>
	<form action="" method="post">
		<div class="row">
			<label>Nama</label>
			<input type="text" name="nama" value=""/>
		</div>
		<div class="row">
			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" value=""/>
		</div>
		<div class="row">
			<label>Pekerjaan</label>
			<select name="area">
				<option value="Guru">Guru</option><option value="Karyawan" >Karyawan</option><option value="Dokter">Dokter</option><option value="Arsitektur">Arsitektur</option><option value="Pedagang">Pedagang</option>			</select>
		</div>
		<div class="row">
			<label>Gaji</label>
			<div class="options">
				<label class="checkbox">
							<input type="checkbox" name="<1.000.000"><1.000.000</label><label class="checkbox">
							<input type="checkbox" name="1.000.000 - 3.000.000">1.000.000 - 3.000.000</label><label class="checkbox">
							<input type="checkbox" name="3.000.000 - 5.000.000">3.000.000 - 5.000.000</label><label class="checkbox">
							<input type="checkbox" name="5.000.000 - 8.000.000">5.000.000 - 8.000.000</label><label class="checkbox">
							<input type="checkbox" name=">8.000.000">>8.000.000</label>			</div>
		</div>
        <div class="row">
            <input type="submit" name="submit" value="simpan"/>
            </div>
	</form>
    <h1>Hasil Input</h1><ul><li>Nama: Habib Alhuda</li><li>Tanggal Lahir:12-20-1998</li><li>Umur:22</li><li>Pekerjaan:Guru</li><li>Gaji:<1.000.000</li></ul>
	</body>
</html>