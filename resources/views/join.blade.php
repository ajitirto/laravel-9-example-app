<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join</title>
</head>
<body>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Harga</td>
            <td>Deskripsi</td>
        </tr>
    @foreach ($join as $j)

    {{-- <li>
        {{$loop->iteration}} <span>{{$j->nama}}</span> || <span>{{$j->harga}}</span> || <span>{{$j->deskripsi}}</span>
    </li> --}}
        <tr>
            <td>{{$loop->iteration}} </td>
            <td>{{$j->nama}}</td>
            <td>{{$j->harga}}</td>
            <td>{{$j->deskripsi}}</td>
        </tr>




    @endforeach
</table>

</body>
</html>
