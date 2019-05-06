<html>
<head>
    <title>kursi</title>
</head>
<body>
@foreach($kursi as $k)
    <form action="/kursi/update" method="POST">
        {{ csrf_field() }}
        <input type="number" name="code" value="16650036">
        <input type="text" name="tamu" value="2">
        <input type="submit" name="simpan"><br>
    </form>
@endforeach
</body>
</html> 