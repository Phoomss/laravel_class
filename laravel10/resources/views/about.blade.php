<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    <?php
    $sid = '65309';
    $sname = 'Nanrong';
    ?>
    <a href="{{ route('profile', ['id' => $sid, 'name' => $sname]) }}">Profile</a>
</body>

</html>
