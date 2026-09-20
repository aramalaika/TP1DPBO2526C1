// class Film buat nyimpen data film
public class Film {
    // 4 atribut film
    private String idFilm;
    private String judul;
    private String genre;
    private String gambar;

    // constructor buat mengisi data awal film
    public Film(String id, String nama, String jenis, String foto){
        setIdFilm(id);
        setJudul(nama);
        setGenre(jenis);
        setGambar(foto);
    }

    // setter untuk mengubah data
    public void setIdFilm(String id){
        idFilm = id;
    }

    public void setJudul(String nama){
        judul = nama;
    }

    public void setGenre(String jenis){
        genre = jenis;
    }

    public void setGambar(String foto){
        gambar = foto;
    }

    // getter untuk mengambil data
    public String getIdFilm(){
        return idFilm;
    }

    public String getJudul(){
        return judul;
    }

    public String getGenre(){
        return genre;
    }

    public String getGambar(){
        return gambar;
    }

    // method untuk menampilkan data film
    public void tampilkanData(){
        System.out.println("ID Film : " + getIdFilm());
        System.out.println("Judul   : " + getJudul());
        System.out.println("Genre   : " + getGenre());
        System.out.println("Gambar  : " + getGambar());
    }
}