<?php
	include ('db.php');
	if(isset($_POST['submit'])){
		$name 		= $db->real_escape_string($_POST['name']);
		$email 		= $db->real_escape_string($_POST['email']);
		$no_telp  = $db->real_escape_string($_POST['no_telp']);
		$alamat  = $db->real_escape_string($_POST['alamat']);
		$kota  = $db->real_escape_string($_POST['kota']);
		$provinsi  =$db->real_escape_string($_POST['provinsi']);
		$kodepos  = $db->real_escape_string($_POST['kodepos']);
		$biografi  = $db->real_escape_string($_POST['biografi']);
		$fotodiri_temp = $_FILES['fotodiri']['tmp_name'];
		$fotodiri_name = $db->real_escape_string($_FILES['fotodiri']['name']);
		$fotodiri_type = $_FILES['fotodiri']['type'];
		$fotoident_temp = $_FILES['fotoident']['tmp_name'];
		$fotoident_name = $db->real_escape_string($_FILES['fotoident']['name']);
		$fotoident_type = $_FILES['fotoident']['type'];

		$name_prod = $db->real_escape_string($_POST['name_prod']);
		$email_prod = $db->real_escape_string($_POST['email_prod']);
		$no_telp_prod = $db->real_escape_string($_POST['no_telp_prod']);
		$name_ph = $db->real_escape_string($_POST['name_ph']);
		$alamat_ph = $db->real_escape_string($_POST['alamat_ph']);
		$kota_ph = $db->real_escape_string($_POST['kota_ph']);
		$provinsi_ph = $db->real_escape_string($_POST['provinsi_ph']);
		$no_telp_ph = $db->real_escape_string($_POST['no_telp_ph']);

		$judul = $db->real_escape_string($_POST['judul']);
		$tahun = $_POST['tahun'];
		$durasi = $_POST['durasi'];
		$bahasa = $db->real_escape_string($_POST['bahasa']);
		$bersuara = $db->real_escape_string($_POST['bersuara']);
		$festival = $db->real_escape_string($_POST['festival']);
		$award = $db->real_escape_string($_POST['award']);
		$link = $db->real_escape_string($_POST['link']);
		$sinopsis = $db->real_escape_string($_POST['sinopsis']);
		$photo_temp = $_FILES['photo']['tmp_name'];
		$photo_name = $db->real_escape_string($_FILES['photo']['name']);
		$photo_type = $_FILES['photo']['type'];
		$poster_temp = $_FILES['poster']['tmp_name'];
		$poster_name = $db->real_escape_string($_FILES['poster']['name']);
		$poster_type = $_FILES['poster']['type'];

		move_uploaded_file($photo_temp, "/Photo/Still-" . $judul . '.' . 'jpeg');
		move_uploaded_file($poster_temp, "/Poster/Poster-" . $judul . '.' . 'jpeg');
		move_uploaded_file($fotoident_temp, "/Ident/Ident-" . $name . '.' . 'jpeg');
		move_uploaded_file($fotodiri_temp, "/Diri/Diri-" . $name . '.' . 'jpeg');

		$db->query('SET foreign_key_checks = 0');

		$InsertSutradara = $db->query("INSERT INTO sutradara(Nama_Lengkap, Email, No_Telp, Alamat, Kota, Provinsi, Kodepos, Biografi) VALUES('$name', '$email', '$no_telp', '$alamat', '$kota', '$provinsi', '$kodepos', '$biografi');");
		$ID_Sutradara = $db->insert_id;

		$InsertProduser = $db->query("INSERT INTO produser(Nama_Lengkap, Email, No_Telp, Nama_PH, Alamat_PH, Kota_PH, Provinsi_PH, No_Telp_PH) VALUES('$name_prod', '$email_prod', '$no_telp_prod', '$name_ph', '$alamat_ph', '$kota_ph', '$provinsi_ph', '$no_telp_ph');");
		$ID_Produser = $db->insert_id;

		$InsertFilm = $db->query("INSERT INTO film(Judul, Tahun, Durasi, Bahasa, Bersuara, Festival, Award, Sinopsis, Link, ID_Sutradara, ID_Produser) VALUES('$judul', $tahun, $durasi, '$bahasa', '$bersuara', '$festival', '$award', '$sinopsis', '$link', $ID_Sutradara, $ID_Produser);");
		$ID_Film = $db->insert_id;


		if($InsertSutradara === false || $InsertFilm==false || $InsertProduser==false){
			$message = 'Error: ' . $db->error ;
		}

		$db->query('SET foreign_key_checks = 1');
	}
	header("location: http://www.ganffest.com/thank-you");
	exit;
?>
