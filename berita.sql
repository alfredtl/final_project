CREATE DATABASE mydb.berita;

CREATE TABLE berita (
    id varchar(100) NOT NULL,
    judul varchar(100) NOT NULL,
    slug varchar(100) DEFAULT NULL,
    tanggal datetime NOT NULL,
    isi_berita text NOT NULL,
    publish_id int DEFAULT '1',
    PRIMARY KEY (id),
    KEY berita_id_IDX (id) USING BTREE
    ) ENGINE=InnoDB DEFAULT 
    CHARSET=utf8mb4 
    COLLATE=utf8mb4_0900_ai_ci;
