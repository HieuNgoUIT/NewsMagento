<?php
namespace Rsgitech\News\Controller\Adminhtml;

use Magento\Framework\Controller\ResultFactory;

class CustomField extends \Magento\Framework\App\Action\Action
{
	protected $pageFactory;
	protected $newsMetaFactory;
    protected $resultRedirect;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
        \Rsgitech\News\Model\AllNewsMetaFactory $newsMetaFactory,
        \Magento\Framework\Controller\ResultFactory $result)
	{
		$this->pageFactory = $pageFactory;
        $this->newsMetaFactory = $newsMetaFactory;
        $this->resultRedirect = $result;
		return parent::__construct($context);
	}

	public function execute()
	{
        $post = $this->getRequest()->getPostValue();
        $key   = $post['key'];
        $value    = $post['value'];
        $description = $post['description'];   
        $id = $post['id'];

        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        $model = $this->allCommentsFactory->create();
        $data= array(
        "comment_news_id" => $id,
        "name" => $name,
        "email" => $email,
        "description" => $description);
		$model->setData($data);
        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Insert Comment Successfully !') );
        }
		return $resultRedirect;
	
	}
}