<?php
/**
 * Class file for OvhTypeTelephonyBillListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyBillStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyBillStructType return
	 * @return OvhTypeTelephonyBillListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyBillStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyBillStructType return
	 * @return MyArrayOfTelephonyBillStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyBillStructType
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