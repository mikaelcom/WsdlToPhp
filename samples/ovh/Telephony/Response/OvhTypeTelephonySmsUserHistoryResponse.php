<?php
/**
 * Class file for OvhTypeTelephonySmsUserHistoryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserHistoryResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserHistoryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonySmsHistoryStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonySmsHistoryStructType return
	 * @return OvhTypeTelephonySmsUserHistoryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonySmsHistoryStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonySmsHistoryStructType return
	 * @return MyArrayOfTelephonySmsHistoryStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonySmsHistoryStructType
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