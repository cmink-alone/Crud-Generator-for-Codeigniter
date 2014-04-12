<?php

class {controller_name} extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');		
		$this->load->helper(array('form','url','codegen_helper'));
		$this->load->model('{model_name_1}');
	}	
	
	function index()
	{
        // $this->load->model('{model_name_1}');
		$this->load->library('table');
        $this->load->library('pagination');
        
        //paging
        $config['base_url'] = site_url('{controller_name_l}/index');
        $config['total_rows'] = $this->{model_name_1}->count();
        $config['per_page'] = 3;	
        $this->pagination->initialize($config); 	
        // make sure to put the primarykey first when selecting , 
		//eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
		// Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
        $this->data['results'] = $this->{model_name_1}->get('{fields_list}', NULL, FALSE,$config['per_page'],$this->uri->segment(3));
       
	   $this->load->view('{view}_list', $this->data); 
       //$this->template->load('content', '{view}_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template

	}

	function manage(){
        $this->load->library('table');
        $this->load->library('pagination');
        
        //paging
        $config['base_url'] = base_url().'index.php/{controller_name_l}/index/';
        $config['total_rows'] = $this->{model_name_1}->count('{table}');
        $config['per_page'] = 3;	
        $this->pagination->initialize($config); 	
        // make sure to put the primarykey first when selecting , 
		//eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
		// Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
		$this->data['results'] = $this->{model_name_1}->get('{fields_list}', NULL, FALSE,$config['per_page'],$this->uri->segment(3));
       
	   $this->load->view('{view}_list', $this->data); 
       //$this->template->load('content', '{view}_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template
		
    }
	
    function add()
    {        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
        $this->form_validation->set_rules($this->{model_name_1}->rules);
        if ($this->form_validation->run() == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    {data}
            );
           
			if ($this->{model_name_1}->save($data) == TRUE)
			{
				//$this->data['custom_error'] = '<div class="form_ok"><p>Added</p></div>';
				// or redirect
				redirect(site_url('{controller_name_l}/index'));
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';

			}
		}		   
		$this->load->view('{view}_add', $this->data);   
        //$this->template->load('content', '{view}_add', $this->data);
    }	
    
    function edit()
    {        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		$this->form_validation->set_rules($this->{model_name_1}->rules);
        if ($this->form_validation->run() == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    {edit_data}
            );
           
			if ($this->{model_name_1}->save($data,'{primaryKey}',$this->input->post('{primaryKey}')) == TRUE)
			{
				redirect(site_url('{controller_name_l}/index/'));
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';

			}
		}

		$this->data['result'] = $this->{model_name_1}->get('{fields_list}', $this->uri->segment(3),TRUE,NULL,TRUE);
		
		$this->load->view('{view}_edit', $this->data);		
        //$this->template->load('content', '{view}_edit', $this->data);
    }
	
    function delete()
    {
            $ID =  $this->uri->segment(3);
            $this->{model_name_1}->delete($ID);             
            redirect(site_url('{controller_name_l}/index'));
    }
}

/* End of file {controller_name_l}.php */
/* Location: ./system/application/controllers/{controller_name_l}.php */