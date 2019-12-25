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
		//$resultRedirect = $this->resultRedirectFactory->create();

            //$resultPage = $this->resultPageFactory->create();
            //$resultPage->getConfig()->getTitle()->set(__('Helpdesk'));
            //return $resultPage;
           // $data = $this->getRequest()->getPostValue();
			//$data['comment_id']=10;
			//$data['comment_news_id']=1;
            // $model = $this->allCommentsFactory->create();
            // $model->setData($data);
            // try {
            //     $model->save();
            //     $this->messageManager->addSuccess(__('The Data has been saved.'));
            //     return $resultRedirect->setPath('*/*/');
            // } catch (\Magento\Framework\Exception\LocalizedException $e) {
            //     $this->messageManager->addError($e->getMessage());
            // } catch (\RuntimeException $e) {
            //     $this->messageManager->addError($e->getMessage());
            // } catch (\Exception $e) {
            //     $this->messageManager->addException($e, __('Something went wrong while saving the Data.'));
            // }       
        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        $model = $this->allCommentsFactory->create();
        $data= array("comment_id" => '5',
        "comment_id_news" => '1',
        "name" => "hieu",
        "email" => "Test",
        "description" => "aaaaaaaaaaaaaaa");
		$model->setData($data);
        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Insert Record Successfully !') );
        }
		return $resultRedirect;
	
	}
}