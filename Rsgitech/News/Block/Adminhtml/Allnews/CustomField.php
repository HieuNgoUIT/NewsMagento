<?php

namespace Rsgitech\News\Block\Adminhtml;

Class CustomField extends \Magento\Framework\View\Element\Template
{
	protected $allNewsMetaFactory;
	
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Rsgitech\News\Model\AllNewsMetaFactory $allNewsMetaFactory
	){
		parent::__construct($context);
		$this->allNewsMetaFactory = $allNewsMetaFactory;
	}
	
	
}