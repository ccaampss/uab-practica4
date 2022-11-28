<?php

require_once '../model/config.php';
require_once '../model/database.php';

session_start();

$userInput = (isset($_POST['user'])) ? $_POST['user'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";

class validarUsuari
{
  private $userInput;
  private $password;
  private $conn;

  public function __construct($conn, $userInput, $password){
        $this->userInput = $userInput;
        $this->password = $password;
        $this->conn = $conn;
  }

  public function checkEmpties(){
    if (empty($this->userInput) || empty($this->password)) {
      header('Location: ../index.php?error=unfilled');
      exit;
    }
  }

  public function checkUser(){
    $user = seleccionaUsuari($this->conn, $this->userInput);
    if (!$this->userInput) {
      header('Location: ../index.php?error=wrongUser');
      exit;
    }
  }

  public function verifyPassword(){
  $passwordCorrect = validaContrasenya ($this->conn, $this->password, $this->userInput);
    if ($passwordCorrect) {
      $_SESSION['user'] = $this->userInput;
      header('Location: ../cv.php');
      } 
    else {
      echo 'Les contrasenyes no són les mateixes';
      header('Location:../index.php?error=3');   
      exit;
    }
  }
}   

$usuaris = new validarUsuari($conn, $userInput, $password);
$usuaris->checkEmpties();
$usuaris->checkUser();

?>


