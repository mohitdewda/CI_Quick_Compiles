<?php
/**
*	Select Query 
*
*	Using result()
*	@returns Std Object
*/

	$this->db->from('');
	$this->db->where('', $identifier);
	$query = $this->db->get();
	$data = $query->result();
	
	/*
	Data format
	$data = array(
		[0]=> stdObject(
			''->..,
			''->..,
		),
		[1]=> stdObject(
			''->..,
			''->..,
		),		
		..
	)
	*/