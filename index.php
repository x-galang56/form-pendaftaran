<?php
include "konek.php";
?>
<html>
    <head>
        <title>
            Pendaftaran Online
        </title>
        <style type="text/css">
            body {
                margin: 0px;
                padding: 0px;
            }
            .header {
                width: 100%;
                height: 50px;
                background-color: #333333;
                color: #ffffff;
                font-size: 24px;
                font-weight: bold;
                text-align: center;
                line-height: 50px;
            }
            .content {
                width: 100%;
                padding-top: 50px;
                height: auto;
                background-color: #eee;
                padding-bottom: 50px;
            }
            .footer {
                width: 100%;
                height: 50px;
                background-color: #333333;
                color: #ffffff;
                font-size: 20px;
                text-align: center;
                font-family: arial;
                line-height: 50px;
            }
        </style>
    </head>

    <body>
        <div class="header">
            Penerimaan Siswa Baru
        </div>

        <div class="content">
            <center>Isi Data Anda Di Bawah Ini Dengan Lengkap Dan Seksama!</center>
            <form action="" method="POST">
            <table align="center">
                <tr>
                    <td>Nama Lengkap</td> <td>:</td> <td><input name="nama" type="text"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td> <td>:</td> <td><input name="tempat_lahir" type="text"></td>
                </tr>
                <tr>    
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><select name="tgl">
                    <option>Tgl</option>
                   <?php
				   for ($tgl=1; $tgl<=31; $tgl++) {
				   echo "<option value=".$tgl.">".$tgl."</option>"; }
				   ?>
                    </select>
                    <select name="bln">
                        <option>Bln</option>
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>Apr</option>
                        <option>Mei</option>
                        <option>Jun</option>
                        <option>Jul</option>
                        <option>Ags</option>
                        <option>Sep</option>
                        <option>Okt</option>
                        <option>Nov</option>
                        <option>Des</option>
                        </select>
                        <select name="thn">
                            <option>Thn</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            </select></td>
                </tr>
                <tr>    
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki<input value="Perempuan" type="radio" name="jenis_kelamin">Perempuan</td>
                </tr>
                <tr>    
                    <td>Alamat</td> <td>:</td> <td><input name="alamat" type="text"></td>
                </tr>
                <tr>    
                    <td> &nbsp </td> <td> &nbsp </td> <td><input type="submit" name="submit" value="DAFTAR"> &nbsp <input type="reset" value="RESET"></td>
                </tr>
            </table>
            </form>
			<?php
			if (isset($_POST['submit'])){
			$sql = "INSERT INTO siswa (nama,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat)
			VALUES ('".$_POST['nama']."','".$_POST['tempat_lahir']."','".$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl']."',
			'".$_POST['jenis_kelamin']."','".$_POST['alamat']."')";
			if(mysqli_query($conn,$sql)) {
			echo "Data Berhasil Disimpan";}
			else {
			echo "Data Gagal Disimpan";}}
			?>
            </div>

        <div class="footer">
            Copyright &copy; 2021.
        </div>
    </body>

</html>