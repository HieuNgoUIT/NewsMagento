<?php
namespace Rsgitech\News\Controller\Index;

class View extends \Magento\Framework\App\Action\Action
{
	protected $pageFactory;
	protected $allCommentsFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Rsgitech\News\Model\AllcommentsFactory $allCommentsFactory)
	{
		$this->pageFactory = $pageFactory;
		$this->allCommentsFactory = $allCommentsFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		return $this->pageFactory->create();
	}
	
}