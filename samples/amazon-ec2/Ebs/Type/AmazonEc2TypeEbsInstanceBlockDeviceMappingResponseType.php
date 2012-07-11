<?php
/**
 * Class file for AmazonEc2TypeEbsInstanceBlockDeviceMappingResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeEbsInstanceBlockDeviceMappingResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeEbsInstanceBlockDeviceMappingResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The attachTime
	 * @var dateTime
	 */
	public $attachTime;
	/**
	 * The deleteOnTermination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $deleteOnTermination;
	/**
	 * Constructor
	 * @param string volumeId
	 * @param string status
	 * @param dateTime attachTime
	 * @param boolean deleteOnTermination
	 * @return AmazonEc2TypeEbsInstanceBlockDeviceMappingResponseType
	 */
	public function __construct($_volumeId = null,$_status = null,$_attachTime = null,$_deleteOnTermination = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'status'=>$_status,'attachTime'=>$_attachTime,'deleteOnTermination'=>$_deleteOnTermination));
	}
	/**
	 * Set volumeId
	 * @param string volumeId
	 * @return string
	 */
	public function setVolumeId($_volumeId)
	{
		return ($this->volumeId = $_volumeId);
	}
	/**
	 * Get volumeId
	 * @return string
	 */
	public function getVolumeId()
	{
		return $this->volumeId;
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
	 * Set attachTime
	 * @param dateTime attachTime
	 * @return dateTime
	 */
	public function setAttachTime($_attachTime)
	{
		return ($this->attachTime = $_attachTime);
	}
	/**
	 * Get attachTime
	 * @return dateTime
	 */
	public function getAttachTime()
	{
		return $this->attachTime;
	}
	/**
	 * Set deleteOnTermination
	 * @param boolean deleteOnTermination
	 * @return boolean
	 */
	public function setDeleteOnTermination($_deleteOnTermination)
	{
		return ($this->deleteOnTermination = $_deleteOnTermination);
	}
	/**
	 * Get deleteOnTermination
	 * @return boolean
	 */
	public function getDeleteOnTermination()
	{
		return $this->deleteOnTermination;
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