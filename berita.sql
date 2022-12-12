CREATE DATABASE mydb.berita;
 
CREATE TABLE berita (
    id varchar(100) NOT NULL,
    judul varchar(100) NOT NULL,
    slug varchar(100) DEFAULT NULL,
    tempat_kejadian varchar(100) NOT NULL,
    tanggal datetime NOT NULL,
    isi_berita text NOT NULL,
    publish_id int DEFAULT '1',
    PRIMARY KEY (id),
    KEY berita_id_IDX (id) USING BTREE
    ) ENGINE=InnoDB DEFAULT 
    CHARSET=utf8mb4 ;
    COLLATE=utf8mb4_0900_ai_ci;



CREATE TABLE Penyelamatan_januari (
    KEY No_ int NOT NULL,
    PRIMARY KEY (id),
    Hari/Tanggal varchar(100) NOT NULL,
    Penyelamatan_Hewan Berbisa int DEFAULT NULL,
    penyelamatan_Evakuasi int NOT NULL,
    penyelamatan_Lain-lain int NOT NULL,
    Pemilik VARCHAR(100) NOT NULL,
    Alamat Pemilik VARCHAR(100) NOT NULL,
    No_HP_Pengguna_Layanan int(15) NOT NULL,
    Jumlah_Unit int NOT NULL,
    Jenis_Objek_Evakuasi VARCHAR(100) NOT NULL,
    Hasil_Pelaksanaan VARCHAR(100) NOT NULL,
    Waktu_pelaksanaan_Mulai int NOT NULL,
    Waktu_pelaksanaan_Selesai int NOT NULL,
    Keterangan VARCHAR(100) NOT NULL,
    ) 

CREATE TABLE Penyelamatan_februari (
    KEY No_ int NOT NULL,
    PRIMARY KEY (id),
    Hari/Tanggal varchar(100) NOT NULL,
    Penyelamatan_Hewan Berbisa int DEFAULT NULL,
    penyelamatan_Evakuasi int NOT NULL,
    penyelamatan_Lain-lain int NOT NULL,
    Pemilik VARCHAR(100) NOT NULL,
    Alamat Pemilik VARCHAR(100) NOT NULL,
    No_HP_Pengguna_Layanan int(15) NOT NULL,
    Jumlah_Unit int NOT NULL,
    Jenis_Objek_Evakuasi VARCHAR(100) NOT NULL,
    Hasil_Pelaksanaan VARCHAR(100) NOT NULL,
    Waktu_pelaksanaan_Mulai int NOT NULL,
    Waktu_pelaksanaan_Selesai int NOT NULL,
    Keterangan VARCHAR(100) NOT NULL,
    ) 

CREATE TABLE Penyelamatan_maret (
    KEY No_ int NOT NULL,
    PRIMARY KEY (id),
    Hari/Tanggal varchar(100) NOT NULL,
    Penyelamatan_Hewan Berbisa int DEFAULT NULL,
    penyelamatan_Evakuasi int NOT NULL,
    penyelamatan_Lain-lain int NOT NULL,
    Pemilik VARCHAR(100) NOT NULL,
    Alamat Pemilik VARCHAR(100) NOT NULL,
    No_HP_Pengguna_Layanan int(15) NOT NULL,
    Jumlah_Unit int NOT NULL,
    Jenis_Objek_Evakuasi VARCHAR(100) NOT NULL,
    Hasil_Pelaksanaan VARCHAR(100) NOT NULL,
    Waktu_pelaksanaan_Mulai int NOT NULL,
    Waktu_pelaksanaan_Selesai int NOT NULL,
    Keterangan VARCHAR(100) NOT NULL,
    ) 