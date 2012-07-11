<?php
/**
 * Class file for OvhTypeTelephonySipToAliasOffer
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySipToAliasOffer
 * @date 02/07/2012
 */
class OvhTypeTelephonySipToAliasOffer extends OvhWsdlClass
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
	 * The delete
	 * @var boolean
	 */
	public $delete;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param boolean delete
	 * @return OvhTypeTelephonySipToAliasOffer
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_delete = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'delete'=>$_delete));
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
	 * Set delete
	 * @param boolean delete
	 * @return boolean
	 */
	public function setDelete($_delete)
	{
		return ($this->delete = $_delete);
	}
	/**
	 * Get delete
	 * @return boolean
	 */
	public function getDelete()
	{
		return $this->delete;
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