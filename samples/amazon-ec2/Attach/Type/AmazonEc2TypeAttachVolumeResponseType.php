<?php
/**
 * Class file for AmazonEc2TypeAttachVolumeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachVolumeResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachVolumeResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
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
	 * Constructor
	 * @param string requestId
	 * @param string volumeId
	 * @param string instanceId
	 * @param string device
	 * @param string status
	 * @param dateTime attachTime
	 * @return AmazonEc2TypeAttachVolumeResponseType
	 */
	public function __construct($_requestId = null,$_volumeId = null,$_instanceId = null,$_device = null,$_status = null,$_attachTime = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'volumeId'=>$_volumeId,'instanceId'=>$_instanceId,'device'=>$_device,'status'=>$_status,'attachTime'=>$_attachTime));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>