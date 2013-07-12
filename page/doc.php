<?php
class page_doc extends Page {
    public $page;
    public $ln;

    function initializeTemplate(){
        $this->api->stickyGET('doc');
    	$this->api->stickyGET('ln');
        list($this->page,$junk)=explode('.',$_GET['doc']);
        $this->ln= $_GET['ln'];

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
        return array('docs'.$this->ln.'/'.$this->page);
    }
     
}
