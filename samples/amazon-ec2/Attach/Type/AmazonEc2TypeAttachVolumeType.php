<?php
/**
 * Class file for AmazonEc2TypeAttachVolumeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachVolumeType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachVolumeType extends AmazonEc2WsdlClass
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
	 * Constructor
	 * @param string volumeId
	 * @param string instanceId
	 * @param string device
	 * @return AmazonEc2TypeAttachVolumeType
	 */
	public function __construct($_volumeId = null,$_instanceId = null,$_device = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'instanceId'=>$_instanceId,'device'=>$_device));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>