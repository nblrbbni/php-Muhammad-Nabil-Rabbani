<?php

$usernameError = '';
$passwordError = '';


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(empty($_POST['username'])){
            $usernameError = "Username tidak boleh kosong, harus diisikan.";
        }elseif(empty($_POST['password'])){
            $username = '';
        }else{
            $username = dataType($_POST['username']);
        }
        if(empty($_POST['password'])){
            $passwordError = "Password tidak boleh kosong, harus diisikan.";
        }elseif(empty($_POST['username'])){
            $password = '';
        }else{
            $password = dataType($_POST['password']);
        }
    }

    function dataType($datapassword)
    {
        $inputData = trim($datapassword);
        $inputData = stripslashes($datapassword);
        $inputData = htmlspecialchars($datapassword);
        return $inputData;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="username" >Username</label>
            <input type="text" id="username" name="username" placeholder="Masukan nama anda" />
            <span style="color: red; font-size:12px"><?php echo $usernameError; ?></span>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="password" >Password</label>
            <input type="number" id="password" name="password" placeholder="Masukkan password anda" />
            <span style="color: red; font-size:12px"><?php echo $passwordError; ?></span>
        </div>
        <input type="submit" value="Simpan" style="margin-bottom:-10px">
    </form>

    <?php
    echo "Username saya: " . $username;
    echo "<br>";
    echo "Password saya: " . $password;
    ?>