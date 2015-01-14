<?php 
 use \Norm\Schema\String; 
 

 return array(    
    'schema' => array(
        'name' => String::create('name')->filter('trim'),
        'privilege'=> String::create('privilege')
    )
);




