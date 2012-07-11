<?php
/**
 * Class file for AmazonEc2TypeDescribeInstanceAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeInstanceAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeInstanceAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The instanceType
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $instanceType;
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
	 * The userData
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $userData;
	/**
	 * The disableApiTermination
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $disableApiTermination;
	/**
	 * The instanceInitiatedShutdownBehavior
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $instanceInitiatedShutdownBehavior;
	/**
	 * The rootDeviceName
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $rootDeviceName;
	/**
	 * The blockDeviceMapping
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $blockDeviceMapping;
	/**
	 * The sourceDestCheck
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $sourceDestCheck;
	/**
	 * The groupSet
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $groupSet;
	/**
	 * The productCodes
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $productCodes;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param AmazonEc2TypeEmptyElementType instanceType
	 * @param AmazonEc2TypeEmptyElementType kernel
	 * @param AmazonEc2TypeEmptyElementType ramdisk
	 * @param AmazonEc2TypeEmptyElementType userData
	 * @param AmazonEc2TypeEmptyElementType disableApiTermination
	 * @param AmazonEc2TypeEmptyElementType instanceInitiatedShutdownBehavior
	 * @param AmazonEc2TypeEmptyElementType rootDeviceName
	 * @param AmazonEc2TypeEmptyElementType blockDeviceMapping
	 * @param AmazonEc2TypeEmptyElementType sourceDestCheck
	 * @param AmazonEc2TypeEmptyElementType groupSet
	 * @param AmazonEc2TypeEmptyElementType productCodes
	 * @return AmazonEc2TypeDescribeInstanceAttributeType
	 */
	public function __construct($_instanceId = null,$_instanceType = null,$_kernel = null,$_ramdisk = null,$_userData = null,$_disableApiTermination = null,$_instanceInitiatedShutdownBehavior = null,$_rootDeviceName = null,$_blockDeviceMapping = null,$_sourceDestCheck = null,$_groupSet = null,$_productCodes = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'instanceType'=>$_instanceType,'kernel'=>$_kernel,'ramdisk'=>$_ramdisk,'userData'=>$_userData,'disableApiTermination'=>$_disableApiTermination,'instanceInitiatedShutdownBehavior'=>$_instanceInitiatedShutdownBehavior,'rootDeviceName'=>$_rootDeviceName,'blockDeviceMapping'=>$_blockDeviceMapping,'sourceDestCheck'=>$_sourceDestCheck,'groupSet'=>$_groupSet,'productCodes'=>$_productCodes));
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
	 * Set instanceType
	 * @param EmptyElementType instanceType
	 * @return EmptyElementType
	 */
	public function setInstanceType($_instanceType)
	{
		return ($this->instanceType = $_instanceType);
	}
	/**
	 * Get instanceType
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getInstanceType()
	{
		return $this->instanceType;
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
	 * Set userData
	 * @param EmptyElementType userData
	 * @return EmptyElementType
	 */
	public function setUserData($_userData)
	{
		return ($this->userData = $_userData);
	}
	/**
	 * Get userData
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getUserData()
	{
		return $this->userData;
	}
	/**
	 * Set disableApiTermination
	 * @param EmptyElementType disableApiTermination
	 * @return EmptyElementType
	 */
	public function setDisableApiTermination($_disableApiTermination)
	{
		return ($this->disableApiTermination = $_disableApiTermination);
	}
	/**
	 * Get disableApiTermination
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getDisableApiTermination()
	{
		return $this->disableApiTermination;
	}
	/**
	 * Set instanceInitiatedShutdownBehavior
	 * @param EmptyElementType instanceInitiatedShutdownBehavior
	 * @return EmptyElementType
	 */
	public function setInstanceInitiatedShutdownBehavior($_instanceInitiatedShutdownBehavior)
	{
		return ($this->instanceInitiatedShutdownBehavior = $_instanceInitiatedShutdownBehavior);
	}
	/**
	 * Get instanceInitiatedShutdownBehavior
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getInstanceInitiatedShutdownBehavior()
	{
		return $this->instanceInitiatedShutdownBehavior;
	}
	/**
	 * Set rootDeviceName
	 * @param EmptyElementType rootDeviceName
	 * @return EmptyElementType
	 */
	public function setRootDeviceName($_rootDeviceName)
	{
		return ($this->rootDeviceName = $_rootDeviceName);
	}
	/**
	 * Get rootDeviceName
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getRootDeviceName()
	{
		return $this->rootDeviceName;
	}
	/**
	 * Set blockDeviceMapping
	 * @param EmptyElementType blockDeviceMapping
	 * @return EmptyElementType
	 */
	public function setBlockDeviceMapping($_blockDeviceMapping)
	{
		return ($this->blockDeviceMapping = $_blockDeviceMapping);
	}
	/**
	 * Get blockDeviceMapping
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getBlockDeviceMapping()
	{
		return $this->blockDeviceMapping;
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
	 * Set groupSet
	 * @param EmptyElementType groupSet
	 * @return EmptyElementType
	 */
	public function setGroupSet($_groupSet)
	{
		return ($this->groupSet = $_groupSet);
	}
	/**
	 * Get groupSet
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getGroupSet()
	{
		return $this->groupSet;
	}
	/**
	 * Set productCodes
	 * @param EmptyElementType productCodes
	 * @return EmptyElementType
	 */
	public function setProductCodes($_productCodes)
	{
		return ($this->productCodes = $_productCodes);
	}
	/**
	 * Get productCodes
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getProductCodes()
	{
		return $this->productCodes;
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