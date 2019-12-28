<?php
namespace Rsgitech\News\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class AddComment extends \Magento\Framework\App\Action\Action
{
	protected $pageFactory;
	protected $allCommentsFactory;
    protected $resultRedirect;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
        \Rsgitech\News\Model\AllcommentsFactory $allCommentsFactory,
        \Magento\Framework\Controller\ResultFactory $result)
	{
		$this->pageFactory = $pageFactory;
        $this->allCommentsFactory = $allCommentsFactory;
        $this->resultRedirect = $result;
		return parent::__construct($context);
	}

	public function execute()
	{
        $post = $this->getRequest()->getPostValue();
        $name   = $post['name'];
        $email    = $post['email'];
        $description = $post['description'];   

        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        $model = $this->allCommentsFactory->create();
        $data= array("comment_id" => '8',
        "comment_news_id" => '1',
        "name" => $name,
        "email" => $email,
        "description" => $description);
		$model->setData($data);
        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Insert Record Successfully !') );
        }
		return $resultRedirect;
	
	}
}