<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Table;
use Cake\I18n\I18n;

class ReceitasController extends AppController
{
	public function index()
	{
		//idioma
		if($this->request->is('post'))
		{
			$locale = $this->request->data('Idiomas');
			I18n::locale($locale);
		}
		
		$this->Receitas->recursive = 0;
		$this->paginate = array('limit'=>3); //limita a 3 items por pagina
		$this->set('receita',$this->paginate()); //paginacao 
	}

	public function view($id = null)  //funciona para ver item unico numa pagina
	{
		$receita = $this->Receitas->get($id);
		$this->set('receita', $receita);
	}

	public function add() //adiciona um novo item unico 
	{
		$receita = $this->Receitas->newEntity();
		if ($this->request->is('post')) {
			$receita = $this->Receitas->patchEntity($receita, $this->request->getData());
			if ($this->Receitas->save($receita)) {
				$this->Flash->success(__('A receita foi salva.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Erro ao salvar a receita. Tente outra vez mais tarde.'));
		}
		$this->set('receita', $receita);
		// $this->set(compact('receita'));
	}

	public function edit($id = null) //edita o item selecionado
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

	public function delete($id = null) //apaga o item selecionado
	{
		$this->request->allowMethod(['post', 'delete']);
		$receita = $this->Receitas->get($id);
		if ($this->Receitas->delete($receita))
			$this->Flash->success(__('A receita foi apagada.'));
		else
			$this->Flash->error(__('Erro ao salvar a receita. Tente outra vez mais tarde.'));
		return $this->redirect(['action' => 'index']);
	}
}