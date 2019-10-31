<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Filme_model');
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
            return $insertId;
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

        $this->db->select('*');
        $this->db->where('id_serie', $dados['serie']['id']);
        $this->db->from('series');
        $consulta = $this->db->get();
        $id = "";

        if (!count($consulta->result()) > 0) {
            $insert = array(
                'id_serie' => $dados['serie']['id'],
            );

            $this->db->insert("series", $insert);

            $id = $this->db->insert_id();
            $dados['temporadas']['series_idserie'] = $this->db->insert_id();

            $this->db->insert("temporadas",$dados['temporadas']);

        }

        $this->db->select('*');
        $this->db->where('serie_idserie',  $id == "" ? $consulta->result()[0]->idserie : $id);
        $this->db->where('usuario_idusuario', $dados['usuario']['id_usuario']);
        $this->db->from('estatisticas_series');
        $consulta = $this->db->get();

        if (!count($consulta->result()) > 0) {
            $this->db->insert('estatisticas_series',
                array(

                    'serie_idserie' => $id == "" ? $consulta->result()[0]->idseries : $id,
                    'usuario_idusuario' => $dados['usuario']['id_usuario'],
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

    public function listarFilmesJaAssistidos($dados)
    {
     $query = $this->db->query(
         "SELECT * from 
         usuarios u 
         inner JOIN estatisticas_filmes ef
                 on u.idusuario = ef.usuarios_idusuario 
         inner JOIN filmes ff 
                on ef.filmes_idfilmes = ff.idfilmes 
        WHERE u.idusuario = {$dados['id']}
        ");
        $informacoes = array();
        foreach ($query->result() as $row)
        {
            $informacoes[] = $this->Filme_model->buscarPorID($row->id_filme);
        }

        return $informacoes;
    }

    public function qtdeHorasFilmesAssistidos($dados)
    {
        $query = $this->db->query(
            "SELECT SUM(ff.duracao) as tempoFilme  from 
            usuarios u 
            inner JOIN estatisticas_filmes ef
                    on u.idusuario = ef.usuarios_idusuario 
            inner JOIN filmes ff 
                   on ef.filmes_idfilmes = ff.idfilmes 
           WHERE u.idusuario = {$dados['id']}
           ");
           return $query->result();
    }

}
