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
			</div>
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
	<header id="head">
		<div class="container">
             <div class="heading-text">							
							<h1 >PENDAFTARAN ONLINE SISWA BARU SMA SUKAJUANG SURABAYA</h1> <br>
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
  <div class="container">
    <div class="row">
			
					<div class="col-md-12">
						<div class="grey-box-icon b4">  
							 <h2 class="modal-title" id="myModalLabel">DATA PENDAFTAR</h2>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form method="get" action="simpan.php">
        <table class="table" width="100%">
									<tr>
											 				<th width="25%">NIS</th>
                <td width="1%"> : </td>
                <td> <input id="nis" name="nis" placeholder="Nomor Induk Siswa" class="form-control" type="text"></td>
									</tr>
          <tr>
                <th width="25%">Nama </th>
                <td width="1%"> : </td>
                <td> <input id="nama" name="nama" placeholder="Nama" class="form-control" type="text"></td>
            </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <td width="1%"> : </td>
                <td> <select id="jk" name="jk" class="form-control">
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                </td>
            </tr>
									<tr>
                <th width="25%">Alamat</th>
                <td width="1%"> : </td>
                <td> <input id="alamat" name="alamat" placeholder="Alamat" class="form-control" type="textarea"></td>
            </tr>
            <tr>
            <th width="25%">Asal Sekolah</th>
            <td width="1%"> : </td>
            <td><input id="text" name="asal" placeholder="Asal Sekolah" class="form-control" type="text">
         </td>
          </tr>
									 <tr>
            <th width="25%">Agama</th>
            <td width="1%"> : </td>
            <td><select name="agama" class="form-control">
            	<option value="Islam">Islam</option> 
													<option value="Islam">Kristen</option> 
													<option value="Islam">Hindu</option> 
													<option value="Islam">Buddha</option> 
            </select></td>
          </tr>
            <tr>
                <th width="25%">Tempat Lahir</th>
                <td width="1%"> : </td>
                <td> <input id="tpt_lahir" name="tpt_lahir" placeholder="Tempat Lahir" class="form-control" type="text"></td>
            </tr>
            <tr>
                <th width="25%">Tanggal Lahir</th>
                <td width="1%"> : </td>
                <td> <input id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir dd/mm/yyyy" class="form-control" type="text"></td>
            </tr>
            <tr>
                <th width="25%">Status Anak</th>
                <td width="1%"> : </td>
                <td> <select id="status" name="status" class="form-control">
                <option value="Kandung">Kandung</option>
                <option value="Tiri">Tiri</option>
                </select>
													</td>
            </tr>
            <tr>
                <th width="25%">Nama Ayah</th>
                <td width="1%"> : </td>
                <td> <input id="ayah" name="ayah" placeholder="Nama Ayah" class="form-control" type="text"></td>
									</tr>
									<tr>

                <th width="25%">Nama Ibu</th>
                <td width="1%"> : </td>
                <td> <input id="ibu" name="ibu" placeholder="Nama Ibu" class="form-control" type="text"></td>
            </tr>
 											<tr>
                <th width="25%">Penghasilan Ayah dan Ibu</th>
                <td width="1%"> : </td>
                <td> <input id="penghasilan" name="penghasilan" placeholder="Pengasilan Ayah dan Ibu Contoh : Rp.4.000.000 (Total)" class="form-control" type="text"></td>
            </tr>
          <tr>
                <th width="25%">No. Telepon</th>
                <td width="1%"> : </td>
                <td> <input id="tlp" name="tlp" placeholder="No. Telepon Ibu/Ayah" class="form-control" type="text"></td>
            </tr>
									<tr>
                <th width="25%">Pekerjaan Ayah dan Ibu</th>
                <td width="1%"> : </td>
                <td> <input id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan Ayah dan Ibu" class="form-control" type="text"></td>
            </tr>
									<tr>
                <th width="25%">Nilai Matematika</th>
                <td width="1%"> : </td>
                <td> <input id="mat" name="mat" placeholder="Nilai Matematika" class="form-control" type="text"></td>
            </tr>
									<tr>
                <th width="25%">Nilai IPA</th>
                <td width="1%"> : </td>
                <td> <input id="ipa" name="ipa" placeholder="Nilai IPA" class="form-control" type="text"></td>
            </tr>
									<tr>
                <th width="25%">Nilai Bahasa Inggris</th>
                <td width="1%"> : </td>
                <td> <input id="ing" name="ing" placeholder="Nilai Bahasa Inggris" class="form-control" type="text"></td>
            </tr>
									<tr>
                <th width="25%">Nilai Bahasa Indonesia</th>
                <td width="1%"> : </td>
                <td> <input id="bin" name="bin" placeholder="Nilai Bahasa Indonesia" class="form-control" type="text"></td>
            </tr>
									<tr>
                <th width="25%">Nilai  Total</th>
                <td width="1%"> : </td>
                <td> <input id="total" name="total" placeholder="Nilai Total" class="form-control" type="text"></td>
            </tr>
        </table>
        *) Pas foto dengan ukuran 2x4 ditempel sesudah anda mengisi semua formulir dengan benar<br>
        *) Pengumuman hasil seleksi pendaftaran akan diumumkan pada Hari 17 Juli 2018 pukul 00:00 WIB di website resmi SMA SUKAJUANG SURABAYA<br>
								*) Jika anda anda bingung harap meminta bantuan panitia PSB<br>

      </div>
      <div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="simpan" value="oke">SIMPAN</button>
							</form>
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
