<?php
//Conexió de la base de dade

require_once '../model/config.php';
require_once '../model/database.php';

session_start();

$userInput = (isset($_POST['user'])) ? $_POST['user'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";
$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$cognoms = (isset($_POST['cognoms'])) ? $_POST['cognoms'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";

class CrearUsuari
{
    private $user;
    private $password;
    private $nom;
    private $cognoms;
    private $email;
    private $conn;

    public function __construct($conn, $user, $password, $nom, $cognoms, $email)
    {
        $this->user = $user;
        $this->password = $password;
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->email = $email;
        $this->conn = $conn;
    }

    public function checkEmpties()
    {
        if (empty($this->user) || empty($this->password) || empty($this->nom) || empty($this->cognoms) || empty($this->email)) {
            header("Location: ../registre.php?error=2");
            exit;
        }
    }

    public function checkUser()
    {
        $user = seleccionaUsuari($this->conn, $this->user,$this->password);
        if ($user) {
            header("Location: ../registre.php?error=alreadyExists");
            exit;
        }
    }
    public function revisaSiEmailAgafat()
    {
        $email = revisaSiEmailAgafat($this->conn, $this->email);
        if ($email) {
            header("Location: ../registre.php?error=alreadyExists");
            exit;
        }
    }

    public function insertUser()
    {
        $result = insertemUsuari($this->conn, $this->userInput, $this->password, $this->nom, $this->cognoms, $this->email);
        if (!$result) {
            header("Location: ../registre.php?error=problemCreatingUser");
            exit;
        } else {
            $_SESSION['user'] = $result;
            header("Location: ../cv.php");
            exit;
        }
    }
    
    public function sendEmail()
    {
        $to = $this->email;
        $subject = "Benvingut a la meva web";
        $txt = "Hola " . $this->nom . " " . $this->cognoms . ", benvingut a la meva web. Gràcies per registrar-te.";
        $from = "annacampsromero@gmail.com";
        $headers = "From:" . $from;
        mail($to, $subject, $txt, $headers);
    }
}

$usuari = new CrearUsuari($conn, $userInput, $password, $nom, $cognoms, $email);
$usuari->checkEmpties();
$usuari->checkUser();
$usuari->revisaSiEmailAgafat();
$usuari->insertUser();
$usuari->sendEmail();
