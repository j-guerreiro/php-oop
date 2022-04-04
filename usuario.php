<?php

class Usuario
{
  public string $nome;
  public string $sobreNome;
  public string $email;
  public int $contadorSeguidores;
  public string $login;
  public string $senha;

  public function setNome(string $nome): void
  {
    $this-> $nome = $nome;
  }

  public function setSobrenome(string $sobreNome): void
  {
    $this->$sobreNome = $sobreNome;
  }

  public function setEmail(string $email): void
  {
    $this->$email = $email;
  }

  public function setcontadorSeguidores(int $contadorSeguidores): void
  {
    $this->$contadorSeguidores = $contadorSeguidores;
  }

  public function setLogin(string $login): void
  {
    $this->login = $login;
  }

  public function setSenha(string $senha): void
  {
    $this->senha = $senha;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getSobrenome(): string
  {
    return $this->sobreNome;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function getcontadorSeguidores(): int
  {
    return $this->contadorSeguidores;
  }

  public function getLogin(): string
  {
    return $this->login;
  }

  public function getSenha(): string
  {
    return $this->senha;
  }

  public function printarDadosUsuario($nome, $sobreNome, $email, $contadorSeguidores, $login, $senha)
  {

    echo "+--------------Dados do Usuário----------------+\n";
    echo "| Nome: {$nome}                                   |\n";
    echo "<---------------------------------------------->\n";
    echo "| Sobrenome: {$sobreNome}                             |\n";
    echo "<---------------------------------------------->\n";
    echo "| Email: {$email}                          |\n";
    echo "<---------------------------------------------->\n";
    echo "| Seguidores: {$contadorSeguidores}                             |\n";
    echo "<---------------------------------------------->\n";
    echo "| Login: {$login}                            |\n";
    echo "<---------------------------------------------->\n";
    echo "| Senha: {$senha}                          |\n";
    echo "*----------------------------------------------*\n";

  }
}
