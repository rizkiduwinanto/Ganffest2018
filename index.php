<?php
	include ('db.php');
	if(isset($_POST['finish'])){
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
		$fotodiri_path = "../fotodiri";
		$fotoident_temp = $_FILES['fotoident']['tmp_name'];
		$fotoident_name = $db->real_escape_string($_FILES['fotoident']['name']);
		$fotoident_type = $_FILES['fotoident']['type'];
		$fotoident_path = "../fotoident";

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
		$photo_path = "../photo";
		$poster_temp = $_FILES['poster']['tmp_name'];
		$poster_name = $db->real_escape_string($_FILES['poster']['name']);
		$poster_type = $_FILES['poster']['type'];
		$poster_path = "../poster";

		move_uploaded_file($photo_name, $photo_path);
		move_uploaded_file($poster_name, $poster_path);
		move_uploaded_file($fotoident_name, $fotoident_path);
		move_uploaded_file($fotodiri_name, $fotodiri_path);

		$db->query('SET foreign_key_checks = 0');

		$InsertSutradara = $db->query("INSERT INTO Sutradara(Nama_Lengkap, Email, No_Telp, Alamat, Kota, Provinsi, Kodepos, Biografi) VALUES('$name', '$email', '$no_telp', '$alamat', '$kota', '$provinsi', '$kodepos', '$biografi');");
		$ID_Sutradara = $db->insert_id;

		$InsertProduser = $db->query("INSERT INTO Produser(Nama_Lengkap, Email, No_Telp, Nama_PH, Alamat_PH, Kota_PH, Provinsi_PH, No_Telp_PH) VALUES('$name_prod', '$email_prod', '$no_telp_prod', '$name_ph', '$alamat_ph', '$kota_ph', '$provinsi_ph', '$no_telp_ph');");
		$ID_Produser = $db->insert_id;

		$InsertFilm = $db->query("INSERT INTO Film(Judul, Tahun, Durasi, Bahasa, Bersuara, Festival, Award, Sinopsis, Link, ID_Sutradara, ID_Produser) VALUES('$judul', $tahun, $durasi, '$bahasa', '$bersuara', '$festival', '$award', '$sinopsis', '$link', $ID_Sutradara, $ID_Produser);");
		$ID_Film = $db->insert_id;


		if($InsertSutradara === false || $InsertFilm==false || $InsertProduser==false){
			$message = 'Error: ' . $db->error ;
		}else{
			$message =  'Your data has been submitted, will catch you up for the next announcement!';
		}

		$db->query('SET foreign_key_checks = 1');
	}
?>
<html>
<head>


<link rel="stylesheet" href="css\style.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
function validate() {
	var output = true;
	$(".formError").html('');
	if($("#sutradara-field").css('display') != 'none') {
		if(!($("#name").val())) {
			output = false;
			$("#name-error").html("Nama required!");
		}
		if(!($("#email").val())) {
			output = false;
			$("#email-error").html("Email required!");
		}
		if(!($("#no_telp").val())) {
			output = false;
			$("#no-telp-error").html("Nomor Telepon required!");
		}
		if(!($("#alamat").val())) {
			output = false;
			$("#alamat-error").html("Alamat required!");
		}
		if(!($("#kota").val())) {
			output = false;
			$("#kota-error").html("Kota required!");
		}
		if(!($("#provinsi").val())) {
			output = false;
			$("#provinsi-error").html("Provinsi required!");
		}
		if(!($("#kodepos").val())) {
			output = false;
			$("#kodepos-error").html("Kodepos required!");
		}
		if(!($("#biografi").val())) {
			output = false;
			$("#biografi-error").html("Biografi required!");
		}
		if($("#fotodiri").val()=='') {
			output = false;
			$("#fotodiri-error").html("Foto Diri required!");
		}
		if($("#fotoident").val()=='') {
			output = false;
			$("#fotoident-error").html("Foto Identitas required!");
		}
		if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
			$("#email-error").html("Invalid Email!");
			output = false;
		}
	}
	if($("#produser-field").css('display') != 'none') {
		if(!($("#name_prod").val())) {
			output = false;
			$("#name-prod-error").html("Nama required!");
		}
		if(!($("#email_prod").val())) {
			output = false;
			$("#email-prod-error").html("Email required!");
		}
		if(!($("#no_telp_prod").val())) {
			output = false;
			$("#no-telp-prod-error").html("Nomor Telepon required!");
		}
		if(!($("#name_ph").val())) {
			output = false;
			$("#name-ph-error").html("Name required!");
		}
		if(!($("#alamat_ph").val())) {
			output = false;
			$("#alamat-ph-error").html("Alamat required!");
		}
		if(!($("#kota_ph").val())) {
			output = false;
			$("#kota-ph-error").html("Kota required!");
		}
		if(!($("#provinsi_ph").val())) {
			output = false;
			$("#provinsi-ph-error").html("Provinsi required!");
		}
		if(!($("#no_telp_ph").val())) {
			output = false;
			$("#no-telp-ph-error").html("Nomor Telepon required!");
		}
		if(!$("#email_prod").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
			$("#email-prod-error").html("Invalid Email!");
			output = false;
		}
	}
	if($("#film-field").css('display') != 'none') {
		if(!($("#judul").val())) {
			output = false;
			$("#judul-error").html("Judul required!");
		}
		if(!($("#tahun").val())) {
			output = false;
			$("#tahun-error").html("Tahun required!");
		}
		if(!($("#durasi").val())) {
			output = false;
			$("#durasi-error").html("Durasi required!");
		}
		if(!($("#bahasa").val())) {
			output = false;
			$("#bahasa-error").html("Bahasa required!");
		}
		if(!($("#bersuara").val())) {
			output = false;
			$("#bersuara-error").html("Bersuara required!");
		}
		if(!($("#festival").val())) {
			output = false;
			$("#festival-error").html("Festival required!");
		}
		if(!($("#award").val())) {
			output = false;
			$("#award-error").html("Award required!");
		}
		if(!($("#sinopsis").val())) {
			output = false;
			$("#sinopsis-error").html("Sinopsis required!");
		}
		if(!($("#link").val())) {
			output = false;
			$("#link-error").html("Link required!");
		}
		if(!($("#photo").val())) {
			output = false;
			$("#photo-error").html("Still Photo required!");
		}
	}
	if($("#agreement-field").css('display') != 'none') {
		var all_checkboxes = $('#agreement-field input[type="checkbox"]');
		if (all_checkboxes.length === all_checkboxes.filter(":checked").length) {

		} else {
			output = false;
			$("#checkbox-error").html("Still Photo required!");
		}
	}
	return output;
}
$(document).ready(function() {
	$("#next").click(function(){
		var output = validate();
		if(output) {
			var current = $(".active");
			var next = $(".active").next("li");
			if(next.length>0) {
				$("#"+current.attr("id")+"-field").hide();
				$("#"+next.attr("id")+"-field").show();
				$("#back").show();
				$("#finish").hide();
				$(".active").removeClass("active");
				next.addClass("active");
				if($(".active").attr("id") == $("li").last().attr("id")) {
					$("#next").hide();
					$("#finish").show();
				}
			}
		}
	});
	$("#back").click(function(){
		var current = $(".active");
		var prev = $(".active").prev("li");
		if(prev.length>0) {
			$("#"+current.attr("id")+"-field").hide();
			$("#"+prev.attr("id")+"-field").show();
			$("#next").show();
			$("#finish").hide();
			$(".active").removeClass("active");
			prev.addClass("active");
			if($(".active").attr("id") == $("li").first().attr("id")) {
				$("#back").hide();
			}
		}
	});
	$("#finish").submit(function(e){
		var output = validate();
		if (!output){
			e.preventDefault();
			return false;
		}
	});
});
</script>
</head>
<body>
<h1>Form Pendaftaran Ganffest 2018</h1>

<div class="message"><?php if(isset($message)) echo $message; ?></div>
<ul id="pendaftaran-step">
	<li id="sutradara">Sutradara</li>
	<li id="produser">Produser</li>
	<li id="film">Film</li>
	<li id="agreement" class="active">Agreement</li>
</ul>
<form name="form_pendaftaran" id="pendaftaran-form" method="post" enctype="multipart/form-data">
	<div id="sutradara-field" style="display:none;">
		<label>Nama Lengkap</label><span id="name-error" class="formError"></span>
		<div><input type="text" name="name" id="name" class="demoInputBox"/></div>
		<label>Email</label><span id="email-error" class="formError"></span>
		<div><input type="text" name="email" id="email" class="demoInputBox" /></div>
		<label>Nomor Telepon</label><span id="no-telp-error" class="formError"></span>
		<div><input type="text" name="no_telp" id="no_telp" class="demoInputBox" /></div>
		<label>Alamat</label><span id="alamat-error" class="formError"></span>
		<div><input type="text" name="alamat" id="alamat" class="demoInputBox" /></div>
		<label>Kota/Kabupaten</label><span id="kota-error" class="formError"></span>
		<div><input type="text" name="kota" id="kota" class="demoInputBox" /></div>
		<label>Provinsi</label><span id="provinsi-error" class="formError"></span>
		<div><input type="text" name="provinsi" id="provinsi" class="demoInputBox" /></div>
		<label>Kode Pos</label><span id="kodepos-error" class="formError"></span>
		<div><input type="text" name="kodepos" id="kodepos" class="demoInputBox" /></div>
		<label>Biografi</label><span id="biografi-error" class="formError"></span>
		<div><textarea rows="4" name="biografi" id="biografi" placeholder="Tulis biografi singkat" class="demoInputBox"></textarea></div>
		<label>Foto Diri</label><span id="fotodiri-error" class="formError"></span>
		<div><input type="file" name="fotodiri" id="fotodiri"></div>
		<label>Foto Identitas</label><span id="fotoident-error" class="formError"></span>
		<div><input type="file" name="fotoident" id="fotoident"></div>
	</div>
	<div id="produser-field"  style="display:none;">
		<label>Nama Lengkap</label><span id="name-prod-error" class="formError"></span>
		<div><input type="text" name="name_prod" id="name_prod" class="demoInputBox"/></div>
		<label>Email</label><span id="email-prod-error" class="formError"></span>
		<div><input type="text" name="email_prod" id="email_prod" class="demoInputBox" /></div>
		<label>Nomor Telepon</label><span id="no-telp-prod-error" class="formError"></span>
		<div><input type="text" name="no_telp_prod" id="no_telp_prod" class="demoInputBox" /></div>
		<label>Nama Rumah Produksi</label><span id="name-ph-error" class="formError"></span>
		<div><input type="text" name="name_ph" id="name_ph" class="demoInputBox" /></div>
		<label>Alamat Rumah Produksi</label><span id="alamat-ph-error" class="formError"></span>
		<div><input type="text" name="alamat_ph" id="alamat_ph" class="demoInputBox" /></div>
		<label>Kota</label><span id="kota-ph-error" class="formError"></span>
		<div><input type="text" name="kota_ph" id="kota_ph" class="demoInputBox" /></div>
		<label>Provinsi</label><span id="provinsi-ph-error" class="formError"></span>
		<div><input type="text" name="provinsi_ph" id="provinsi_ph" class="demoInputBox" /></div>
		<label>Nomor Telepon Rumah Produksi</label><span id="no-telp-ph-error" class="formError"></span>
		<div><input type="text" name="no_telp_ph" id="no_telp_ph" class="demoInputBox" /></div>
	</div>
	<div id="film-field"  style="display:none;">
		<label>Judul</label><span id="judul-error" class="formError"></span>
		<div><input type="text" name="judul" id="judul" class="demoInputBox" /></div>
		<label>Tahun Produksi</label><span id="tahun-error" class="formError"></span>
		<div><input type="year" name="tahun" id="tahun" class="demoInputBox" /></div>
		<label>Durasi (menit)</label><span id="durasi-error" class="formError"></span>
		<div><input type="number" name="durasi" id="durasi" class="demoInputBox" /></div>
		<label>Bahasa</label><span id="bahasa-error" class="formError"></span>
		<div><input type="text" name="bahasa" id="bahasa" class="demoInputBox" /></div>
		<label>Bersuara?</label><span id="bersuara-error" class="formError"></span>
		<div class="radio"><label><input type="radio" id="bersuara" name="bersuara" value="Y">Ya</label></div>
		<div class="radio"><label><input type="radio" id="bersuara" name="bersuara" value="N">Tidak</label></div>
		<label>Riwayat Festival</label><span id="festival-error" class="formError"></span>
		<div><textarea rows="2" name="festival" id="festival" placeholder="Tulis riwayat festival" class="demoInputBox"></textarea></div>
		<label>Riwayat Award</label><span id="award-error" class="formError"></span>
		<div><textarea rows="2" name="award" id="award" placeholder="Tulis riwayat award" class="demoInputBox"></textarea></div>
		<label>Sinopsis</label><span id="sinopsis-error" class="formError"></span>
		<div><textarea rows="4" name="sinopsis" id="sinopsis" placeholder="Tulis sinopsis" class="demoInputBox"></textarea></div>
		<label>Link Preview (minimal 720p, jika offline ketik offline)</label><span id="link-error" class="formError"></span>
		<div><input type="text" name="link" id="link" class="demoInputBox" /></div>
		<label>Still Photo</label><span id="photo-error" class="formError"></span>
		<div><input type="file" name="photo" id="photo"></div>
		<label>Poster/Artwork, Jika ada</label>
		<div><input type="file" name="poster" id="poster"></div>
	</div>
	<div id="agreement-field">
		<label class="special" >Persetujuan Ganffest</label><span id="checkbox-error" class="formError"></span>
			<input type="checkbox" name="agreement" id="c1" value="1" class="chckBox"> Saya mengetahui secara sadar dan menyetujui semua syarat dan ketentuan pendaftaran Ganesha Film Festival 2018[*]<br>
			<input type="checkbox" name="agreement" id="c2" value="2" class="chckBox"> Saya mengisi formulir pendaftaran Ganesha Film Festival 2018 dengan data yang sebenarnya, bersedia berpartisipasi dalam Calling Entry Ganesha Film Festival 2018, dan mematuhi segala peraturan serta kesepakatan di dalamnya. [*]<br>
			<input type="checkbox" name="agreement" id="c3" value="3" class="chckBox"> Saya menyetujui film yang saya submit ke Ganesha Film Festival 2018 dapat menjadi database film milik Liga Film Mahasiswa ITB [*]<br>
			<input type="checkbox" name="aggrement" id="c4" value="4" class="chckBox"> Saya menyetujui sebagian/seluruh dari clip film pendek, still photo, poster, dan trailer dapat dipakai oleh Liga Film Mahasiswa ITB untuk kepentingan promosi ganffest 2018 dan setelahnya, dengan catatan Liga Film Mahasiswa ITB akan membicarakan lebih detail penggunaan dan izin filmnya terlebih dahulu kepada sutradara atau produser. [*]<br>
			<input type="checkbox" name="agreement" id="c5" value="5" class="chckBox"> Saya menyetujui film yang saya submit dan masuk ke dalam Official Selection atau program lain dari Ganesha Film Festival 2018 dapat dimasukkan ke dalam DVD Kompilasi Ganesha Film Festival 2018 yang akan didistribusikan kepada komunitas atau organisasi film. [*]<br>
			<input type="checkbox" name="agreement" id="c6" value="6" class="chckBox"> Saya menyetujui film yang saya submit ke Ganesha Film Festival 2018 dapat digunakan Liga Film Mahasiswa ITB untuk pemutaran internal atau eksternal. Dengan catatan, Liga Film Mahsiswa ITB akan membicarakan lebih detil penggunaan dan izin filmnya terlebih dahulu kepada sutradara/produser. [*]<br>
	</div>
	<div>
		<input class="btnAction" type="button" name="back" id="back" value="Back" >
		<input class="btnAction" type="button" name="next" id="next" value="Next" style="display:none;">
		<input class="btnAction" type="submit" name="finish" id="finish" value="Finish" >
	</div>
</form>
</body>
</html>