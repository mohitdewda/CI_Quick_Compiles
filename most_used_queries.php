<?php
	/* Select Query, Using result(), @returns Std Object */
	$this->db->from('');
	$this->db->where('', $identifier);
	$query = $this->db->get();
	$data = $query->result();														// returns data in array of objects form
	
	/* all DATA */
	$query = $this->db->get('mytable')->result();						// returns data in array of objects form
	
	/* all DATA with LIMIT */
	$query = $this->db->get('mytable', $lower_lim, $upper_lim )->result();			// returns data in array of objects form
	
	/* all DATA with WHERE, LIMIT */
	$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset)		// returns data in array of objects form
					->result()
