<?php
/**
 * Class file for OvhTypeTelephonyListSummationCallsFromBillingAccountResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyListSummationCallsFromBillingAccountResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyListSummationCallsFromBillingAccountResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyReversmentsSummationNumbersStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyReversmentsSummationNumbersStructType return
	 * @return OvhTypeTelephonyListSummationCallsFromBillingAccountResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyReversmentsSummationNumbersStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyReversmentsSummationNumbersStructType return
	 * @return MyArrayOfTelephonyReversmentsSummationNumbersStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyReversmentsSummationNumbersStructType
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