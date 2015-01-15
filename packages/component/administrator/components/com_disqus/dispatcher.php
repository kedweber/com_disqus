<?php

class ComDisqusDispatcher extends ComDefaultDispatcher
{
    public function _initialize(KConfig $config)
    {
        $config->controller = 'config';
        
        return parent::_initialize($config);
    }
}