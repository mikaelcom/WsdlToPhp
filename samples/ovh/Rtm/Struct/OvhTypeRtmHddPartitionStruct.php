<?php
/**
 * Class file for OvhTypeRtmHddPartitionStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmHddPartitionStruct
 * @date 02/07/2012
 */
class OvhTypeRtmHddPartitionStruct extends OvhWsdlClass
{
	/**
	 * The device
	 * @var string
	 */
	public $device;
	/**
	 * The percentUsed
	 * @var int
	 */
	public $percentUsed;
	/**
	 * The percentInodes
	 * @var int
	 */
	public $percentInodes;
	/**
	 * The mountPoint
	 * @var string
	 */
	public $mountPoint;
	/**
	 * Constructor
	 * @param string device
	 * @param int percentUsed
	 * @param int percentInodes
	 * @param string mountPoint
	 * @return OvhTypeRtmHddPartitionStruct
	 */
	public function __construct($_device = null,$_percentUsed = null,$_percentInodes = null,$_mountPoint = null)
	{
		parent::__construct(array('device'=>$_device,'percentUsed'=>$_percentUsed,'percentInodes'=>$_percentInodes,'mountPoint'=>$_mountPoint));
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
	 * Set percentUsed
	 * @param int percentUsed
	 * @return int
	 */
	public function setPercentUsed($_percentUsed)
	{
		return ($this->percentUsed = $_percentUsed);
	}
	/**
	 * Get percentUsed
	 * @return int
	 */
	public function getPercentUsed()
	{
		return $this->percentUsed;
	}
	/**
	 * Set percentInodes
	 * @param int percentInodes
	 * @return int
	 */
	public function setPercentInodes($_percentInodes)
	{
		return ($this->percentInodes = $_percentInodes);
	}
	/**
	 * Get percentInodes
	 * @return int
	 */
	public function getPercentInodes()
	{
		return $this->percentInodes;
	}
	/**
	 * Set mountPoint
	 * @param string mountPoint
	 * @return string
	 */
	public function setMountPoint($_mountPoint)
	{
		return ($this->mountPoint = $_mountPoint);
	}
	/**
	 * Get mountPoint
	 * @return string
	 */
	public function getMountPoint()
	{
		return $this->mountPoint;
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