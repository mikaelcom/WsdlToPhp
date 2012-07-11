<?php
/**
 * Class file for OvhTypeTelephonyPortabilityStatusResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPortabilityStatusResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyPortabilityStatusResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyPortabilityStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyPortabilityStructType return
	 * @return OvhTypeTelephonyPortabilityStatusResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyPortabilityStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyPortabilityStructType return
	 * @return MyArrayOfTelephonyPortabilityStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyPortabilityStructType
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