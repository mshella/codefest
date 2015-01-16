<?php 
	use Norm\Schema\Reference;
	use Norm\Schema\String;
	use Norm\Schema\Date;

	return array(
		'schema' => array(
				'user_id' 		=> Reference::create('user_id')->to('User', 'user_id'),
				'start_date'	=> Date::create('start_date'),
				'end_date'		=> Date::create('end_date'),
			),
		);
