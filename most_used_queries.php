<?php
	/* Select Query, Using result(), @returns Std Object */
	$this->db->from('');
	$this->db->where('', $identifier);
	$query = $this->db->get();
	$data = $query->result();														// returns data in array of objects form
	
	/* Get all data from a table */
	$query = $this->db->get('mytable')->result();									// returns data in array of objects form
	
	/* Get all data from a table with limits */
	$query = $this->db->get('mytable', $lower_lim, $upper_lim )->result();			// returns data in array of objects form