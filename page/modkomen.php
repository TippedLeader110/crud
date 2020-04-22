<h2>Moderator Komentar</h2>
	<p class="lead">
		Sejujurnya ada banyak artinya , bisa saja seperti pengelolahan komentar dari admin atau user itu sendiri dapat mengelolah komentar yang dia punya atau juga bisa validasi komentar dimana user sebelum komentar dia memvalidasi komentar nya dahulu sebelum di post.
	</p>
	<h4>Contoh :</h4>
<div id="table">
	
</div>
<hr>
<div>
	<table>
		<form id="formkomen">
		<tr>
			Nama
		</tr>
		<tr>
			<input type="text" name="namakomen" class="form-control form-group" id="namakomen">
		</tr>
		<tr>
			Komentar
		</tr>
		<tr>
			<textarea class="form-control form-group" id="komentar" name="komentar"></textarea>
		</tr>
		<tr>
			<button type="submit" class="btn btn-outline-primary">Kirim</button>
		</tr>
		</form>
	</table>
	
</div>

<script type="text/javascript">
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
</script>