<?php
/**
 * Class file for OvhTypeTelephonyLineConsumptionCSVByMail
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineConsumptionCSVByMail
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineConsumptionCSVByMail extends OvhWsdlClass
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
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string date
	 * @return OvhTypeTelephonyLineConsumptionCSVByMail
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_date = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'date'=>$_date));
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
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
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