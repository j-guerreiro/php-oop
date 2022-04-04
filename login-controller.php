<?php 

class LoginController {

  private $idUsuario;
  private $senha;
  private $senhaRepetida;
  private $enderecomail;


  public function __construct($idUsuario, $senha, $senhaRepetida, $email) 
  {
    $this->$idUsuario = $idUsuario;
    $this->$senha = $senha;
    $this->$senhaRepetida = $senhaRepetida;
    $this->$email = $email;
  }


}
