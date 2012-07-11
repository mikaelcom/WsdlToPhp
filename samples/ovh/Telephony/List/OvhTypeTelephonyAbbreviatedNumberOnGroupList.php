<?php
/**
 * Class file for OvhTypeTelephonyAbbreviatedNumberOnGroupList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAbbreviatedNumberOnGroupList
 * @date 02/07/2012
 */
class OvhTypeTelephonyAbbreviatedNumberOnGroupList extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string group
	 * @return OvhTypeTelephonyAbbreviatedNumberOnGroupList
	 */
	public function __construct($_session = null,$_group = null)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>