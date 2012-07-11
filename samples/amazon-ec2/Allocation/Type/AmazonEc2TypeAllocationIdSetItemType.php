<?php
/**
 * Class file for AmazonEc2TypeAllocationIdSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAllocationIdSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeAllocationIdSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The allocationId
	 * @var string
	 */
	public $allocationId;
	/**
	 * Constructor
	 * @param string allocationId
	 * @return AmazonEc2TypeAllocationIdSetItemType
	 */
	public function __construct($_allocationId = null)
	{
		parent::__construct(array('allocationId'=>$_allocationId));
	}
	/**
	 * Set allocationId
	 * @param string allocationId
	 * @return string
	 */
	public function setAllocationId($_allocationId)
	{
		return ($this->allocationId = $_allocationId);
	}
	/**
	 * Get allocationId
	 * @return string
	 */
	public function getAllocationId()
	{
		return $this->allocationId;
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