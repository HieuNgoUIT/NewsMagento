<?php

namespace Rsgitech\News\Block;

Class ViewNews extends \Magento\Framework\View\Element\Template
{
	protected $allNewsFactory;
	protected $allNewsMetaFactory;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Rsgitech\News\Model\AllnewsFactory $allNewsFactory,
		\Rsgitech\News\Model\AllnewsMetaFactory $allNewsMetaFactory
	){
		parent::__construct($context);
		$this->allNewsFactory = $allNewsFactory;
		$this->allNewsMetaFactory = $allNewsMetaFactory;
	}
	
	public function getNews()
	{
		$id = $this->getRequest()->getParam('id');
		$news = $this->allNewsFactory->create()->load($id);
		
		return $news;
	}
	
	public function getNewsMeta()
	{
		$id = $this->getRequest()->getParam('id');
		$news = $this->allNewsMetaFactory->create()->load($id);
		
		return $news;
	}

	public function getAttributeForFilter($columnname, $value){
        $id = $this->getRequest()->getParam('id');			
		$collection = $this->allNewsMetaFactory->create()->getCollection()->addFieldToFilter($columnname,$value)->getFirstItem()->getData();
		return $collection;
    }

	protected function _prepareLayout(){
		
		parent::_prepareLayout();
		
		$news = $this->getNews();
		$this->pageConfig->getTitle()->set($news->getTitle());
		
        return $this;
	}
}