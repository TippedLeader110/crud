<?php include '../mysql/connectMYSQL.php'; ?>
<?php include '../mysql/getKomentar.php'; ?>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>No.</th><th>Komentar</th><th>Nama</th>
		</tr>
		<?php $result1 = $result->fetch_all(MYSQLI_ASSOC); ?>
		<?php foreach ($result1 as $key => $value): ?>
			<tr>
				<td><?php echo $value->id_komen ?></td>
				<td><?php echo $value->komentar ?></td>
				<td><?php echo $value->nama ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
<?php $conn->close(); ?>