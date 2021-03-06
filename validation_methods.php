<?php

/* HELPER and LIBRARY */
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');

/* set rules */
$this->form_validation->set_error_delimiters('', '');
$this->form_validation->set_rules('field_name', 'Alias for field_name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required')

if ($this->form_validation->run() == FALSE)
{
	$errors = validation_errors(); 
	$errors = array('field_name'=>form_error('field_name', '<div class="text text-danger">','</div>'))
    $this->load->view('myform', $errors);
}
else
{
        $this->load->view('formsuccess');
}

/* setting data back to the fields */
?>
<input type="text" name="options[]" value="<?php echo set_value('options[]'); ?>" size="50" />

<!-- RULES -->
See the attached image
