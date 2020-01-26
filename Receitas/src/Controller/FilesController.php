<?php
namespace App\Controller;

use App\Controller\AppController;

class FilesController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Upload');
	}

	public function index()
	{
		$this->Files->recursive = -1;
		$this->paginate = [
			'limit' => 6 //Limite máximo de registos mostrados por página
		];
		$this->set('files', $this->paginate()); //paginacao dos itens

		//upload
		if (!empty($this->request->data)){
			$this->Upload->send($this->request->data['uploadfile']);
			$this->set(compact('files'));
			return $this->redirect(['controller' => 'Files', 'action' => 'index']); //faz refresh na pagina
		}
	}

	public function back()
	{
		$this->redirect('/Receitas');
	}
}