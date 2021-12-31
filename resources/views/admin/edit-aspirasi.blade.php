<html>
    <head>
        <title>Edit Aspirasi</title>
    </head>
    <body>

    <h1>Edit Aspirasi</h1>
        <form action="{{ url ('aspirasi/update', $aspirasi -> id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <table>
                <tr>
                    <td>Tujuan Aspirasi</td>
                    <td>:</td>
                    <td><input type="text" name="tujuan_aspirasi" placeholder="Tujuan Aspirasi..." required value="{{ $aspirasi->tujuan_aspirasi }}">
                </tr>
                <tr>
                    <td>Isi Aspirasi</td>
                    <td>:</td>
                    <td><textarea name="isi_aspirasi" placeholder="Isi Aspirasi">{{ $aspirasi->isi_aspirasi}}</textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Edit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>