<?php
namespace Ranosys\Custom\Model\ResourceModel;


class Seller extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('blog_table', 'entity_id');
	}
	
}