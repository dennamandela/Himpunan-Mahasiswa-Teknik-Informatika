<html>
    <head>
        <title>Tambah Aspirasi</title>
    </head>
    <body>
        <form action="{{ url('aspirasi/post') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>Tujuan Aspirasi</td>
                    <td>:</td>
                    <td><input type="text" name="tujuan_aspirasi" placeholder="Tujuan Aspirasi..." required>
                </tr>
                <tr>
                    <td>Isi Aspirasi</td>
                    <td>:</td>
                    <td><textarea name="isi_aspirasi" placeholder="Isi Aspirasi" required></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </body>
</html>