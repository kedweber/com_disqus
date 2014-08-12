<?php

class ComDisqusModelDisqus extends ComDefaultModelDefault
{
    public function __construct(KConfig $config)
    {
        parent::__construct($config);
        
        $this->_state->insert('identifier', 'string');
    }
}