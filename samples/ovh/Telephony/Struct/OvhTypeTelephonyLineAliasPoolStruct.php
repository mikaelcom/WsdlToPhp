<?php
/**
 * Class file for OvhTypeTelephonyLineAliasPoolStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineAliasPoolStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineAliasPoolStruct extends OvhWsdlClass
{
	/**
	 * The poolNumber
	 * @var int
	 */
	public $poolNumber;
	/**
	 * The service
	 * @var string
	 */
	public $service;
	/**
	 * The display
	 * @var string
	 */
	public $display;
	/**
	 * Constructor
	 * @param int poolNumber
	 * @param string service
	 * @param string display
	 * @return OvhTypeTelephonyLineAliasPoolStruct
	 */
	public function __construct($_poolNumber = null,$_service = null,$_display = null)
	{
		parent::__construct(array('poolNumber'=>$_poolNumber,'service'=>$_service,'display'=>$_display));
	}
	/**
	 * Set poolNumber
	 * @param int poolNumber
	 * @return int
	 */
	public function setPoolNumber($_poolNumber)
	{
		return ($this->poolNumber = $_poolNumber);
	}
	/**
	 * Get poolNumber
	 * @return int
	 */
	public function getPoolNumber()
	{
		return $this->poolNumber;
	}
	/**
	 * Set service
	 * @param string service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get service
	 * @return string
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set display
	 * @param string display
	 * @return string
	 */
	public function setDisplay($_display)
	{
		return ($this->display = $_display);
	}
	/**
	 * Get display
	 * @return string
	 */
	public function getDisplay()
	{
		return $this->display;
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