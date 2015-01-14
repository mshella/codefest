<?php 

namespace App\Controller;

use Norm\Norm;

/**
* author : Shella
*/
class ReportController extends \Norm\Controller\NormController
{
		

	public function mapRoute()
	{		
		
		$this->map('/rpt', 'doReport')->via('GET', 'POST');
		parent:: mapRoute();
	}

	public function doReport()
	{
	
		if (!empty($_POST['name'])) {
		echo "<center>{$_POST['name']}</center>";
		} 

	}

}



