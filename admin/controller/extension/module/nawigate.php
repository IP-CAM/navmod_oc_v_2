<?php

class ControllerExtensionModuleNawigate extends Controller { 
	private $error = array(); // объявляем переменную - массив с возможными ошибками
	
    public function index() { 
        
		$this->load->language('extension/module/nawigate');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
		$this->load->model('extension/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_extension_module->addModule('nawigate', $this->request->post);
			} else {
				$this->model_extension_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_name'] = $this->language->get('entry_name');
		
        $data['entry_punktplaseholder'] = $this->language->get('entry_punktplaseholder');
		$data['entry_nameplaseholder'] = $this->language->get('entry_nameplaseholder');
        $data['entry_uriplaseholder'] = $this->language->get('entry_uriplaseholder');
        $data['entry_description'] = $this->language->get('entry_description');
        
		$data['entry_status'] = $this->language->get('entry_status');

		$data['help_product'] = $this->language->get('help_product');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['width'])) {
			$data['error_width'] = $this->error['width'];
		} else {
			$data['error_width'] = '';
		}

		if (isset($this->error['height'])) {
			$data['error_height'] = $this->error['height'];
		} else {
			$data['error_height'] = '';
		}
        
        

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/nawigate', 'token=' . $this->session->data['token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/nawigate', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/nawigate', 'token=' . $this->session->data['token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/nawigate', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_extension_module->getModule($this->request->get['module_id']);
		}

		$data['token'] = $this->session->data['token'];

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}
        
        
        
        ///
        //name_1
        if (isset($this->request->post['name_1'])) {
			$data['name_1'] = $this->request->post['name_1'];
		} elseif (!empty($module_info)) {
			$data['name_1'] = $module_info['name_1'];
		} else {
			$data['name_1'] = '';
		}
        //url_1
        if (isset($this->request->post['url_1'])) {
			$data['url_1'] = $this->request->post['url_1'];
		} elseif (!empty($module_info)) {
			$data['url_1'] = $module_info['url_1'];
		} else {
			$data['url_1'] = '';
		}
        //banner_image_1
        if (isset($this->request->post['banner_image_1'])) {
			$data['banner_image_1'] = $this->request->post['banner_image_1'];
		} elseif (!empty($module_info)) {
			$data['banner_image_1'] = $module_info['banner_image_1'];
		} else {
			$data['banner_image_1'] = '';
		}
        //module_description_1
        if (isset($this->request->post['module_description_1'])) {
			$data['module_description_1'] = $this->request->post['module_description_1'];
		} elseif (!empty($module_info)) {
			$data['module_description_1'] = $module_info['module_description_1'];
		} else {
			$data['module_description_1'] = '';
		}
        ///
        //name_1
        if (isset($this->request->post['name_2'])) {
			$data['name_2'] = $this->request->post['name_2'];
		} elseif (!empty($module_info)) {
			$data['name_2'] = $module_info['name_2'];
		} else {
			$data['name_2'] = '';
		}
        //url_2
        if (isset($this->request->post['url_2'])) {
			$data['url_2'] = $this->request->post['url_2'];
		} elseif (!empty($module_info)) {
			$data['url_2'] = $module_info['url_2'];
		} else {
			$data['url_2'] = '';
		}
        //banner_image_2
        if (isset($this->request->post['banner_image_2'])) {
			$data['banner_image_2'] = $this->request->post['banner_image_2'];
		} elseif (!empty($module_info)) {
			$data['banner_image_2'] = $module_info['banner_image_2'];
		} else {
			$data['banner_image_2'] = '';
		}
        //module_description_2
        if (isset($this->request->post['module_description_2'])) {
			$data['module_description_2'] = $this->request->post['module_description_2'];
		} elseif (!empty($module_info)) {
			$data['module_description_2'] = $module_info['module_description_2'];
		} else {
			$data['module_description_2'] = '';
		}
        
        

		
        $this->load->model('tool/image');
        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		//$this->load->model('catalog/product');
        $this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		


		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		
        $this->response->setOutput($this->load->view('extension/module/nawigate', $data));
        
        
        
        
    }
    
    
    
    protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/nawigate')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}
    
    
}    