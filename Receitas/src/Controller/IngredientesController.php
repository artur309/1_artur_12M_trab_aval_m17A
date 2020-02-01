<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\I18n\I18n;

class IngredientesController extends AppController
{
	public function index()
	{
		if($this->request->is('post')){
			$locale = $this->request->data('Idiomas');
			I18n::locale($locale);
		// I18n::locale('de_DE');
		}
		
		$ingrediente = $this->paginate($this->Ingredientes);
		$this->set(compact('ingrediente'));
	}

	public function view($id = null)
	{
		$ingrediente = $this->Ingredientes->get($id);
		$this->set('ingrediente', $ingrediente);
	}

	public function add()
	{
		$ingrediente = $this->Ingredientes->newEntity();
		if ($this->request->is('post')) {
			$ingrediente = $this->Ingredientes->patchEntity($ingrediente, $this->request->getData());
			if ($this->Ingredientes->save($ingrediente)) {
				$this->Flash->success(__('O ingrediente foi salvo.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Erro ao salvar o ingrediente. Tente outra vez mais tarde.'));
		}
		$this->set(compact('ingrediente'));
	}

	public function edit($id = null)
	{
		$ingrediente = $this->Ingredientes->get($id);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$ingrediente = $this->Ingredientes->patchEntity($ingrediente, $this->request->getData());
			if ($this->Ingredientes->save($ingrediente)) {
				$this->Flash->success('O ingrediente foi editado.');
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Erro ao salvar o ingrediente. Tente outra vez mais tarde.'));
		}
		$this->set(compact('ingrediente'));
	}

	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$ingrediente = $this->Ingredientes->get($id);
		if ($this->Ingredientes->delete($ingrediente))
			$this->Flash->success(__('O ingrediente foi apagado.'));
		else
			$this->Flash->error(__('Erro ao salvar o ingrediente. Tente outra vez mais tarde.'));
		return $this->redirect(['action' => 'index']);
	}
}