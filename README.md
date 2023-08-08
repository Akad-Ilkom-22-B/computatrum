# Welcome

## Tabel Login

Ini adalah repositori untuk sistem informasi akademik Computatrum.
Didalam tabel login terdapat tabel untuk memasukkan username, password, login sebagai mahasiswa atau admin. dan juga terdpat button untuk login.

## Beranda

Didalam beranda terdapat foto diri dan informasi mengenai tahun akademik, semester dan sks yang telah dijalani.

## Profil Mahasiswa

Didalam Profil Mahasiswa terdapat informasi mengenai foto diri, nim, nama mahasiswa, jurusan, program studi, angkatan dan jenis kelamin.

## Link Desain Website

Untuk melihat desain nya [klik](https://www.figma.com/file/0qXRKjuM9UOWmMxvWTgh4u/sistem-informasi?type=design&node-id=0%3A1&mode=design&t=BGqsV7bvk7kiHgNt-1)

## Referensi Website

[AKAD UNIMED](https://devakad.unimed.ac.id/)

## Database

**Tabel "login":**

| Column Name | Data Type    | Constraints                 |
| ----------- | ------------ | --------------------------- |
| id          | INT          | Primary Key, Auto-increment |
| username    | VARCHAR(50)  | Unique, Not Null            |
| password    | VARCHAR(255) | Not Null                    |
| akses       | VARCHAR(20)  | Not Null                    |

**Tabel "mahasiswa":**

| Column Name    | Data Type     | Constraints                 |
| -------------- | ------------- | --------------------------- |
| id             | INT           | Primary Key, Auto-increment |
| nim            | VARCHAR(10)   | Unique, Not Null            |
| nama           | VARCHAR(100)  | Not Null                    |
| jurusan        | VARCHAR(50)   | Not Null                    |
| program_studi  | VARCHAR(50)   | Not Null                    |
| angkatan       | INT           | Not Null                    |
| jenis_kelamin  | VARCHAR(15)   | Not Null                    |
| tahun_akademik | VARCHAR(20)   | Not Null                    |
| semester       | INT           | Not Null                    |
| ipk            | DECIMAL(3, 2) | Not Null                    |
| sks            | INT           | Not Null                    |
