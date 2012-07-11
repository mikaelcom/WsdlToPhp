<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMailboxDownloadResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMailboxDownloadResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMailboxDownloadResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyVoicemailMailboxDownloadReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyVoicemailMailboxDownloadReturn return
	 * @return OvhTypeTelephonyVoicemailMailboxDownloadResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyVoicemailMailboxDownloadReturn return
	 * @return telephonyVoicemailMailboxDownloadReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyVoicemailMailboxDownloadReturn
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