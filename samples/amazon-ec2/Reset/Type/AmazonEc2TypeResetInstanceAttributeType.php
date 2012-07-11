<?php
/**
 * Class file for AmazonEc2TypeResetInstanceAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeResetInstanceAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeResetInstanceAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The kernel
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $kernel;
	/**
	 * The ramdisk
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $ramdisk;
	/**
	 * The sourceDestCheck
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $sourceDestCheck;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param AmazonEc2TypeEmptyElementType kernel
	 * @param AmazonEc2TypeEmptyElementType ramdisk
	 * @param AmazonEc2TypeEmptyElementType sourceDestCheck
	 * @return AmazonEc2TypeResetInstanceAttributeType
	 */
	public function __construct($_instanceId = null,$_kernel = null,$_ramdisk = null,$_sourceDestCheck = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'kernel'=>$_kernel,'ramdisk'=>$_ramdisk,'sourceDestCheck'=>$_sourceDestCheck));
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set kernel
	 * @param EmptyElementType kernel
	 * @return EmptyElementType
	 */
	public function setKernel($_kernel)
	{
		return ($this->kernel = $_kernel);
	}
	/**
	 * Get kernel
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getKernel()
	{
		return $this->kernel;
	}
	/**
	 * Set ramdisk
	 * @param EmptyElementType ramdisk
	 * @return EmptyElementType
	 */
	public function setRamdisk($_ramdisk)
	{
		return ($this->ramdisk = $_ramdisk);
	}
	/**
	 * Get ramdisk
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getRamdisk()
	{
		return $this->ramdisk;
	}
	/**
	 * Set sourceDestCheck
	 * @param EmptyElementType sourceDestCheck
	 * @return EmptyElementType
	 */
	public function setSourceDestCheck($_sourceDestCheck)
	{
		return ($this->sourceDestCheck = $_sourceDestCheck);
	}
	/**
	 * Get sourceDestCheck
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getSourceDestCheck()
	{
		return $this->sourceDestCheck;
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