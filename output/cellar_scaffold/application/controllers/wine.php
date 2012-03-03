<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wine extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();

		$this->load->library( 'template' ); 
		$this->load->model( 'model_wine' ); 
		
		$this->load->helper( 'form' );
		$this->load->helper( 'language' ); 
		$this->load->helper( 'url' );
        $this->load->model( 'model_auth' );

        $this->logged_in = $this->model_auth->check( TRUE );
        $this->template->assign( 'logged_in', $this->logged_in );

		$this->lang->load( 'db_fields', 'english' ); // This is the language file
	}



    /**
     *  LISTS MODEL DATA INTO A TABLE
     */         
    function index( $page = 0 )
    {
        $this->model_wine->pagination( TRUE );
		$data_info = $this->model_wine->lister( $page );
        $fields = $this->model_wine->fields( TRUE );
        

        $this->template->assign( 'pager', $this->model_wine->pager );
		$this->template->assign( 'wine_fields', $fields );
		$this->template->assign( 'wine_data', $data_info );
        $this->template->assign( 'table_name', 'Wine' );
        $this->template->assign( 'template', 'list_wine' );
        
		$this->template->display( 'frame_admin.tpl' );
    }



    /**
     *  SHOWS A RECORD VIEW
     */
    function show( $id )
    {
		$data = $this->model_wine->get( $id );
        $fields = $this->model_wine->fields( TRUE );
        

        
        $this->template->assign( 'id', $id );
		$this->template->assign( 'wine_fields', $fields );
		$this->template->assign( 'wine_data', $data );
		$this->template->assign( 'table_name', 'Wine' );
		$this->template->assign( 'template', 'show_wine' );
		$this->template->display( 'frame_admin.tpl' );
    }



    /**
     *  SHOWS A FROM, AND HANDLES SAVING IT
     */         
    function create( $id = false )
    {
		$this->load->library('form_validation');
        
		switch ( $_SERVER ['REQUEST_METHOD'] )
        {
            case 'GET':
                $fields = $this->model_wine->fields();
                
                
                
                $this->template->assign( 'action_mode', 'create' );
        		$this->template->assign( 'wine_fields', $fields );
                $this->template->assign( 'metadata', $this->model_wine->metadata() );
        		$this->template->assign( 'table_name', 'Wine' );
        		$this->template->assign( 'template', 'form_wine' );
        		$this->template->display( 'frame_admin.tpl' );
            break;

            /**
             *  Insert data TO wine table
             */
            case 'POST':
                $fields = $this->model_wine->fields();

                /* we set the rules */
                /* don't forget to edit these */
				$this->form_validation->set_rules( 'name', lang('name'), '45' );
				$this->form_validation->set_rules( 'year', lang('year'), '45' );
				$this->form_validation->set_rules( 'grapes', lang('grapes'), '45' );
				$this->form_validation->set_rules( 'country', lang('country'), '45' );
				$this->form_validation->set_rules( 'region', lang('region'), '45' );
				$this->form_validation->set_rules( 'picture', lang('picture'), '256' );

				$data_post['name'] = $this->input->post( 'name' );
				$data_post['year'] = $this->input->post( 'year' );
				$data_post['grapes'] = $this->input->post( 'grapes' );
				$data_post['country'] = $this->input->post( 'country' );
				$data_post['region'] = $this->input->post( 'region' );
				$data_post['description'] = $this->input->post( 'description' );
				$data_post['picture'] = $this->input->post( 'picture' );

                if ( $this->form_validation->run() == FALSE )
                {
                    $errors = validation_errors();
                    
                    
                    
                    
              		$this->template->assign( 'errors', $errors );
              		$this->template->assign( 'action_mode', 'create' );
            		$this->template->assign( 'wine_data', $data_post );
            		$this->template->assign( 'wine_fields', $fields );
                    $this->template->assign( 'metadata', $this->model_wine->metadata() );
            		$this->template->assign( 'table_name', 'Wine' );
            		$this->template->assign( 'template', 'form_wine' );
            		$this->template->display( 'frame_admin.tpl' );
                }
                elseif ( $this->form_validation->run() == TRUE )
                {
                    $insert_id = $this->model_wine->insert( $data_post );
                    
					redirect( 'wine' );
                }
            break;
        }
    }



    /**
     *  DISPLAYS THE POPULATED FORM OF THE RECORD
     *  This method uses the same template as the create method
     */
    function edit( $id = false )
    {
        $this->load->library('form_validation');

        switch ( $_SERVER ['REQUEST_METHOD'] )
        {
            case 'GET':
                $this->model_wine->raw_data = TRUE;
        		$data = $this->model_wine->get( $id );
                $fields = $this->model_wine->fields();
                
                
                
                
          		$this->template->assign( 'action_mode', 'edit' );
        		$this->template->assign( 'wine_data', $data );
        		$this->template->assign( 'wine_fields', $fields );
                $this->template->assign( 'metadata', $this->model_wine->metadata() );
        		$this->template->assign( 'table_name', 'Wine' );
        		$this->template->assign( 'template', 'form_wine' );
        		$this->template->assign( 'record_id', $id );
        		$this->template->display( 'frame_admin.tpl' );
            break;
    
            case 'POST':
    
                $fields = $this->model_wine->fields();
                /* we set the rules */
                /* don't forget to edit these */
				$this->form_validation->set_rules( 'name', lang('name'), '45' );
				$this->form_validation->set_rules( 'year', lang('year'), '45' );
				$this->form_validation->set_rules( 'grapes', lang('grapes'), '45' );
				$this->form_validation->set_rules( 'country', lang('country'), '45' );
				$this->form_validation->set_rules( 'region', lang('region'), '45' );
				$this->form_validation->set_rules( 'picture', lang('picture'), '256' );

				$data_post['name'] = $this->input->post( 'name' );
				$data_post['year'] = $this->input->post( 'year' );
				$data_post['grapes'] = $this->input->post( 'grapes' );
				$data_post['country'] = $this->input->post( 'country' );
				$data_post['region'] = $this->input->post( 'region' );
				$data_post['description'] = $this->input->post( 'description' );
				$data_post['picture'] = $this->input->post( 'picture' );

                if ( $this->form_validation->run() == FALSE )
                {
                    $errors = validation_errors();
                    
                    
                    
                    
              		$this->template->assign( 'action_mode', 'edit' );
              		$this->template->assign( 'errors', $errors );
            		$this->template->assign( 'wine_data', $data_post );
            		$this->template->assign( 'wine_fields', $fields );
                    $this->template->assign( 'metadata', $this->model_wine->metadata() );
            		$this->template->assign( 'table_name', 'Wine' );
            		$this->template->assign( 'template', 'form_wine' );
        		    $this->template->assign( 'record_id', $id );
            		$this->template->display( 'frame_admin.tpl' );
                }
                elseif ( $this->form_validation->run() == TRUE )
                {
				    $this->model_wine->update( $id, $data_post );
				    
					redirect( 'wine/show/' . $id );   
                }
            break;
        }
    }



    /**
     *  DELETE RECORD(S)
     *  The 'delete' method of the model accepts int and array  
     */
    function delete( $id = FALSE )
    {
        switch ( $_SERVER ['REQUEST_METHOD'] )
        {
            case 'GET':
                $this->model_wine->delete( $id );
                redirect( $_SERVER['HTTP_REFERER'] );
            break;

            case 'POST':
                $this->model_wine->delete( $this->input->post('delete_ids') );
                redirect( $_SERVER['HTTP_REFERER'] );
            break;
        }
    }
}
