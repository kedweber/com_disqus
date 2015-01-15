<?php

class ComDisqusControllerConfig extends ComDefaultControllerDefault
{
    public function getRequest()
    {
        $this->_request->id = '1';
        $this->_request->view = 'config';
        
        return parent::getRequest();
    }
}