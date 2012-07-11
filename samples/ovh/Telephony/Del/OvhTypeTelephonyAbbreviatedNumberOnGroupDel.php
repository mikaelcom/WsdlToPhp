<?php
/**
 * Class file for OvhTypeTelephonyAbbreviatedNumberOnGroupDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAbbreviatedNumberOnGroupDel
 * @date 02/07/2012
 */
class OvhTypeTelephonyAbbreviatedNumberOnGroupDel extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The group
	 * @var string
	 */
	public $group;
	/**
	 * The abbreviatedNumber
	 * @var string
	 */
	public $abbreviatedNumber;
	/**
	 * Constructor
	 * @param string session
	 * @param string group
	 * @param string abbreviatedNumber
	 * @return OvhTypeTelephonyAbbreviatedNumberOnGroupDel
	 */
	public function __construct($_session = null,$_group = null,$_abbreviatedNumber = null)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group,'abbreviatedNumber'=>$_abbreviatedNumber));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set group
	 * @param string group
	 * @return string
	 */
	public function setGroup($_group)
	{
		return ($this->group = $_group);
	}
	/**
	 * Get group
	 * @return string
	 */
	public function getGroup()
	{
		return $this->group;
	}
	/**
	 * Set abbreviatedNumber
	 * @param string abbreviatedNumber
	 * @return string
	 */
	public function setAbbreviatedNumber($_abbreviatedNumber)
	{
		return ($this->abbreviatedNumber = $_abbreviatedNumber);
	}
	/**
	 * Get abbreviatedNumber
	 * @return string
	 */
	public function getAbbreviatedNumber()
	{
		return $this->abbreviatedNumber;
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