<?php
/**
 * Class file for OvhTypeTelephonyPhonebookOnGroupContactModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookOnGroupContactModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookOnGroupContactModify extends OvhWsdlClass
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
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The surname
	 * @var string
	 */
	public $surname;
	/**
	 * The workPhone
	 * @var string
	 */
	public $workPhone;
	/**
	 * The workMobile
	 * @var string
	 */
	public $workMobile;
	/**
	 * The homePhone
	 * @var string
	 */
	public $homePhone;
	/**
	 * The homeMobile
	 * @var string
	 */
	public $homeMobile;
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * Constructor
	 * @param string session
	 * @param string group
	 * @param int id
	 * @param string name
	 * @param string surname
	 * @param string workPhone
	 * @param string workMobile
	 * @param string homePhone
	 * @param string homeMobile
	 * @param string groupName
	 * @return OvhTypeTelephonyPhonebookOnGroupContactModify
	 */
	public function __construct($_session = null,$_group = null,$_id = null,$_name = null,$_surname = null,$_workPhone = null,$_workMobile = null,$_homePhone = null,$_homeMobile = null,$_groupName = null)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group,'id'=>$_id,'name'=>$_name,'surname'=>$_surname,'workPhone'=>$_workPhone,'workMobile'=>$_workMobile,'homePhone'=>$_homePhone,'homeMobile'=>$_homeMobile,'groupName'=>$_groupName));
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
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set surname
	 * @param string surname
	 * @return string
	 */
	public function setSurname($_surname)
	{
		return ($this->surname = $_surname);
	}
	/**
	 * Get surname
	 * @return string
	 */
	public function getSurname()
	{
		return $this->surname;
	}
	/**
	 * Set workPhone
	 * @param string workPhone
	 * @return string
	 */
	public function setWorkPhone($_workPhone)
	{
		return ($this->workPhone = $_workPhone);
	}
	/**
	 * Get workPhone
	 * @return string
	 */
	public function getWorkPhone()
	{
		return $this->workPhone;
	}
	/**
	 * Set workMobile
	 * @param string workMobile
	 * @return string
	 */
	public function setWorkMobile($_workMobile)
	{
		return ($this->workMobile = $_workMobile);
	}
	/**
	 * Get workMobile
	 * @return string
	 */
	public function getWorkMobile()
	{
		return $this->workMobile;
	}
	/**
	 * Set homePhone
	 * @param string homePhone
	 * @return string
	 */
	public function setHomePhone($_homePhone)
	{
		return ($this->homePhone = $_homePhone);
	}
	/**
	 * Get homePhone
	 * @return string
	 */
	public function getHomePhone()
	{
		return $this->homePhone;
	}
	/**
	 * Set homeMobile
	 * @param string homeMobile
	 * @return string
	 */
	public function setHomeMobile($_homeMobile)
	{
		return ($this->homeMobile = $_homeMobile);
	}
	/**
	 * Get homeMobile
	 * @return string
	 */
	public function getHomeMobile()
	{
		return $this->homeMobile;
	}
	/**
	 * Set groupName
	 * @param string groupName
	 * @return string
	 */
	public function setGroupName($_groupName)
	{
		return ($this->groupName = $_groupName);
	}
	/**
	 * Get groupName
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->groupName;
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