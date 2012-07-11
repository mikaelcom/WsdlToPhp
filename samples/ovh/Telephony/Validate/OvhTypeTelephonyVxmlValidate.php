<?php
/**
 * Class file for OvhTypeTelephonyVxmlValidate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVxmlValidate
 * @date 02/07/2012
 */
class OvhTypeTelephonyVxmlValidate extends OvhWsdlClass
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
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string url
	 * @return OvhTypeTelephonyVxmlValidate
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_url = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'url'=>$_url));
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
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
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