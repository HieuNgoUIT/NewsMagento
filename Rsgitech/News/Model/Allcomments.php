<?php
namespace Rsgitech\News\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Allcomments extends AbstractModel implements IdentityInterface
{
	const CACHE_TAG = 'comments';
	const DESCRIPTION		= 'description';
	//Unique identifier for use within caching
	protected $_cacheTag = self::CACHE_TAG;
	
	protected function _construct()
    {
        $this->_init('Rsgitech\News\Model\ResourceModel\Allcomments');
    }
	
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
}
?>
