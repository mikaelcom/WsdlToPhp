<?php
/**
 * Class file for OvhTypeTelephonyLineLogsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineLogsResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineLogsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyLineLogsStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyLineLogsStruct return
	 * @return OvhTypeTelephonyLineLogsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyLineLogsStruct return
	 * @return telephonyLineLogsStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyLineLogsStruct
	 */
	public function getReturn()
	{
		return $this->return;
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