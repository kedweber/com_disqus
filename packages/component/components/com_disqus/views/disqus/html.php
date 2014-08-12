<?php

class ComDisqusViewDisqusHtml extends KViewHtml
{
    public function display()
    {
        $config = $this->getService('com://admin/disqus.controller.config')->read();
        $model = $this->getModel();
        
        if($model->getState()->identifier) {
            $config->setData(array(
                'identifier' => $model->getState()->identifier
            ));
        }
        
        $this->assign('config', $config);
        
        return parent::display();
    }
}