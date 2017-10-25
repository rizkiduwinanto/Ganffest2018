<!DOCTYPE html>
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
		if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
			$("#email-error").html("Invalid Email!");
			output = false;
		}
		if(!($("#no_telp").val())) {
			output = false;
			$("#no-telp-error").html("Nomor Telepon required!");
		}
		if(!($("#no_telp").val().match(/[0-9() +-]/g))) {
			output = false;
			$("#no-telp-error").html("Invalid Nomor Telepon");
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
		if(!($("#kodepos").val().match())) {
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
		if(!($("#no_telp_prod").val().match(/[0-9() +-]/g))) {
			output = false;
			$("#no-telp-error").html("Invalid Nomor Telepon");
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
		if(!($("#durasi").val().match())) {
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
		if ($('#agreement-field :checkbox:not(:checked)').length != 0) {
			output = false;
			$("#checkbox-error").html("Checkbox required!");
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
				$("#submit").hide();
				$(".active").removeClass("active");
				next.addClass("active");
				if($(".active").attr("id") == $("li").last().attr("id")) {
					$("#next").hide();
					$("#submit").show();
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
			$("#submit").hide();
			$(".active").removeClass("active");
			prev.addClass("active");
			if($(".active").attr("id") == $("li").first().attr("id")) {
				$("#back").hide();
			}
		}
	});
	$("#submit").click(function(e){
		var output = validate();
		if (!output){
			e.preventDefault();
		}
	});
});
</script>
</head>
<title>Form Pendaftaran Ganffest</title>
<link rel="shorcut icon" href="img\S__9715892.jpg" type="image/jpg"/>
<body>
<h1>Form Pendaftaran Ganffest 2018</h1>

<div class="test-1">
<span id="debug"></span>
<ul id="pendaftaran-step">
	<li id="sutradara"  class="active">Sutradara</li>
	<li id="produser">Produser</li>
	<li id="film">Film</li>
	<li id="agreement">Agreement</li>
</ul>
<form name="form_pendaftaran" id="pendaftaran-form" action="process.php" method="post" enctype="multipart/form-data">
	<div id="sutradara-field" >
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
		<label>Foto Kartu Identitas</label><span id="fotoident-error" class="formError"></span>
		<div><input type="file" name="fotoident" id="fotoident"></div>
	</div>
	<div id="produser-field" style="display:none;">
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
	<div id="film-field" style="display:none;">
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
	<div id="agreement-field" style="display:none;">
			<input type="checkbox" name="agreement" id="c1" value="1" class="chckBox"> Saya mengetahui secara sadar dan menyetujui semua syarat dan ketentuan pendaftaran Ganesha Film Festival 2018[*]<br>
			<input type="checkbox" name="agreement" id="c2" value="2" class="chckBox"> Saya mengisi formulir pendaftaran Ganesha Film Festival 2018 dengan data yang sebenarnya, bersedia berpartisipasi dalam Calling Entry Ganesha Film Festival 2018, dan mematuhi segala peraturan serta kesepakatan di dalamnya. [*]<br>
			<input type="checkbox" name="agreement" id="c3" value="3" class="chckBox">Saya menyetujui sebagian/seluruh dari clip film pendek, still photo, poster, dan trailer dapat dipakai oleh Liga Film Mahasiswa ITB untuk kepentingan promosi Ganesha Film Festival 2018 dan setelahnya, dengan catatan Liga Film Mahasiswa ITB akan membicarakan lebih detail penggunaan dan izin filmnya terlebih dahulu kepada sutradara atau produser. [*]<br>
		<span id="checkbox-error" class="formError"></span>
	</div>
	<div>
		<input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
		<input class="btnAction" type="button" name="next" id="next" value="Next">
		<input class="btnAction" type="submit" name="submit" id="submit" value="Submit" style="display:none;">
	</div>
</form>
</div>
</body>
</html>
