<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $data_buah = array (
    array("id" => 1, "nama"=> "Nanas", "warna" => "kuning", "stok" =>15, "harga" => 20000, "deskripsi" => "Nanas segar dengan rasa manis.")
    array("id" => 2, "nama"=> "Kiwi", "warna" => "Hijau", "stok" =>35, "harga" => 18000, "deskripsi" => "Buah Kiwi segar yang banyak kandungan vitamin C. ")
    array("id" => 3, "nama"=> "Alpukat", "warna" => "Hijau", "stok" =>30, "harga" => 25000, "deskripsi" => "Alpukat buah creamy dengan kandungan lemak baik dan menyehatkan")
    array("id" => 4, "nama"=> "Buah Naga", "warna" => "Merah", "stok" =>15, "harga" => 20000, "deskripsi" => "Buah segar,kaya akan gizi.")
    array("id" => 5, "nama"=> "Jambu", "warna" => "Hijau", "stok" =>30, "harga" => 10000, "deskripsi" => "Jambu segar dengan aroma yang harum")
  )
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
            // Task 2
            // Menampilkan data array sebagai tabel
            foreach ($data_buah as $buah) {
            echo "<tr>";
            echo "<td>" . $buah['id'] . "</td>";
            echo "<td>" . $buah['nama'] . "</td>";
            echo "<td>" . $buah['warna'] . "</td>";
            echo "<td>" . $buah['stok'] . "</td>";
            echo "<td>Rp " . number_format($buah['harga'], 0, ',', '.') . "</td>"; // Format harga ke dalam format rupiah
            echo "<td>" . $buah['deskripsi'] . "</td>";
            echo "</tr>";
            }


        ?>
      </tbody>
    </table>
  </div>
</body>
</html>