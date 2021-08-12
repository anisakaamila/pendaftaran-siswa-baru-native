<?php
	$conn=oci_connect('ANISA','anisa','localhost/XE');
		if($conn){
			echo " ";
		}
	else{
		echo "Koneksi Gagal";
	}

	if(isset($_GET['simpan'])){
																	$nis=$_GET['nis'];
																	$nama=$_GET['nama'];
																	$jk=$_GET['jk'];
																	$alamat=$_GET['alamat'];
																	$asal=$_GET['asal'];
																	$agama=$_GET['agama'];
																	$tpt_lahir=$_GET['tpt_lahir'];
																	$tgl_lahir=$_GET['tgl_lahir'];
																	$status=$_GET['status'];
																	$ayah=$_GET['ayah'];
																	$ibu=$_GET['ibu'];
																	$penghasilan=$_GET['penghasilan'];
																	$tlp=$_GET['tlp'];
																	$pekerjaan=$_GET['pekerjaan'];
																	$mat=$_GET['mat'];
																	$ipa=$_GET['ipa'];
																	$ing=$_GET['ing'];
																	$bin=$_GET['bin'];
																	$total=$_GET['total'];

					$query=oci_parse($conn, "INSERT INTO DATA_SISWA (NIS, NAMA, JENIS_KELAMIN, ALAMAT, ASAL_SEKOLAH, AGAMA, TEMPAT_LAHIR, TANGGAL_LAHIR, STATUS_ANAK, NAMA_AYAH, NAMA_IBU, PENGHASILAN, NO_TELEPON, PEKERJAAN, NILAI_MAT, NILAI_IPA, NILAI_ING, NILAI_BIN, NILAI_TOTAL) VALUES ($nis, '$nama', '$jk', '$alamat', '$asal', '$agama', '$tpt_lahir', '$tgl_lahir', '$status', '$ayah', '$ibu', '$penghasilan', $tlp, '$pekerjaan', $mat, $ipa, $ing, $bin, $total)");
		
					$oke=oci_execute($query);
					if(!$oke){
   					echo "<script>alert('DATA TIDAK BERHASIL DISIMPAN')</script>";
					}else if($oke){
						   echo "<script>alert('DATA BERHASIL DISIMPAN')</script>";
					}else{
 					echo "<script>alert('DATA TIDAK BERHASIL DIBACA')</script>";
					}
}

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PENDAFTARAN ONLINE SISWA BARU</title>
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
</head>
<body>
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li class="c1 active"><a href="./"><span class="fa fa-home"></span> Home</a></li>
                    <li class="c2"><a href="login.php"><span class="fa fa-pencil"></span> Pendaftaran</a></li>
																				<li class="c3"><a href="pengumuman.php"><span class="fa fa-users"></span> Pengumuman</a></li>
                    <li class="c7"><a href="./admin/login.php"><span class="fa fa-lock"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </div>
  <div class="container">
    <div class="row">
                    <div class="col-md-12">
                        <div class="grey-box-icon b4">  
                            <h1>SELAMAT</h1>
                            <h3>ANDA TELAH BERHASIL MENDAFTAR SILAHKAN CETAK FORMULIR PENDAFTARAN</h3>
                            <p><a href="./cetak.php"><em>Cetak →</em></a></p>
                        </div>
                    </div>
                </div>
    									</div>
      <section class="news-box top-margin"></section>   
     <footer id="footer">
    <div class="container">
   <div class="row">
  <div class="footerbottom">

    <div class="col-md-12 col-sm-7"> 
                <div class="footerwidget"> 
                         <h4>HUBUNGI KAMI</h4> 
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Tim Pendaftaran Siswa Baru<br>
            <i class="fa fa-phone"></i>+895360841823 <br>
             <i class="fa fa-envelope-o"></i> tim_psb@gmail.com
              </div> 
                </div>
    </div>
  </div>
</div>
            <div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-pencil"></i></a>
                <a href="#"><i class="fa fa-flickr"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <div class="clear"></div>
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">

                

                    <div class="col-md-12 panel">
                        <div class="panel-body">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/modernizr-latest.js"></script> 
    <script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
    <script src="assets/js/custom.js"></script>
    <script>
        jQuery(function(){
            
            jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
                height: '600',
                loader: 'false',
                pagination: true,
                thumbnails: false,
                hover: false,
                playPause: false,
                navigation: false,
                opacityOnGrid: false,
                imagePath: 'assets/images/'
            });

        });
      
    </script>
    
</body>
</html>
