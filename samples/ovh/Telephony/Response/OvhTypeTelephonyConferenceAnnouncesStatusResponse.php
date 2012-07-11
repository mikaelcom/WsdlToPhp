<?php
/**
 * Class file for OvhTypeTelephonyConferenceAnnouncesStatusResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyConferenceAnnouncesStatusResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyConferenceAnnouncesStatusResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyConferenceAnnouncesStatusReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyConferenceAnnouncesStatusReturn return
	 * @return OvhTypeTelephonyConferenceAnnouncesStatusResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyConferenceAnnouncesStatusReturn return
	 * @return telephonyConferenceAnnouncesStatusReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyConferenceAnnouncesStatusReturn
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