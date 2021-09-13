<?php

class CandidatosController extends AppController {

	// Action INDEX = Função de controle da Página Inicial
    public function index() {
        //Filtro de Busca por nome dos candidatos
        $where = '';
        if ($this->request->is('get')) {
            if($this->params['url']['nome']){
                $nome = str_replace(" ", "%", $this->params['url']['nome']);
                $where .= ' AND Candidato.nome LIKE "%'.$nome.'%"';
            }
        }

		// Busca no DB pelo último ID inserido
		$idCandidado = $this->Candidato->find('first', array(
			'fields'=> 'Candidato.id',
			'conditions'=> "Candidato.status = 1".$where,
			'limit' => 1,
			'order' => array('Candidato.id' => 'desc'),
		));

		// Variável de Adição de 1 unidade ao último ID registrado no banco para atribuí-lo ao novo candidato
		$idNovoCandidato = $idCandidado['Candidato']['id'] + 1;

        // Organização da Paginação
		$limite = 5;
        $this->paginate = array(
            'fields' => 'Candidato.*',
            'conditions' => "Candidato.status = 1".$where,
            'limit' => $limite,
            'order' => array('Candidato.id' => 'asc')
        );

		// Variável onde conta o array de candidatos
        $listaCandidatos = $this->paginate('Candidato');

		// Passando variáveis para a View
        $this->set(compact('listaCandidatos', 'idNovoCandidato'));
     }

    // Action ADD = Função de adicionar candidato na base de dados
    public function add($id = null) {
		// Carregando a Model
		$this->loadModel('Candidato');
		$this->Candidato->id = $id;
        //Verifico se a requisição é um POST
        if ($this->request->is('post')) {
            //create = criar novo objeto Candidato
            $this->Candidato->create();
            //save = salvar informações no banco de dados
            if ($this->Candidato->save($this->request->data)) {
                //Passando mensagem para a view
                $this->Session->setFlash('Candidato salvo com sucesso!','success');
                //Para onde eu quero que o usuário seja redirecionado
                $this->redirect(array('controller' => 'candidatos', 'action' => 'index'));
            } else {
                //Se der erro
                $this->Session->setFlash('Candidato não pôde ser salvo, tente novamente.','error');
				$this->redirect(array('controller' => 'candidatos', 'action' => 'index'));
            }
        }
    }

	//Action EDIT = Função para editar candidatos na base de dados
	public function edit($id = null) {
		// Carregando a Model
		$this->loadModel('Candidato');
        $this->Candidato->id = $id;
		// Verificando se o ID passado na url via Get corresponde a um registro válido no DB
        if (!$this->Candidato->exists()) {
            throw new NotFoundException(__('Candidato não encontrado'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Candidato->save($this->request->data)) {
                $this->Session->setFlash('Candidato editado com sucesso!','success');
                $this->redirect(array('controller' => 'candidatos', 'action' => 'index'));
            } else {
                $this->Session->setFlash('Candidato não pôde ser editado, tente novamente!','error');
				$this->redirect(array('controller' => 'candidatos', 'action' => 'index'));
            }
        } else {
            $this->request->data = $this->Candidato->findById($id);
        }
    }

	//Action DELETE = Função para delete físico (hard delete) candidatos na base de dados
	// public function delete($id = null) {
    //     $this->Candidato->id = $id;
    //     if (!$this->Candidato->exists()) {
    //         throw new NotFoundException(__('Candidato não encontrado'));
    //     }
    //     if ($this->Candidato->delete()) {
    //         $this->Session->setFlash('Candidato deletado com sucesso!','success');
    //         $this->redirect(array('controller' => 'candidatos', 'action' => 'index'));
    //     }
    //     $this->Session->setFlash('Cargo não pôde ser deletado, tente novamente!','error');
	// 	$this->redirect(array('controller' => 'candidatos', 'action' => 'index'));
    // }

	//Action DELETE = Função para delete lógico (soft delete) candidatos na base de dados
	public function delete($id = null) {
        $this->loadModel('Candidato');
        $this->Candidato->id = $id;
        if (!$this->Candidato->exists()) {
            throw new NotFoundException(__('Candidato não encontrado'));
        }
		if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Candidato->save($this->request->data)) {
                $this->Session->setFlash('Candidato deletado com sucesso!','success');
                $this->redirect(array('controller' => 'candidatos', 'action' => 'index'));
            } else {
                $this->Session->setFlash('Cargo não pôde ser deletado, tente novamente!','error');
				$this->redirect(array('controller' => 'candidatos', 'action' => 'index'));
            }
        } else {
            $this->request->data = $this->Candidato->findById($id);
        }
    }

}
