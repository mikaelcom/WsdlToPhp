<?php
/**
 * Class file for OvhTypeTelephonyListSummationCallsFromNumberResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyListSummationCallsFromNumberResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyListSummationCallsFromNumberResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyReversmentsSummationStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyReversmentsSummationStructType return
	 * @return OvhTypeTelephonyListSummationCallsFromNumberResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyReversmentsSummationStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyReversmentsSummationStructType return
	 * @return MyArrayOfTelephonyReversmentsSummationStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyReversmentsSummationStructType
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