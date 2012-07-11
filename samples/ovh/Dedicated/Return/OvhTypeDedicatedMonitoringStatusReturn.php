<?php
/**
 * Class file for OvhTypeDedicatedMonitoringStatusReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringStatusReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringStatusReturn extends OvhWsdlClass
{
	/**
	 * The disabled
	 * @var boolean
	 */
	public $disabled;
	/**
	 * Constructor
	 * @param boolean disabled
	 * @return OvhTypeDedicatedMonitoringStatusReturn
	 */
	public function __construct($_disabled = null)
	{
		parent::__construct(array('disabled'=>$_disabled));
	}
	/**
	 * Set disabled
	 * @param boolean disabled
	 * @return boolean
	 */
	public function setDisabled($_disabled)
	{
		return ($this->disabled = $_disabled);
	}
	/**
	 * Get disabled
	 * @return boolean
	 */
	public function getDisabled()
	{
		return $this->disabled;
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