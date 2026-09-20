# TP1DPBO2526C1

janji : 
Saya Aracelli Jasmine Malaika dengan NIM 2501804 mengerjakan Tugas Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

Program Description :
program dibuat untuk mengelola data film bioskop dengan konsep OOP, digunakan 4 bahasa 
- c++
- java
- python
- php
menggunakan sebuah class Film dengan 4 atribut yaitu
- idFilm (id unik)
- judul
- genre
- gambar (poster film)

# fitur utama  
a. tambah data : menambahkan objek film baru ke dalam data  
b. tampilkan data : menampilkan seluruh data film yang tersimpan
c. update data : mengubah data film berdasarkan ID film
d. hapus data : menghapus data film berdasarkkan ID film
e. cari data : mencari dan menampilkan satu data film berdasarkan ID film

# implementasi program
- c++
  Program C++ menggunakan vector untuk menyimpan kumpulan objek Film
  File yang digunakan:
  cpp/
  ├── Film.cpp
  └── main.cpp
  Film.cpp berisi class Film beserta atribut, constructor, setter, dan getter
  main.cpp berisi program utama, menu, serta proses CRUD dan pencarian data
  
- java
  Program Java menggunakan ArrayList untuk menyimpan kumpulan objek Film
  File yang digunakan:
  java/
  ├── Film.java
  └── Main.java
  Film.java berisi class Film beserta atribut, constructor, setter, dan getter
  Main.java berisi program utama, menu, serta proses CRUD dan pencarian data
  
- python
  Program Python menggunakan list untuk menyimpan kumpulan objek Film
  File yang digunakan:
  python/
  ├── Film.py
  └── main.py
  Film.py berisi class Film beserta atribut, constructor, setter, dan getter
  main.py berisi program utama serta proses CRUD dan pencarian data
  
- php
  Program PHP menggunakan session untuk menyimpan kumpulan objek Film selama program dijalankan
  File yang digunakan:
  php/
  ├── Film.php
  ├── main.php
  └── image/
  Film.php berisi class Film beserta atribut, constructor, setter, dan getter
  main.php berisi program utama, form HTML, tabel data, serta proses CRUD dan pencarian data
  Folder image digunakan untuk menyimpan gambar/poster film secara lokal

# flow program
program jalan → menampilkan menu → pilih fitur → data film diproses → menampilkan hasil → kembali ke menu
  ! untuk PHP, proses input dilakukan melalui form HTML dan hasil data ditampilkan dalam bentuk tabel pada halaman web !

# dokumentasi
dokumentasi hasil program dapat dilihat di folder dokumentasi
