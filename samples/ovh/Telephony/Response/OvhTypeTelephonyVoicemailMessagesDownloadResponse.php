<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMessagesDownloadResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMessagesDownloadResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMessagesDownloadResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyVoicemailMessagesDownloadReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyVoicemailMessagesDownloadReturn return
	 * @return OvhTypeTelephonyVoicemailMessagesDownloadResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyVoicemailMessagesDownloadReturn return
	 * @return telephonyVoicemailMessagesDownloadReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyVoicemailMessagesDownloadReturn
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