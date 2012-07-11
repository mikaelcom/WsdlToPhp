<?php
/**
 * Class file for OvhTypeTelephonyFunctionKeyListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFunctionKeyListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyFunctionKeyListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyFunctionKeyStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyFunctionKeyStructType return
	 * @return OvhTypeTelephonyFunctionKeyListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyFunctionKeyStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyFunctionKeyStructType return
	 * @return MyArrayOfTelephonyFunctionKeyStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyFunctionKeyStructType
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