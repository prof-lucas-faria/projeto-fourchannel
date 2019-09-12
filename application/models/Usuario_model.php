<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function adicionarUsuario($dados)
    {
        $pessoa = array(
            'nome' => $dados['pessoa']['nome'],
            'data_nascimento' => $dados['pessoa']['data_nascimento'],
            'telefone' => $dados['pessoa']['telefone'],
            'sexo' => $dados['pessoa']['sexo'],
        );
        $usuario = array(
            'nome_usuario', $dados['usuario']['nome_usuario'],
            'email', $dados['usuario']['email'],
            'senha', $dados['usuario']['senha'],
            'foto', $dados['usuario']['foto'],
            'pessoa_idpessoa', $dados['usuario']['pessoa_idpessoa'],
        );

        if ($this->db->insert('pessoas', $$pessoa) && $this->db->insert('usuarios', $usuario)) {
            return true;
        }
        return false;
    }

    public function atualizarUsuario($dados,$id)
    {
        $pessoa = array(
            'nome' => $dados['pessoa']['nome'],
            'data_nascimento' => $dados['pessoa']['data_nascimento'],
            'telefone' => $dados['pessoa']['telefone'],
            'sexo' => $dados['pessoa']['sexo'],
        );
        $usuario = array(
            'nome_usuario', $dados['usuario']['nome_usuario'],
            'email', $dados['usuario']['email'],
            'senha', $dados['usuario']['senha'],
            'foto', $dados['usuario']['foto'],
            'pessoa_idpessoa', $dados['usuario']['pessoa_idpessoa'],
        );

        $this->db->where('id', $id);
        
        if($this->db->update('pessoas', $pessoa) && $this->db->update('usuarios', $usuario)){
          return true;
        }
        return false;
    }

    public function adicionarSerieAoUsuario($dados)
    {
        # code...
    }

    public function adicionarFilmesAoUsuario($dados)
    {
        # code...
    }

    public function atualizarSerieUsuario($dados)
    {
        # code...
    }

    public function atualizarFilmeUsuario($dados)
    {
        # code...
    }

}
