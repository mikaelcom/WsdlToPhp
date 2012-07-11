<?php
/**
 * Class file for OvhTypeTelephonyOfferSimultaneousLinesAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyOfferSimultaneousLinesAdd
 * @date 02/07/2012
 */
class OvhTypeTelephonyOfferSimultaneousLinesAdd extends OvhWsdlClass
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
	 * The simultaneousLines
	 * @var int
	 */
	public $simultaneousLines;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param int simultaneousLines
	 * @return OvhTypeTelephonyOfferSimultaneousLinesAdd
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_simultaneousLines = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'simultaneousLines'=>$_simultaneousLines));
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
	 * Set simultaneousLines
	 * @param int simultaneousLines
	 * @return int
	 */
	public function setSimultaneousLines($_simultaneousLines)
	{
		return ($this->simultaneousLines = $_simultaneousLines);
	}
	/**
	 * Get simultaneousLines
	 * @return int
	 */
	public function getSimultaneousLines()
	{
		return $this->simultaneousLines;
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