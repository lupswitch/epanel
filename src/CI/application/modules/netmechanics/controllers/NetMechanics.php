<?php  (defined('BASEPATH')) OR exit('No direct script access allowed');

//todo: manage this to be fancy
class NetMechanics extends MX_Controller {

    function index(){
        $siteInfo = $this->config->item('siteInfo');

        $data['me'] =[
            'name' => $siteInfo['developer']['name'],
            'link' => $siteInfo['developer']['link']
        ];
        $data['version'] = $siteInfo['version'];

        $this->twiggy->set($data);
        $this->twiggy->display('netmechanics');
    }

    function test(){

    }

}
