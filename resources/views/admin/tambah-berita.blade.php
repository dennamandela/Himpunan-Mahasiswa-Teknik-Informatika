<html>
    <head>
        <title>Tambah Berita</title>
    </head>
    <body>
        <form action="{{url ('/berita/store')}}" method="post">
        @csrf
            <table>
                <tr>
                    <td>Judul Berita</td>
                    <td>:</td>
                    <td><input type="text" name="judul_berita" placeholder="Judul Berita..." required>
                </tr>
                <tr>
                    <td>Isi Berita</td>
                    <td>:</td>
                    <td><textarea name="isi_berita" placeholder="Isi Berita..." required></textarea></td>
                </tr>
                <tr>
                    <td>Foto Berita</td>
                    <td>:</td>
                    <td><input type="file" name="foto_berita"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </body>
</html>