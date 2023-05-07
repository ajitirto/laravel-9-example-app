<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show User</title>
</head>
<body>
    @foreach ($userFactory as $user)
        <li>{{$loop->iteration}} <span>Nama </span> : <span>{{$user->name}}</span></li>
        <ul><span>Email </span> : <span>{{$user->email}}</span></ul>
        <ol><span>Price </span> : <span>{{$user->product->price}}</span></ol>
        <ol><span>Quantity </span> : <span>{{$user->product->quantity}}</span></ol>
        <ol><span>Description </span> : <span>{{$user->product->description}}</span></ol>


        <br>
    @endforeach
</body>
</html>
