<?php
/**
 * Class file for AmazonEc2TypeImportVolumeTaskDetailsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportVolumeTaskDetailsType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportVolumeTaskDetailsType extends AmazonEc2WsdlClass
{
	/**
	 * The bytesConverted
	 * @var long
	 */
	public $bytesConverted;
	/**
	 * The availabilityZone
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * The image
	 * @var AmazonEc2TypeDiskImageDescriptionType
	 */
	public $image;
	/**
	 * The volume
	 * @var AmazonEc2TypeDiskImageVolumeDescriptionType
	 */
	public $volume;
	/**
	 * Constructor
	 * @param long bytesConverted
	 * @param string availabilityZone
	 * @param string description
	 * @param AmazonEc2TypeDiskImageDescriptionType image
	 * @param AmazonEc2TypeDiskImageVolumeDescriptionType volume
	 * @return AmazonEc2TypeImportVolumeTaskDetailsType
	 */
	public function __construct($_bytesConverted = null,$_availabilityZone = null,$_description = null,$_image = null,$_volume = null)
	{
		parent::__construct(array('bytesConverted'=>$_bytesConverted,'availabilityZone'=>$_availabilityZone,'description'=>$_description,'image'=>$_image,'volume'=>$_volume));
	}
	/**
	 * Set bytesConverted
	 * @param long bytesConverted
	 * @return long
	 */
	public function setBytesConverted($_bytesConverted)
	{
		return ($this->bytesConverted = $_bytesConverted);
	}
	/**
	 * Get bytesConverted
	 * @return long
	 */
	public function getBytesConverted()
	{
		return $this->bytesConverted;
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
	 * Set image
	 * @param DiskImageDescriptionType image
	 * @return DiskImageDescriptionType
	 */
	public function setImage($_image)
	{
		return ($this->image = $_image);
	}
	/**
	 * Get image
	 * @return AmazonEc2TypeDiskImageDescriptionType
	 */
	public function getImage()
	{
		return $this->image;
	}
	/**
	 * Set volume
	 * @param DiskImageVolumeDescriptionType volume
	 * @return DiskImageVolumeDescriptionType
	 */
	public function setVolume($_volume)
	{
		return ($this->volume = $_volume);
	}
	/**
	 * Get volume
	 * @return AmazonEc2TypeDiskImageVolumeDescriptionType
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