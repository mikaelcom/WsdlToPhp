<?php
/**
 * Class file for AmazonEc2TypeDetachVolumeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDetachVolumeType
 * @date 10/07/2012
 */
class AmazonEc2TypeDetachVolumeType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The instanceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceId;
	/**
	 * The device
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $device;
	/**
	 * The force
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $force;
	/**
	 * Constructor
	 * @param string volumeId
	 * @param string instanceId
	 * @param string device
	 * @param boolean force
	 * @return AmazonEc2TypeDetachVolumeType
	 */
	public function __construct($_volumeId = null,$_instanceId = null,$_device = null,$_force = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'instanceId'=>$_instanceId,'device'=>$_device,'force'=>$_force));
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
	 * Set force
	 * @param boolean force
	 * @return boolean
	 */
	public function setForce($_force)
	{
		return ($this->force = $_force);
	}
	/**
	 * Get force
	 * @return boolean
	 */
	public function getForce()
	{
		return $this->force;
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