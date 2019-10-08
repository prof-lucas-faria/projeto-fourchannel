<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model extends CI_Model
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

        $verificaPessoa = $this->db->insert('pessoas', $pessoa);

        $insertId = $this->db->insert_id();

        $usuario = array(
            'nome_usuario' => $dados['usuario']['nome_usuario'],
            'email' => $dados['usuario']['email'],
            'senha' => $dados['usuario']['senha'],
            'foto' => $dados['usuario']['foto'],
            'pessoa_idpessoa' => $insertId,
        );

        $verificaUsuario = $this->db->insert('usuarios', $usuario);

        if ($verificaPessoa && $verificaUsuario) {
            return true;
        }
        return false;
    }

    public function atualizarUsuario($dados, $id)
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

        if ($this->db->update('pessoas', $pessoa) && $this->db->update('usuarios', $usuario)) {
            return true;
        }
        return false;
    }

    public function exibirInformacoesDoUsuario($id)
    {
       
    $query = $this->db->query("SELECT * from pessoas INNER JOIN usuarios on pessoas.idpessoa = usuarios.pessoa_idpessoa WHERE pessoas.idpessoa = {$id}");
       return $query->result();
        //return $consulta;
     }

    public function buscarUsuario($dados)
    {
        $this->db->select('*');
        $this->db->where('email', $dados['email']);
        $this->db->where('senha', $dados['senha']);
        $this->db->from('usuarios');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function adicionarSerieAoUsuario($dados)
    {
        # code...
    }

    public function adicionarFilmesAoUsuario($dados)
    {
        $this->db->select('*');
        $this->db->where('id_filme', $dados['id']);
        $this->db->from('filmes');
        $consulta = $this->db->get();
        $id = "";

        if (!count($consulta->result()) > 0) {
            $insert = array(
                'id_filme' => $dados['id'],
                'duracao' => $dados['duracao'],
            );

            $this->db->insert("filmes", $insert);
            $id = $this->db->insert_id();
        }

        $this->db->select('*');
        $this->db->where('filmes_idfilmes',  $id == "" ? $consulta->result()[0]->idfilmes : $id);
        $this->db->where('usuarios_idusuario', $dados['id_usuario']);
        $this->db->from('estatisticas_filmes');
        $consulta = $this->db->get();

        if (!count($consulta->result()) > 0) {
            $this->db->insert('estatisticas_filmes',
                array(
                    'filmes_idfilmes' => $id == "" ? $consulta->result()[0]->idfilmes : $id,
                    'usuarios_idusuario' => $dados['id_usuario'],
                    'assistido' => 1)
            );

            if ($this->db->affected_rows() > 0) {
                return 1;
            } else {
                return 2;
            }
        }else{
            return 3;
        }

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
