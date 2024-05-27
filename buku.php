<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border=2>
        <tr>
            <td>Judul</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>ACTION</td>
        </tr>

        <?php foreach($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["judul"] ?></td>
                <td><?php echo $buku["isbn"] ?></td>
                <td><?php echo $buku["unit"] ?></td>
                <td>
                    <a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a> |
                    <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>DELETE</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="./tambah-buku.php">Tambah Data Buku</a>
    <br>
    <a href="./index.php">Kembali ke Halaman Utama</a>
</body>
</html>