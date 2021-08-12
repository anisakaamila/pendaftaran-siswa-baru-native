<?php 
$conn=oci_connect('ANISA','anisa','localhost/XE');
		if($conn){
			echo " ";
		}
	else{
		echo "Koneksi Gagal";
	}
?>

<html>
	<head>
		<title>DATA PENDAFTAR ADMIN</title>
	</head>
		<body>
			<ol class='breadcrumb'>
     <li><a href='./'>Home</a></li>
       <li class='active'><a href="pendaftar.php">Pendaftar</a></li>
   </ol>						
					<a href="tambahdaftar.php"><button type="button" onClick=""class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</button></a>
					<a href="perbaruidaftar.php"><button type="button" onClick=""class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Perbarui</button></a>
					<a href="hapusdaftar.php"><button type="button" onClick=""class="btn btn-primary"><i class="fa fa-minus"></i>&nbsp;Hapus</button></a>

<table class="table table-striped">
	<tr>
		<th>NIS</th><th>NAMA</th><th>JENIS KELAMIN</th><th>ALAMAT</th><th>ASAL SEKOLAH</th><th>AGAMA</th><th>TEMPAT LAHIR</th><th>TANGGAL LAHIR</th><th>STATUS ANAK</th><th>NAMA AYAH</th><th>NAMA IBU</th><th>PENGHASILAN AYAH IBU</th><th>N0. TLP</th><th>PEKERJAAN AYAH IBU</th><th>MAT</th><th>IPA</th><th>ING</th><th>BIN</th><th>TOTAL</th>
	</tr>
	
<?php $stid=oci_parse($conn,"SELECT * FROM DATA_SISWA");
   									oci_execute($stid);
												while($row=oci_fetch_array($stid, OCI_ASSOC)){
													?><tr>
	<?php foreach($row as $data){ ?>
	<td> <?php echo $data; ?></td>
	<?php } ?></tr>
	<?php }
			?>
	 </table>
 </body>
</html>
