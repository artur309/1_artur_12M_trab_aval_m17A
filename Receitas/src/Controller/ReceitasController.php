<?php

namespace App\Controller;

use App\Controller\AppController;

class ReceitasController extends AppController
{
	public function index()
	{
		$this->Receitas->recursive = 0;
		$this->paginate = array('limit'=>3);
		$this->set('receita',$this->paginate());
		
		// $this->set(compact('receita'));
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
		$this->viewBuilder()->setOption('serialize', ['receita']);
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