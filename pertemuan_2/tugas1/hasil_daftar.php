<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Data Pendaftar</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Cek apakah ada data yang dikirim dari form_daftar
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                    // Ambil data dari form
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];

                    // Validasi data
                    if (empty($nama_lengkap) || empty($email) || empty($alamat) || empty($telepon)) {
                        echo "<tr><td colspan='5'>Semua kolom harus diisi.</td></tr>";
                    } else {
                        // Tambahkan data ke dalam tabel
                        echo "<tr>";
                        echo "<td>1</td>";
                        echo "<td>$nama_lengkap</td>";
                        echo "<td>$email</td>";
                        echo "<td>$alamat</td>";
                        echo "<td>$telepon</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2>Form Pendaftaran</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="tel" class="form-control" id="telepon" name="telepon">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
