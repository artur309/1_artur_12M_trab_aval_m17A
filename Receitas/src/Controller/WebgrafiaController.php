<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;

class WebgrafiaController extends AppController
{
	public function index()
	{
		if($this->request->is('post'))
		{
			$locale = $this->request->data('Idiomas');
			I18n::locale($locale); 
		}
	}
}