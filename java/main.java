import java.util.ArrayList;
import java.util.Scanner;

public class Main{
    // list untuk menyimpan kumpulan object Film
    static ArrayList<Film> daftarFilm = new ArrayList<>();

    // scanner untuk input dari keyboard
    static Scanner input = new Scanner(System.in);

    // menampilkan menu
    public static void tampilkanMenu(){
        System.out.println();
        System.out.println("<3 BIOSKOP <3");
        System.out.println("1. Tambah Film");
        System.out.println("2. Tampilkan Semua Film");
        System.out.println("3. Update Film");
        System.out.println("4. Hapus Film");
        System.out.println("5. Cari Film");
        System.out.println("6. Keluar");
        System.out.print("Pilih menu: ");
    }

    // menambahkan film
    public static void tambahFilm(){
        String id;
        String judul;
        String genre;
        String gambar;

        System.out.println();
        System.out.println("<3 TAMBAH FILM <3");

        System.out.print("ID Film : ");
        id = input.nextLine();

        System.out.print("Judul : ");
        judul = input.nextLine();

        System.out.print("Genre : ");
        genre = input.nextLine();

        System.out.print("Path Gambar : ");
        gambar = input.nextLine();

        Film filmBaru = new Film(id, judul, genre, gambar);

        daftarFilm.add(filmBaru);

        System.out.println("Data film berhasil ditambahkan!");
    }

    // menampilkan semua film
    public static void tampilkanSemuaFilm(){
        System.out.println();
        System.out.println("<3 DAFTAR FILM <3");

        if(daftarFilm.isEmpty()){
            System.out.println("Belum ada data film.");
        }else{
            for(int i = 0; i < daftarFilm.size(); i++) {
                System.out.println();
                System.out.println("Film ke-" + (i + 1));

                daftarFilm.get(i).tampilkanData();
            }
        }
    }

    // mengupdate film berdasarkan ID
    public static void updateFilm(){
        System.out.println();
        System.out.println("<3 UPDATE FILM <3");
        System.out.print("Masukkan ID Film: ");

        String idCari = input.nextLine();

        for(int i = 0; i < daftarFilm.size(); i++){
            if(daftarFilm.get(i).getIdFilm().equals(idCari)){
                System.out.print("Judul baru : ");
                String judulBaru = input.nextLine();

                System.out.print("Genre baru : ");
                String genreBaru = input.nextLine();

                System.out.print("Path gambar baru : ");
                String gambarBaru = input.nextLine();

                daftarFilm.get(i).setJudul(judulBaru);
                daftarFilm.get(i).setGenre(genreBaru);
                daftarFilm.get(i).setGambar(gambarBaru);

                System.out.println("Data film berhasil diupdate!");
                return;
            }
        }
        System.out.println("Film dengan ID tersebut tidak ditemukan.");
    }

    // menghapus film berdasarkan ID
    public static void hapusFilm(){
        System.out.println();
        System.out.println("<3 HAPUS FILM <3");
        System.out.print("Masukkan ID Film: ");

        String idHapus = input.nextLine();

        for(int i = 0; i < daftarFilm.size(); i++){
            if(daftarFilm.get(i).getIdFilm().equals(idHapus)){
                daftarFilm.remove(i);

                System.out.println("Data film berhasil dihapus!");
                return;
            }
        }
        System.out.println("Film dengan ID tersebut tidak ditemukan.");
    }

    // mencari satu film berdasarkan ID
    public static void cariFilm(){
        System.out.println();
        System.out.println("<3 CARI FILM <3");
        System.out.print("Masukkan ID Film: ");

        String idCari = input.nextLine();

        for(int i = 0; i < daftarFilm.size(); i++){
            if(daftarFilm.get(i).getIdFilm().equals(idCari)){
                System.out.println();
                System.out.println("Film ditemukan!");

                daftarFilm.get(i).tampilkanData();

                return;
            }
        }

        System.out.println("Film tidak ditemukan.");
    }

    public static void main(String[] args){
        int pilihan;
        do{
            tampilkanMenu();
            pilihan = input.nextInt();
            input.nextLine();

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
                    System.out.println("Program selesai.");
                    break;

                default:
                    System.out.println("Pilihan tidak tersedia.");
            }
        } 
        while (pilihan != 6);
    }
}