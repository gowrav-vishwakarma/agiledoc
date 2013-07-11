<?php
class page_doc extends Page {
    public $page;

    function initializeTemplate(){
        list($this->page,$junk)=explode('.',$_GET['doc']);
        parent::initializeTemplate();
        
    }
    
    function defaultTemplate(){
        return array('docs/'.$this->page);
    }
     
}
