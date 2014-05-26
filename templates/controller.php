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
	
    /*************************Start Function index()***********************************/
    //Owner : Madhuranga Senadheera
    //
    //@ type :
    //#return type :
	function index()
	{
        // $this->load->model('{model_name_1}');
        $this->load->library('table');
        $this->load->library('pagination');

        //paging
        $config['base_url'] = site_url('admin/{controller_name_l}/index');
        $config['total_rows'] = $this->{model_name_1}->count();
        $config['per_page'] = 10;	
        $this->pagination->initialize($config); 	
        // make sure to put the primarykey first when selecting , 
        //eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
        // Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
        $this->data['results'] = $this->{model_name_1}->get('{fields_list}', NULL, FALSE,$config['per_page'],$this->uri->segment(3));
        $this->data['meta_title'] = $this->data['meta_title'].' - {C_controller_name_l} list';
        $this->data['sub_view'] = '{view}_list';

        $this->load->view('temp/_layout_main',$this->data);

        // $this->load->view('temp/components/page_head');
        // $this->load->view('temp/admin/temp_nav');
        // // $this->load->view('temp/temp_body');
        // $this->load->view('{view}_list', $this->data); 
        // $this->load->view('temp/components/page_tail');
        //$this->template->load('content', '{view}_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template

	}//Function End get()---------------------------------------------------FUNEND()

	// function manage()
 //    {
 //        $this->load->library('table');
 //        $this->load->library('pagination');
        
 //        //paging
 //        $config['base_url'] = base_url().'index.php/{controller_name_l}/index/';
 //        $config['total_rows'] = $this->{model_name_1}->count('{table}');
 //        $config['per_page'] = 3;	
 //        $this->pagination->initialize($config); 	
 //        // make sure to put the primarykey first when selecting , 
	// 	//eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
	// 	// Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
	// 	$this->data['results'] = $this->{model_name_1}->get('{fields_list}', NULL, FALSE,$config['per_page'],$this->uri->segment(3));
       
	//    $this->load->view('{view}_list', $this->data); 
 //       //$this->template->load('content', '{view}_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template
		
 //    }
	
    /*************************Start Function add()***********************************/
    //Owner : Madhuranga Senadheera
    //
    //@ type :
    //#return type :
    function add()
    {    
        // load form vadaiton
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
        $this->form_validation->set_rules($this->{model_name_1}->rules);
        // validate form
        if ($this->form_validation->run() == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);
             $this->data['result'] = array();

        }
        else
        {               
            $data = array(
                    {data}
            );
           
            // data save
            if ($this->{model_name_1}->save($data) == TRUE)
            {
                //$this->data['custom_error'] = '<div class="form_ok"><p>Added</p></div>';
                // or redirect
                redirect(site_url('admin/{controller_name_l}/index'));
            }
            else
            {
                $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';

			}
        }
        $this->data['meta_title'] = $this->data['meta_title'].' - Add a {C_controller_name_l} ';

        $this->data['sub_view'] = '{view}_add';

        $this->load->view('temp/_layout_modal',$this->data); 

    }//Function End add()---------------------------------------------------FUNEND()
    

    /*************************Start Function edit()***********************************/
    //Owner : Madhuranga Senadheera
    //
    //@ type :
    //#return type :
    function edit($id1)
    {   
        $ID = $id1;

        // load form valition
        $this->load->library('form_validation');    
        $this->data['custom_error'] = '';
        // validate form
        $this->form_validation->set_rules($this->{model_name_1}->rules);
        if ($this->form_validation->run() == false)
        {
            // set error massage
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);
             // $this->data['result'];

        }
        else
        {      
            $data = array(
                    {edit_data}
            );
            // data save                      
            if ($this->{model_name_1}->save($data, $this->input->post('{primaryKey}')) == TRUE)
            {
                redirect(site_url('admin/{controller_name_l}/index/'));
            }
            else
            {
                $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';

            }
        }
        // load individula view
        $this->data['result'] = $this->{model_name_1}->get('{fields_list}', $ID,TRUE,1,0);
        $this->data['meta_title'] = $this->data['meta_title'].' - Edit {C_controller_name_l}';

        $this->data['sub_view'] = '{view}_edit';
        // load view
        $this->load->view('temp/_layout_modal',$this->data);

    }//Function End edit()---------------------------------------------------FUNEND()
    

    /*************************Start Function view()***********************************/
    //Owner : Madhuranga Senadheera
    // View individual 
    //@ type :
    //#return type :
    function view($id1)
    {
        // $ID =  $this->uri->segment(3);
        $ID = $id1;
        //  get data
        $this->data['result'] = $this->{model_name_1}->get('{fields_list}', $ID,TRUE,1,0);
        
        $this->data['sub_view'] = '{view}_view';
        // load view
        $this->load->view('temp/_layout_modal',$this->data);
    }

	
    function delete()
    {
            $ID =  $this->uri->segment(3);
            $this->{model_name_1}->delete($ID);             
            redirect(site_url('admin/{controller_name_l}/index'));
    }
}

/* End of file {controller_name_l}.php */
/* Location: ./system/application/controllers/{controller_name_l}.php */