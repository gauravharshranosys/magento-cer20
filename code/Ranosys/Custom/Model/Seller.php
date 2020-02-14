<?php
namespace Ranosys\Custom\Model;
class Seller extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'blog_table';

	protected $_cacheTag = 'blog_table';

	protected $_eventPrefix = 'blog_table';

	protected function _construct()
	{
		$this->_init('Ranosys\Custom\Model\ResourceModel\Seller');
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