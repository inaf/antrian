<?php

	//function start lagi
	session_start();
	
	//hancurkan session
	session_unset();
	session_destroy();

?>
<link rel="stylesheet" href="plugins/sweetalert/sweetalert.css">
<link rel="stylesheet" type="text/css" href="assets/css/loginv1.main.css">
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
	
	setTimeout(function () {
		swal({
			title: 'Yes!',
			text: 'ANDA BERHASIL, LOGOUT!',
			icon: 'success',
			timer: 3000,
			showConfirmButton: true
		});
	},10);

	window.setTimeout(function(){
		window.location.replace('login.html');
	} ,3000);

</script>