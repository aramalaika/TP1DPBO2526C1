#include <iostream>
#include <string>
#include <vector>
#include "Film.cpp"

using namespace std;

// vector untuk menyimpan kumpulan object Film
vector<Film> daftarFilm;

// menampilkan menu
void tampilkanMenu(){
    cout << endl;
    cout << "!<3 BIOSKOP <3!" << endl;
    cout << "1. Tambah Film" << endl;
    cout << "2. Tampilkan Semua Film" << endl;
    cout << "3. Update Film" << endl;
    cout << "4. Hapus Film" << endl;
    cout << "5. Cari Film" << endl;
    cout << "6. Keluar" << endl;
    cout << "Pilih menu: ";
}

// menambahkan film
void tambahFilm(){
    string id;
    string judul;
    string genre;
    string gambar;

    cout << endl;
    cout << "<3 TAMBAH FILM <3" << endl;

    cout << "ID Film : ";
    cin >> id;

    cout << "Judul : ";
    cin >> judul;

    cout << "Genre : ";
    cin >> genre;

    cout << "Path Gambar : ";
    cin >> gambar;

    Film filmBaru(id, judul, genre, gambar);

    daftarFilm.push_back(filmBaru);

    cout << "Data film berhasil ditambahkan!" << endl;
}

// menampilkan semua film
void tampilkanSemuaFilm(){
    cout << endl;
    cout << "<3 DAFTAR FILM <3" << endl;

    if(daftarFilm.empty()){
        cout << "Belum ada data film." << endl;
    }else{
        for(int i = 0; i < daftarFilm.size(); i++){
            cout << endl;
            cout << "Film ke-" << i + 1 << endl;

            daftarFilm[i].tampilkanData();
        }
    }
}

// mengupdate film berdasarkan ID
void updateFilm(){
    string idCari;

    cout << endl;
    cout << "<3 UPDATE FILM <3" << endl;
    cout << "Masukkan ID Film: ";
    cin >> idCari;

    for(int i = 0; i < daftarFilm.size(); i++){
        if(daftarFilm[i].getIdFilm() == idCari){
            string judulBaru;
            string genreBaru;
            string gambarBaru;

            cout << "Judul baru : ";
            cin >> judulBaru;

            cout << "Genre baru : ";
            cin >> genreBaru;

            cout << "Path gambar baru : ";
            cin >> gambarBaru;

            daftarFilm[i].setJudul(judulBaru);
            daftarFilm[i].setGenre(genreBaru);
            daftarFilm[i].setGambar(gambarBaru);

            cout << "Data film berhasil diupdate!" << endl;
            return;
        }
    }
    cout << "Film dengan ID tersebut tidak ditemukan." << endl;
}

// menghapus film berdasarkan ID
void hapusFilm(){
    string idHapus;

    cout << endl;
    cout << "<3 HAPUS FILM <3" << endl;
    cout << "Masukkan ID Film: ";
    cin >> idHapus;

    for(int i = 0; i < daftarFilm.size(); i++){
        if(daftarFilm[i].getIdFilm() == idHapus){
            daftarFilm.erase(daftarFilm.begin() + i);

            cout << "Data film berhasil dihapus!" << endl;
            return;
        }
    }
    cout << "Film dengan ID tersebut tidak ditemukan." << endl;
}

// mencari satu film
void cariFilm(){
    string idCari;

    cout << endl;
    cout << "<3 CARI FILM <3" << endl;
    cout << "Masukkan ID Film: ";
    cin >> idCari;

    for(int i = 0; i < daftarFilm.size(); i++){
        if(daftarFilm[i].getIdFilm() == idCari){
            cout << endl;
            cout << "Film ditemukan!" << endl;

            daftarFilm[i].tampilkanData();

            return;
        }
    }
    cout << "Film tidak ditemukan." << endl;
}

int main(){
    int pilihan;

    do{
        tampilkanMenu();
        cin >> pilihan;

        switch(pilihan){
            case 1:
                tambahFilm();
                break;

            case 2:
                tampilkanSemuaFilm();
                break;

            case 3:
                updateFilm();
                break;

            case 4:
                hapusFilm();
                break;

            case 5:
                cariFilm();
                break;

            case 6:
                cout << "Program selesai." << endl;
                break;

            default:
                cout << "Pilihan tidak tersedia." << endl;
        }
    }
    while (pilihan != 6);
    return 0;
}