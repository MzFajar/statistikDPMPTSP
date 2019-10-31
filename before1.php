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
		<meta charset="utf-8" />
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
			<script>
  jQuery(document).ready(function() {
							
							var d1_1 = [
												
					           		[1324600000000, 1158],	
					          						
					           		[1327350000000, 1112],	
					          						
					           		[1330100000000, 755],	
					          						
					           		[1332850000000, 631],	
					          						
					           		[1335600000000, 425],	
					          	     	        
					        ];

					        var data1 = [
					            {
					                label: "Product 1",
					                data: d1_1,
					                bars: {
					                    show: true,
					                    barWidth: 12*44*60*60*600,
					                    fill: true,
					                    lineWidth:0,
					                    order: 1,
					                    fillColor: "#80C3FD",
					                },
					                color: "#0089FF"
					            },

					        ];
					        var p = $.plot($("#placeholder5"), data1, {
					            xaxis: {
					                min: (new Date(2011, 11, 15)).getTime(),
					                max: (new Date(2012, 04, 18)).getTime(),
					                mode: "time",
					                timeformat: "%b",
					                tickSize: [1, "month"],
					                //monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					                tickLength: 0, // hide gridlines
					                axisLabel: 'Month',
					                axisLabelUseCanvas: true,
					                axisLabelFontSizePixels: 1,
					                axisLabelPadding: 5,
					                ticks:[
					                
					               						
							           [1325160000000,'KOTA<br>BANDUNG'],
							         					
							           [1327960000000,'KAB.<br>BOGOR'],
							         					
							           [1330760000000,'KAB.<br>BANDUNG'],
							         					
							           [1333560000000,'KOTA<br>DEPOK'],
							         					
							           [1336360000000,'KOTA<br>CIMAHI'],
							            
					                ]
					            },
					            yaxis: {
					                axisLabel: 'Izin',
					                axisLabelUseCanvas: true,
					                axisLabelFontSizePixels: 12,
					                axisLabelPadding: 5,
					                tickSize: 1000,
					                tickFormatter: function (val, axis) {
					                        return val;
					                    },

					            },
					            grid: {
					                hoverable: true,
					                clickable: false,
					                borderWidth: 0,
					                borderColor:'#f0f0f0',
					                labelMargin:8,
					            },
					            series: {
					                shadowSize: 1,

					            },

					            legend: {
					                show: false,
					                noColumns: 2,
					                container: "#bar-legend"
					            },
					            tooltip:true,
					            tooltipOpts: {
					                id:"chart-tooltip",
					                content: "<p><b>20</b> Outgoing Filings</p>" +
					                     "<p>Out of <b>10</b> committed;</p>" +
					                     "<br />" +
					                     "<p><b>30%</b>% Ratio</p>",
					                shifts: {
					                    x:-74,
					                    y:-125
					                },
					                lines:{
					                track: true
					                },
					                compat: true,
					            },
					         });

					        $.each(p.getData()[0].data, function(i, el){
					          var o = p.pointOffset({x: el[0], y: el[1]});
					          $('<div class="data-point-label">' + el[1] + '</div>').css( {
					            position: 'absolute',
					            left: o.left + 7,
					            top: o.top - 20,
					            display: 'none'
					          }).appendTo(p.getPlaceholder()).fadeIn('slow');
					        });			        
  });
  console.log("1158");			
</script>
							
<script>
  jQuery(document).ready(function() {
							var d1_1 = [
												
					            [1324000000000, 12995],	
					          					
					            [1326750000000, 43],	
					               	        
					        ];

					        var data1 = [
					            {
					                label: "Product 1",
					                data: d1_1,
					                bars: {
					                    show: true,
					                    barWidth: 12*44*60*60*600,
					                    fill: true,
					                    lineWidth:0,
					                    order: 1,
					                    fillColor: "#80C3FD",
					                },
					                color: "#0089FF"
					            },

					        ];
					        var p = $.plot($("#placeholder7"), data1, {
					            xaxis: {
					                min: (new Date(2011, 11, 15)).getTime(),
					                max: (new Date(2012, 04, 18)).getTime(),
					                mode: "time",
					                timeformat: "%b",
					                tickSize: [1, "month"],
					                //monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					                tickLength: 0, // hide gridlines
					                axisLabel: 'Month',
					                axisLabelUseCanvas: true,
					                axisLabelFontSizePixels: 1,
					                axisLabelPadding: 5,
					                ticks:[
					                
					               						
							           [1325160000000,'OnLine'],
							         					
							           [1327960000000,'0'],
							            
					                ]
					            },
					            yaxis: {
					                axisLabel: 'Izin',
					                axisLabelUseCanvas: true,
					                axisLabelFontSizePixels: 12,
					                axisLabelPadding: 5,
					                tickSize: 10000,
					                tickFormatter: function (val, axis) {
					                        return val;
					                    },

					            },
					            grid: {
					                hoverable: true,
					                clickable: false,
					                borderWidth: 0,
					                borderColor:'#f0f0f0',
					                labelMargin:8,
					            },
					            series: {
					                shadowSize: 1,

					            },

					            legend: {
					                show: false,
					                noColumns: 2,
					                container: "#bar-legend"
					            },
					            tooltip:true,
					            tooltipOpts: {
					                id:"chart-tooltip",
					                content: "<p><b>20</b> Outgoing Filings</p>" +
					                     "<p>Out of <b>10</b> committed;</p>" +
					                     "<br />" +
					                     "<p><b>30%</b>% Ratio</p>",
					                shifts: {
					                    x:-74,
					                    y:-125
					                },
					                lines:{
					                track: true
					                },
					                compat: true,
					            },
					         });

					        $.each(p.getData()[0].data, function(i, el){
					          var o = p.pointOffset({x: el[0], y: el[1]});
					          $('<div class="data-point-label">' + el[1] + '</div>').css( {
					            position: 'absolute',
					            left: o.left + 7,
					            top: o.top - 20,
					            display: 'none'
					          }).appendTo(p.getPlaceholder()).fadeIn('slow');
					        });			        
	});			
</script>

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
  <div style="margin:10px; border:0px solid red; width:65%; height : 80px; float:left; font:size:14px;">
    <img src = "https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/logo-jabarstatistik.png">
    <img src = "https://dpmptsp.jabarprov.go.id/webpengendalian/assets/images/dinas/jufdul.png" >
  </div>
  
  <div style="margin:10px; border:0px solid red; width:25%;	height : 80px; float:right;">
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
  						<li class="col-sm-2">
  							<div class="sparkline_bar_neutral">
  								<span>2200,2892,2222,1902,1520,2810,3689</span>
  							</div>
  							<div class="values">
  								<strong>
  									1,247  								</strong>
  								Jumlah Izin yang Masuk
  							</div>
  						</li>
  						<li class="col-sm-2">
  							<div class="sparkline_bar_good">
  								<span>2200,2892,2222,1902,1520,2810,2629</span>
  							</div>
  							<div class="values">
  								<strong>
  									153  								</strong>
  								Jumlah Izin yang selesai
  							</div>
  						</li>
  						<li class="col-sm-2">
  							<div class="sparkline_bar_bad">
  								<span>4,6,10,8,12,21,24</span>
  							</div>
  							<div class="values">
  								<strong>
  									0  								</strong>
  								Jumlah Izin yang Dikembalikan
  							</div>
  						</li>
  						<li class="col-sm-2">
  							<div class="sparkline_bar_pross">
  								<span>26,10,18,14,16,29,35</span>
  							</div>
  							<div class="values">
  								<strong>
  									1,094  								</strong>
  								Jumlah Izin yang diproses
  							</div>
  						</li>
  						
  						<li class="col-sm-2">
  						  <div class="easy-pie-chart">
  							  <span class="bounce number" data-percent="96.58"> <span class="percent">96.58</span> </span>
  							  <div class="label-chart">
  								  <center><br / >Melebihi Durasi</center>
  							  </div>
  						  </div>	
  						</li>
  						
  						<li class="col-sm-2">
  						  <div class="easy-pie-chart">
  							<span class="cpu number" data-percent="3.42"> <span class="percent">3.42</span> </span>
  							<div class="label-chart">
  								<center><br/> Izin selesai <br /> sesuai Durasi</center>
  							</div>
  						</div>	
  						</li>
  						
  					</ul>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  
  <div class="row">
  	<div class="col-sm-12">
  		<div class="panel panel-default">
  			<div class="panel-heading">
  				<i class="clip-bars"></i>
  				Perkembangan Perizinan Tahun 2019  				<div class="panel-tools">
  					<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
  					</a>
  				</div>
  			</div>
  			<div class="panel-body">
  				<div class="row">
  					<ul class="mini-stats col-sm-12">
  						<li class="col-sm-2">
  							<div class="sparkline_bar_neutral">
  								<span>2200,2892,2222,1902,1520,2810,3689</span>
  							</div>
  							<div class="values">
  								<strong>
  									13,061  								</strong>
  								Jumlah Izin yang Masuk
  							</div>
  						</li>
  						<li class="col-sm-2">
  							<div class="sparkline_bar_good">
  								<span>2200,2892,2222,1902,1520,2810,2629</span>
  							</div>
  							<div class="values">
  								<strong>
  									8,261  								</strong>
  								Jumlah Izin yang selesai
  							</div>
  						</li>
  						<li class="col-sm-2">
  							<div class="sparkline_bar_bad">
  								<span>4,6,10,8,12,21,24</span>
  							</div>
  							<div class="values">
  								<strong>
  									220  								</strong>
  								Jumlah Izin yang Dikembalikan
  							</div>
  						</li>
  						<li class="col-sm-2">
  							<div class="sparkline_bar_pross">
  								<span>26,10,18,14,16,29,35</span>
  							</div>
  							<div class="values">
  								<strong>
  									4,557  								
  								</strong>
  								Jumlah Izin yang diproses
  							</div>
  						</li>
  						  						
  						<li class="col-sm-2">
  						  <div class="easy-pie-chart">
  							  <span class="bounce number" data-percent="96.58"> <span class="percent">96.58</span> </span>
  							  <div class="label-chart">
  								  <center><br / >Melebihi Durasi</center>
  							  </div>
  						  </div>	
  						</li>
  						
  						<li class="col-sm-2">
  						  <div class="easy-pie-chart">
  							<span class="cpu number" data-percent="3.42"> <span class="percent">3.42</span> </span>
  							<div class="label-chart">
  								<center><br/> Izin selesai <br /> sesuai Durasi</center>
  							</div>
  						</div>	
  						</li>
  						
  					</ul>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  
  <!--
  <div class="row">
  	<div class="col-sm-4">
  		<div class="panel panel-default">
  			<div class="panel-heading">
  				<i class="fa fa-dollar"></i>
  				Investasi Tahun 2019  				<div class="panel-tools">
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
                  <h2>Rp 0</h2>
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
                  <h2>0 orang</h2>
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
  				<!--Izin PM Selesai Tahun 2019  				Penyelesaian Izin Tahun 2019  				<div class="panel-tools">
  					<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
  					</a>
  				</div>
  			</div>
  			<div class="panel-body">
  				<div class="panel-body">
  					<div class="col-sm-6">
  						<div class="easy-pie-chart">
  							<span class="bounce number" data-percent="96.58"> <span class="percent">96.58</span> </span>
  							<div class="label-chart">
  								<center><br / >Melebihi Durasi</center>
  							</div>
  						</div>
  					</div>
  					<div class="col-sm-6">
  						<div class="easy-pie-chart">
  							<span class="cpu number" data-percent="3.42"> <span class="percent">3.42</span> </span>
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
  -->
  
  <div class="row">
  	<div class="col-sm-6">
  		<div class="panel panel-default">
  			<div class="panel-heading">
  				<i class="clip-bars"></i>
  				Pemohon berdasarkan Wilayah Tahun 2019  				<div class="panel-tools">
  					<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
  					</a>
  				</div>
  			</div>
  			<div class="panel-body">
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
  				Pemohon berdasar tempat pendaftaran tahun 2019  				<div class="panel-tools">
  					<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
  					</a>
  				</div>
  			</div>
  			<div class="panel-body">
  				<div class="panel-body">
  					<div class="flot-small-container">
  						<div id="placeholder7" class="flot-placeholder"></div>
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
  				Peringkat Realisasi Investasi PMDN NON SPIPISE Tahun 2019  				<div class="panel-tools">
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
  								<td class="right">2,147,483,647</td>
  								
  							</tr>
  						  							<tr>
  								<td class="center">2</td>
  								<td>KAB. SUKABUMI</td>
  								<td class="right">0</td>
  								
  							</tr>
  						  							<tr>
  								<td class="center">3</td>
  								<td>KAB. PANGANDARAN</td>
  								<td class="right">0</td>
  								
  							</tr>
  						  							<tr>
  								<td class="center">4</td>
  								<td>KAB. MAJALENGKA</td>
  								<td class="right">0</td>
  								
  							</tr>
  						  							<tr>
  								<td class="center">5</td>
  								<td>KAB. KENDAL</td>
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
  				Peringkat Penyerapan Tenaga Kerja PMDN NON SPIPISE Tahun 2019  				<div class="panel-tools">
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
  								<td>KAB. BOGOR</td>
  								<td class="right">25</td>
  								
  							</tr>
  						  							<tr>
  								<td class="center">2</td>
  								<td>KAB. SUKABUMI</td>
  								<td class="right">0</td>
  								
  							</tr>
  						  							<tr>
  								<td class="center">3</td>
  								<td>KAB. PANGANDARAN</td>
  								<td class="right">0</td>
  								
  							</tr>
  						  							<tr>
  								<td class="center">4</td>
  								<td>KAB. MAJALENGKA</td>
  								<td class="right">0</td>
  								
  							</tr>
  						  							<tr>
  								<td class="center">5</td>
  								<td>KAB. KENDAL</td>
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
  				Peringkat Jumlah Proyek PMDN NON SPIPISE Tahun 2019  				<div class="panel-tools">
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
  								<td class="right">2,147,483,647</td>
  								
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
  								<td>KOTA ADM. JAKARTA SELATAN</td>
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
  						Performa Pelayanan Izin per Bidang Tahun 2019  						<div class="panel-tools">
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
  												<strong>48</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>28.9 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>15.6 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="78.95"><span class="percent">78.95</span> </span>
  													Izin yang tidak sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="cpu number" data-percent="21.05"> <span class="percent">21.05</span> </span>
  													Izin yang sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<strong> Status </strong>
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  												<strong>198</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>33.9 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>22.9 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="40.91"><span class="percent">40.91</span> </span>
  													Izin yang tidak sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="cpu number" data-percent="59.09"> <span class="percent">59.09</span> </span>
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
  												<strong>773</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>36 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>17.4 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="100"><span class="percent">100</span> </span>
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
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  												<strong>94</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>10.1 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>7 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="100"><span class="percent">100</span> </span>
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
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  												<strong>230</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>10.8 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>8.3 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="8.85"><span class="percent">8.85</span> </span>
  													Izin yang tidak sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="cpu number" data-percent="91.15"> <span class="percent">91.15</span> </span>
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
  												<strong>27</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>41.8 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>35.4 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="28"><span class="percent">28</span> </span>
  													Izin yang tidak sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="cpu number" data-percent="72"> <span class="percent">72</span> </span>
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
  												<strong>6973</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>20.9 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>15.8 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="100"><span class="percent">100</span> </span>
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
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  												<strong>350</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>18.5 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>13.1 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="88.34"><span class="percent">88.34</span> </span>
  													Izin yang tidak sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="cpu number" data-percent="11.66"> <span class="percent">11.66</span> </span>
  													Izin yang sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<strong> Status </strong>
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  												<strong>1</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>28 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>18 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="100"><span class="percent">100</span> </span>
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
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  												<strong>662</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>20.3 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>13.7 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="100"><span class="percent">100</span> </span>
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
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  												<strong>36</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>56.9 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>41.4 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="55.17"><span class="percent">55.17</span> </span>
  													Izin yang tidak sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="cpu number" data-percent="44.83"> <span class="percent">44.83</span> </span>
  													Izin yang sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<strong> Status </strong>
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  												<strong>3592</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>45.4 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>34.7 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="99.75"><span class="percent">99.75</span> </span>
  													Izin yang tidak sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="cpu number" data-percent="0.25"> <span class="percent">0.25</span> </span>
  													Izin yang sesuai Pergub
  												</div>
  											</div>
  											<div class="col-sm-4">
  												<strong> Status </strong>
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  												<strong>11</strong> Izin yang masuk <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>21.3 Hari</strong> Rata - rata Durasi <br /> <br />
  											</div>
  											<div class="col-sm-4">
  												<strong>11.4 Hari</strong> Rata -rata Durasi sesuai Pergub
  											</div>
  										</div>
  										<div class="row">
  											<div class="col-sm-4">
  												<div class="easy-pie-chart">
  													<span class="bounce number" data-percent="100"><span class="percent">100</span> </span>
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
  												<span class="badge badge-danger"><i class="clip-close-2"></i></span>
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
  	</div>
  </div>-->
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