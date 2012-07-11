<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMessagesDownload
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMessagesDownload
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMessagesDownload extends OvhWsdlClass
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
	 * The messType
	 * @var string
	 */
	public $messType;
	/**
	 * The format
	 * @var string
	 */
	public $format;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string messType
	 * @param string format
	 * @return OvhTypeTelephonyVoicemailMessagesDownload
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_messType = null,$_format = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'messType'=>$_messType,'format'=>$_format));
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
	 * Set messType
	 * @param string messType
	 * @return string
	 */
	public function setMessType($_messType)
	{
		return ($this->messType = $_messType);
	}
	/**
	 * Get messType
	 * @return string
	 */
	public function getMessType()
	{
		return $this->messType;
	}
	/**
	 * Set format
	 * @param string format
	 * @return string
	 */
	public function setFormat($_format)
	{
		return ($this->format = $_format);
	}
	/**
	 * Get format
	 * @return string
	 */
	public function getFormat()
	{
		return $this->format;
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