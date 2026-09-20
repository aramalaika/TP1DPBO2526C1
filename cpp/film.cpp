#include <iostream>
#include <string>

using namespace std;

// class Film buat nyimpen data film
class Film{
    private:
        // 4 atribut film
        string idFilm;
        string judul;
        string genre;
        string gambar;

    public:
        // constructor buat mengisi data film
        Film(string id, string nama, string jenis, string foto){
            setIdFilm(id);
            setJudul(nama);
            setGenre(jenis);
            setGambar(foto);
        }

        // setter untuk mengubah data
        void setIdFilm(string id){
            idFilm = id;
        }

        void setJudul(string nama){
            judul = nama;
        }

        void setGenre(string jenis){
            genre = jenis;
        }

        void setGambar(string foto){
            gambar = foto;
        }

        // getter untuk mengambil data
        string getIdFilm(){
            return idFilm;
        }

        string getJudul(){
            return judul;
        }

        string getGenre(){
            return genre;
        }

        string getGambar(){
            return gambar;
        }

        // method untuk menampilkan data film
        void tampilkanData(){
            cout << "ID Film : " << getIdFilm() << endl;
            cout << "Judul   : " << getJudul() << endl;
            cout << "Genre   : " << getGenre() << endl;
            cout << "Gambar  : " << getGambar() << endl;
        }
};