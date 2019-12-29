<?php
namespace Rsgitech\News\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class AllnewsMeta extends AbstractModel implements IdentityInterface
{
	const CACHE_TAG = 'comments_meta';
	//const DESCRIPTION		= 'description';
	//Unique identifier for use within caching
	protected $_cacheTag = self::CACHE_TAG;
	
	protected function _construct()
    {
        $this->_init('Rsgitech\News\Model\ResourceModel\AllnewsMeta');
    }
	
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
   
    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
    
}
?>
