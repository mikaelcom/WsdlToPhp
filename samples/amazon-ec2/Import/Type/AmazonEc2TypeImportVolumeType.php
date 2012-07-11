<?php
/**
 * Class file for AmazonEc2TypeImportVolumeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportVolumeType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportVolumeType extends AmazonEc2WsdlClass
{
	/**
	 * The availabilityZone
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The image
	 * @var AmazonEc2TypeDiskImageDetailType
	 */
	public $image;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * The volume
	 * @var AmazonEc2TypeDiskImageVolumeType
	 */
	public $volume;
	/**
	 * Constructor
	 * @param string availabilityZone
	 * @param AmazonEc2TypeDiskImageDetailType image
	 * @param string description
	 * @param AmazonEc2TypeDiskImageVolumeType volume
	 * @return AmazonEc2TypeImportVolumeType
	 */
	public function __construct($_availabilityZone = null,$_image = null,$_description = null,$_volume = null)
	{
		parent::__construct(array('availabilityZone'=>$_availabilityZone,'image'=>$_image,'description'=>$_description,'volume'=>$_volume));
	}
	/**
	 * Set availabilityZone
	 * @param string availabilityZone
	 * @return string
	 */
	public function setAvailabilityZone($_availabilityZone)
	{
		return ($this->availabilityZone = $_availabilityZone);
	}
	/**
	 * Get availabilityZone
	 * @return string
	 */
	public function getAvailabilityZone()
	{
		return $this->availabilityZone;
	}
	/**
	 * Set image
	 * @param DiskImageDetailType image
	 * @return DiskImageDetailType
	 */
	public function setImage($_image)
	{
		return ($this->image = $_image);
	}
	/**
	 * Get image
	 * @return AmazonEc2TypeDiskImageDetailType
	 */
	public function getImage()
	{
		return $this->image;
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
	 * Set volume
	 * @param DiskImageVolumeType volume
	 * @return DiskImageVolumeType
	 */
	public function setVolume($_volume)
	{
		return ($this->volume = $_volume);
	}
	/**
	 * Get volume
	 * @return AmazonEc2TypeDiskImageVolumeType
	 */
	public function getVolume()
	{
		return $this->volume;
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