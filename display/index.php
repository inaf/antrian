<?php 

	include "../sambungan/Jx4CtnGzNFhXfKff.php";
	$tampil = mysqli_query($koneksi, "SELECT * FROM tabdeposito");

	//Alamat Website
	$CariDataWeb = mysqli_query($koneksi, "SELECT * FROM identitas");
	$HasilCariDataWeb = mysqli_fetch_array($CariDataWeb);
	$TampilHasilCariDataWebNamaWeb = $HasilCariDataWeb["nama_website"];
	$TampilHasilCariDataWebUrlWebAdmin = $HasilCariDataWeb["alamat_admin"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Display Antrian Kospin Surya Kencana</title>
	<!-- Bootstrap CSS file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
		
		body {
			background-color:#17a2b8;
			width: auto;
		}
		
		$blue: #DDEDFF;
		$dark-blue: #0087FF;
		
		$yellow: #FEF0B2;
		$dark-yellow: #FFBD00; 

		$pink: #FAD2E1;
		$dark-pink: #F84F7F;

		$purple: #DFCCFF;
		$dark-purple: #7F51F4;

		@mixin color-panel($color1, $color2){
			border: 1px solid $color2;
			background-color: $color1;
			color: $color2;
		}

		h4 {
			margin-bottom:2rem;
			margin-top: 3rem;
		}

		.panel {
			border-radius: 0.1rem;
			padding: 1rem;
			margin-bottom: 0.1rem;

			&.panel-blue {
				@include color-panel($blue, $dark-blue);
			}

			&.panel-yellow{
				@include color-panel($yellow, $dark-yellow);
			}

			&.panel-pink{
				@include color-panel($pink, $dark-pink);
			}

			&.panel-purple {
				@include color-panel($purple, $dark-purple);
			}
		}
		
		/* Table */

		.table-wrapper {
				-webkit-overflow-scrolling: touch;
				overflow-x: auto;
		}

		table { 
			width: 100%; 
			table-layout: fixed;
			border-collapse: collapse; 
			margin: 0 auto;
			background: #FFFFFF;
		}

		/* Zebra striping */
		tr:nth-of-type(odd) { 
			background: #f2f2f2; 
		}

		th { 
			background: #ffba00; 
			color: #fff; 
			/*font-weight: 600;*/ 
		}

		td, th { 
			padding: 12px; 
			border: 1px solid #ccc; 
			text-align: left; 
			text-align: center
		}

		/* Table Mobile View */
		@media 
		only screen and (max-width: 760px){
			td, tr { 
				display: block; 
			}

			/* Hide table headers (but not display: none;, for accessibility) */
			thead tr { 
				position: absolute;
				top: -9999px;
				left: -9999px;
			}

			tr {
				/*border: 1px solid #E74C3C;*/
				border: 1px; 
			}

			tr + tr{
				margin-top: 1.5em;
			}

			td { 
				/* make like a "row" */
				border: none;
				border-bottom: 1px solid #eee; 
				position: relative;
				padding-left: 50%; 
				/* background-color: #F8D9D5; */
				text-align: left; 
			}

			td:before { 
				content: attr(data-label);
				font-weight: 800;
				display: inline-block;
				line-height: 1.5;
				margin-left: -100%;
				width: 100%;
				white-space: nowrap;
			}

			td:before, td:before ~ td {
				background-color: #ffba00;
			}

			td:hover, td:hover ~ td {
			  background-color: #ffba00;
			  color: #fff;
			}
		}
	</style>
</head>
<body>
	
	<div class="container">
		
		<!-- JUDUL -- //// -->
		<div class="row">
			<div class="col">
				<div class="panel panel-blue"><center><h1 class="text-light" style="font-family: 'Anton', sans-serif;">SELAMAT DATANG, DI KOSPIN SURYA KENCANA</h1><h3 class="text-light" style="font-family: 'Anton', sans-serif;"></h3></center></div>
			</div>
		</div>
		
		<!-- ANTRIAN CONTENT -- //// -->
		<div class="row">
			<div class="col">
				<div class="panel panel-purple">				
					<div class="card border-info mx-sm-1 p-0">
		                <div class="text-info text-center mt-2" style="font-size: 48px; font-family: 'Anton', sans-serif;" id="respon_administrasi">A 9999</div>
		                <div class="text-info text-center mt-2" style="font-size: 18px; font-family: 'Anton', sans-serif;">LOK 1 INFO</div>
		            </div>				
				</div>
			</div>
			<div class="col">
				<div class="panel panel-purple">				
		            <div class="card border-success mx-sm-1 p-0">
		                <div class="text-success text-center mt-2" style="font-size: 48px; font-family: 'Anton', sans-serif;" id="respon_transaksi">B 9999</div>
		                <div class="text-success text-center mt-2" style="font-size: 18px; font-family: 'Anton', sans-serif;">LOK 2 CAIR</div>
		            </div>					
				</div>
			</div>
			<div class="col">
				<div class="panel panel-purple">				
		            <div class="card border-danger mx-sm-1 p-0">
		                <div class="text-danger text-center mt-2" style="font-size: 48px; font-family: 'Anton', sans-serif;" id="respon_pencairan">C 9999</div>
		                <div class="text-danger text-center mt-2" style="font-size: 18px; font-family: 'Anton', sans-serif;">LOK 3 TRX</div>
		            </div>				
				</div>
			</div>
			<div class="col">
				<div class="panel panel-purple">				
		            <div class="card border-warning mx-sm-1 p-0">
		                <div class="text-warning text-center mt-2" style="font-size: 48px; font-family: 'Anton', sans-serif;" id="">D 9999</div>
		                <div class="text-warning text-center mt-2" style="font-size: 18px; font-family: 'Anton', sans-serif;">LOK 4 LAIN</div>
		            </div>					
				</div>
			</div>
		</div>
		
		<!--  CONTENT -- //// -->	
		<div class="row">
			<div class="col">
				<div class="panel panel-blue">
					<center>
						<h5 class="text-light">TABEL BUNGA DEPOSITO</h5>
						
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th width="350px">NILAI SIMPANAN BERJANGKA (JUTA)</th>
										<th>01 BLN (%)</th>
										<th>03 BLN (%)</th>
										<th>06 BLN (%)</th>
										<th>12 BLN (%)</th>
										<th>24 BLN (%)</th>
									</tr>
								</thead>
								<tbody style="font-family: 'Anton', sans-serif;">
									<?php while($log = mysqli_fetch_array($tampil)) { ?>
									<tr>
										<td data-label="Nilai SB"><?php echo $log['keterangan'] ?></td>
										<td data-label="Jw-01 (%)" align="center"><?php echo $log['jw01'] ?> %</td>
										<td data-label="Jw-03 (%)" align="center"><?php echo $log['jw03'] ?> %</td>
										<td data-label="Jw-06 (%)" align="center"><?php echo $log['jw06'] ?> %</td>
										<td data-label="Jw-12 (%)" align="center"><?php echo $log['jw12'] ?> %</td>
										<td data-label="Jw-24 (%)" align="center"><?php echo $log['jw24'] ?> %</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						
						<h5 class="text-light">UPDATE 01 MARET 2021, BUNGA DAPAT BERUBAH SEWAKTU WAKTU SESUAI KETENTUAN.</h5>
					</center>
				</div>
			</div>
		</div>
		
		<!-- RUNNING TEXT -- //// -->		
		<div class="row">
			<div class="col">
				<div class="panel panel-blue">
					<marquee loop="infinite" class="text-light" style="font-size: 20px; /*font-family: 'Anton', sans-serif;*/">
						<?php
							$sql = mysqli_query($koneksi, "SELECT  id, isi_text FROM running_text");
								while ($r = mysqli_fetch_array($sql)) {
									echo "$r[isi_text]";
								}
						?>
					</marquee>					
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>	
    <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function() {
				$("h3").load("data.php");
			}, 1000);
		});
    </script>
    <script>	
        $(document).ready( function () {
            $("#respon_administrasi").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/respon_administrasi.php"; ?>");
            var refreshId = setInterval(function() {
                $("#respon_administrasi").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/respon_administrasi.php"; ?>");
            }, 2000);
            $.ajaxSetup({
                cache: false
            });
        });		

        $(document).ready( function () {
            $("#loket_administrasi").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/loket_administrasi.php"; ?>");
            var refreshId = setInterval(function() {
                $("#loket_administrasi").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/loket_administrasi.php"; ?>");
            }, 2000);
            $.ajaxSetup({
                cache: false
            });
        });

        $(document).ready(function() {
            $("#respon_transaksi").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/respon_transaksi.php"; ?>");
            var refreshId = setInterval(function() {
                $("#respon_transaksi").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/respon_transaksi.php"; ?>");
            }, 2000);
            $.ajaxSetup({
                cache: false
            });
        });

        $(document).ready(function() {
            $("#loket_transaksi").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/loket_transaksi.php"; ?>");
            var refreshId = setInterval(function() {
                $("#loket_transaksi").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/loket_transaksi.php"; ?>");
            }, 2000);
            $.ajaxSetup({
                cache: false
            });
        });

        $(document).ready(function() {
            $("#respon_pencairan").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/respon_pencairan.php"; ?>");
            var refreshId = setInterval(function() {
                $("#respon_pencairan").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/respon_pencairan.php"; ?>");
            }, 2000);
            $.ajaxSetup({
                cache: false
            });
        });

        $(document).ready(function() {
            $("#loket_pencairan").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/loket_pencairan.php"; ?>");
            var refreshId = setInterval(function() {
                $("#loket_pencairan").load("<?php echo "$TampilHasilCariDataWebUrlWebAdmin/respon/loket_pencairan.php"; ?>");
            }, 2000);
            $.ajaxSetup({
                cache: false
            });
        });

        //set timezone
        <?php date_default_timezone_set('Asia/Jakarta'); ?>
        //buat object date berdasarkan waktu di server
        var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //hitung selisih
        var Diff = serverTime.getTime() - clientTime.getTime();    
        //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
        function displayServerTime(){
            //buat object date berdasarkan waktu di client
            var clientTime = new Date();
            //buat object date dengan menghitung selisih waktu client dan server
            var time = new Date(clientTime.getTime() + Diff);
            //ambil nilai jam
            var sh = time.getHours().toString();
            //ambil nilai menit
            var sm = time.getMinutes().toString();
            //ambil nilai detik
            var ss = time.getSeconds().toString();
            //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
            document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
        }
    </script>

</body>
</html>