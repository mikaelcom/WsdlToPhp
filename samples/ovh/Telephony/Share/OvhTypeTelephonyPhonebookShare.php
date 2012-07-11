<?php
/**
 * Class file for OvhTypeTelephonyPhonebookShare
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookShare
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookShare extends OvhWsdlClass
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
	 * The targetNumber
	 * @var string
	 */
	public $targetNumber;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The mode
	 * @var string
	 */
	public $mode;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param int id
	 * @param string targetNumber
	 * @param string name
	 * @param string mode
	 * @return OvhTypeTelephonyPhonebookShare
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_id = null,$_targetNumber = null,$_name = null,$_mode = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'id'=>$_id,'targetNumber'=>$_targetNumber,'name'=>$_name,'mode'=>$_mode));
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
	 * Set targetNumber
	 * @param string targetNumber
	 * @return string
	 */
	public function setTargetNumber($_targetNumber)
	{
		return ($this->targetNumber = $_targetNumber);
	}
	/**
	 * Get targetNumber
	 * @return string
	 */
	public function getTargetNumber()
	{
		return $this->targetNumber;
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
	 * Set mode
	 * @param string mode
	 * @return string
	 */
	public function setMode($_mode)
	{
		return ($this->mode = $_mode);
	}
	/**
	 * Get mode
	 * @return string
	 */
	public function getMode()
	{
		return $this->mode;
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