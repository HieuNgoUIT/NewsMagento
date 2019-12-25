<?php
namespace Rsgitech\News\Model\ResourceModel\Allcomments;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'comment_id';
	
	protected $_isPkAutoIncrement = false;
	// protected $_eventPrefix = 'news_allnews_collection';

    // protected $_eventObject = 'allnews_collection';
	
	/**
     * Define model & resource model
     */
	protected function _construct()
	{
		$this->_init('Rsgitech\News\Model\Allcomments', 'Rsgitech\News\Model\ResourceModel\Allcomments');
	}
}
?>
