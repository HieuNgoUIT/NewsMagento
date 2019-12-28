<?php
namespace Rsgitech\News\Model\ResourceModel\AllnewsMeta;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'meta_id';
	
	//protected $_eventPrefix = 'news_allnews_collection';

   // protected $_eventObject = 'allnews_collection';
	
	/**
     * Define model & resource model
     */
	protected function _construct()
	{
		$this->_init('Rsgitech\News\Model\AllnewsMeta', 'Rsgitech\News\Model\ResourceModel\AllnewsMeta');
	}
}