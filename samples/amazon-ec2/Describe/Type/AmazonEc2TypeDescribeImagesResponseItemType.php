<?php
/**
 * Class file for AmazonEc2TypeDescribeImagesResponseItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeImagesResponseItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeImagesResponseItemType extends AmazonEc2WsdlClass
{
	/**
	 * The imageId
	 * @var string
	 */
	public $imageId;
	/**
	 * The imageLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $imageLocation;
	/**
	 * The imageState
	 * @var string
	 */
	public $imageState;
	/**
	 * The imageOwnerId
	 * @var string
	 */
	public $imageOwnerId;
	/**
	 * The isPublic
	 * @var boolean
	 */
	public $isPublic;
	/**
	 * The productCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeProductCodesSetType
	 */
	public $productCodes;
	/**
	 * The architecture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $architecture;
	/**
	 * The imageType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $imageType;
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
	 * The stateReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeStateReasonType
	 */
	public $stateReason;
	/**
	 * The imageOwnerAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $imageOwnerAlias;
	/**
	 * The name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $name;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
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
	 * @var AmazonEc2TypeBlockDeviceMappingType
	 */
	public $blockDeviceMapping;
	/**
	 * The virtualizationType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $virtualizationType;
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
	 * Constructor
	 * @param string imageId
	 * @param string imageLocation
	 * @param string imageState
	 * @param string imageOwnerId
	 * @param boolean isPublic
	 * @param AmazonEc2TypeProductCodesSetType productCodes
	 * @param string architecture
	 * @param string imageType
	 * @param string kernelId
	 * @param string ramdiskId
	 * @param string platform
	 * @param AmazonEc2TypeStateReasonType stateReason
	 * @param string imageOwnerAlias
	 * @param string name
	 * @param string description
	 * @param string rootDeviceType
	 * @param string rootDeviceName
	 * @param AmazonEc2TypeBlockDeviceMappingType blockDeviceMapping
	 * @param string virtualizationType
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @param string hypervisor
	 * @return AmazonEc2TypeDescribeImagesResponseItemType
	 */
	public function __construct($_imageId = null,$_imageLocation = null,$_imageState = null,$_imageOwnerId = null,$_isPublic = null,$_productCodes = null,$_architecture = null,$_imageType = null,$_kernelId = null,$_ramdiskId = null,$_platform = null,$_stateReason = null,$_imageOwnerAlias = null,$_name = null,$_description = null,$_rootDeviceType = null,$_rootDeviceName = null,$_blockDeviceMapping = null,$_virtualizationType = null,$_tagSet = null,$_hypervisor = null)
	{
		parent::__construct(array('imageId'=>$_imageId,'imageLocation'=>$_imageLocation,'imageState'=>$_imageState,'imageOwnerId'=>$_imageOwnerId,'isPublic'=>$_isPublic,'productCodes'=>$_productCodes,'architecture'=>$_architecture,'imageType'=>$_imageType,'kernelId'=>$_kernelId,'ramdiskId'=>$_ramdiskId,'platform'=>$_platform,'stateReason'=>$_stateReason,'imageOwnerAlias'=>$_imageOwnerAlias,'name'=>$_name,'description'=>$_description,'rootDeviceType'=>$_rootDeviceType,'rootDeviceName'=>$_rootDeviceName,'blockDeviceMapping'=>$_blockDeviceMapping,'virtualizationType'=>$_virtualizationType,'tagSet'=>$_tagSet,'hypervisor'=>$_hypervisor));
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
	 * Set imageLocation
	 * @param string imageLocation
	 * @return string
	 */
	public function setImageLocation($_imageLocation)
	{
		return ($this->imageLocation = $_imageLocation);
	}
	/**
	 * Get imageLocation
	 * @return string
	 */
	public function getImageLocation()
	{
		return $this->imageLocation;
	}
	/**
	 * Set imageState
	 * @param string imageState
	 * @return string
	 */
	public function setImageState($_imageState)
	{
		return ($this->imageState = $_imageState);
	}
	/**
	 * Get imageState
	 * @return string
	 */
	public function getImageState()
	{
		return $this->imageState;
	}
	/**
	 * Set imageOwnerId
	 * @param string imageOwnerId
	 * @return string
	 */
	public function setImageOwnerId($_imageOwnerId)
	{
		return ($this->imageOwnerId = $_imageOwnerId);
	}
	/**
	 * Get imageOwnerId
	 * @return string
	 */
	public function getImageOwnerId()
	{
		return $this->imageOwnerId;
	}
	/**
	 * Set isPublic
	 * @param boolean isPublic
	 * @return boolean
	 */
	public function setIsPublic($_isPublic)
	{
		return ($this->isPublic = $_isPublic);
	}
	/**
	 * Get isPublic
	 * @return boolean
	 */
	public function getIsPublic()
	{
		return $this->isPublic;
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
	 * Set imageType
	 * @param string imageType
	 * @return string
	 */
	public function setImageType($_imageType)
	{
		return ($this->imageType = $_imageType);
	}
	/**
	 * Get imageType
	 * @return string
	 */
	public function getImageType()
	{
		return $this->imageType;
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
	 * Set imageOwnerAlias
	 * @param string imageOwnerAlias
	 * @return string
	 */
	public function setImageOwnerAlias($_imageOwnerAlias)
	{
		return ($this->imageOwnerAlias = $_imageOwnerAlias);
	}
	/**
	 * Get imageOwnerAlias
	 * @return string
	 */
	public function getImageOwnerAlias()
	{
		return $this->imageOwnerAlias;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>