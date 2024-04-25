<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: aqua;
            color: #343a40;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: pink;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.20);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.10s;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        table th {
            background-color: #007bff;
            color: #fff;
        }

        table td {
            background-color: #fff;
        }

        table a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }

        table a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Masukkan Data Siswa</h1>
    <form action="" method="post">
        <label for="nama">NAMA :</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="nis">NIS :</label>
        <input type="number" id="nis" name="nis"><br><br>
        <label for="rayon">RAYON :</label>
        <input type="text" id="rayon" name="rayon"><br><br>
        <button type="submit" name="kirim" value="kirim">SUBMIT</button>
        <a href="session2.php" style="color: #fff; text-decoration: none;"></a>
        <button type="submit" name="tambah" value="tambah">+ TAMBAH</button>
    </form>

    <table border="3">
        <tr>
            <th>NAMA</th>
            <th>NIS</th>
            <th>RAYON</th>
        </tr>
        <?php
        // Mengecek apakah form telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengecek apakah tombol submit yang ditekan adalah submit untuk menambahkan data siswa
            if(isset($_POST['kirim']) && $_POST['kirim'] == "kirim") {
                // Mengambil data siswa dari form
                $nama = $_POST['nama'];
                $nis = $_POST['nis'];
                $rayon = $_POST['rayon'];

                // Menampilkan data siswa dalam tabel
                echo "<tr>";
                echo "<td>" . $nama . "</td>";
                echo "<td>" . $nis . "</td>";
                echo "<td>" . $rayon . "</td>";
                echo "<td>Aksi</td>"; // Diisi dengan aksi yang diinginkan
                echo "</tr>";
            }
        }
        ?>
    </table>

</body>
</html>
