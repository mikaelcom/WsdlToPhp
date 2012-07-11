<?php
/**
 * Class file for AmazonEc2TypeAttachmentSetItemResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachmentSetItemResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachmentSetItemResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The device
	 * @var string
	 */
	public $device;
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
	 * @var boolean
	 */
	public $deleteOnTermination;
	/**
	 * Constructor
	 * @param string volumeId
	 * @param string instanceId
	 * @param string device
	 * @param string status
	 * @param dateTime attachTime
	 * @param boolean deleteOnTermination
	 * @return AmazonEc2TypeAttachmentSetItemResponseType
	 */
	public function __construct($_volumeId = null,$_instanceId = null,$_device = null,$_status = null,$_attachTime = null,$_deleteOnTermination = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'instanceId'=>$_instanceId,'device'=>$_device,'status'=>$_status,'attachTime'=>$_attachTime,'deleteOnTermination'=>$_deleteOnTermination));
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
	 * Set device
	 * @param string device
	 * @return string
	 */
	public function setDevice($_device)
	{
		return ($this->device = $_device);
	}
	/**
	 * Get device
	 * @return string
	 */
	public function getDevice()
	{
		return $this->device;
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