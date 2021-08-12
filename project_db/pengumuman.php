<?php
	$conn=oci_connect('ANISA','anisa','localhost/XE');
		if($conn){
			echo " ";
		}
	else{
		echo "Koneksi Gagal";
	}

?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>PENDAFTARAN SISWA BARU</title>
	<link rel="favicon" href="assets/images/favicon.png">
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
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1 active"><a href="./"><span class="fa fa-home"></span> Home</a></li>
					<li class="c2"><a href="pendaftaran.php"><span class="fa fa-pencil"></span> Pendaftaran</a></li>
					<li class="c3"><a href="pengumuman.php"><span class="fa fa-users"></span> Pengumuman</a></li>
					<li class="c7"><a href="./admin/login.php"><span class="fa fa-lock"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<header id="head">
		<div class="container">
             <div class="heading-text">							
							<h1 >PENDAFTARAN ONLINE SISWA SMA/SMK NEGERI</h1> <br>
							<p>"Pendidikan merupakan kekuatan terbesar yang dapat digunakan untuk merubah dunia" -Nelson Mandela</p>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                        </div> 
                        <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                        </div> 
                    </div>
                </div>
		</div>
	</header>

	<center>
		<h1 style="color: black">PENGUMUMAN HASIL SELEKSI</h1>
		<h2 style="color: green">SELAMAT! ANDA DITERIMA DI SMA SUKAJUANG SURABAYA</h2>
	</center><br>
	
	<table class="table table-striped">
	<tr>
		<th>NIS</th><th>Nama</th><th>JENIS KELAMIN</th><th>ASAL SEKOLAH</th><th>MAT</th><th>IPA</th><th>ING</th><th>BIN</th><th>TOTAL</th>
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
	<br>
	<br>
	
	*) Bagi para pendaftar yang telah diterima agar segera melakukan daftar ulang dengan membawa bukti formulir pendaftaran<br>
	*) Bukti formulir pendaftaran dicetak rangkap 2 beserta foto ukuran 3x4 yang telah tertempel pada bukti formulir pendaftaran<br>
	*) Pembayaran uang gedung dan SPP dibayar pada saat daftar ulang<br>
	*) Batas waktu daftar ulang hingga 30 Juli 2018

    <footer id="footer">
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-12 col-sm-7"> 
            	<div class="footerwidget"> 
                         <h4>HUBUNGI KAMI</h4> 
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Tim Pendaftaran Siswa Baru<br>
            <i class="fa fa-phone"></i>+8895360841823 <br>
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
