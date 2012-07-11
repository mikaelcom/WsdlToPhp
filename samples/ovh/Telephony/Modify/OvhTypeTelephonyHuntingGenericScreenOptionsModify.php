<?php
/**
 * Class file for OvhTypeTelephonyHuntingGenericScreenOptionsModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingGenericScreenOptionsModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingGenericScreenOptionsModify extends OvhWsdlClass
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
	 * The forwardUnconditionalNumber
	 * @var string
	 */
	public $forwardUnconditionalNumber;
	/**
	 * The mainVoicemail
	 * @var string
	 */
	public $mainVoicemail;
	/**
	 * The forwardPolicyIndex
	 * @var string
	 */
	public $forwardPolicyIndex;
	/**
	 * The timeout
	 * @var int
	 */
	public $timeout;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string forwardUnconditionalNumber
	 * @param string mainVoicemail
	 * @param string forwardPolicyIndex
	 * @param int timeout
	 * @return OvhTypeTelephonyHuntingGenericScreenOptionsModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_forwardUnconditionalNumber = null,$_mainVoicemail = null,$_forwardPolicyIndex = null,$_timeout = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'forwardUnconditionalNumber'=>$_forwardUnconditionalNumber,'mainVoicemail'=>$_mainVoicemail,'forwardPolicyIndex'=>$_forwardPolicyIndex,'timeout'=>$_timeout));
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
	 * Set forwardUnconditionalNumber
	 * @param string forwardUnconditionalNumber
	 * @return string
	 */
	public function setForwardUnconditionalNumber($_forwardUnconditionalNumber)
	{
		return ($this->forwardUnconditionalNumber = $_forwardUnconditionalNumber);
	}
	/**
	 * Get forwardUnconditionalNumber
	 * @return string
	 */
	public function getForwardUnconditionalNumber()
	{
		return $this->forwardUnconditionalNumber;
	}
	/**
	 * Set mainVoicemail
	 * @param string mainVoicemail
	 * @return string
	 */
	public function setMainVoicemail($_mainVoicemail)
	{
		return ($this->mainVoicemail = $_mainVoicemail);
	}
	/**
	 * Get mainVoicemail
	 * @return string
	 */
	public function getMainVoicemail()
	{
		return $this->mainVoicemail;
	}
	/**
	 * Set forwardPolicyIndex
	 * @param string forwardPolicyIndex
	 * @return string
	 */
	public function setForwardPolicyIndex($_forwardPolicyIndex)
	{
		return ($this->forwardPolicyIndex = $_forwardPolicyIndex);
	}
	/**
	 * Get forwardPolicyIndex
	 * @return string
	 */
	public function getForwardPolicyIndex()
	{
		return $this->forwardPolicyIndex;
	}
	/**
	 * Set timeout
	 * @param int timeout
	 * @return int
	 */
	public function setTimeout($_timeout)
	{
		return ($this->timeout = $_timeout);
	}
	/**
	 * Get timeout
	 * @return int
	 */
	public function getTimeout()
	{
		return $this->timeout;
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