<?php

namespace App\Controllers;

use App\Models\ModelAluno;
use App\Models\SubmissaoModel;
use Config\View;

class Home extends BaseController
{
    public function index(): string
    {

        return view('aluno/welcome_message');
    }

    public function cadastro(): string
    {
        return view('aluno/cadastro.php');
    }

    public function ExibirAluno(): string
    {
        $dados['title'] = 'Exibindo os alunos';
        $dados['l1'] = 'Lista de alunos cadastrados';

        $ModelAluno = new ModelAluno();

        //$info = $ModelAluno->findAll();

        $dados = [
            'informacoes' => $ModelAluno->paginate(10),
            'pager'  => $ModelAluno->pager
        ];

        return view('avaliador/ExibirAluno', $dados);
    }

    public function CadastroAluno()
    {

        $data['titulo'] = 'Cadastrar novo aluno';
        $data['acao'] = 'inserir';

        $data['msg'] = '';

        //if ($this->request->getMethod() === 'post'); {
        if (count($_POST) > 0) {

            $modelAluno = new \App\Models\ModelAluno();

            $modelAluno->set('nome', $this->request->getPost('nome'));
            $modelAluno->set('email', $this->request->getPost('email'));
            $modelAluno->set('curso', $this->request->getPost('curso'));
            $modelAluno->set('senha', $this->request->getPost('senha'));

            if ($modelAluno->insert()) {
                $data['msg'] = 'Aluno cadastrado com sucesso';
            } else {
                $data['msg'] = 'Erro ao cadastrar aluno';
            }
        }

        echo View('aluno/cadastro', $data);
    }

    public function Submissao()
    {


        

            $modelSubmissao = new \App\Models\SubmissaoModel();

            $modelSubmissao->set('titulotrabalho', $this->request->getPost('titulotrabalho'));
            $modelSubmissao->set('curso', $this->request->getPost('curso'));
            $modelSubmissao->set('autor', $this->request->getPost('autor'));

            if ($modelSubmissao->insert()) {
                $data['msg'] = 'Submetido com sucesso';
            } else {
                $data['msg'] = 'Erro ao submeter';
            }

            echo  view('aluno/Submissao', $data);
        

        
    }
    public function Avaliacao()

    {
        
        $data['titulo'] = 'Avaliacao de artigos';
        $data['acao'] = 'inserir';

        $data['msg'] = '';

        if (count($_POST) > 0) {

            $modelAvaliacao = new \App\Models\AvaliacaoModel();

            $modelAvaliacao->set('idaluno', $this->request->getPost('idaluno'));
            $modelAvaliacao->set('idavaliador', $this->request->getPost('idavaliador'));
            $modelAvaliacao->set('introducao', $this->request->getPost('introducao'));
            $modelAvaliacao->set('organizacao', $this->request->getPost('organizacao'));
            $modelAvaliacao->set('repeticoes', $this->request->getPost('repeticoes'));
            $modelAvaliacao->set('apresentacao', $this->request->getPost('apresentacao'));
            $modelAvaliacao->set('conclusao', $this->request->getPost('conclusao'));
            $modelAvaliacao->set('tempoapresentacao', $this->request->getPost('tempoapresentacao'));

            if ($modelAvaliacao->insert()) {
                $data['msg'] = 'Avaliacao feita com sucesso';
            } else {

                $data['msg'] = 'Avaliacao nao foi feita';
            }
        }

            echo view('avaliador/Avaliacao', $data);
        
    }

    public function ExibirAvaliacao(): string
    {
        //$dados['title'] = 'Exibindo as Avaliacao';
        // $dados['l1'] = 'Lista de Avaliacoes';
        
        

            $modelAvaliacao = new \App\Models\AvaliacaoModel();
        

            //$info = $modelAvaliacao->findAll();

            $dados = [
                'informacoes' => $modelAvaliacao->paginate(10),
                'pager'  => $modelAvaliacao->pager
            ];
        
        
        
            return view('avaliador/ExibirAvaliacao', $dados);
        
    }

    public function ExibirSubmissao(): string
    {
        $dados['title'] = 'Exibindo as Submissao';
        $dados['l1'] = 'Lista de Avaliacoes';

        if (count($_POST) > 0) {

            $modelSubmissao = new \App\Models\SubmissaoModel();

            //  $info = $modelSubmissao->findAll();

            $dados = [
                'informacoes' => $modelSubmissao->paginate(10),
                'pager' => $modelSubmissao->pager
            ];

        }
            return view('aluno/ExibirSubmissao', $dados);
        
    }
    public function admin(): string
    {

        return view('avaliador/Administracao');
    }


    /*
    public function verSubmissao()
 
    {

    $verSubmissao = new SubmissaoModel();
    

    $listaSubmissao = $verSubmissao->asArray()->findAll();
    
    $table = new \CodeIgniter\View\Table();

   // $table->setHeading('id','titulotrabalho','curso','autor','situacao');

    $data['tabela'] = $table->generate($listaSubmissao); 

    return view ('verSubmissao',$data);

    }
*/

    public function verSubmissao()

    {
        $verSubmissao = new SubmissaoModel();


        $listaSubmissao = $verSubmissao->asArray()->findAll();
        

            $table = new \CodeIgniter\View\Table();
            $table->setHeading('id', 'tituloTrabalho', 'curso', 'autor', 'situacao');
            $table->setTemplate([
                'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-striped">',
                'thead_open'  => '<thead class=" ">',
            ]);

            /*
        $dados = [
        // 'informacoes' => $modelSubmissao->paginate(10),
           'pager' => $verSubmissao->pager
        ];
        */
            $data['tabela'] = $table->generate($listaSubmissao);
            $data['inf'] = $verSubmissao->paginate(10);
            $data['pager'] =  $verSubmissao->pager;


    
            return view('avaliador/verSubmissao', $data);
        
    }
}
