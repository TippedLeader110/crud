<?php include '../mysql/connectMYSQL.php'; ?>
<?php include '../mysql/getKomentar.php'; ?>
<?php 
$dataketik = $_GET['query'];
$query  = $conn->query("SELECT * FROM komentar WHERE komentar LIKE '%$dataketik%' ORDER BY komentar DESC");
$result = $query->fetch_all(MYSQLI_ASSOC);
foreach($result as $data) {
    $output['suggestions'][] = [
        'value' => $data['komentar'],
        'komentar'  => $data['komentar']
    ];
}

if (! empty($output)) {
    // Encode ke format JSON.
    echo json_encode($output);
}
 ?>