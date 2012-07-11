<?php
/**
 * Class file for OvhTypeTelephonyPhonebookContactDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookContactDel
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookContactDel extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param int id
	 * @return OvhTypeTelephonyPhonebookContactDel
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_id = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'id'=>$_id));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>