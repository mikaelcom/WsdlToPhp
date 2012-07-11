<?php
/**
 * Class file for AmazonQueueServiceTypeChangeMessageVisibilityBatchResultEntry
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeChangeMessageVisibilityBatchResultEntry
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeChangeMessageVisibilityBatchResultEntry extends AmazonQueueServiceWsdlClass
{
	/**
	 * The Id
	 * @var string
	 */
	public $Id;
	/**
	 * Constructor
	 * @param string Id
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatchResultEntry
	 */
	public function __construct($_Id = null)
	{
		parent::__construct(array('Id'=>$_Id));
	}
	/**
	 * Set Id
	 * @param string Id
	 * @return string
	 */
	public function setId($_Id)
	{
		return ($this->Id = $_Id);
	}
	/**
	 * Get Id
	 * @return string
	 */
	public function getId()
	{
		return $this->Id;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>