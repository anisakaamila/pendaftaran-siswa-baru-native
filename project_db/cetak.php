<?php
error_reporting(FALSE);
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
		<title>CETAK FORMULIR PENDAFTARAN ONLINE</title></head>
	<body>
		<?php
		if(isset($_GET['cetak'])){
			$pilih_nis=$_GET['pilih_nis'];
			$stid=oci_parse($conn,"SELECT * FROM DATA_SISWA WHERE NIS=$pilih_nis");
   oci_execute($stid);
    while ($row=oci_fetch_array($stid, OCI_ASSOC)){
				    $nis=$row['NIS'];
					   $nama=$row['NAMA'];
					   $jk=$row['JENIS_KELAMIN'];
								$alamat=$row['ALAMAT'];
								$asal=$row['ASAL_SEKOLAH'];
								$agama=$row['AGAMA'];
								$tpt_lahir=$row['TEMPAT_LAHIR'];
								$tgl_lahir=$row['TANGGAL_LAHIR'];
								$status=$row['STATUS_ANAK'];
								$ayah=$row['NAMA_AYAH'];
								$ibu=$row['NAMA_IBU'];
								$penghasilan=$row['PENGHASILAN'];
								$tlp=$row['NO_TELEPON'];
								$pekerjaan=$row['PEKERJAAN'];
								$mat=$row['NILAI_MAT'];
								$ipa=$row['NILAI_IPA'];
								$ing=$row['NILAI_ING'];
								$bin=$row['NILAI_BIN'];
								$total=$row['NILAI_TOTAL'];				
				}
		}
		?>
		
		<form method="get" id="cetak" action="cetak.php">
			<p>Masukkan NIS yang ingin dicetak : </p>
			<input id="pilih_nis" name="pilih_nis" class="form-control" type="text"><div class="modal-footer"><button type="submit" class="btn btn-primary" name="cetak" value="oke">CETAK</button></div>
			</form>
		
		<table width="100%" border="0">
  <tr>
		<th><h3>FORMULIR PENDAFTARAN ONLINE SISWA BARU</h3>
						<h3>SMA SUKA JUANG SURABAYA TAHUN AJARAN 2018/2019</h3></th>
  </tr>
</table>
<hr>
		<img src="foto.jpg">
		<br>
		<br>
							<table width="85%">
								 <tr>
            <th width="25%"><div align="left">NIS</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$nis"; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Nama</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$nama"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Jenis Kelamin</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$jk"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Agama</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$agama"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Tempat Lahir</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$tpt_lahir"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Tanggal Lahir</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$tgl_lahir"; ?></td>
          </tr>  
								<tr>
            <th width="25%"><div align="left">Asal Sekolah</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$asal"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Alamat</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$alamat"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Status Anak</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$status"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Nama Ayah</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$ayah"; ?></td>
          </tr>
										<tr>
            <th width="25%"><div align="left">Nama Ibu</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$ibu"; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Penghasilan Ayah dan Ibu</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$penghasilan"; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">No. Telepon</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$tlp"; ?></td>
          </tr>
								 <tr>
            <th width="25%"><div align="left">Pekerjaan Ayah dan Ibu</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$pekerjaan"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Nilai Matematika</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$mat"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Nilai IPA</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$ipa"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Nilai Bahasa Inggris</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$ing"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Nilai Bahasa Indonesia</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$bin"; ?></td>
          </tr>
								<tr>
            <th width="25%"><div align="left">Nilai Total</div></th>
            <td width="10%"> : </td>
            <td><?php echo "$total"; ?></td>
          </tr>
		</table>
		<br>
		<br>
								*) Cetaklah formulir ini dan tempelkan foto anda ukuran 3x4<br>
								*) Formulir dicetak rangkap 2<br>
								*) Segera daftar ulang dengan menunjukkan formulir pendaftaran kepada pihak sekolah<br>
		
		<br>
		<br>
		<a href="index.php"><button>KEMBALI</button></a>
	</body>
</html>