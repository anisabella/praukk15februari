<html>
    <head>
</head>
<body>
    <h1>Tambah</h1>
    <form action="proses-tambah.php"method="POST">
        <fieldset>
            <p>
                <label for="nama_penyewa"> Nama Penyewa : </label>
                <input type="text" name="nama_penyewa" />
            </p>
            <p>
                <label for="alamat"> Alamat : </label>
                <textarea name="alamat" row="5"></textarea>
            </p>
            <p>
                <label for="genre_film"> Genre Film : </label>
                <input type="text" name="genre_film" />
            </p>
            <p>
                <label for="judul_film"> Judul Film : </label>
                <input type="text" name="judul_film" />
            </p>
            <p>
                <label for="tahun_film"> Tahun Film : </label>
                <input type="year" name="tahun_film" />
            </p>
            <p>
                <label for="tanggal_sewa"> Tanggal Sewa : </label>
                <input type="date" name="tanggal_sewa" />
            </p>
            <p>
                <label for="tanggal_kembali"> Tanggal Kembali : </label>
                <input type="date" name="tanggal_kembali" />
            </p>
            <p>
                <label for="harga"> Harga : </label>
                <input type="number" name="harga" />
            </p>
            <p>
                <input type="submit" value="KIRIM" name="tambah" />
            </p>
</fieldset>
</from>
<center>
</body>
</html>


