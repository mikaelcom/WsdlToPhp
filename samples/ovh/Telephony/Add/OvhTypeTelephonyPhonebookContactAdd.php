<?php
/**
 * Class file for OvhTypeTelephonyPhonebookContactAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookContactAdd
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookContactAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
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
	 * The group
	 * @var string
	 */
	public $group;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param int id
	 * @param string name
	 * @param string surname
	 * @param string workPhone
	 * @param string workMobile
	 * @param string homePhone
	 * @param string homeMobile
	 * @param string group
	 * @return OvhTypeTelephonyPhonebookContactAdd
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_id = null,$_name = null,$_surname = null,$_workPhone = null,$_workMobile = null,$_homePhone = null,$_homeMobile = null,$_group = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'id'=>$_id,'name'=>$_name,'surname'=>$_surname,'workPhone'=>$_workPhone,'workMobile'=>$_workMobile,'homePhone'=>$_homePhone,'homeMobile'=>$_homeMobile,'group'=>$_group));
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
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
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