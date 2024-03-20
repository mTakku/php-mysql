<p align="center" >
  <b>POINT UTAMA</b>
</p>

---
> #### PENGENALAN PDO
> - PDO (PHP Data Objects) adalah spesifikasi interface atau API untuk komunikasi antara PHP dengan database management system.
> - Penggunaan PDO lebih fleksibel karena menyediakan abstraksi yang sama untuk semua jenis database.
>
> Contoh kode untuk melihat PDO drivers :
> 
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/fd1e38df-eeb0-4f97-ab92-5ed990514b66)
---
> #### KONEKSI DATABASE 
> - Untuk terkoneksi ke database menggunakan PDO, pertama-tama dibuatlah koneksi dengan membuat objek dari kelas PDO.
> - Dan saat kita membuat koneksi ke mySQL menggunakan PDO, kita perlu tentukan host,port,database name, username dan juga passwordnya.
>
> Berikut kode untuk koneksi database :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/7ba67dae-f8fa-42eb-aaf6-6b865b40c411)
---
> #### ERROR PDOException
> -  Selalu gunakan try-catch untuk menangkap error ketika terkoneksi ke database menggunakan PDO untuk menghindari eksekusi kode yang tidak perlu.
> 
> Contoh kode try-catch :
> 
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/8185c2aa-d7f1-4a59-8585-af1288803b33)
---
> #### MENUTUP KONEKSI
> -  Menutup koneksi ke database setelah selesai menggunakan PDO sangat penting untuk mencegah koneksi yang terlalu banyak.
> -  Menutup koneksi PDO dapat dilakukan dengan mengatur variabel koneksi menjadi nol setelah selesai menggunakan koneksi tersebut.
>
> Contoh kode menutup koneksi :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/cd51bb39-3f5d-4740-917f-c5743badecfa)
---
> #### EXECUTE SQL
> - Perintah SQL dapat dikirim ke database menggunakan fungsi execute(sql) dalam PDO.
> - function execute(sql) bisa kita gunakan untuk semua jenis sql yang tidak membutuhkan result data, misal CREATE TABLE,INSERT,UPDATE,DELETE,ALTER TABLE, dan lain-lain
>
> Contoh kode membuat getConnection() :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/e2dd9939-98bc-4170-8eed-358aa56bab45)
>
> Contoh kode membuat table customers :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/d855e717-2016-46b1-8ecd-22c3a6306f58)
>
> Contoh eksekusi sql menggunakan pdo :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/d786056d-da8e-4335-a5fc-f017876d2fda)
---
> #### QUERY SQL
> - Untuk melakukan query SQL yang mengembalikan data, gunakan fungsi query() dalam PDO.
> - Hasil dari query dapat diiterasi menggunakan perulangan foreach, karena PDOStatement adalah turunan dari IteratorAggregate.
>
> Berikut contoh kode query sql dengan pdo :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/9c430c5d-52e2-4e85-9a5c-c1a15e4a658b)
---
> #### PDO STATEMENT
> - Hasil dari query dapat diiterasi menggunakan perulangan foreach, karena PDOStatement adalah turunan dari IteratorAggregate.
> - Penggunaan nama kolom dalam query SQL dapat memudahkan pembacaan kode.
>
> Berikut kode foreach pdostatement :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/fbf931f2-31d1-478a-a0ad-e4a565f009a7)
---
> #### SQL INJECTION
> - SQL injection adalah teknik yang berbahaya yang dapat dimanfaatkan untuk mengakses atau merusak basis data aplikasi.
> 
> Contoh kode sql injection :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/0d1b828d-9508-4688-b722-bd54b51cd384)
>
> #### Solusinya
> - Penggunaan fungsi prepare atau quote dapat membantu mencegah SQL injection dengan menghindari penggabungan string SQL secara manual.
>
> Contoh kode fungsi quote :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/fae77641-f237-4470-a3d7-d259bb06f6af)
>
> #### SQL DENGAN PARAMETER
> - Pentingnya melakukan iterasi terhadap hasil query untuk mendapatkan data yang diinginkan.
>
> Berikut contoh kode membuat tabel admin :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/d5ddbf15-ba99-4902-aaee-923e5e9c90c0)
>
> Berikut contoh kode membuat sql dari input user :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/60e68cc5-f4b5-4673-bcb4-9df22f564b45)
>
> #### PREPARE STATEMENT
> - Penggunaan prepare statement lebih aman daripada penggunaan string SQL manual karena dapat mengatasi SQL injection dengan menggunakan parameter input dari pengguna.
> - Pembuatan prepare statement penting untuk keamanan dalam SQL karena menghindari kesalahan quoting manual.
>
> Berikut kode membuat prepare statement :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/310dd298-1bb5-4f15-a11e-2025090f995b)
>
> #### BINDING PARAMETER
> - Binding parameter dalam prepare statement dilakukan untuk mengisi nilai parameter dengan input dari pengguna, membuat penggunaan prepare statement lebih aman
>
> Berikut contoh kode binding parameter :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/b306a674-e891-4df3-8428-895b05662b1d)
>
> #### BINDING PARAMETER DENGAN INDEX
> -  Disarankan untuk menggunakan prepare statement ketika membutuhkan input dari pengguna dalam pembuatan query SQL untuk mencegah SQL injection.
>
> Berikut contoh kode binding parameter dengan index :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/d5e4d66b-2978-472f-8120-8df50b4eaf86)
>
> Berikut contoh kode binding parameter index tanpa bind :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/6a905e3b-4431-44f6-84cb-713f1c601155)
>
> Berikut contoh kode binding parameter non query :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/c5f7bce7-b427-4147-8713-2957f969839c)
---
> #### FETCH DATA
> - Fungsi fetch dalam PDO digunakan untuk mengambil satu data dari hasil query tanpa perlu melakukan iterasi manual.
> - Penggunaan fetch secara langsung bisa membuat kode lebih sederhana dan efisien daripada melakukan iterasi manual dalam mengambil data dari hasil query.
> - Jika ingin mengambil semua data dari hasil query, bisa menggunakan fetchAll untuk langsung mengonversi hasil query menjadi array tanpa perlu persiapan parameter.
>
> Berikut kode function fetch :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/834235c6-0d1f-4c8e-bed9-4a5e8416531f)
>
> Berikut kode function fetchall :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/34c69043-3ac1-4bb4-b4c5-9e66417314a5)
---
> #### AUTO INCREMENT
> - Autoincrement digunakan untuk membuat ID yang naik secara otomatis. Function lastInsertId() dapat digunakan untuk mengambil ID terakhir yang di-generate secara otomatis.
>
> Berikut kode membuat table :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/c666a639-0cba-4880-816c-2267cf8ffa6b)
>
> Berikut kode function lastinsertid() :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/ce425dc6-aa2e-4e96-b422-0457fbacc5f2)
---
> ### DATABASE TRANSACTION
>
> #### TRANSACTION DI PDO
> - Transaksi database merupakan fitur penting di database relasional untuk memastikan keberhasilan atau pembatalan operasi dalam aplikasi. Dalam PHP menggunakan PDO, transaksi dimulai dengan beginTransaction(), diikuti dengan commit() untuk menyimpan data, dan rollback() untuk membatalkan operasi.
>
> Berikut contoh transaction :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/9f354c16-e474-40e2-9e68-6fce8da676d8)
>
> Berikut contoh rollback transaction :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/b39fd612-fe5f-4d4f-9a43-eb966f89dc28)
--- 
> #### REPOSITORY PATATERN
> -  Repository adalah mekanisme untuk mengelola akses dan manipulasi data dalam aplikasi, yang memisahkan logika bisnis dari akses database. Implementasi repository membantu dalam pengelolaan koneksi dan operasi database.
>
> #### ENTITY / MODEL
> - Dalam pengembangan aplikasi berbasis objek, tabel database biasanya direpresentasikan sebagai kelas model atau entity. Hal ini mempermudah dalam pengembangan dan pemeliharaan kode program dengan memisahkan logika bisnis dari akses database.
>
> Berikut contoh class model :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/3f4ef432-c583-4744-9fa2-e642af2eeae8)
>
> Berikut contoh interface repository :
>
> ![image](https://github.com/mTakku/php-mysql/assets/145539342/7d506c5a-7204-4425-a3f4-9ad9422be20a)
---
<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

> - Saya tidak tau bagaimana ia menaruh kode menambah table atau insert ke dalam table dengan bantuan text editornya, jadi saya menggunakan phpmyadmin secara manual

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

>  MySQL mempunyai beberapa kelebihan yang bisa kita manfaatkan untuk mengembangkan perangkat lunak 





















