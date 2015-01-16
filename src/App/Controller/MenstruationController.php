<?php 

namespace App\Controller;

use Norm\Norm;

/**
* author : Shella
*/
class MenstruationController extends \Norm\Controller\NormController
{

	public function mapRoute()
	{		
		
		$this->map('/', 'create')->via('GET', 'POST');
		parent:: mapRoute();
	}

}



