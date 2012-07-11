<?php
/**
 * Class file for AmazonEc2TypeRunningInstancesItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRunningInstancesItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeRunningInstancesItemType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The imageId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $imageId;
	/**
	 * The instanceState
	 * @var AmazonEc2TypeInstanceStateType
	 */
	public $instanceState;
	/**
	 * The privateDnsName
	 * @var string
	 */
	public $privateDnsName;
	/**
	 * The dnsName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $dnsName;
	/**
	 * The reason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $reason;
	/**
	 * The keyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $keyName;
	/**
	 * The amiLaunchIndex
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $amiLaunchIndex;
	/**
	 * The productCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeProductCodesSetType
	 */
	public $productCodes;
	/**
	 * The instanceType
	 * @var string
	 */
	public $instanceType;
	/**
	 * The launchTime
	 * @var dateTime
	 */
	public $launchTime;
	/**
	 * The placement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypePlacementResponseType
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
	 * The platform
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $platform;
	/**
	 * The monitoring
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceMonitoringStateType
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
	 * The vpcId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $vpcId;
	/**
	 * The privateIpAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * The ipAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ipAddress;
	/**
	 * The sourceDestCheck
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $sourceDestCheck;
	/**
	 * The groupSet
	 * @var AmazonEc2TypeGroupSetType
	 */
	public $groupSet;
	/**
	 * The stateReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeStateReasonType
	 */
	public $stateReason;
	/**
	 * The architecture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $architecture;
	/**
	 * The rootDeviceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $rootDeviceType;
	/**
	 * The rootDeviceName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $rootDeviceName;
	/**
	 * The blockDeviceMapping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceBlockDeviceMappingResponseType
	 */
	public $blockDeviceMapping;
	/**
	 * The instanceLifecycle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceLifecycle;
	/**
	 * The spotInstanceRequestId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $spotInstanceRequestId;
	/**
	 * The license
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceLicenseResponseType
	 */
	public $license;
	/**
	 * The virtualizationType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $virtualizationType;
	/**
	 * The clientToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $clientToken;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * The hypervisor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $hypervisor;
	/**
	 * The networkInterfaceSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceNetworkInterfaceSetType
	 */
	public $networkInterfaceSet;
	/**
	 * The iamInstanceProfile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeIamInstanceProfileResponseType
	 */
	public $iamInstanceProfile;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param string imageId
	 * @param AmazonEc2TypeInstanceStateType instanceState
	 * @param string privateDnsName
	 * @param string dnsName
	 * @param string reason
	 * @param string keyName
	 * @param string amiLaunchIndex
	 * @param AmazonEc2TypeProductCodesSetType productCodes
	 * @param string instanceType
	 * @param dateTime launchTime
	 * @param AmazonEc2TypePlacementResponseType placement
	 * @param string kernelId
	 * @param string ramdiskId
	 * @param string platform
	 * @param AmazonEc2TypeInstanceMonitoringStateType monitoring
	 * @param string subnetId
	 * @param string vpcId
	 * @param string privateIpAddress
	 * @param string ipAddress
	 * @param boolean sourceDestCheck
	 * @param AmazonEc2TypeGroupSetType groupSet
	 * @param AmazonEc2TypeStateReasonType stateReason
	 * @param string architecture
	 * @param string rootDeviceType
	 * @param string rootDeviceName
	 * @param AmazonEc2TypeInstanceBlockDeviceMappingResponseType blockDeviceMapping
	 * @param string instanceLifecycle
	 * @param string spotInstanceRequestId
	 * @param AmazonEc2TypeInstanceLicenseResponseType license
	 * @param string virtualizationType
	 * @param string clientToken
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @param string hypervisor
	 * @param AmazonEc2TypeInstanceNetworkInterfaceSetType networkInterfaceSet
	 * @param AmazonEc2TypeIamInstanceProfileResponseType iamInstanceProfile
	 * @return AmazonEc2TypeRunningInstancesItemType
	 */
	public function __construct($_instanceId = null,$_imageId = null,$_instanceState = null,$_privateDnsName = null,$_dnsName = null,$_reason = null,$_keyName = null,$_amiLaunchIndex = null,$_productCodes = null,$_instanceType = null,$_launchTime = null,$_placement = null,$_kernelId = null,$_ramdiskId = null,$_platform = null,$_monitoring = null,$_subnetId = null,$_vpcId = null,$_privateIpAddress = null,$_ipAddress = null,$_sourceDestCheck = null,$_groupSet = null,$_stateReason = null,$_architecture = null,$_rootDeviceType = null,$_rootDeviceName = null,$_blockDeviceMapping = null,$_instanceLifecycle = null,$_spotInstanceRequestId = null,$_license = null,$_virtualizationType = null,$_clientToken = null,$_tagSet = null,$_hypervisor = null,$_networkInterfaceSet = null,$_iamInstanceProfile = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'imageId'=>$_imageId,'instanceState'=>$_instanceState,'privateDnsName'=>$_privateDnsName,'dnsName'=>$_dnsName,'reason'=>$_reason,'keyName'=>$_keyName,'amiLaunchIndex'=>$_amiLaunchIndex,'productCodes'=>$_productCodes,'instanceType'=>$_instanceType,'launchTime'=>$_launchTime,'placement'=>$_placement,'kernelId'=>$_kernelId,'ramdiskId'=>$_ramdiskId,'platform'=>$_platform,'monitoring'=>$_monitoring,'subnetId'=>$_subnetId,'vpcId'=>$_vpcId,'privateIpAddress'=>$_privateIpAddress,'ipAddress'=>$_ipAddress,'sourceDestCheck'=>$_sourceDestCheck,'groupSet'=>$_groupSet,'stateReason'=>$_stateReason,'architecture'=>$_architecture,'rootDeviceType'=>$_rootDeviceType,'rootDeviceName'=>$_rootDeviceName,'blockDeviceMapping'=>$_blockDeviceMapping,'instanceLifecycle'=>$_instanceLifecycle,'spotInstanceRequestId'=>$_spotInstanceRequestId,'license'=>$_license,'virtualizationType'=>$_virtualizationType,'clientToken'=>$_clientToken,'tagSet'=>$_tagSet,'hypervisor'=>$_hypervisor,'networkInterfaceSet'=>$_networkInterfaceSet,'iamInstanceProfile'=>$_iamInstanceProfile));
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
	 * Set instanceState
	 * @param InstanceStateType instanceState
	 * @return InstanceStateType
	 */
	public function setInstanceState($_instanceState)
	{
		return ($this->instanceState = $_instanceState);
	}
	/**
	 * Get instanceState
	 * @return AmazonEc2TypeInstanceStateType
	 */
	public function getInstanceState()
	{
		return $this->instanceState;
	}
	/**
	 * Set privateDnsName
	 * @param string privateDnsName
	 * @return string
	 */
	public function setPrivateDnsName($_privateDnsName)
	{
		return ($this->privateDnsName = $_privateDnsName);
	}
	/**
	 * Get privateDnsName
	 * @return string
	 */
	public function getPrivateDnsName()
	{
		return $this->privateDnsName;
	}
	/**
	 * Set dnsName
	 * @param string dnsName
	 * @return string
	 */
	public function setDnsName($_dnsName)
	{
		return ($this->dnsName = $_dnsName);
	}
	/**
	 * Get dnsName
	 * @return string
	 */
	public function getDnsName()
	{
		return $this->dnsName;
	}
	/**
	 * Set reason
	 * @param string reason
	 * @return string
	 */
	public function setReason($_reason)
	{
		return ($this->reason = $_reason);
	}
	/**
	 * Get reason
	 * @return string
	 */
	public function getReason()
	{
		return $this->reason;
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
	 * Set amiLaunchIndex
	 * @param string amiLaunchIndex
	 * @return string
	 */
	public function setAmiLaunchIndex($_amiLaunchIndex)
	{
		return ($this->amiLaunchIndex = $_amiLaunchIndex);
	}
	/**
	 * Get amiLaunchIndex
	 * @return string
	 */
	public function getAmiLaunchIndex()
	{
		return $this->amiLaunchIndex;
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
	 * Set launchTime
	 * @param dateTime launchTime
	 * @return dateTime
	 */
	public function setLaunchTime($_launchTime)
	{
		return ($this->launchTime = $_launchTime);
	}
	/**
	 * Get launchTime
	 * @return dateTime
	 */
	public function getLaunchTime()
	{
		return $this->launchTime;
	}
	/**
	 * Set placement
	 * @param PlacementResponseType placement
	 * @return PlacementResponseType
	 */
	public function setPlacement($_placement)
	{
		return ($this->placement = $_placement);
	}
	/**
	 * Get placement
	 * @return AmazonEc2TypePlacementResponseType
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
	 * Set platform
	 * @param string platform
	 * @return string
	 */
	public function setPlatform($_platform)
	{
		return ($this->platform = $_platform);
	}
	/**
	 * Get platform
	 * @return string
	 */
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	 * Set monitoring
	 * @param InstanceMonitoringStateType monitoring
	 * @return InstanceMonitoringStateType
	 */
	public function setMonitoring($_monitoring)
	{
		return ($this->monitoring = $_monitoring);
	}
	/**
	 * Get monitoring
	 * @return AmazonEc2TypeInstanceMonitoringStateType
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
	 * Set vpcId
	 * @param string vpcId
	 * @return string
	 */
	public function setVpcId($_vpcId)
	{
		return ($this->vpcId = $_vpcId);
	}
	/**
	 * Get vpcId
	 * @return string
	 */
	public function getVpcId()
	{
		return $this->vpcId;
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
	 * Set ipAddress
	 * @param string ipAddress
	 * @return string
	 */
	public function setIpAddress($_ipAddress)
	{
		return ($this->ipAddress = $_ipAddress);
	}
	/**
	 * Get ipAddress
	 * @return string
	 */
	public function getIpAddress()
	{
		return $this->ipAddress;
	}
	/**
	 * Set sourceDestCheck
	 * @param boolean sourceDestCheck
	 * @return boolean
	 */
	public function setSourceDestCheck($_sourceDestCheck)
	{
		return ($this->sourceDestCheck = $_sourceDestCheck);
	}
	/**
	 * Get sourceDestCheck
	 * @return boolean
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
	 * Set stateReason
	 * @param StateReasonType stateReason
	 * @return StateReasonType
	 */
	public function setStateReason($_stateReason)
	{
		return ($this->stateReason = $_stateReason);
	}
	/**
	 * Get stateReason
	 * @return AmazonEc2TypeStateReasonType
	 */
	public function getStateReason()
	{
		return $this->stateReason;
	}
	/**
	 * Set architecture
	 * @param string architecture
	 * @return string
	 */
	public function setArchitecture($_architecture)
	{
		return ($this->architecture = $_architecture);
	}
	/**
	 * Get architecture
	 * @return string
	 */
	public function getArchitecture()
	{
		return $this->architecture;
	}
	/**
	 * Set rootDeviceType
	 * @param string rootDeviceType
	 * @return string
	 */
	public function setRootDeviceType($_rootDeviceType)
	{
		return ($this->rootDeviceType = $_rootDeviceType);
	}
	/**
	 * Get rootDeviceType
	 * @return string
	 */
	public function getRootDeviceType()
	{
		return $this->rootDeviceType;
	}
	/**
	 * Set rootDeviceName
	 * @param string rootDeviceName
	 * @return string
	 */
	public function setRootDeviceName($_rootDeviceName)
	{
		return ($this->rootDeviceName = $_rootDeviceName);
	}
	/**
	 * Get rootDeviceName
	 * @return string
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
	 * Set instanceLifecycle
	 * @param string instanceLifecycle
	 * @return string
	 */
	public function setInstanceLifecycle($_instanceLifecycle)
	{
		return ($this->instanceLifecycle = $_instanceLifecycle);
	}
	/**
	 * Get instanceLifecycle
	 * @return string
	 */
	public function getInstanceLifecycle()
	{
		return $this->instanceLifecycle;
	}
	/**
	 * Set spotInstanceRequestId
	 * @param string spotInstanceRequestId
	 * @return string
	 */
	public function setSpotInstanceRequestId($_spotInstanceRequestId)
	{
		return ($this->spotInstanceRequestId = $_spotInstanceRequestId);
	}
	/**
	 * Get spotInstanceRequestId
	 * @return string
	 */
	public function getSpotInstanceRequestId()
	{
		return $this->spotInstanceRequestId;
	}
	/**
	 * Set license
	 * @param InstanceLicenseResponseType license
	 * @return InstanceLicenseResponseType
	 */
	public function setLicense($_license)
	{
		return ($this->license = $_license);
	}
	/**
	 * Get license
	 * @return AmazonEc2TypeInstanceLicenseResponseType
	 */
	public function getLicense()
	{
		return $this->license;
	}
	/**
	 * Set virtualizationType
	 * @param string virtualizationType
	 * @return string
	 */
	public function setVirtualizationType($_virtualizationType)
	{
		return ($this->virtualizationType = $_virtualizationType);
	}
	/**
	 * Get virtualizationType
	 * @return string
	 */
	public function getVirtualizationType()
	{
		return $this->virtualizationType;
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
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
	}
	/**
	 * Set hypervisor
	 * @param string hypervisor
	 * @return string
	 */
	public function setHypervisor($_hypervisor)
	{
		return ($this->hypervisor = $_hypervisor);
	}
	/**
	 * Get hypervisor
	 * @return string
	 */
	public function getHypervisor()
	{
		return $this->hypervisor;
	}
	/**
	 * Set networkInterfaceSet
	 * @param InstanceNetworkInterfaceSetType networkInterfaceSet
	 * @return InstanceNetworkInterfaceSetType
	 */
	public function setNetworkInterfaceSet($_networkInterfaceSet)
	{
		return ($this->networkInterfaceSet = $_networkInterfaceSet);
	}
	/**
	 * Get networkInterfaceSet
	 * @return AmazonEc2TypeInstanceNetworkInterfaceSetType
	 */
	public function getNetworkInterfaceSet()
	{
		return $this->networkInterfaceSet;
	}
	/**
	 * Set iamInstanceProfile
	 * @param IamInstanceProfileResponseType iamInstanceProfile
	 * @return IamInstanceProfileResponseType
	 */
	public function setIamInstanceProfile($_iamInstanceProfile)
	{
		return ($this->iamInstanceProfile = $_iamInstanceProfile);
	}
	/**
	 * Get iamInstanceProfile
	 * @return AmazonEc2TypeIamInstanceProfileResponseType
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