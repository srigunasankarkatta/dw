<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/services_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['services'] = $this->services_model->get_all_services();
        $this->load->view('admin/services_list', $data);
    }

    public function add()
    {
        $this->load->view('admin/services_create');
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[200]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'Image ', 'required');
        }
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('icon', 'Icon', 'required');
        }
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('banner_image', 'Banner Image', 'required');
        }
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/services_create');
        } else {
            if (!empty($_FILES['image']['name'])) {
               
                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/services/$fileName";
                $image_name = '/assets/images/services/'.$fileName;
                $a = move_uploaded_file($temp, $path);
            }
            $icon = '';
            if (!empty($_FILES['icon']['name'])) {

                $temp = $_FILES['icon']['tmp_name'];
                $name = $_FILES['icon']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/service_icon/$fileName";
                $icon = '/assets/images/service_icon/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }

            // Handle brochure upload
            $banner_image = '';
            if (!empty($_FILES['banner_image']['name'])) {

                $temp = $_FILES['banner_image']['tmp_name'];
                $name = $_FILES['banner_image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/banner_image/$fileName";
                $banner_image = '/assets/images/banner_image/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }

            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'description_new' => $this->input->post('description_new'),
                'status' => $this->input->post('status'),
                'image' => $image_name,
                'banner_image' => $banner_image,
                'icon' => $icon,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace this with the actual created_by user ID
            );

            $result = $this->services_model->create_service($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Service created successfully.');
                redirect('admin/services');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/services');
            }
        }
    }

    public function edit($id)
    {
        $data['service'] = $this->services_model->get_service_by_id($id);
        $this->load->view('admin/services_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[200]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/services_edit');
        } else {
            $service = $this->services_model->get_service_by_id($id);

            if (!empty($_FILES['image']['name'])) {
               
                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/services/$fileName";
                $image_name = '/assets/images/services/'.$fileName;
                $a = move_uploaded_file($temp, $path);
            } else {
                $image_name = $this->input->post('old_image');
            }
            $icon = '';
            if (!empty($_FILES['icon']['name'])) {

                $temp = $_FILES['icon']['tmp_name'];
                $name = $_FILES['icon']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/service_icon/$fileName";
                $icon = '/assets/images/service_icon/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }else{
                $icon = $this->input->post('old_icon');

            }

            // Handle brochure upload
            $banner_image = '';
            if (!empty($_FILES['banner_image']['name'])) {

                $temp = $_FILES['banner_image']['tmp_name'];
                $name = $_FILES['banner_image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/banner_image/$fileName";
                $banner_image = '/assets/images/banner_image/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }else{
                $banner_image = $this->input->post('old_banner_image');

            }

            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'description_new' => $this->input->post('description_new'),

                'status' => $this->input->post('status'),
                'image' => $image_name,
                'banner_image' => $banner_image,
                'icon' => $icon,
                'created_at' => time(),
                'created_by' => '2'// Replace this with the actual created_by user ID
            );

            $result = $this->services_model->update_service($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Service updated successfully.');
                redirect('admin/services');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/services/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $service = $this->services_model->get_service_by_id($id);

        if (!empty($service['image'])) {
            unlink('.' . $service['image']);
        }

        $this->services_model->delete_service($id);
        redirect('admin/services');
    }
}