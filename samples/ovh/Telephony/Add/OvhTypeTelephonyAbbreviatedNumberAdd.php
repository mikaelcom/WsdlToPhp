<?php
/**
 * Class file for OvhTypeTelephonyAbbreviatedNumberAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAbbreviatedNumberAdd
 * @date 02/07/2012
 */
class OvhTypeTelephonyAbbreviatedNumberAdd extends OvhWsdlClass
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
	 * The abbreviatedNumber
	 * @var string
	 */
	public $abbreviatedNumber;
	/**
	 * The relatedNumber
	 * @var string
	 */
	public $relatedNumber;
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
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string abbreviatedNumber
	 * @param string relatedNumber
	 * @param string name
	 * @param string surname
	 * @return OvhTypeTelephonyAbbreviatedNumberAdd
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_abbreviatedNumber = null,$_relatedNumber = null,$_name = null,$_surname = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'abbreviatedNumber'=>$_abbreviatedNumber,'relatedNumber'=>$_relatedNumber,'name'=>$_name,'surname'=>$_surname));
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
	 * Set relatedNumber
	 * @param string relatedNumber
	 * @return string
	 */
	public function setRelatedNumber($_relatedNumber)
	{
		return ($this->relatedNumber = $_relatedNumber);
	}
	/**
	 * Get relatedNumber
	 * @return string
	 */
	public function getRelatedNumber()
	{
		return $this->relatedNumber;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>