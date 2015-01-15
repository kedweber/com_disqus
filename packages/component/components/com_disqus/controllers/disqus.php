<?php

class ComDisqusControllerDisqus extends ComDefaultControllerResource
{
    public function getRequest()
    {
        $this->_request->view = 'disqus';
        
        return parent::getRequest();
    }
}