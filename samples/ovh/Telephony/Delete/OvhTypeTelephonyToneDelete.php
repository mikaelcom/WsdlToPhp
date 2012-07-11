<?php
/**
 * Class file for OvhTypeTelephonyToneDelete
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyToneDelete
 * @date 02/07/2012
 */
class OvhTypeTelephonyToneDelete extends OvhWsdlClass
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
	 * The toneType
	 * @var string
	 */
	public $toneType;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string toneType
	 * @return OvhTypeTelephonyToneDelete
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_toneType = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'toneType'=>$_toneType));
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
	 * Set toneType
	 * @param string toneType
	 * @return string
	 */
	public function setToneType($_toneType)
	{
		return ($this->toneType = $_toneType);
	}
	/**
	 * Get toneType
	 * @return string
	 */
	public function getToneType()
	{
		return $this->toneType;
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