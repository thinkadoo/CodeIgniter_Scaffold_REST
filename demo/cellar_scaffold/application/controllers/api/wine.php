<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Wine extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('/api/model_wine');
    }

// http://localhost/base_path/index.php/api/wine/put/format/json

    function post_post()
    {

        $postdata = (array)$this->request->body;

        $data = array(
            'id' => $postdata['id'],
            'name' => $postdata['name'],
            'year' => $postdata['year'],
            'grapes' => $postdata['grapes'],
            'country' => $postdata['country'],
            'region' => $postdata['region'],
            'description' => $postdata['description'],
            'picture' => $postdata['picture']
        );


        $id = $this->model_wine->save($data);


        $return = $this->model_wine->get_by_id($id)->row();


        if($return)
        {
            $this->response($return, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be created'), 404);
        }
    }

// http://localhost/base_path/index.php/api/wine/post/format/json

    function put_put()
    {

        $data = array(
            'id' => $this->put('id'),
            'name' => $this->put('name'),
            'year' => $this->put('year'),
            'grapes' => $this->put('grapes'),
            'country' => $this->put('country'),
            'region' => $this->put('region'),
            'description' => $this->put('description'),
            'picture' => $this->put('picture')
        );


        $id = $this->model_wine->update($this->put('id'),$data);


        $return = $this->model_wine->get_by_id($id)->row();


        if($return)
        {
            $this->response($return, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be updated'), 404);
        }
    }

// http://localhost/base_path/index.php/api/wine/delete/id/53/format/json

    function delete_delete()
    {
        $data = $this->model_wine->delete($this->get('id'));


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

// http://localhost/base_path/index.php/api/wine/get/id/1/format/json

    function get_get()
    {
        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }


        $data = $this->model_wine->get_by_id($this->get('id'))->row();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }

// http://localhost/base_path/index.php/api/wine/getsome/limit/5/offset/3/format/json

    function getsome_get()
    {
        $data = $this->model_wine->get_paged_list($this->get('limit'),$this->get('offset'))->result();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }

// http://localhost/base_path/index.php/api/wine/getall/format/json

    function getall_get()
    {
        $data = $this->model_wine->list_all()->result();


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