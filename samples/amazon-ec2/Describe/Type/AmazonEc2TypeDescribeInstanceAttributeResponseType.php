<?php
/**
 * Class file for AmazonEc2TypeDescribeInstanceAttributeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeInstanceAttributeResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeInstanceAttributeResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The instanceType
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $instanceType;
	/**
	 * The kernel
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $kernel;
	/**
	 * The ramdisk
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $ramdisk;
	/**
	 * The userData
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $userData;
	/**
	 * The disableApiTermination
	 * @var AmazonEc2TypeNullableAttributeBooleanValueType
	 */
	public $disableApiTermination;
	/**
	 * The instanceInitiatedShutdownBehavior
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $instanceInitiatedShutdownBehavior;
	/**
	 * The rootDeviceName
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $rootDeviceName;
	/**
	 * The blockDeviceMapping
	 * @var AmazonEc2TypeInstanceBlockDeviceMappingResponseType
	 */
	public $blockDeviceMapping;
	/**
	 * The sourceDestCheck
	 * @var AmazonEc2TypeNullableAttributeBooleanValueType
	 */
	public $sourceDestCheck;
	/**
	 * The groupSet
	 * @var AmazonEc2TypeGroupSetType
	 */
	public $groupSet;
	/**
	 * The productCodes
	 * @var AmazonEc2TypeProductCodesSetType
	 */
	public $productCodes;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string instanceId
	 * @param AmazonEc2TypeNullableAttributeValueType instanceType
	 * @param AmazonEc2TypeNullableAttributeValueType kernel
	 * @param AmazonEc2TypeNullableAttributeValueType ramdisk
	 * @param AmazonEc2TypeNullableAttributeValueType userData
	 * @param AmazonEc2TypeNullableAttributeBooleanValueType disableApiTermination
	 * @param AmazonEc2TypeNullableAttributeValueType instanceInitiatedShutdownBehavior
	 * @param AmazonEc2TypeNullableAttributeValueType rootDeviceName
	 * @param AmazonEc2TypeInstanceBlockDeviceMappingResponseType blockDeviceMapping
	 * @param AmazonEc2TypeNullableAttributeBooleanValueType sourceDestCheck
	 * @param AmazonEc2TypeGroupSetType groupSet
	 * @param AmazonEc2TypeProductCodesSetType productCodes
	 * @return AmazonEc2TypeDescribeInstanceAttributeResponseType
	 */
	public function __construct($_requestId = null,$_instanceId = null,$_instanceType = null,$_kernel = null,$_ramdisk = null,$_userData = null,$_disableApiTermination = null,$_instanceInitiatedShutdownBehavior = null,$_rootDeviceName = null,$_blockDeviceMapping = null,$_sourceDestCheck = null,$_groupSet = null,$_productCodes = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'instanceId'=>$_instanceId,'instanceType'=>$_instanceType,'kernel'=>$_kernel,'ramdisk'=>$_ramdisk,'userData'=>$_userData,'disableApiTermination'=>$_disableApiTermination,'instanceInitiatedShutdownBehavior'=>$_instanceInitiatedShutdownBehavior,'rootDeviceName'=>$_rootDeviceName,'blockDeviceMapping'=>$_blockDeviceMapping,'sourceDestCheck'=>$_sourceDestCheck,'groupSet'=>$_groupSet,'productCodes'=>$_productCodes));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
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
	 * @param NullableAttributeValueType instanceType
	 * @return NullableAttributeValueType
	 */
	public function setInstanceType($_instanceType)
	{
		return ($this->instanceType = $_instanceType);
	}
	/**
	 * Get instanceType
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getInstanceType()
	{
		return $this->instanceType;
	}
	/**
	 * Set kernel
	 * @param NullableAttributeValueType kernel
	 * @return NullableAttributeValueType
	 */
	public function setKernel($_kernel)
	{
		return ($this->kernel = $_kernel);
	}
	/**
	 * Get kernel
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getKernel()
	{
		return $this->kernel;
	}
	/**
	 * Set ramdisk
	 * @param NullableAttributeValueType ramdisk
	 * @return NullableAttributeValueType
	 */
	public function setRamdisk($_ramdisk)
	{
		return ($this->ramdisk = $_ramdisk);
	}
	/**
	 * Get ramdisk
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getRamdisk()
	{
		return $this->ramdisk;
	}
	/**
	 * Set userData
	 * @param NullableAttributeValueType userData
	 * @return NullableAttributeValueType
	 */
	public function setUserData($_userData)
	{
		return ($this->userData = $_userData);
	}
	/**
	 * Get userData
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getUserData()
	{
		return $this->userData;
	}
	/**
	 * Set disableApiTermination
	 * @param NullableAttributeBooleanValueType disableApiTermination
	 * @return NullableAttributeBooleanValueType
	 */
	public function setDisableApiTermination($_disableApiTermination)
	{
		return ($this->disableApiTermination = $_disableApiTermination);
	}
	/**
	 * Get disableApiTermination
	 * @return AmazonEc2TypeNullableAttributeBooleanValueType
	 */
	public function getDisableApiTermination()
	{
		return $this->disableApiTermination;
	}
	/**
	 * Set instanceInitiatedShutdownBehavior
	 * @param NullableAttributeValueType instanceInitiatedShutdownBehavior
	 * @return NullableAttributeValueType
	 */
	public function setInstanceInitiatedShutdownBehavior($_instanceInitiatedShutdownBehavior)
	{
		return ($this->instanceInitiatedShutdownBehavior = $_instanceInitiatedShutdownBehavior);
	}
	/**
	 * Get instanceInitiatedShutdownBehavior
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getInstanceInitiatedShutdownBehavior()
	{
		return $this->instanceInitiatedShutdownBehavior;
	}
	/**
	 * Set rootDeviceName
	 * @param NullableAttributeValueType rootDeviceName
	 * @return NullableAttributeValueType
	 */
	public function setRootDeviceName($_rootDeviceName)
	{
		return ($this->rootDeviceName = $_rootDeviceName);
	}
	/**
	 * Get rootDeviceName
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getRootDeviceName()
	{
		return $this->rootDeviceName;
	}
	/**
	 * Set blockDeviceMapping
	 * @param InstanceBlockDeviceMappingResponseType blockDeviceMapping
	 * @return InstanceBlockDeviceMappingResponseType
	 */
	public function setBlockDeviceMapping($_blockDeviceMapping)
	{
		return ($this->blockDeviceMapping = $_blockDeviceMapping);
	}
	/**
	 * Get blockDeviceMapping
	 * @return AmazonEc2TypeInstanceBlockDeviceMappingResponseType
	 */
	public function getBlockDeviceMapping()
	{
		return $this->blockDeviceMapping;
	}
	/**
	 * Set sourceDestCheck
	 * @param NullableAttributeBooleanValueType sourceDestCheck
	 * @return NullableAttributeBooleanValueType
	 */
	public function setSourceDestCheck($_sourceDestCheck)
	{
		return ($this->sourceDestCheck = $_sourceDestCheck);
	}
	/**
	 * Get sourceDestCheck
	 * @return AmazonEc2TypeNullableAttributeBooleanValueType
	 */
	public function getSourceDestCheck()
	{
		return $this->sourceDestCheck;
	}
	/**
	 * Set groupSet
	 * @param GroupSetType groupSet
	 * @return GroupSetType
	 */
	public function setGroupSet($_groupSet)
	{
		return ($this->groupSet = $_groupSet);
	}
	/**
	 * Get groupSet
	 * @return AmazonEc2TypeGroupSetType
	 */
	public function getGroupSet()
	{
		return $this->groupSet;
	}
	/**
	 * Set productCodes
	 * @param ProductCodesSetType productCodes
	 * @return ProductCodesSetType
	 */
	public function setProductCodes($_productCodes)
	{
		return ($this->productCodes = $_productCodes);
	}
	/**
	 * Get productCodes
	 * @return AmazonEc2TypeProductCodesSetType
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