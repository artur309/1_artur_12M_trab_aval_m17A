<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;

class ReceitasController extends AppController
{
	public function index()
	{
		if($this->request->is('post'))
		{
			$locale = $this->request->data('Idiomas');
			I18n::locale($locale);
		}
		
		$this->Receitas->recursive = 0;
		$this->paginate = array('limit'=>3);
		$this->set('receita',$this->paginate());
		// $this->set(compact('receita'));
	}

	public function lastPosts($limit)
	{
		$articles = $this->Receitas->find('all',
			array(
				'fields'=>array('id','nome','descricao'),
				'recursive'=>0,
				'order'=>array('created DESC'),
				'limit'=>$limit)
		);
		$this->response->body(json_encode($articles));
		return $this->response;
	}

	public function view($id = null)
	{
		$receita = $this->Receitas->get($id);
		$this->set('receita', $receita);
	}

	public function add()
	{
		$receita = $this->Receitas->newEmptyEntity();
		if ($this->request->is('post')) {
			$receita = $this->Receitas->patchEntity($receita, $this->request->getData());
			if ($this->Receitas->save($receita)) {
				$this->Flash->success(__('A receita foi salva.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Erro ao salvar a receita. Tente outra vez mais tarde.'));
		}
		$this->set(compact('receita'));
	}

	public function edit($id = null)
	{
		$receita = $this->Receitas->get($id);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$receita = $this->Receitas->patchEntity($receita, $this->request->getData()); 
			if ($this->Receitas->save($receita)) {
				$this->Flash->success(__('A receita foi salva.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Erro ao salvar a receita. Tente outra vez mais tarde.'));
		}
		$this->set(compact('receita')); 
	}

	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$receita = $this->Receitas->get($id);
		if ($this->Receitas->delete($receita)) {
			$this->Flash->success(__('A receita foi apagada.'));
		} else {
			$this->Flash->error(__('Erro ao salvar a receita. Tente outra vez mais tarde.'));
		}
		return $this->redirect(['action' => 'index']);
	}
}