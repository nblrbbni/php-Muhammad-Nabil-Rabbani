<?php
// Nomor 1
echo "Nomor 1" . "<br>";
function segitiga($size) {
    for ($row = 0; $row < $size; $row++) {
        for ($col = 0; $col < $row + 1; $col++) {
            echo "*";
        }
        echo "<br>";   
    }
}
segitiga(10); 

// Nomor 2
echo "<br>" . "Nomor 2" . "<br>";
$array = ["PHP", "JAVASCRIPT", "LARAVEL"];
echo implode(", ", $array); // Hasil: PHP, JAVASCRIPT, LARAVEL

// Nomor 3
echo "<br> <br>" . "Nomor 3" . "<br>";
$explode = "PHP, JAVASCRIPT, LARAVEL";
$arrayExp =  explode(", ", $explode);
print_r($arrayExp); // Hasil: Array ( [0] => PHP [1] => JAVASCRIPT [2] => LARAVEL )

//Nomor 4
echo "<br> <br>" . "Nomor 4" . "<br>";
$username  = '';
$password = '';

// Message error required
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

<?php
//Nomor 5
echo "<br> <br>" . "Nomor 5" . "<br>";
class Student {
    private $name;
    private $age;
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function setName($newName) {
        $this->name = $newName;
    }
    
    public function setAge($newAge) {
        $this->age = $newAge;
    }
}

$student1 = new Student('John', 20);

echo "Namanya " . $student1->getName() . ", dia berumur " . $student1->getAge(); // Output: Namanya John, dia berumur 20

//Nomor 6
echo "<br> <br>" . "Nomor 6" . "<br>";
class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

}

$rectangle1 = new Rectangle(5, 8);
echo $rectangle1->calculateArea();

// Nomor 7
echo "<br> <br>" . "Nomor 7" . "<br>";
class Person {
    private $name;
    private $age;
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getInfo() {
        return "Namanya $this->name dia berumur $this->age tahun.";
    }
}

$person1 = new Person('Sarah', 25);
echo $person1->getInfo();

//Nomor 8
echo "<br> <br>" . "Nomor 8" . "<br>";
class Circle {
    public $radius;
    
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

$circle1 = new Circle();
$circle1->radius = 10;

echo $circle1->calculateArea();

// Nomor 9
echo "<br> <br>" . "Nomor 9" . "<br>";
class Car {
    public $brand;
    public $year;
    
    public function getInfo() {
        return "Mobil merk " . $this->brand . " tahun produksi " . $this->year;
    }
}

$car1 = new Car();
$car1->brand = "Toyota";
$car1->year = 2020;

echo $car1->getInfo();

// Nomor 10
echo "<br> <br>" . "Nomor 10" . "<br>";
class Animal {
    public $name;
    public $sound;
    
    public function makeSound() {
        echo "Hewan " . $this->name . " suaranya: " . $this->sound;
    }
}

$animal1 = new Animal();
$animal1->name = "Kucing";
$animal1->sound = "Meow";

$animal1->makeSound();