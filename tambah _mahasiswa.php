<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'tedc');
$program_studi = $mysqli->query("SELECT * from studi_programs");
if (isset($_POST['NIM']) && isset($_POST['NAMA'])) {
    $nim = $_POST['NIM'];
    $nama = $_POST['NAMA'];
    $prodi = $_POST['PRODI'];

    $insert = $mysqli->query("INSERT INTO students(NIM, NAMA, STUDY_PROGRAM_ID) VALUES ('$nim', '$nama', $prodi)");
    if ($insert) {
        $_SESSION['success'] = true;
        $_SESSION['message'] = 'Data Berhasil DiTAMBAHKAN';
        header("Location: mahasiswa.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form method="POST">
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="NIM" name="NIM">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="NAMA" name="NAMA">
    </div>
    <div class="mb-3">
        <label for="PRODI" class="form-label">Prodi</label>
        <select class="form-select" id="PRODI" name="PRODI" required>
        <option value="">Pilih Prodi</option>
            <?php while ($row = $program_studi->fetch_assoc()) { ?>
            <option value="<?= $row['STUDY_PROGRAM_ID']; ?>">
                <?= $row['NAME']; ?>
            </option>
            <?php } ?>
            </select>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">submit</button>
        <a href="mahasiswa.php" class="btn btn-warning">cancel</a>
    </div>
    </form>
</body>
</html>