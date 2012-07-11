<?php
/**
 * Class file for OvhTypeTelephonyPhonebookOnGroupContactDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookOnGroupContactDel
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookOnGroupContactDel extends OvhWsdlClass
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
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * Constructor
	 * @param string session
	 * @param string group
	 * @param int id
	 * @return OvhTypeTelephonyPhonebookOnGroupContactDel
	 */
	public function __construct($_session = null,$_group = null,$_id = null)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group,'id'=>$_id));
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
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
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