<?php

namespace Rsgitech\News\Block;

Class ViewComments extends \Magento\Framework\View\Element\Template
{
	protected $allCommentsFactory;
	
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Rsgitech\News\Model\AllcommentsFactory $allCommentsFactory
	){
		parent::__construct($context);
		$this->allCommentsFactory = $allCommentsFactory;
	}
	
	public function getComments()
	{
		$id = $this->getRequest()->getParam('id');
		$comments = $this->allCommentsFactory->create()->load($id);
		
		return $comments;
	}
    
    public function getListComments()
	{	
		$id = $this->getRequest()->getParam('id');			
		$collection = $this->allCommentsFactory->create()->getCollection()->addFieldToFilter('comment_news_id',$id);
		return $collection;
	}

	public function getFormAction()
    {           
        return $this->get_url('/news/index/addcomment');
        // here controller_name is index, action is booking
    }

	 protected function _prepareLayout(){
		
	 	parent::_prepareLayout();
		
	 	$comments = $this->getComments();
	 	$this->pageConfig->getTitle()->set($comments->getTitle());
		
         return $this;
	}
}