<?php
/**
 * Class file for OvhTypeRtmSystemRtmStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmSystemRtmStruct
 * @date 02/07/2012
 */
class OvhTypeRtmSystemRtmStruct extends OvhWsdlClass
{
	/**
	 * The status
	 * @var boolean
	 */
	public $status;
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
	 * Constructor
	 * @param boolean status
	 * @param string version
	 * @param string current
	 * @return OvhTypeRtmSystemRtmStruct
	 */
	public function __construct($_status = null,$_version = null,$_current = null)
	{
		parent::__construct(array('status'=>$_status,'version'=>$_version,'current'=>$_current));
	}
	/**
	 * Set status
	 * @param boolean status
	 * @return boolean
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return boolean
	 */
	public function getStatus()
	{
		return $this->status;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>