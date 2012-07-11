<?php
/**
 * Class file for AmazonEc2TypeRegisterImageType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRegisterImageType
 * @date 10/07/2012
 */
class AmazonEc2TypeRegisterImageType extends AmazonEc2WsdlClass
{
	/**
	 * The imageLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $imageLocation;
	/**
	 * The name
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
	 * The architecture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $architecture;
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
	 * Constructor
	 * @param string imageLocation
	 * @param string name
	 * @param string description
	 * @param string architecture
	 * @param string kernelId
	 * @param string ramdiskId
	 * @param string rootDeviceName
	 * @param AmazonEc2TypeBlockDeviceMappingType blockDeviceMapping
	 * @return AmazonEc2TypeRegisterImageType
	 */
	public function __construct($_imageLocation = null,$_name = null,$_description = null,$_architecture = null,$_kernelId = null,$_ramdiskId = null,$_rootDeviceName = null,$_blockDeviceMapping = null)
	{
		parent::__construct(array('imageLocation'=>$_imageLocation,'name'=>$_name,'description'=>$_description,'architecture'=>$_architecture,'kernelId'=>$_kernelId,'ramdiskId'=>$_ramdiskId,'rootDeviceName'=>$_rootDeviceName,'blockDeviceMapping'=>$_blockDeviceMapping));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>