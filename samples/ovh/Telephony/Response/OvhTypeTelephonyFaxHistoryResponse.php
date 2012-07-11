<?php
/**
 * Class file for OvhTypeTelephonyFaxHistoryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxHistoryResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxHistoryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyFaxHistoryStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyFaxHistoryStructType return
	 * @return OvhTypeTelephonyFaxHistoryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyFaxHistoryStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyFaxHistoryStructType return
	 * @return MyArrayOfTelephonyFaxHistoryStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyFaxHistoryStructType
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