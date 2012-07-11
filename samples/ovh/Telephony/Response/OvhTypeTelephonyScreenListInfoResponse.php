<?php
/**
 * Class file for OvhTypeTelephonyScreenListInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyScreenListInfoResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyScreenListInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyScreenStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyScreenStructType return
	 * @return OvhTypeTelephonyScreenListInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyScreenStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyScreenStructType return
	 * @return MyArrayOfTelephonyScreenStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyScreenStructType
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