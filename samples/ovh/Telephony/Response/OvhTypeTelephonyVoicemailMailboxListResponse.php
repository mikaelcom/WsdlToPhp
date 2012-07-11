<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMailboxListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMailboxListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMailboxListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyVoicemailMailboxStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyVoicemailMailboxStructType return
	 * @return OvhTypeTelephonyVoicemailMailboxListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyVoicemailMailboxStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyVoicemailMailboxStructType return
	 * @return MyArrayOfTelephonyVoicemailMailboxStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyVoicemailMailboxStructType
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