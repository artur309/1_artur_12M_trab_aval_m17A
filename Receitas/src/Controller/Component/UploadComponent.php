<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;
use mysql_xdevapi\Table;

class UploadComponent extends Component
{
	public $max_files = 3;

	public function send($data)
	{
		if(!empty($data)){
			if(count($data) > $this->max_files)
				throw new NotFoundException("Error Processing Request, Max number files accepted is {$this->max_files}",1);

			foreach ($data as $file) {
				$filename = $file['name'];
				$file_tmp_name = $file['tmp_name'];
				$dir = WWW_ROOT.'img'.DS.'uploads';
				$allowed = array('png','jpg','jpeg','svg','JPG','gif');
				if(!in_array(substr(strrchr($filename, '.'), 1), $allowed))
					throw new NotFoundException("Error Processing Request", 1);

				elseif(is_uploaded_file($file_tmp_name)){
					$filename =Text::uuid().'-'.$filename;

					$filedb= TableRegistry::get('Files');
					$entity = $filedb->newEntity();
					$entity->filename=$filename;
					$filedb->save($entity);

					move_uploaded_file($file_tmp_name, $dir.DS.$filename);
				}
			}
		}
	}
}