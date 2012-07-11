<?php
/**
 * Class file for OvhTypeTelephonyLineLogsOnGroupResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineLogsOnGroupResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineLogsOnGroupResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyLineLogsStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyLineLogsStructType return
	 * @return OvhTypeTelephonyLineLogsOnGroupResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyLineLogsStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyLineLogsStructType return
	 * @return MyArrayOfTelephonyLineLogsStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyLineLogsStructType
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