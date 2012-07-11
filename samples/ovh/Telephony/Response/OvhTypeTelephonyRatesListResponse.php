<?php
/**
 * Class file for OvhTypeTelephonyRatesListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyRatesListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyRatesListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyRateStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyRateStructType return
	 * @return OvhTypeTelephonyRatesListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyRateStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyRateStructType return
	 * @return MyArrayOfTelephonyRateStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyRateStructType
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