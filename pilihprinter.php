<html>
    <head>
        <title>Menampilkan List Printer</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript">
            function cetak(){
                var printer = $("#printer").val();
                $.ajax({
                    url : "cetak_langsung.php",
                    type: "POST",
                    data : "nama_printer="+printer,
                    success: function(data, textStatus, jqXHR)
                    {
                        alert('Data Sudah DIcetak Ke Printer : '+printer)
                    }
                });


            }
        </script>
    </head>
    <body>
        Silahkan Pilih Printer :
        <?php
			$getprt = printer_list(PRINTER_ENUM_LOCAL);
			$printers = serialize($getprt);
			$printers = unserialize($printers);
			//Menampilkan List Printer
			echo '<select name="printers" id="printer">';
			foreach ($printers as $PrintDest)
				echo "<option value='" . $PrintDest["NAME"] . "'>" . explode(",", $PrintDest["DESCRIPTION"])[1] . "</option>";
			echo '</select>';
        ?>
        <br>
        <button type="submit" onClick="cetak()">Cetak Data</button>
    </body>
</html>