<?php 
	use Norm\Schema\Reference;
	use Norm\Schema\String;
	use Norm\Schema\Date;

	return array(
		'schema' => array(
				'start_date'	=> Date::create('start_date'),
				'end_date'		=> Date::create('end_date'),
			),
		);
