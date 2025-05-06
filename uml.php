<?php

abstract class Pessoa {
  private $nome;
  private $email;
  private $cpf;

  public function __construct(string $nome, string $email, string $cpf){
      $this->nome = $nome;
      $this->email = $email;
      $this->cpf = $cpf;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getCpf()
  {
    return $this->cpf;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setCpf($cpf)
  {
    $this->cpf = $cpf;
  }
  abstract public function consultaEmprestimo($emprestimo);
}

class membro extends pessoa{
  public function __construct(string $nome , string $email, string $cpf){
    parent::__construct($nome , $email , $cpf);
  }
  public function consultaEmprestimo($emprestimo){
    echo "ID: " . $emprestimo->getId() . "\n";
    echo "Data Emprestimo: " . $emprestimo->getData()->format('d/m/y') . "\n";
    echo "Status: " . $emprestimo->getStatus() . "\n";
    echo "Data de Devolução: " . $emprestimo->getDataDevolucao()->format('d/m/Y') . "\n";
  }
}

class Emprestimo{
  private string $id;
  private DateTime $data;
  private string $livro;
  private string $status;
  private DateTime $dataDevolucao;

  public function __construct(string $id, DateTime $data, string $livro, string $status, DateTime $dataDevolução ) {
    $this->id = $id;
    $this->data = $data;
    $this->livro = $livro;
    $this->status = $status;
    $this->dataDevolucao = $dataDevolução;
  }
  public function getId(): string {
    return $this->id;
  }
  public function getData() : Datetime {
    return $this->data;
  }
  public function getlivro(): string {
    return $this->livro;
  }
  public function getStatus(): string {
    return $this->status;
  }
  public function getDataDevolucao(): Datetime {
    return $this->dataDevolucao;
  }
}

class Livro {
    private string $id;
    private string $nome;
    private string $autor;
    private string $status;

    public function __construct(string $id, string $nome, string $autor, string $status = "Disponível") {
        $this->id = $id;
        $this->nome = $nome;
        $this->autor = $autor;
        $this->status = $status;
    }

    public function reservaLivro(): void {
        if ($this->status === "Disponível") {
            $this->status = "Reservado";
            echo "Livro reservado com sucesso!\n";
        } else {
            echo "Livro não pode ser reservado. Status atual: {$this->status}\n";
        }
    }

    // Getters
    public function getId(): string {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function getStatus(): string {
        return $this->status;
    }

    // Setters
    public function setStatus(string $status): void {
        $this->status = $status;
    }
}