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
		<title>SELEKSI PENDAFTAR ADMIN</title>
	</head>
		<body>
			<ol class='breadcrumb'>
     <li><a href='./'>Home</a></li>
       <li class='active'><a href="pendaftar.php">Pendaftar</a></li>
   </ol>						

<table class="table table-striped">
	<tr>
		<th>NIS</th><th>NAMA</th><th>JENIS KELAMIN</th><th>ASAL SEKOLAH</th><th>MAT</th><th>IPA</th><th>ING</th><th>BIN</th><th>TOTAL</th>
	</tr>
	
<?php $stid=oci_parse($conn,"SELECT NIS, NAMA, JENIS_KELAMIN, ASAL_SEKOLAH, NILAI_MAT, NILAI_IPA, NILAI_ING, NILAI_BIN, NILAI_TOTAL FROM DATA_SISWA WHERE NILAI_MAT>='50' AND NILAI_IPA>='50' AND NILAI_ING>='50' AND NILAI_BIN>='50' ");
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
