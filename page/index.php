<?php
class page_index extends Page {
	function init(){
		parent::init();

		$this->add('documenting/View_Example')
            ->set('
            		$form=$this->add("Form",null,"Demo");
            		$form->addField("line","var1");

            		if($form->isSubmitted()){
            			$form->displayError("var1","teri to ...");
            		}

            	');

	}
}