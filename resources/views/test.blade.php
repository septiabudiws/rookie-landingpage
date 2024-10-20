<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellspacing="0">
        <thead>
            <th>username</th>
            <th>password</th>
            <th>portofolio_link</th>
            <th>moto</th>
            <th>status</th>
            <th>gambar</th>
        </thead>
        <tbody>
            @foreach ($user as $pengguna)
                <tr>
                    <td>{{ $pengguna->username }}</td>
                    <td>{{ $pengguna->password }}</td>
                    <td>{{ $pengguna->portofolio_link }}</td>
                    <td>{{ $pengguna->moto }}</td>
                    <td>{{ $pengguna->status }}</td>
                    <td>{{ $pengguna->gambar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <h1>Kategori Artikel</h1>
    <table border="1" cellspacing="0">
        <thead>
            <th>kategori</th>
            <th>jumlah artikel</th>
            <th>jumlah komentar</th>
        </thead>
        <tbody>
            @foreach ($kategori as $k)
                <tr>
                    <td>{{ $k->kategori }}</td>
                    <td>
                        {{ count($k->artikel) }}
                    </td>
                    <td> {{ $k->artikel->sum(function($artikel) {
                        return count($artikel->komentar);
                    }) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <h1>project</h1>
    <table border="1" cellspacing="0">
        <thead>
            <th>author</th>
            <th>jumlah project</th>
        </thead>
            <tbody>
                @foreach ($user as $author)
                    <tr>
                        <td>{{ $author->username }}</td>
                        <td>
                            {{ count($author->projek) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>