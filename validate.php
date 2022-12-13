<?php
    //panggil file config.php untuk menghubung ke server
    include('config.php');
    
		$bagian         = $_POST['bagian'];
		$nik 						= $_POST['nik'];
    $nama           = $_POST['nama'];
    $email          = $_POST['email'];
    $tlp            = $_POST['tlp'];

    $ekstensi_diperbolehkan	= array('pdf');
    
    $namafile = $_FILES['fileupload']['name'];
		$x = explode('.', $namafile);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['fileupload']['size'];
    $file_tmp = $_FILES['fileupload']['tmp_name'];
		$q = mysqli_query($connect, "SELECT * FROM applicants WHERE nik='$nik'");
		if(mysqli_num_rows($q) >= 1){
			header('location:index.php?message=duplicate');
			return false;
		}else if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 5044070){
			$lokasi = 'files/'.$bagian.'-'.$nama.'.'.$ekstensi;
            move_uploaded_file($file_tmp,$lokasi);
			$query = mysqli_query($connect,"INSERT INTO applicants VALUES(NULL,'$nik', '$bagian', '$nama', '$email', '$tlp', '$lokasi','0',NULL,now(),NULL)");
			if($query){
				header('location:index.php?message=success');
				return false;
			}else{
				header('location:index.php?message=gagal');
				return false;
			}
		    }else{
				header('location:index.php?error=1');
				return false;
		    }
	    }else{
		    header('location:index.php?error=2');
			return false;
	}
?>