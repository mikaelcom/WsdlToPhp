<?php
/**
 * Class file for OvhTypeRtmSystemKernelStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmSystemKernelStruct
 * @date 02/07/2012
 */
class OvhTypeRtmSystemKernelStruct extends OvhWsdlClass
{
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The current
	 * @var string
	 */
	public $current;
	/**
	 * The current_26
	 * @var string
	 */
	public $current_26;
	/**
	 * The current_ipv6
	 * @var string
	 */
	public $current_ipv6;
	/**
	 * The release
	 * @var string
	 */
	public $release;
	/**
	 * Constructor
	 * @param string version
	 * @param string current
	 * @param string current_26
	 * @param string current_ipv6
	 * @param string release
	 * @return OvhTypeRtmSystemKernelStruct
	 */
	public function __construct($_version = null,$_current = null,$_current_26 = null,$_current_ipv6 = null,$_release = null)
	{
		parent::__construct(array('version'=>$_version,'current'=>$_current,'current_26'=>$_current_26,'current_ipv6'=>$_current_ipv6,'release'=>$_release));
	}
	/**
	 * Set version
	 * @param string version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set current
	 * @param string current
	 * @return string
	 */
	public function setCurrent($_current)
	{
		return ($this->current = $_current);
	}
	/**
	 * Get current
	 * @return string
	 */
	public function getCurrent()
	{
		return $this->current;
	}
	/**
	 * Set current_26
	 * @param string current_26
	 * @return string
	 */
	public function setCurrent_26($_current_26)
	{
		return ($this->current_26 = $_current_26);
	}
	/**
	 * Get current_26
	 * @return string
	 */
	public function getCurrent_26()
	{
		return $this->current_26;
	}
	/**
	 * Set current_ipv6
	 * @param string current_ipv6
	 * @return string
	 */
	public function setCurrent_ipv6($_current_ipv6)
	{
		return ($this->current_ipv6 = $_current_ipv6);
	}
	/**
	 * Get current_ipv6
	 * @return string
	 */
	public function getCurrent_ipv6()
	{
		return $this->current_ipv6;
	}
	/**
	 * Set release
	 * @param string release
	 * @return string
	 */
	public function setRelease($_release)
	{
		return ($this->release = $_release);
	}
	/**
	 * Get release
	 * @return string
	 */
	public function getRelease()
	{
		return $this->release;
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