# class Film buat nyimpen data film
class Film:
    # constructor buat mengisi data awal film
    def __init__(self, idFilm, judul, genre, gambar):
        self.__idFilm = idFilm
        self.__judul = judul
        self.__genre = genre
        self.__gambar = gambar

    # setter untuk mengubah data
    def setIdFilm(self, idFilm):
        self.__idFilm = idFilm

    def setJudul(self, judul):
        self.__judul = judul

    def setGenre(self, genre):
        self.__genre = genre

    def setGambar(self, gambar):
        self.__gambar = gambar

    # getter untuk mengambil data
    def getIdFilm(self):
        return self.__idFilm

    def getJudul(self):
        return self.__judul

    def getGenre(self):
        return self.__genre

    def getGambar(self):
        return self.__gambar

    # method untuk menampilkan data film
    def tampilkanData(self):
        print("ID Film :", self.getIdFilm())
        print("Judul   :", self.getJudul())
        print("Genre   :", self.getGenre())
        print("Gambar  :", self.getGambar())