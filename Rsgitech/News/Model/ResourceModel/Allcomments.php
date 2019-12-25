<?php
namespace Rsgitech\News\Model\ResourceModel;

use Magento\Framework\Model\AbstractModel;

class Allcomments extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    ) {
        parent::__construct($context);
    }
	
	/**
     * Define main table
     */
	protected function _construct()
	{
        $this->_init('comments', 'comment_id');
        $this->_isPkAutoIncrement = false;
	}
}
?>
