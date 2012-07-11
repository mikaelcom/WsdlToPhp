<?php
/**
 * Class file for OvhTypeTelephonyVoicemailOptionsListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailOptionsListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailOptionsListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyVoicemailOptionsListReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyVoicemailOptionsListReturn return
	 * @return OvhTypeTelephonyVoicemailOptionsListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyVoicemailOptionsListReturn return
	 * @return telephonyVoicemailOptionsListReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyVoicemailOptionsListReturn
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