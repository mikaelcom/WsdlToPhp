<?php
/**
 * Class file for OvhTypeTelephonyConferenceAnnouncesStatusReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyConferenceAnnouncesStatusReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyConferenceAnnouncesStatusReturn extends OvhWsdlClass
{
	/**
	 * The custom
	 * @var boolean
	 */
	public $custom;
	/**
	 * Constructor
	 * @param boolean custom
	 * @return OvhTypeTelephonyConferenceAnnouncesStatusReturn
	 */
	public function __construct($_custom = null)
	{
		parent::__construct(array('custom'=>$_custom));
	}
	/**
	 * Set custom
	 * @param boolean custom
	 * @return boolean
	 */
	public function setCustom($_custom)
	{
		return ($this->custom = $_custom);
	}
	/**
	 * Get custom
	 * @return boolean
	 */
	public function getCustom()
	{
		return $this->custom;
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