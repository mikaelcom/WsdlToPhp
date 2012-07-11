<?php
/**
 * Class file for OvhTypeTelephonyConferenceListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyConferenceListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyConferenceListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyConferenceStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyConferenceStructType return
	 * @return OvhTypeTelephonyConferenceListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyConferenceStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyConferenceStructType return
	 * @return MyArrayOfTelephonyConferenceStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyConferenceStructType
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