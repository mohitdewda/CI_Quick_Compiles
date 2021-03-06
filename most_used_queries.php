<?php
	/* Select Query, Using result(), @returns Std Object */
	$this->db->from('');
	$this->db->where('', $identifier);
	$query = $this->db->get();
	$data = $query->result();														// returns data in array of objects form
	
	/* all DATA */
	$query = $this->db->get('mytable')->result();									// returns data in array of objects form
	
	/* all DATA with LIMIT */
	$query = $this->db->get('mytable', $lower_lim, $upper_lim )->result();			// returns data in array of objects form
	
	/* all DATA with WHERE, LIMIT */
	$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset)	// returns data in array of objects form
					->result()

	/* selective DATA  */
	$this->db->select('title, content, date');
	$this->db->from('mytable');
	$query = $this->db->get()->result(); 											// returns data in array of objects form

	/* Multiple JOINS with selective data AND WHERE */
	$this->db->select('*');
	$this->db->from('blogs a');
	$this->db->join('comments b', 'b.id = a.id');
	$this->db->join('likes c', 'c.id = a.id');
	$this->db->where('a.id', $id);
	$query = $this->db->get()->result();											// returns data in array of objects form

	/*  all DATA with WHERE_IN */
	$names = array('Frank', 'Todd', 'James');
	$this->db->from('blogs a');
	$this->db->where_in('name', $names);											// used to search multiple values in a single fields
	$query = $this->db->get()->result();											// returns data in array of objects form

	/*  all DATA with WHERE_NOT_IN */
	$names = array('Frank', 'Todd', 'James');
	$this->db->from('blogs');
	$this->db->where_not_in('name', $names);										// used to ignore multiple values in a single fields
	$query = $this->db->get()->result();											// returns data in array of objects form

	/* all DATA with LIKE */
	$this->db->from('blogs');
	$this->db->like('name', $name);													// used to for search strings
	$query = $this->db->get()->result();											// returns data in array of objects form

	/* all DATA with LIKE */
	$position = "before OR after";
	$this->db->from('blogs');
	$this->db->like('name', $name, $position);										// $position is wildcard % placement
	$query = $this->db->get()->result();											// returns data in array of objects form

	/* all DATA with LIKE using array or object */
	$array = array('title' => $match, 'page1' => $match, 'page2' => $match);
	$this->db->from('blogs');
	$this->db->like($array);														
	$query = $this->db->get()->result();											// returns data in array of objects form

	/* all DATA with GROUP BY  and ORDER BY*/
	$this->db->from('blogs');
	$this->db->group_by('id');
	$this->db->order_by('title', 'DESC');										
	$query = $this->db->get()->result();											// returns data in array of objects form

	/* COUNT all result */
	$this->db->count_all_results('my_table');										// gives int

	/* COUNT ROWS in table */
	$this->db->count_all('my_table');												// returns int

	/* INSERT data */
	$data = array(
        'title' => 'My title',
        'name' => 'My Name',
        'date' => 'My date'
	);
	$this->db->insert('mytable', $data);
	if($this->db->affected_rows() > 0){												// use this to check if inserted
		$this->db->insert_id();														// returns last insert id (INT)
	}												

	/* UPDATE with WHERE */
	$data = array(
        'title' => $title,
        'name' => $name,
        'date' => $date
	);

	$this->db->where('id', $id);
	$this->db->update('mytable', $data);
	// short method
	$where = array('id'=>$id);
	$this->db->update('table_name', $data, $where)

	if($this->db->affected_rows() > 0){												// use this to check if updated
	}				

	/* DELETE data */
	$this->db->delete('mytable', array('id' => $id));  								// Produces: // DELETE FROM mytable  // WHERE id = $id
	if($this->db->affected_rows() > 0){												// use this to check if deleted
	}