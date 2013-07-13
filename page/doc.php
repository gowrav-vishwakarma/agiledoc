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
        
        $page->template->eachTag('image_preview',function($a,$b) use($page){
            $page->add('Text',null,$b)->setHTML("<a class='fancybox' href='templates/default/$a'><img width='20px' height='20px' src='templates/default/images/screenshot_preview.jpeg'/></a>");
        });

        $page->template->eachTag('youtube',function($a,$b) use($page){
            $page->add('Text',null,$b)->setHTML("<a class='fancybox-media' href='$a'><img width='20px' height='20px' src='templates/default/images/video_icon.jpeg'/></a>");
        });

    }

    
    function defaultTemplate(){
        return array('docs'.$this->ln.'/'.$this->page);
    }
     
}
