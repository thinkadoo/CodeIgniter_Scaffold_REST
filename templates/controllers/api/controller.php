<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class %NAME_CONTROLLER% extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('/api/%NAME_MODEL_LOWER%');
    }

// http://localhost/base_path/index.php/api/%NAME_CONTROLLER_LOWER%/put/format/json

    function post_post()
    {
        $postdata = (array)$this->request->body;

        $data = %FIELDS_ARRAY_CUSTOM_POST%


        $id = %MODEL_CALL%->save($data);


        $return = %MODEL_CALL%->get_by_id($id)->row();


        if($return)
        {
            $this->response($return, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be created'), 404);
        }
    }

// http://localhost/base_path/index.php/api/%NAME_CONTROLLER_LOWER%/post/format/json

    function put_put()
    {
        $data = %FIELDS_ARRAY_CUSTOM_PUT%


        $id = %MODEL_CALL%->update($this->put('id'),$data);


        $return = %MODEL_CALL%->get_by_id($id)->row();


        if($return)
        {
            $this->response($return, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be updated'), 404);
        }
    }

// http://localhost/base_path/index.php/api/%NAME_CONTROLLER_LOWER%/delete/id/53/format/json

    function delete_delete()
    {
        $data = %MODEL_CALL%->delete($this->get('id'));


        $message = array(
            'data' => $data,
            'message' => 'DELETED!'
        );


        if($data)
        {
            $this->response($message, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be deleted'), 404);
        }
    }

// http://localhost/base_path/index.php/api/%NAME_CONTROLLER_LOWER%/get/id/1/format/json

    function get_get()
    {
        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }


        $data = %MODEL_CALL%->get_by_id($this->get('id'))->row();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }

// http://localhost/base_path/index.php/api/%NAME_CONTROLLER_LOWER%/getsome/limit/5/offset/3/format/json

    function getsome_get()
    {
        $data = %MODEL_CALL%->get_paged_list($this->get('limit'),$this->get('offset'))->result();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }

// http://localhost/base_path/index.php/api/%NAME_CONTROLLER_LOWER%/getall/format/json

    function getall_get()
    {
        $data = %MODEL_CALL%->list_all()->result();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }


}