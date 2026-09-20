<?php

// class Film buat menyimpan data film
class Film
{
    // atribut film
    private $idFilm;
    private $judul;
    private $genre;
    private $gambar;

    // constructor untuk mengisi data awal
    public function __construct($idFilm, $judul, $genre, $gambar)
    {
        $this->idFilm = $idFilm;
        $this->judul = $judul;
        $this->genre = $genre;
        $this->gambar = $gambar;
    }

    // setter untuk mengubah data
    public function setIdFilm($idFilm)
    {
        $this->idFilm = $idFilm;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function setGambar($gambar)
    {
        $this->gambar = $gambar;
    }

    // getter untuk mengambil data
    public function getIdFilm()
    {
        return $this->idFilm;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getGambar()
    {
        return $this->gambar;
    }
}
?>

