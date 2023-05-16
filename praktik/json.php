<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON PHP</title>
</head>
<body>

    <?php 
    $password = array(
    // 'key' => 'value'
    'X' => 'password X',
    'XI' => 'password XI',
    'XII' =>  'password XII',
    'XIII' =>  'password XIII',
    'XIV' =>  'password XIV',

    );

    // password X, password XI, password XII
    // Pakai foreach untuk perulangan data keas aray
    foreach ($password as $array) {
        echo $array . "<br>";
    }
    echo json_encode($password);

    echo "<br>";

    $passwordDecode = '{"X" : 1, "XI" : 2, "XII" : 3}';
    var_dump(json_decode($passwordDecode));

    echo '<br>';

    $object = json_decode($passwordDecode);
    print $object -> {'X'};
    ?>

</body>
</html>