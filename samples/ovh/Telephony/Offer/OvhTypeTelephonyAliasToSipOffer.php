<?php
/**
 * Class file for OvhTypeTelephonyAliasToSipOffer
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAliasToSipOffer
 * @date 02/07/2012
 */
class OvhTypeTelephonyAliasToSipOffer extends OvhWsdlClass
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
	 * The offer
	 * @var string
	 */
	public $offer;
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
	 * @param string offer
	 * @param boolean delete
	 * @return OvhTypeTelephonyAliasToSipOffer
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_offer = null,$_delete = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'offer'=>$_offer,'delete'=>$_delete));
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
	 * Set offer
	 * @param string offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get offer
	 * @return string
	 */
	public function getOffer()
	{
		return $this->offer;
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