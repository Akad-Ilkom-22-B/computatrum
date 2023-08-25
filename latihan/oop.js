class Login {
    constructor(id, username, password, akses) {
        this.id = id;
        this.username = username;
        this.password = password;
        this.akses = akses;
    }

    toString() {
        return `ID: ${this.id} Username: ${this.username} Akses: ${this.akses}`;
    }
}

class Mahasiswa {
    constructor(id, nim, nama, jurusan, program_studi, angkatan, jenis_kelamin, tahun_akademik, semester, ipk, sks) {
        this.id = id;
        this.nim = nim;
        this.nama = nama;
        this.jurusan = jurusan;
        this.program_studi = program_studi;
        this.angkatan = angkatan;
        this.jenis_kelamin = jenis_kelamin;
        this.tahun_akademik = tahun_akademik;
        this.semester = semester;
        this.ipk = ipk;
        this.sks = sks;
    }

    toString() {
        return `NIM: ${this.nim}\nNama: ${this.nama}\nJurusan: ${this.jurusan}\nProgram Studi: ${this.program_studi}\nAngkatan: ${this.angkatan}\nJenis Kelamin: ${this.jenis_kelamin}\nTahun Akademik: ${this.tahun_akademik}\nSemester: ${this.semester}\nIPK: ${this.ipk}\nSKS: ${this.sks}`;
    }
}

// Contoh penggunaan
const login1 = new Login(1, "user123", "pass123", "mahasiswa");
const mahasiswa1 = new Mahasiswa(1, "1234567890", "Angga", "Ilmu Komputer", "S1", 2022, "Laki-laki", "2022/2023", 1, 3.75, 120);

console.log("Data Login:");
console.log(login1.toString());

console.log("\nData Mahasiswa:");
console.log(mahasiswa1.toString());