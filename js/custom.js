$(document).ready(function($) {
	$('#usernameinfo').hide();
	$('#passwordinfo').hide();
	$('#repass').hide();
});

$('#name').keyup(function(event) {
	var name = $(this).val();
	console.log(name.length);
	if (name.length<6 && name.length>0) {
		$('#usernameinfo').show('fast');
		$('#usernameinfo').html('Username terlalu pendek ( username < 6 )');
		$('#usernameinfo').removeClass('alert-primary');
		$('#usernameinfo').addClass('alert-danger');
	}
	else if(name.length>=6){
		$('#usernameinfo').html('Username dapat digunakan');
		$('#usernameinfo').removeClass('alert-danger');
		$('#usernameinfo').addClass('alert-primary');
	}
	else if(name.length==0){
		$('#usernameinfo').hide('fast');
		$('#usernameinfo').removeClass('alert-danger');
		$('#usernameinfo').removeClass('alert-primary');
	}
});

var temppass = '';

$('#password').keyup(function(event) {
	var pass = $(this).val();
	temppass = pass;
	console.log(pass.length);
	if (pass.length<6 && pass.length>0) {
		$('#passwordinfo').show('fast');
		$('#passwordinfo').html('Password terlalu pendek ( password < 6 )');
		$('#passwordinfo').removeClass('alert-primary');
		$('#passwordinfo').addClass('alert-danger');
	}
	else if(pass.length>=6){
		$('#passwordinfo').html('Password dapat digunakan');
		$('#passwordinfo').removeClass('alert-danger');
		$('#passwordinfo').addClass('alert-primary');
	}
	else if(pass.length==0){
		$('#passwordinfo').hide('fast');
		$('#passwordinfo').removeClass('alert-danger');
		$('#passwordinfo').removeClass('alert-primary');
	}
});

$('#passcheck').keyup(function(event) {
	var repass = $(this).val();
	console.log(repass.length);
	if (temppass!=repass && repass.length>0) {
		$('#repass').show('fast');
		$('#repass').html('Password Tidak Sama');
		$('#repass').removeClass('alert-primary');
		$('#repass').addClass('alert-danger');
	}
	else if(temppass==repass) {
		$('#repass').show('fast');
		$('#repass').html('Password Sama');
		$('#repass').removeClass('alert-danger');
		$('#repass').addClass('alert-primary');	
	}
	else if(repass.length==0){
		$('#repass').hide('fast');
		$('#repass').removeClass('alert-danger');
		$('#repass').removeClass('alert-primary');
	}
});

//////////////////////////////////////////////////////////


$('#table').load("page/ajax/komen.php");

	$('#formkomen').submit(function(event) {
		event.preventDefault();
		var nkomen= $('#namakomen').val();
		var komen = $('#komentar').val();
		Swal.fire({
		  title: 'Konfirmasi Komentar?',
		  html: "Nama : " + nkomen + " <br> Komentar : " + komen,
		  icon: 'question',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Ya , Kirim!',
		  cancelButtonText: 'Batal Kirim !!'
		}).then((result) => {
		  if (result.value) {
		    $.ajax({
			url: 'page/mysql/kirimKomentar.php',
			type: 'post',
			data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(data){
            	Swal.fire('Sukses','Komentar telah berhasil di post','success');
				$('#table').load("page/ajax/komen.php").fadeIn('slow');
				console.log("success");	
            },
            error: function(data){
            	Swal.fire('Kesalahan','Terjadi kesalahan!!','error');
				console.log("error");
            }
			})
		  }
		  else{
		  	Swal.fire(
		      'Batal !!',
		      'Mengirim komentar telah di batalkan.',
		      'error'
		    )
		  }
		})
	});


//////////////////////////////////////////////////////////


$('#komencari').autocomplete({
	serviceUrl: 'page/mysql/getAutokomentar.php',
	dataType: 'JSON',
	onSelect: function(f){
		$('#komencari').val("" + f.komentar);
	}
});