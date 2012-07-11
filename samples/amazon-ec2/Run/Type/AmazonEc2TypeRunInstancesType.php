<?php
/**
 * Class file for AmazonEc2TypeRunInstancesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRunInstancesType
 * @date 10/07/2012
 */
class AmazonEc2TypeRunInstancesType extends AmazonEc2WsdlClass
{
	/**
	 * The imageId
	 * @var string
	 */
	public $imageId;
	/**
	 * The minCount
	 * @var int
	 */
	public $minCount;
	/**
	 * The maxCount
	 * @var int
	 */
	public $maxCount;
	/**
	 * The keyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $keyName;
	/**
	 * The groupSet
	 * @var AmazonEc2TypeGroupSetType
	 */
	public $groupSet;
	/**
	 * The additionalInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $additionalInfo;
	/**
	 * The userData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeUserDataType
	 */
	public $userData;
	/**
	 * The addressingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $addressingType;
	/**
	 * The instanceType
	 * @var string
	 */
	public $instanceType;
	/**
	 * The placement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypePlacementRequestType
	 */
	public $placement;
	/**
	 * The kernelId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $kernelId;
	/**
	 * The ramdiskId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ramdiskId;
	/**
	 * The blockDeviceMapping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeBlockDeviceMappingType
	 */
	public $blockDeviceMapping;
	/**
	 * The monitoring
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeMonitoringInstanceType
	 */
	public $monitoring;
	/**
	 * The subnetId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $subnetId;
	/**
	 * The disableApiTermination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $disableApiTermination;
	/**
	 * The instanceInitiatedShutdownBehavior
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceInitiatedShutdownBehavior;
	/**
	 * The license
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceLicenseRequestType
	 */
	public $license;
	/**
	 * The privateIpAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * The clientToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $clientToken;
	/**
	 * The networkInterfaceSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceNetworkInterfaceSetRequestType
	 */
	public $networkInterfaceSet;
	/**
	 * The iamInstanceProfile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeIamInstanceProfileRequestType
	 */
	public $iamInstanceProfile;
	/**
	 * Constructor
	 * @param string imageId
	 * @param int minCount
	 * @param int maxCount
	 * @param string keyName
	 * @param AmazonEc2TypeGroupSetType groupSet
	 * @param string additionalInfo
	 * @param AmazonEc2TypeUserDataType userData
	 * @param string addressingType
	 * @param string instanceType
	 * @param AmazonEc2TypePlacementRequestType placement
	 * @param string kernelId
	 * @param string ramdiskId
	 * @param AmazonEc2TypeBlockDeviceMappingType blockDeviceMapping
	 * @param AmazonEc2TypeMonitoringInstanceType monitoring
	 * @param string subnetId
	 * @param boolean disableApiTermination
	 * @param string instanceInitiatedShutdownBehavior
	 * @param AmazonEc2TypeInstanceLicenseRequestType license
	 * @param string privateIpAddress
	 * @param string clientToken
	 * @param AmazonEc2TypeInstanceNetworkInterfaceSetRequestType networkInterfaceSet
	 * @param AmazonEc2TypeIamInstanceProfileRequestType iamInstanceProfile
	 * @return AmazonEc2TypeRunInstancesType
	 */
	public function __construct($_imageId = null,$_minCount = null,$_maxCount = null,$_keyName = null,$_groupSet = null,$_additionalInfo = null,$_userData = null,$_addressingType = null,$_instanceType = null,$_placement = null,$_kernelId = null,$_ramdiskId = null,$_blockDeviceMapping = null,$_monitoring = null,$_subnetId = null,$_disableApiTermination = null,$_instanceInitiatedShutdownBehavior = null,$_license = null,$_privateIpAddress = null,$_clientToken = null,$_networkInterfaceSet = null,$_iamInstanceProfile = null)
	{
		parent::__construct(array('imageId'=>$_imageId,'minCount'=>$_minCount,'maxCount'=>$_maxCount,'keyName'=>$_keyName,'groupSet'=>$_groupSet,'additionalInfo'=>$_additionalInfo,'userData'=>$_userData,'addressingType'=>$_addressingType,'instanceType'=>$_instanceType,'placement'=>$_placement,'kernelId'=>$_kernelId,'ramdiskId'=>$_ramdiskId,'blockDeviceMapping'=>$_blockDeviceMapping,'monitoring'=>$_monitoring,'subnetId'=>$_subnetId,'disableApiTermination'=>$_disableApiTermination,'instanceInitiatedShutdownBehavior'=>$_instanceInitiatedShutdownBehavior,'license'=>$_license,'privateIpAddress'=>$_privateIpAddress,'clientToken'=>$_clientToken,'networkInterfaceSet'=>$_networkInterfaceSet,'iamInstanceProfile'=>$_iamInstanceProfile));
	}
	/**
	 * Set imageId
	 * @param string imageId
	 * @return string
	 */
	public function setImageId($_imageId)
	{
		return ($this->imageId = $_imageId);
	}
	/**
	 * Get imageId
	 * @return string
	 */
	public function getImageId()
	{
		return $this->imageId;
	}
	/**
	 * Set minCount
	 * @param int minCount
	 * @return int
	 */
	public function setMinCount($_minCount)
	{
		return ($this->minCount = $_minCount);
	}
	/**
	 * Get minCount
	 * @return int
	 */
	public function getMinCount()
	{
		return $this->minCount;
	}
	/**
	 * Set maxCount
	 * @param int maxCount
	 * @return int
	 */
	public function setMaxCount($_maxCount)
	{
		return ($this->maxCount = $_maxCount);
	}
	/**
	 * Get maxCount
	 * @return int
	 */
	public function getMaxCount()
	{
		return $this->maxCount;
	}
	/**
	 * Set keyName
	 * @param string keyName
	 * @return string
	 */
	public function setKeyName($_keyName)
	{
		return ($this->keyName = $_keyName);
	}
	/**
	 * Get keyName
	 * @return string
	 */
	public function getKeyName()
	{
		return $this->keyName;
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
	 * Set additionalInfo
	 * @param string additionalInfo
	 * @return string
	 */
	public function setAdditionalInfo($_additionalInfo)
	{
		return ($this->additionalInfo = $_additionalInfo);
	}
	/**
	 * Get additionalInfo
	 * @return string
	 */
	public function getAdditionalInfo()
	{
		return $this->additionalInfo;
	}
	/**
	 * Set userData
	 * @param UserDataType userData
	 * @return UserDataType
	 */
	public function setUserData($_userData)
	{
		return ($this->userData = $_userData);
	}
	/**
	 * Get userData
	 * @return AmazonEc2TypeUserDataType
	 */
	public function getUserData()
	{
		return $this->userData;
	}
	/**
	 * Set addressingType
	 * @param string addressingType
	 * @return string
	 */
	public function setAddressingType($_addressingType)
	{
		return ($this->addressingType = $_addressingType);
	}
	/**
	 * Get addressingType
	 * @return string
	 */
	public function getAddressingType()
	{
		return $this->addressingType;
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
	 * Set placement
	 * @param PlacementRequestType placement
	 * @return PlacementRequestType
	 */
	public function setPlacement($_placement)
	{
		return ($this->placement = $_placement);
	}
	/**
	 * Get placement
	 * @return AmazonEc2TypePlacementRequestType
	 */
	public function getPlacement()
	{
		return $this->placement;
	}
	/**
	 * Set kernelId
	 * @param string kernelId
	 * @return string
	 */
	public function setKernelId($_kernelId)
	{
		return ($this->kernelId = $_kernelId);
	}
	/**
	 * Get kernelId
	 * @return string
	 */
	public function getKernelId()
	{
		return $this->kernelId;
	}
	/**
	 * Set ramdiskId
	 * @param string ramdiskId
	 * @return string
	 */
	public function setRamdiskId($_ramdiskId)
	{
		return ($this->ramdiskId = $_ramdiskId);
	}
	/**
	 * Get ramdiskId
	 * @return string
	 */
	public function getRamdiskId()
	{
		return $this->ramdiskId;
	}
	/**
	 * Set blockDeviceMapping
	 * @param BlockDeviceMappingType blockDeviceMapping
	 * @return BlockDeviceMappingType
	 */
	public function setBlockDeviceMapping($_blockDeviceMapping)
	{
		return ($this->blockDeviceMapping = $_blockDeviceMapping);
	}
	/**
	 * Get blockDeviceMapping
	 * @return AmazonEc2TypeBlockDeviceMappingType
	 */
	public function getBlockDeviceMapping()
	{
		return $this->blockDeviceMapping;
	}
	/**
	 * Set monitoring
	 * @param MonitoringInstanceType monitoring
	 * @return MonitoringInstanceType
	 */
	public function setMonitoring($_monitoring)
	{
		return ($this->monitoring = $_monitoring);
	}
	/**
	 * Get monitoring
	 * @return AmazonEc2TypeMonitoringInstanceType
	 */
	public function getMonitoring()
	{
		return $this->monitoring;
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
	 * Set disableApiTermination
	 * @param boolean disableApiTermination
	 * @return boolean
	 */
	public function setDisableApiTermination($_disableApiTermination)
	{
		return ($this->disableApiTermination = $_disableApiTermination);
	}
	/**
	 * Get disableApiTermination
	 * @return boolean
	 */
	public function getDisableApiTermination()
	{
		return $this->disableApiTermination;
	}
	/**
	 * Set instanceInitiatedShutdownBehavior
	 * @param string instanceInitiatedShutdownBehavior
	 * @return string
	 */
	public function setInstanceInitiatedShutdownBehavior($_instanceInitiatedShutdownBehavior)
	{
		return ($this->instanceInitiatedShutdownBehavior = $_instanceInitiatedShutdownBehavior);
	}
	/**
	 * Get instanceInitiatedShutdownBehavior
	 * @return string
	 */
	public function getInstanceInitiatedShutdownBehavior()
	{
		return $this->instanceInitiatedShutdownBehavior;
	}
	/**
	 * Set license
	 * @param InstanceLicenseRequestType license
	 * @return InstanceLicenseRequestType
	 */
	public function setLicense($_license)
	{
		return ($this->license = $_license);
	}
	/**
	 * Get license
	 * @return AmazonEc2TypeInstanceLicenseRequestType
	 */
	public function getLicense()
	{
		return $this->license;
	}
	/**
	 * Set privateIpAddress
	 * @param string privateIpAddress
	 * @return string
	 */
	public function setPrivateIpAddress($_privateIpAddress)
	{
		return ($this->privateIpAddress = $_privateIpAddress);
	}
	/**
	 * Get privateIpAddress
	 * @return string
	 */
	public function getPrivateIpAddress()
	{
		return $this->privateIpAddress;
	}
	/**
	 * Set clientToken
	 * @param string clientToken
	 * @return string
	 */
	public function setClientToken($_clientToken)
	{
		return ($this->clientToken = $_clientToken);
	}
	/**
	 * Get clientToken
	 * @return string
	 */
	public function getClientToken()
	{
		return $this->clientToken;
	}
	/**
	 * Set networkInterfaceSet
	 * @param InstanceNetworkInterfaceSetRequestType networkInterfaceSet
	 * @return InstanceNetworkInterfaceSetRequestType
	 */
	public function setNetworkInterfaceSet($_networkInterfaceSet)
	{
		return ($this->networkInterfaceSet = $_networkInterfaceSet);
	}
	/**
	 * Get networkInterfaceSet
	 * @return AmazonEc2TypeInstanceNetworkInterfaceSetRequestType
	 */
	public function getNetworkInterfaceSet()
	{
		return $this->networkInterfaceSet;
	}
	/**
	 * Set iamInstanceProfile
	 * @param IamInstanceProfileRequestType iamInstanceProfile
	 * @return IamInstanceProfileRequestType
	 */
	public function setIamInstanceProfile($_iamInstanceProfile)
	{
		return ($this->iamInstanceProfile = $_iamInstanceProfile);
	}
	/**
	 * Get iamInstanceProfile
	 * @return AmazonEc2TypeIamInstanceProfileRequestType
	 */
	public function getIamInstanceProfile()
	{
		return $this->iamInstanceProfile;
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