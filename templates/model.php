<?php

class  {table}_model extends MY_Model
{
    protected $_table_name      ='{table}';
    protected $_primary_key     ='{primaryKey}';
    protected $_order_by        ='{primaryKey}';
    // protected $_primary_filter  ='';
    protected $_timestamps      =FALSE;    
    // rules
    public $rules = array(
                    {form_data}
        );

    /*********************Construct()****************************/
    function __construct()
    {
        parent::__construct();
    }



    
}// ------------------End User_M --------------Class{}
//Owner : Madhuranga Senadheera



