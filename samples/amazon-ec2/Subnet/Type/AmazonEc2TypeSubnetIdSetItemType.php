<?php
/**
 * Class file for AmazonEc2TypeSubnetIdSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSubnetIdSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeSubnetIdSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The subnetId
	 * @var string
	 */
	public $subnetId;
	/**
	 * Constructor
	 * @param string subnetId
	 * @return AmazonEc2TypeSubnetIdSetItemType
	 */
	public function __construct($_subnetId = null)
	{
		parent::__construct(array('subnetId'=>$_subnetId));
	}
	/**
	 * Set subnetId
	 * @param string subnetId
	 * @return string
	 */
	public function setSubnetId($_subnetId)
	{
		return ($this->subnetId = $_subnetId);
	}
	/**
	 * Get subnetId
	 * @return string
	 */
	public function getSubnetId()
	{
		return $this->subnetId;
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