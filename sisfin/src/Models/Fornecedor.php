<?php

namespace Sisfin\Models;

use PDO;
use Sisfin\Util\Connection;
use Sisfin\Util\TipoPessoa;

class Fornecedor
{
    private int $_id;
    private TipoPessoa $_tipoPessoa;
    private string $_nome;
    private string $_email;
    private string $_cnpj;
    private string $_razao_social;
    private string $_rua;
    private int $_num;
    private string $_bairro;
    private string $_cidade;
    private string $_complemento;
    private string $_cep;
    private string $_telefone;
    private string $_celular;

    public function __construct(int $_id, TipoPessoa $_tipoPessoa, string $_nome, string $_email, string $_cnpj, string $_razao_social, string $_rua, int $_num, string $_bairro, string $_cidade, string $_complemento, string $_cep, string $_telefone, string $_celular)
    {
        $this->_id = $_id;
        $this->_tipoPessoa = $_tipoPessoa;
        $this->_nome = $_nome;
        $this->_email = $_email;
        $this->_cnpj = $_cnpj;
        $this->_razao_social = $_razao_social;
        $this->_rua = $_rua;
        $this->_num = $_num;
        $this->_bairro = $_bairro;
        $this->_cidade = $_cidade;
        $this->_complemento = $_complemento;
        $this->_cep = $_cep;
        $this->_telefone = $_telefone;
        $this->_celular = $_celular;
    }

    public function getId(): int
    {
        return $this->_id;
    }

    public function setId(int $id): Fornecedor
    {
        $this->_id = $id;
        return $this;
    }

    public function getTipoPessoa(): TipoPessoa
    {
        return $this->_tipoPessoa;
    }

    public function setTipoPessoa(TipoPessoa $tipoPessoa): Fornecedor
    {
        $this->_tipoPessoa = $tipoPessoa;
        return $this;
    }

    public function getNome(): string
    {
        return $this->_nome;
    }

    public function setNome(string $nome): Fornecedor
    {
        $this->_nome = $nome;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->_email;
    }

    public function setEmail(string $email): Fornecedor
    {
        $this->_email = $email;
        return $this;
    }

    public function getCnpj(): string
    {
        return $this->_cnpj;
    }

    public function setCnpj(string $_cnpj): Fornecedor
    {
        $this->_cnpj = $_cnpj;
        return $this;
    }

    public function getRazaoSocial(): string
    {
        return $this->_razao_social;
    }

    public function setRazaoSocial(string $_razao_social): Fornecedor
    {
        $this->_razao_social = $_razao_social;
        return $this;
    }

    public function getRua(): string
    {
        return $this->_rua;
    }

    public function setRua(string $_rua): Fornecedor
    {
        $this->_rua = $_rua;
        return $this;
    }

    public function getNum(): int
    {
        return $this->_num;
    }

    public function setNum(int $_num): Fornecedor
    {
        $this->_num = $_num;
        return $this;
    }

    public function getBairro(): string
    {
        return $this->_bairro;
    }

    public function setBairro(string $_bairro): Fornecedor
    {
        $this->_bairro = $_bairro;
        return $this;
    }

    public function getCidade(): string
    {
        return $this->_cidade;
    }

    public function setCidade(string $_cidade): Fornecedor
    {
        $this->_cidade = $_cidade;
        return $this;
    }

    public function getComplemento(): string
    {
        return $this->_complemento;
    }

    public function setComplemento(string $_complemento): Fornecedor
    {
        $this->_complemento = $_complemento;
        return $this;
    }

    public function getCep(): string
    {
        return $this->_cep;
    }

    public function setCep(string $_cep): Fornecedor
    {
        $this->_cep = $_cep;
        return $this;
    }

    public function getTelefone(): string
    {
        return $this->_telefone;
    }

    public function setTelefone(string $_telefone): Fornecedor
    {
        $this->_telefone = $_telefone;
        return $this;
    }

    public function getCelular(): string
    {
        return $this->_celular;
    }

    public function setCelular(string $_celular): Fornecedor
    {
        $this->_celular = $_celular;
        return $this;
    }

    public static function getAll(): array{
        try{
            $cn = Connection::make();
            $sql = "SELECT * FROM fornecedor";
            $result = $cn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }catch(\PDOException $ex){
            return array(null);
        }
    }
}