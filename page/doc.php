<?php
class page_doc extends Page {
    public $page;

    function initializeTemplate(){
    	$this->api->stickyGET('doc');
        list($this->page,$junk)=explode('.',$_GET['doc']);
        parent::initializeTemplate();
        
    }

    function init(){
    	parent::init();
		$page=$this;
		
    	$page->template->eachTag('Code',function($a,$b) use($page){
            $page->add('documenting/View_Example',null,$b)->set($a,true);
        });

        $page->template->eachTag('Example',function($a,$b) use($page){
            $page->add('documenting/View_Example',null,$b)->set($a);
        });

    }

    
    function defaultTemplate(){
        return array('docs/'.$this->page);
    }
     
}
