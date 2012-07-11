<?php
/**
 * Class file for AmazonEc2TypeModifyInstanceAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeModifyInstanceAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeModifyInstanceAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The instanceType
	 * @var AmazonEc2TypeAttributeValueType
	 */
	public $instanceType;
	/**
	 * The kernel
	 * @var AmazonEc2TypeAttributeValueType
	 */
	public $kernel;
	/**
	 * The ramdisk
	 * @var AmazonEc2TypeAttributeValueType
	 */
	public $ramdisk;
	/**
	 * The userData
	 * @var AmazonEc2TypeAttributeValueType
	 */
	public $userData;
	/**
	 * The disableApiTermination
	 * @var AmazonEc2TypeAttributeBooleanValueType
	 */
	public $disableApiTermination;
	/**
	 * The instanceInitiatedShutdownBehavior
	 * @var AmazonEc2TypeAttributeValueType
	 */
	public $instanceInitiatedShutdownBehavior;
	/**
	 * The blockDeviceMapping
	 * @var AmazonEc2TypeInstanceBlockDeviceMappingType
	 */
	public $blockDeviceMapping;
	/**
	 * The sourceDestCheck
	 * @var AmazonEc2TypeAttributeBooleanValueType
	 */
	public $sourceDestCheck;
	/**
	 * The groupSet
	 * @var AmazonEc2TypeSecurityGroupIdSetType
	 */
	public $groupSet;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param AmazonEc2TypeAttributeValueType instanceType
	 * @param AmazonEc2TypeAttributeValueType kernel
	 * @param AmazonEc2TypeAttributeValueType ramdisk
	 * @param AmazonEc2TypeAttributeValueType userData
	 * @param AmazonEc2TypeAttributeBooleanValueType disableApiTermination
	 * @param AmazonEc2TypeAttributeValueType instanceInitiatedShutdownBehavior
	 * @param AmazonEc2TypeInstanceBlockDeviceMappingType blockDeviceMapping
	 * @param AmazonEc2TypeAttributeBooleanValueType sourceDestCheck
	 * @param AmazonEc2TypeSecurityGroupIdSetType groupSet
	 * @return AmazonEc2TypeModifyInstanceAttributeType
	 */
	public function __construct($_instanceId = null,$_instanceType = null,$_kernel = null,$_ramdisk = null,$_userData = null,$_disableApiTermination = null,$_instanceInitiatedShutdownBehavior = null,$_blockDeviceMapping = null,$_sourceDestCheck = null,$_groupSet = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'instanceType'=>$_instanceType,'kernel'=>$_kernel,'ramdisk'=>$_ramdisk,'userData'=>$_userData,'disableApiTermination'=>$_disableApiTermination,'instanceInitiatedShutdownBehavior'=>$_instanceInitiatedShutdownBehavior,'blockDeviceMapping'=>$_blockDeviceMapping,'sourceDestCheck'=>$_sourceDestCheck,'groupSet'=>$_groupSet));
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
	 * @param AttributeValueType instanceType
	 * @return AttributeValueType
	 */
	public function setInstanceType($_instanceType)
	{
		return ($this->instanceType = $_instanceType);
	}
	/**
	 * Get instanceType
	 * @return AmazonEc2TypeAttributeValueType
	 */
	public function getInstanceType()
	{
		return $this->instanceType;
	}
	/**
	 * Set kernel
	 * @param AttributeValueType kernel
	 * @return AttributeValueType
	 */
	public function setKernel($_kernel)
	{
		return ($this->kernel = $_kernel);
	}
	/**
	 * Get kernel
	 * @return AmazonEc2TypeAttributeValueType
	 */
	public function getKernel()
	{
		return $this->kernel;
	}
	/**
	 * Set ramdisk
	 * @param AttributeValueType ramdisk
	 * @return AttributeValueType
	 */
	public function setRamdisk($_ramdisk)
	{
		return ($this->ramdisk = $_ramdisk);
	}
	/**
	 * Get ramdisk
	 * @return AmazonEc2TypeAttributeValueType
	 */
	public function getRamdisk()
	{
		return $this->ramdisk;
	}
	/**
	 * Set userData
	 * @param AttributeValueType userData
	 * @return AttributeValueType
	 */
	public function setUserData($_userData)
	{
		return ($this->userData = $_userData);
	}
	/**
	 * Get userData
	 * @return AmazonEc2TypeAttributeValueType
	 */
	public function getUserData()
	{
		return $this->userData;
	}
	/**
	 * Set disableApiTermination
	 * @param AttributeBooleanValueType disableApiTermination
	 * @return AttributeBooleanValueType
	 */
	public function setDisableApiTermination($_disableApiTermination)
	{
		return ($this->disableApiTermination = $_disableApiTermination);
	}
	/**
	 * Get disableApiTermination
	 * @return AmazonEc2TypeAttributeBooleanValueType
	 */
	public function getDisableApiTermination()
	{
		return $this->disableApiTermination;
	}
	/**
	 * Set instanceInitiatedShutdownBehavior
	 * @param AttributeValueType instanceInitiatedShutdownBehavior
	 * @return AttributeValueType
	 */
	public function setInstanceInitiatedShutdownBehavior($_instanceInitiatedShutdownBehavior)
	{
		return ($this->instanceInitiatedShutdownBehavior = $_instanceInitiatedShutdownBehavior);
	}
	/**
	 * Get instanceInitiatedShutdownBehavior
	 * @return AmazonEc2TypeAttributeValueType
	 */
	public function getInstanceInitiatedShutdownBehavior()
	{
		return $this->instanceInitiatedShutdownBehavior;
	}
	/**
	 * Set blockDeviceMapping
	 * @param InstanceBlockDeviceMappingType blockDeviceMapping
	 * @return InstanceBlockDeviceMappingType
	 */
	public function setBlockDeviceMapping($_blockDeviceMapping)
	{
		return ($this->blockDeviceMapping = $_blockDeviceMapping);
	}
	/**
	 * Get blockDeviceMapping
	 * @return AmazonEc2TypeInstanceBlockDeviceMappingType
	 */
	public function getBlockDeviceMapping()
	{
		return $this->blockDeviceMapping;
	}
	/**
	 * Set sourceDestCheck
	 * @param AttributeBooleanValueType sourceDestCheck
	 * @return AttributeBooleanValueType
	 */
	public function setSourceDestCheck($_sourceDestCheck)
	{
		return ($this->sourceDestCheck = $_sourceDestCheck);
	}
	/**
	 * Get sourceDestCheck
	 * @return AmazonEc2TypeAttributeBooleanValueType
	 */
	public function getSourceDestCheck()
	{
		return $this->sourceDestCheck;
	}
	/**
	 * Set groupSet
	 * @param SecurityGroupIdSetType groupSet
	 * @return SecurityGroupIdSetType
	 */
	public function setGroupSet($_groupSet)
	{
		return ($this->groupSet = $_groupSet);
	}
	/**
	 * Get groupSet
	 * @return AmazonEc2TypeSecurityGroupIdSetType
	 */
	public function getGroupSet()
	{
		return $this->groupSet;
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