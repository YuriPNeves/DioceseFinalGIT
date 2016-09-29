<?php
App::uses('AppHelper', 'View/Helper');
/**
 * Description of CrumbHelper
 *
 * @author Felipe Jimenez
 */
class CrumbHelper extends AppHelper{
    public function addCrumb($crumbs = array()){
        $count = count($crumbs);
        $i = 1;
        $this->Html->addCrumb('Dashboard','/dashboard',array('class' => 'breadcrumb'));		
        foreach ($crumbs as $crumb):
            $this->Html->addCrumb($crumb[0], 
                    array(
                        'plugin' => false,
                        'controller' => $crumb[1],
                        'action' => $crumb[2], $crumb[3]), 
                    array('class' => 'breadcrumb '.$this->active($count, $i)));
        $i++;
        endforeach;
    }
    private function active($count = 0, $i = 0){
        return ($count === $i)? 'active': '';
    }
}
