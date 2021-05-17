<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Translate</title>
</head>
<body>
<h1> Translate</h1>
<form method="post" action="">
    @csrf
    Tieng anh :<input type="text" name="word" placeholder="Nhập từ bạn muốn tra">
    <button type="submit"> Translate</button>

</form>
@isset($result)
    <h2>"ket qua tim kiem : {{$result}}"</h2>
@endisset
</body>
</html>
