<?php
namespace Ranosys\Custom\Model\ResourceModel\Blog;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'entity_id';
	protected $eventPrefix = 'ranosys_custom_blog_collection_data_source';
	protected $_eventObject = 'blog_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Ranosys\Custom\Model\Blog', 'Ranosys\Custom\Model\ResourceModel\Blog');
	}

}