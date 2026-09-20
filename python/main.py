from Film import Film

# list untuk menyimpan kumpulan object Film
daftarFilm = []

# menampilkan menu
def tampilkanMenu():
    print()
    print("<3 BIOSKOP <3")
    print("1. Tambah Film")
    print("2. Tampilkan Semua Film")
    print("3. Update Film")
    print("4. Hapus Film")
    print("5. Cari Film")
    print("6. Keluar")


# menambahkan film
def tambahFilm():
    print()
    print("<3 TAMBAH FILM <3")

    idFilm = input("ID Film : ")
    judul = input("Judul : ")
    genre = input("Genre : ")
    gambar = input("Path Gambar : ")

    filmBaru = Film(idFilm, judul, genre, gambar)
    daftarFilm.append(filmBaru)
    print("Data film berhasil ditambahkan!")


# menampilkan semua film
def tampilkanSemuaFilm():
    print()
    print("<3 DAFTAR FILM <3")

    if len(daftarFilm) == 0:
        print("Belum ada data film.")
    else:
        for i in range(len(daftarFilm)):
            print()
            print("Film ke-", i + 1)

            daftarFilm[i].tampilkanData()


# mengupdate film berdasarkan ID
def updateFilm():
    print()
    print("<3 UPDATE FILM <3")

    idCari = input("Masukkan ID Film: ")

    for i in range(len(daftarFilm)):
        if daftarFilm[i].getIdFilm() == idCari:

            judulBaru = input("Judul baru : ")
            genreBaru = input("Genre baru : ")
            gambarBaru = input("Path gambar baru : ")

            daftarFilm[i].setJudul(judulBaru)
            daftarFilm[i].setGenre(genreBaru)
            daftarFilm[i].setGambar(gambarBaru)

            print("Data film berhasil diupdate!")
            return

    print("Film dengan ID tersebut tidak ditemukan.")


# menghapus film berdasarkan ID
def hapusFilm():
    print()
    print("<3 HAPUS FILM <3")

    idHapus = input("Masukkan ID Film: ")

    for i in range(len(daftarFilm)):
        if daftarFilm[i].getIdFilm() == idHapus:

            daftarFilm.pop(i)

            print("Data film berhasil dihapus!")
            return

    print("Film dengan ID tersebut tidak ditemukan.")


# mencari satu film berdasarkan ID
def cariFilm():
    print()
    print("<3 CARI FILM <3")

    idCari = input("Masukkan ID Film: ")

    for i in range(len(daftarFilm)):
        if daftarFilm[i].getIdFilm() == idCari:

            print()
            print("Film ditemukan!")

            daftarFilm[i].tampilkanData()
            return

    print("Film tidak ditemukan.")


# program utama
pilihan = 0

while pilihan != 6:

    tampilkanMenu()

    pilihan = int(input("Pilih menu: "))

    if pilihan == 1:
        tambahFilm()

    elif pilihan == 2:
        tampilkanSemuaFilm()

    elif pilihan == 3:
        updateFilm()

    elif pilihan == 4:
        hapusFilm()

    elif pilihan == 5:
        cariFilm()

    elif pilihan == 6:
        print("Program selesai.")

    else:
        print("Pilihan tidak tersedia.")