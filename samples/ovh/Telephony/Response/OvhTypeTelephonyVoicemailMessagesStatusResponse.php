<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMessagesStatusResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMessagesStatusResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMessagesStatusResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyVoicemailMessagesStatusReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyVoicemailMessagesStatusReturn return
	 * @return OvhTypeTelephonyVoicemailMessagesStatusResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyVoicemailMessagesStatusReturn return
	 * @return telephonyVoicemailMessagesStatusReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyVoicemailMessagesStatusReturn
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