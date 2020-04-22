<?php include '../mysql/connectMYSQL.php'; ?>
<?php include '../mysql/getKomentar.php'; ?>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>No.</th><th>Komentar</th><th>Nama</th>
		</tr>
		<?php if ($result->num_rows > 0) { 
		while($row = $result->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $row['id_komen'] ?></td>
				<td><?php echo $row['komentar'] ?></td>
				<td><?php echo $row['nama'] ?></td>
			</tr>
		<?php } 
			}?>
	</table>
</div>
<?php $conn->close(); ?>