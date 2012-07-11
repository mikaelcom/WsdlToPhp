<?php
/**
 * Class file for AmazonEc2TypeInstanceTypeSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceTypeSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceTypeSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceType
	 * @var string
	 */
	public $instanceType;
	/**
	 * Constructor
	 * @param string instanceType
	 * @return AmazonEc2TypeInstanceTypeSetItemType
	 */
	public function __construct($_instanceType = null)
	{
		parent::__construct(array('instanceType'=>$_instanceType));
	}
	/**
	 * Set instanceType
	 * @param string instanceType
	 * @return string
	 */
	public function setInstanceType($_instanceType)
	{
		return ($this->instanceType = $_instanceType);
	}
	/**
	 * Get instanceType
	 * @return string
	 */
	public function getInstanceType()
	{
		return $this->instanceType;
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