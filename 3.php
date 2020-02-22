<form action="" method="POST">
	<table>
		<tr>
			<td>Masukkan Nilai</td>
			<td>:</td>
			<td><input type="text" name="nilai" placeholder="Masukkan Nilai" required></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="TAMPILKAN"></td>
		</tr>
	</table>
</form>


<?php

	if (isset($_POST['submit'])) {
		$nilai = $_POST['nilai'];

        if (is_numeric ($nilai) == TRUE){
            for ($i= 1; $i <= $nilai; $i++) { 
                if($i % 3 && $i % 7 == 0){
                    echo "arkademy <br>";
                }elseif($i % 3 == 0) {
                    echo "arka <br>";
                }elseif ($i % 7 == 0 ){
                    echo "demy <br>";
                }
                else {
                    echo $i . "<br>";
                }
                
            }
        }
        else{
            echo "input harus angka!";
        }
    }
   
?>

