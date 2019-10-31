<?php
$koneksi    = mysqli_connect("localhost", "root", "", "dpmptsp");
$bandung      = mysqli_query($koneksi, "SELECT * FROM permohonanbulan WHERE kota='Kota Bandung'");
$bogor          = mysqli_query($koneksi, "SELECT * FROM permohonanbulan WHERE kota='Kota Bogor'");
$cimahi     = mysqli_query($koneksi, "SELECT * FROM permohonanbulan WHERE kota='Kota Cimahi'");
$depok     = mysqli_query($koneksi, "SELECT * FROM permohonanbulan WHERE kota='Kota Depok'");
$kabbandung = mysqli_query($koneksi, "SELECT * FROM permohonanbulan WHERE kota='Kab. Bandung'");
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>BPMPT Provinsi Jawa Barat</title>
		<!-- start: META -->
		<meta charset="utf-8">
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/fonts/style.css">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/css/main.css">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/css/style.css">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/css/main-responsive.css">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/css/theme_light.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" type="text/css" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/select2/select2.css" />
		<link rel="stylesheet" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/DataTables/media/css/DT_bootstrap.css" />
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/favicon.png" />
		<script type="text/javascript" src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/js/jquery-2.1.4.min.js"></script>
		<script src="js/Chart.js"></script>
		<style>
			.legend table {
				top: -20px !important;
			}
		</style>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
				<!-- start: MAIN CONTAINER -->
		<!--<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
									<!-- end: SIDEBAR -->
			<!--</div>-->
			<!-- start: PAGE -->					
				

			<!-- start: PAGE 
			<div class="main-content">-->
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<!--<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>-->
						<!-- /.modal-content -->
					<!--</div>-->
					<!-- /.modal-dialog -->
				<!--</div>-->
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container" >
<div 
				style="
				margin:10px;
					border:0px solid red; 
					width:65%;
					height : 80px;
					float:left;
					font:size:14px;
				">
				<img src = "https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/logo-jabarstatistik.png">
				<img src = "https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/jufdul.png" >

				
				
				</div>
				<div 
				style="
				margin:10px;
					border:0px solid red; 
					width:25%;
					height : 80px;
					float:right;
					
				">
				<img src = "https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/logo-dinas.png" > 
				<img src = "https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/look.png" >
				<img src = "https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/simpatik.png">
				
				
				
				 
			
				</div>
					<!-- start: PAGE HEADER -->
					<!--<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
						<!--	<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="#">
										Home
									</a>
								</li>
								<li class="active">
									Dashboard
								</li>
							</ol>
							<div class="page-header">
								<h1>Pengendalian Dasboard Realtime</h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
					<!--	</div>
					</div>-->
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<br>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-bars"></i>
									Perkembangan Perizinan Bulan Ini
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
									</div>
								</div>
								<div class="panel-body">
									<div class="row">
										<ul class="mini-stats col-sm-12">
											<li class="col-sm-3">
												<div class="sparkline_bar_neutral">
													<span>2200,2892,2222,1902,1520,2810,3689</span>
												</div>
												<div class="values">
													<strong>
														290														
													</strong>
													Jumlah Izin yang Masuk
												</div>
											</li>
											<li class="col-sm-3">
												<div class="sparkline_bar_good">
													<span>2200,2892,2222,1902,1520,2810,2629</span>
												</div>
												<div class="values">
													<strong>
														31														
													</strong>
													Jumlah Izin yang selesai

												</div>
											</li>
											<li class="col-sm-3">
												<div class="sparkline_bar_bad">
													<span>4,6,10,8,12,21,24</span>
												</div>
												<div class="values">
													<strong>
														0													
													</strong>
													Jumlah Izin yang Dikembalikan
												</div>
											</li>
											<li class="col-sm-3">
												<div class="sparkline_bar_pross">
													<span>26,10,18,14,16,29,35</span>
												</div>
												<div class="values">
													<strong>
														259													
													</strong>
													Jumlah Izin yang diproses
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-dollar"></i>
									Investasi Tahun 2019									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
									</div>
								</div>
								<div class="panel-body">
									<div class="panel-body">
										<div class="col-sm-12 ">
											<div class="core-box">
												<div class="heading">
													<i class="fa fa-dollar circle-icon circle-green"></i>
													<!-- <h2>Rp 0</h2> -->
                                                                                           <h2>Rp 36,965,325,093,753</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-user"></i>
									Jumlah Pegawai yang Diserap
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
									</div>
								</div>
								<div class="panel-body">
									<div class="panel-body">
										<div class="col-sm-12">
											<div class="core-box">
												<div class="heading">
													<i class="clip-user circle-icon circle-teal"></i>
													<!--<h2>0 orang</h2>-->
                                                                                           <h2>24,991 orang</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-expand"></i>
									Izin PM Selesai Tahun 2019									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
									</div>
								</div>
								<div class="panel-body">
									<div class="panel-body">
										<div class="col-sm-6">
											<div class="easy-pie-chart">
												<span class="bounce number" data-percent="0"> <span class="percent">0</span> </span>
												<div class="label-chart">
													<center><br / >Melebihi Durasi</center>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="easy-pie-chart">
												<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
												<div class="label-chart">
													<center><br/> Izin selesai <br /> sesuai Durasi</center>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-bars"></i>
									Pemohon berdasarkan Wilayah Tahun 2019									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
									</div>
								</div>
									<div class="panel-body">
										<div class="flot-small-container">
											<div id="placeholder5" class="flot-placeholder"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<script type="text/javascript">
							$(function(){
								$("#wawx").hide();
							})
						</script>
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-bars"></i>
									Pemohon berdasar tempat pendaftaran tahun 2019									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
									</div>
								</div>
								<div class="panel-body">
									<div class="panel-body">
										<div class="flot-small-container">
											<canvas id="linechart" width="90" height="50"></canvas>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!--<div class="row">
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-dollar"></i>
									Peringkat Realisasi Investasi PMDN NON SPIPISE Tahun 2019									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
									</div>
								</div>
								<div class="panel-body panel-scroll ps-container" style="height:300px">
									<table class="table table-striped table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Kab/Kota</th>
												<th class="center">Jumlah Investasi (Rp)</th>
											</tr>
										</thead>
										<tbody>
																							<tr>
													<td class="center">1</td>
													<td>KOTA BANDUNG</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">2</td>
													<td>KAB. SUBANG</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">3</td>
													<td>KAB. TANGERANG</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">4</td>
													<td>KOTA TEGAL</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">5</td>
													<td>KOTA TASIKMALAYA</td>
													<td class="right">0</td>
													
												</tr>
																					</tbody>
									</table>
								<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 553px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 300px; display: inherit;"><div class="ps-scrollbar-y" style="top: 0px; height: 230px;"></div></div></div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-group"></i>
									Peringkat Penyerapan Tenaga Kerja PMDN NON SPIPISE Tahun 2019									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
									</div>
								</div>
								<div class="panel-body panel-scroll ps-container" style="height:300px">
									<table class="table table-striped table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Kab/Kota</th>
												<th class="center">Tenaga Kerja (Orang)</th>
											</tr>
										</thead>
										<tbody>
																						<tr>
													<td class="center">1</td>
													<td>KAB. BANDUNG</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">2</td>
													<td>KAB. PURWAKARTA</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">3</td>
													<td>KOTA SEMARANG</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">4</td>
													<td>KAB. CILACAP</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">5</td>
													<td>KAB. GARUT</td>
													<td class="right">0</td>
													
												</tr>
																					</tbody>
									</table>
								<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 553px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 300px; display: inherit;"><div class="ps-scrollbar-y" style="top: 0px; height: 230px;"></div></div></div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-briefcase"></i>
									Peringkat Jumlah Proyek PMDN NON SPIPISE Tahun 2019									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
									</div>
								</div>
								<div class="panel-body panel-scroll ps-container" style="height:300px">
									<table class="table table-striped table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Kab/Kota</th>
												<th class="center">Jumlah Investasi (Rp)</th>
											</tr>
										</thead>
										<tbody>
																						<tr>
													<td class="center">1</td>
													<td>KAB. BOGOR</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">2</td>
													<td>KOTA BANDUNG</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">3</td>
													<td>KOTA DEPOK</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">4</td>
													<td>KAB. BANDUNG</td>
													<td class="right">0</td>
													
												</tr>
																							<tr>
													<td class="center">5</td>
													<td>KOTA CIMAHI</td>
													<td class="right">0</td>
													
												</tr>
																					</tbody>
									</table>
								<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 553px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 300px; display: inherit;"><div class="ps-scrollbar-y" style="top: 0px; height: 230px;"></div></div></div>
							</div>
						</div>
					</div>-->
					<!--<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<i class="clip-stats"></i>
											Performa Pelayanan Izin per Bidang Tahun 2019											<div class="panel-tools">
												<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
												</a>
											</div>
										</div>
										<div class="panel-body">
											<div class="row space12">
												<ul class="mini-stats col-sm-12">
																									<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/pendidikan.png'>														</div>
														<div class="values">
															BIDANG PENDIDIKAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>15.6 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/kesehatan.jpg'>														</div>
														<div class="values">
															BIDANG KESEHATAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>22.9 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/binamarga.jpg'>														</div>
														<div class="values">
															BIDANG PEKERJAAN UMUM DAN PENATAAN RUANG<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>18.2 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/perumahan.jpg'>														</div>
														<div class="values">
															BIDANG PERUMAHAN DAN KAWASAN PERMUKIMAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>22 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/sosial.jpg'>														</div>
														<div class="values">
															BIDANG SOSIAL<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>7 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/tenagakerja.png'>														</div>
														<div class="values">
															BIDANG TENAGA KERJA<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>8.3 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/pertanahan.png'>														</div>
														<div class="values">
															BIDANG PERTANAHAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>30 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/LH.png'>														</div>
														<div class="values">
															BIDANG LINGKUNGAN HIDUP<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>35.4 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/dishub.jpg'>														</div>
														<div class="values">
															BIDANG PERHUBUNGAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>15.8 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/koperasi.png'>														</div>
														<div class="values">
															BIDANG KOPERASI, USAHA KECIL DAN MENENGAH<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>14 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/bkpm.png'>														</div>
														<div class="values">
															BIDANG PENANAMAN MODAL<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>4.4 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/kebudayaan.png'>														</div>
														<div class="values">
															BIDANG KEBUDAYAAN <br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>14 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/perikanan.png'>														</div>
														<div class="values">
															BIDANG KELAUTAN DAN PERIKANAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>13.1 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/jabar.png'>														</div>
														<div class="values">
															BIDANG PARIWISATA<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>18 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/pertanian.png'>														</div>
														<div class="values">
															BIDANG PERTANIAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>13.7 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/kehutanan.jpg'>														</div>
														<div class="values">
															BIDANG KEHUTANAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>41.4 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/esdm.jpg'>														</div>
														<div class="values">
															BIDANG ENERGI DAN SUMBER DAYA MINERAL<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>34.9 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/peprindustrian.png'>														</div>
														<div class="values">
															BIDANG PERDAGANGAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>11.4 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																										<li class="col-sm-4">
														<div class="row">
															<img class='center dinas' src='https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/'>														</div>
														<div class="values">
															BIDANG PERINDUSTRIAN<br /> <br />
															<div class="row">
																<div class="col-sm-4">
																	<strong>0</strong> Izin yang masuk <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>0 Hari</strong> Rata - rata Durasi <br /> <br />
																</div>
																<div class="col-sm-4">
																	<strong>8.6 Hari</strong> Rata -rata Durasi sesuai Pergub
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="bounce number" data-percent="0"><span class="percent">0</span> </span>
																		Izin yang tidak sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="easy-pie-chart">
																		<span class="cpu number" data-percent="0"> <span class="percent">0</span> </span>
																		Izin yang sesuai Pergub
																	</div>
																</div>
																<div class="col-sm-4">
																	<strong> Status </strong>
																	<span class="badge badge-success"><i class="clip-checkmark-2"></i></span>
																</div>
															</div>
														</div>
													</li>
																									</ul>
											</div>
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>-->
					</div>
					<!-- end: PAGE CONTENT
				</div>-->
			</div>
			<!-- end: PAGE -->								
			<!-- end: PAGE 
		</div>-->
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
					<!-- end: FOOTER -->

<!-- 		<div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Event Management</h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-light-grey">
							Close
						</button>
						<button type="button" class="btn btn-danger remove-event no-display">
							<i class='fa fa-trash-o'></i> Delete Event
						</button>
						<button type='submit' class='btn btn-success save-event'>
							<i class='fa fa-check'></i> Save
						</button>
					</div>
				</div>
			</div>
		</div> -->
		
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/respond.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/js/table-data.js"></script>
		
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/flot/jquery.flot.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/flot/jquery.flot.resize.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/flot/jquery.flot.categories.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/flot/jquery.flot.pie.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/flot/jquery.flot.time.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/flot/jquery.flot.orderBars.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>

		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/js/index2.js"></script>
		<!-- <script src="assets/js/charts2.js"></script> -->
		<!-- <script src="assets/js/charts4.js"></script> -->
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/select2/select2.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="https://dpmptsp.jabarprov.go.id/webpengendalian/assets/js/form-elements.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
				// Charts2.init();
				Index2.init();
				TableData.init();
			});
		</script>

	</body>
	<!-- end: BODY -->
</html>
<script  type="text/javascript">
  var ctx = document.getElementById("linechart").getContext("2d");
  var data = {
            labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
            datasets: [
                  {
                    label: "Kota Bandung",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#29B0D0",
                    borderColor: "#29B0D0",
                    pointHoverBackgroundColor: "#29B0D0",
                    pointHoverBorderColor: "#29B0D0",
                    data: [<?php while ($p = mysqli_fetch_array($bandung)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  },
                  {
                    label: "Kota Bogor",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#2A516E",
                    borderColor: "#2A516E",
                    pointHoverBackgroundColor: "#2A516E",
                    pointHoverBorderColor: "#2A516E",
                    data: [<?php while ($p = mysqli_fetch_array($bogor)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  },
                  {
                    label: "Kota Cimahi",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F07124",
                    borderColor: "#F07124",
                    pointHoverBackgroundColor: "#F07124",
                    pointHoverBorderColor: "#F07124",
                    data: [<?php while ($p = mysqli_fetch_array($cimahi)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  },
                  {
                    label: "Kota Depok",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#CBE0E3",
                    borderColor: "#CBE0E3",
                    pointHoverBackgroundColor: "#CBE0E3",
                    pointHoverBorderColor: "#CBE0E3",
                    data: [<?php while ($p = mysqli_fetch_array($depok)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  },
                  {
                    label: "Kab. Bandung",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#979193",
                    borderColor: "#979193",
                    pointHoverBackgroundColor: "#979193",
                    pointHoverBorderColor: "#979193",
                    data: [<?php while ($p = mysqli_fetch_array($kabbandung)) { echo '"' . $p['jan'] . '","' . $p['feb'] . '","' . $p['mar'] . '","' . $p['apr'] . '","' . $p['may'] . '","' . $p['jun'] . '","' . $p['jul'] . '","' . $p['aug'] . '","' . $p['sep'] . '","' . $p['oct'] . '","' . $p['nov'] . '","' . $p['dec'] . '",';}?>]
                  }
                  ]
          };

  var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
            legend: {
              display: true
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>