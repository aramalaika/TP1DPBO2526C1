<?php

// memasukkan class Film
require_once 'Film.php';

// mulai session
session_start();

// membuat daftar film kalau belum ada
if (!isset($_SESSION['daftarFilm'])) {
    $_SESSION['daftarFilm'] = [];
}

// tambah film
if (isset($_POST['tambah'])) {

    $idFilm = $_POST['idFilm'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $gambar = $_POST['gambar'];

    // membuat object Film
    $film = new Film($idFilm, $judul, $genre, $gambar);

    // memasukkan object ke array
    $_SESSION['daftarFilm'][] = $film;
}

// hapus film
if (isset($_GET['hapus'])) {

    $idHapus = $_GET['hapus'];

    foreach ($_SESSION['daftarFilm'] as $key => $film) {

        if ($film->getIdFilm() == $idHapus) {
            unset($_SESSION['daftarFilm'][$key]);
        }
    }

    // merapikan index array
    $_SESSION['daftarFilm'] = array_values($_SESSION['daftarFilm']);
}

// update film
if (isset($_POST['update'])) {

    $idLama = $_POST['idLama'];
    $judul = $_POST['judulUpdate'];
    $genre = $_POST['genreUpdate'];
    $gambar = $_POST['gambarUpdate'];

    foreach ($_SESSION['daftarFilm'] as $film) {

        if ($film->getIdFilm() == $idLama) {

            $film->setJudul($judul);
            $film->setGenre($genre);
            $film->setGambar($gambar);
        }
    }
}

// cari film
$hasilCari = null;

if (isset($_POST['cari'])) {

    $idCari = $_POST['idCari'];

    foreach ($_SESSION['daftarFilm'] as $film) {

        if ($film->getIdFilm() == $idCari) {
            $hasilCari = $film;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Data Film Bioskop</title>

    <style>
        body{
            font-family: Arial;
            margin: 30px;
        }

        h1, h2{
            color: #333;
        }

        form{
            margin-bottom: 20px;
        }

        input{
            padding: 8px;
            margin: 4px;
        }

        button{
            padding: 8px 15px;
            cursor: pointer;
        }

        table{
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        img{
            width: 80px;
        }

        a{
            color: red;
        }
    </style>

</head>

<body>

    <h1>Data Film Bioskop</h1>

    <!-- form tambah -->
    <h2>Tambah Film</h2>

    <form method="POST">

        <input type="text" name="idFilm" placeholder="ID Film" required>

        <input type="text" name="judul" placeholder="Judul Film" required>

        <input type="text" name="genre" placeholder="Genre" required>

        <input type="text" name="gambar"
            placeholder="image/nama.jpg" required>

        <button type="submit" name="tambah">
            Tambah
        </button>

    </form>


    <!-- form cari -->
    <h2>Cari Film</h2>

    <form method="POST">

        <input type="text" name="idCari"
            placeholder="Masukkan ID Film" required>

        <button type="submit" name="cari">
            Cari
        </button>

    </form>


    <!-- hasil pencarian -->
    <?php if ($hasilCari != null) { ?>

        <h3>Hasil Pencarian</h3>

        <p>ID: <?php echo $hasilCari->getIdFilm(); ?></p>

        <p>Judul: <?php echo $hasilCari->getJudul(); ?></p>

        <p>Genre: <?php echo $hasilCari->getGenre(); ?></p>

        <img src="<?php echo $hasilCari->getGambar(); ?>">

    <?php } ?>


    <!-- tabel semua film -->
    <h2>Daftar Film</h2>

    <table>

        <tr>
            <th>ID Film</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($_SESSION['daftarFilm'] as $film) { ?>

            <tr>

                <td>
                    <?php echo $film->getIdFilm(); ?>
                </td>

                <td>
                    <?php echo $film->getJudul(); ?>
                </td>

                <td>
                    <?php echo $film->getGenre(); ?>
                </td>

                <td>
                    <img src="<?php echo $film->getGambar(); ?>">
                </td>

                <td>

                    <a href="?hapus=<?php echo $film->getIdFilm(); ?>"
                        onclick="return confirm('Hapus film ini?')">
                        Hapus
                    </a>

                </td>

            </tr>

        <?php } ?>

    </table>


    <!-- form update -->
    <h2>Update Film</h2>

    <form method="POST">

        <input type="text" name="idLama"
            placeholder="ID Film yang diubah" required>

        <input type="text" name="judulUpdate"
            placeholder="Judul Baru" required>

        <input type="text" name="genreUpdate"
            placeholder="Genre Baru" required>

        <input type="text" name="gambarUpdate"
            placeholder="image/nama.jpg" required>

        <button type="submit" name="update">
            Update
        </button>

    </form>

</body>
</html>
