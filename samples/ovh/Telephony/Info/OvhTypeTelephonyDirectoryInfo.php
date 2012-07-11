<?php
/**
 * Class file for OvhTypeTelephonyDirectoryInfo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryInfo
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryInfo extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The callNumber
	 * @var string
	 */
	public $callNumber;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * Constructor
	 * @param string session
	 * @param string callNumber
	 * @param string countryCode
	 * @return OvhTypeTelephonyDirectoryInfo
	 */
	public function __construct($_session = null,$_callNumber = null,$_countryCode = null)
	{
		parent::__construct(array('session'=>$_session,'callNumber'=>$_callNumber,'countryCode'=>$_countryCode));
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
	 * Set callNumber
	 * @param string callNumber
	 * @return string
	 */
	public function setCallNumber($_callNumber)
	{
		return ($this->callNumber = $_callNumber);
	}
	/**
	 * Get callNumber
	 * @return string
	 */
	public function getCallNumber()
	{
		return $this->callNumber;
	}
	/**
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
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