<?php
/**
 * Class file for AmazonEc2TypeImportInstanceVolumeDetailItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportInstanceVolumeDetailItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportInstanceVolumeDetailItemType extends AmazonEc2WsdlClass
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
	 * The image
	 * @var AmazonEc2TypeDiskImageDescriptionType
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
	 * @var AmazonEc2TypeDiskImageVolumeDescriptionType
	 */
	public $volume;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The statusMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $statusMessage;
	/**
	 * Constructor
	 * @param long bytesConverted
	 * @param string availabilityZone
	 * @param AmazonEc2TypeDiskImageDescriptionType image
	 * @param string description
	 * @param AmazonEc2TypeDiskImageVolumeDescriptionType volume
	 * @param string status
	 * @param string statusMessage
	 * @return AmazonEc2TypeImportInstanceVolumeDetailItemType
	 */
	public function __construct($_bytesConverted = null,$_availabilityZone = null,$_image = null,$_description = null,$_volume = null,$_status = null,$_statusMessage = null)
	{
		parent::__construct(array('bytesConverted'=>$_bytesConverted,'availabilityZone'=>$_availabilityZone,'image'=>$_image,'description'=>$_description,'volume'=>$_volume,'status'=>$_status,'statusMessage'=>$_statusMessage));
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
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set statusMessage
	 * @param string statusMessage
	 * @return string
	 */
	public function setStatusMessage($_statusMessage)
	{
		return ($this->statusMessage = $_statusMessage);
	}
	/**
	 * Get statusMessage
	 * @return string
	 */
	public function getStatusMessage()
	{
		return $this->statusMessage;
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