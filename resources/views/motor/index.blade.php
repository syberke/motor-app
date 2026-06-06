<!DOCTYPE html>
<html>
<head>
    <title>Daftar Motor</title>
</head>
<body>

    <h1>Daftar Motor</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nama Motor</th>
            <th>Harga</th>
        </tr>

        @foreach($motors as $motor)
        <tr>
            <td>{{ $motor['nama'] }}</td>
            <td>Rp {{ $motor['harga'] }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>