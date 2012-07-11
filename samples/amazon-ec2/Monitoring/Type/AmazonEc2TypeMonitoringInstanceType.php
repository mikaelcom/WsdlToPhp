<?php
/**
 * Class file for AmazonEc2TypeMonitoringInstanceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeMonitoringInstanceType
 * @date 10/07/2012
 */
class AmazonEc2TypeMonitoringInstanceType extends AmazonEc2WsdlClass
{
	/**
	 * The enabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $enabled;
	/**
	 * Constructor
	 * @param boolean enabled
	 * @return AmazonEc2TypeMonitoringInstanceType
	 */
	public function __construct($_enabled = null)
	{
		parent::__construct(array('enabled'=>$_enabled));
	}
	/**
	 * Set enabled
	 * @param boolean enabled
	 * @return boolean
	 */
	public function setEnabled($_enabled)
	{
		return ($this->enabled = $_enabled);
	}
	/**
	 * Get enabled
	 * @return boolean
	 */
	public function getEnabled()
	{
		return $this->enabled;
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