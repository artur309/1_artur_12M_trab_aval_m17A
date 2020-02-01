<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;

class FilesController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Upload');
	}

	public function index()
	{
		if($this->request->is('post'))
		{
			$locale = $this->request->data('Idiomas');
			I18n::locale($locale);
		}

		$this->Files->recursive = -1;
		$this->paginate = ['limit' => 6 ];//Limite máximo de registos mostrados por página
		$this->set('files', $this->paginate()); //paginacao dos itens

		//upload
		if (!empty($this->request->data)){
			$this->Upload->send($this->request->data['uploadfile']);
			$this->set(compact('files'));
			return $this->redirect(['controller' => 'Files', 'action' => 'index']); //faz refresh na pagina
		}
	}

	public function lastImages($limit)
	{
		$files = $this->Files->find('all',
			array(
				'fields'=>array('id','filename'),
				'recursive'=>0,
				'order'=>array('created DESC'),
				'limit'=>$limit)
		);
		$this->response->body(json_encode($files));
		return $this->response;
	}
}