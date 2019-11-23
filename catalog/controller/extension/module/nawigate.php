<?php
class ControllerExtensionModuleNawigate extends Controller {
	public function index($setting) {
		//$this->load->language('extension/module/nawigate');

		$data['heading_title'] = 'heading';
        
        
        $data['name_1'] =  html_entity_decode($setting['name_1'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
        $data['url_1'] =  html_entity_decode($setting['url_1'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
        $data['banner_image_1'] =  html_entity_decode($setting['banner_image_1'][$this->config->get('config_language_id')]['image'], ENT_QUOTES, 'UTF-8');
        $data['module_description_1'] =  html_entity_decode($setting['module_description_1'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');
        
        $data['name_2'] =  html_entity_decode($setting['name_2'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
        $data['url_2'] =  html_entity_decode($setting['url_2'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
        $data['banner_image_2'] =  html_entity_decode($setting['banner_image_2'][$this->config->get('config_language_id')]['image'], ENT_QUOTES, 'UTF-8');
        $data['module_description_2'] =  html_entity_decode($setting['module_description_2'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');
        
        
        
        
        return $this->load->view('module/nawigate', $data);
    }
    
    
}