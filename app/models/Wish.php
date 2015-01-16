<?php 

class Wish extends Eloquent {

    protected $table = 'wish';
    
	public static $rules = array(		
		'wish'=>'required'
	);
}