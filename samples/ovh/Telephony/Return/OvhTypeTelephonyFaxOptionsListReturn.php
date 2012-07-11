<?php
/**
 * Class file for OvhTypeTelephonyFaxOptionsListReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxOptionsListReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxOptionsListReturn extends OvhWsdlClass
{
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
	 * The fromName
	 * @var string
	 */
	public $fromName;
	/**
	 * The fromEmail
	 * @var string
	 */
	public $fromEmail;
	/**
	 * The faxQuality
	 * @var string
	 */
	public $faxQuality;
	/**
	 * The faxTagLine
	 * @var string
	 */
	public $faxTagLine;
	/**
	 * The faxMaxCall
	 * @var int
	 */
	public $faxMaxCall;
	/**
	 * The receivId
	 * @var string
	 */
	public $receivId;
	/**
	 * The senderId
	 * @var string
	 */
	public $senderId;
	/**
	 * The redirection1Email
	 * @var string
	 */
	public $redirection1Email;
	/**
	 * The redirection2Email
	 * @var string
	 */
	public $redirection2Email;
	/**
	 * The redirection3Email
	 * @var string
	 */
	public $redirection3Email;
	/**
	 * The redirection4Email
	 * @var string
	 */
	public $redirection4Email;
	/**
	 * The redirection5Email
	 * @var string
	 */
	public $redirection5Email;
	/**
	 * Constructor
	 * @param string callNumber
	 * @param string countryCode
	 * @param string fromName
	 * @param string fromEmail
	 * @param string faxQuality
	 * @param string faxTagLine
	 * @param int faxMaxCall
	 * @param string receivId
	 * @param string senderId
	 * @param string redirection1Email
	 * @param string redirection2Email
	 * @param string redirection3Email
	 * @param string redirection4Email
	 * @param string redirection5Email
	 * @return OvhTypeTelephonyFaxOptionsListReturn
	 */
	public function __construct($_callNumber = null,$_countryCode = null,$_fromName = null,$_fromEmail = null,$_faxQuality = null,$_faxTagLine = null,$_faxMaxCall = null,$_receivId = null,$_senderId = null,$_redirection1Email = null,$_redirection2Email = null,$_redirection3Email = null,$_redirection4Email = null,$_redirection5Email = null)
	{
		parent::__construct(array('callNumber'=>$_callNumber,'countryCode'=>$_countryCode,'fromName'=>$_fromName,'fromEmail'=>$_fromEmail,'faxQuality'=>$_faxQuality,'faxTagLine'=>$_faxTagLine,'faxMaxCall'=>$_faxMaxCall,'receivId'=>$_receivId,'senderId'=>$_senderId,'redirection1Email'=>$_redirection1Email,'redirection2Email'=>$_redirection2Email,'redirection3Email'=>$_redirection3Email,'redirection4Email'=>$_redirection4Email,'redirection5Email'=>$_redirection5Email));
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
	 * Set fromName
	 * @param string fromName
	 * @return string
	 */
	public function setFromName($_fromName)
	{
		return ($this->fromName = $_fromName);
	}
	/**
	 * Get fromName
	 * @return string
	 */
	public function getFromName()
	{
		return $this->fromName;
	}
	/**
	 * Set fromEmail
	 * @param string fromEmail
	 * @return string
	 */
	public function setFromEmail($_fromEmail)
	{
		return ($this->fromEmail = $_fromEmail);
	}
	/**
	 * Get fromEmail
	 * @return string
	 */
	public function getFromEmail()
	{
		return $this->fromEmail;
	}
	/**
	 * Set faxQuality
	 * @param string faxQuality
	 * @return string
	 */
	public function setFaxQuality($_faxQuality)
	{
		return ($this->faxQuality = $_faxQuality);
	}
	/**
	 * Get faxQuality
	 * @return string
	 */
	public function getFaxQuality()
	{
		return $this->faxQuality;
	}
	/**
	 * Set faxTagLine
	 * @param string faxTagLine
	 * @return string
	 */
	public function setFaxTagLine($_faxTagLine)
	{
		return ($this->faxTagLine = $_faxTagLine);
	}
	/**
	 * Get faxTagLine
	 * @return string
	 */
	public function getFaxTagLine()
	{
		return $this->faxTagLine;
	}
	/**
	 * Set faxMaxCall
	 * @param int faxMaxCall
	 * @return int
	 */
	public function setFaxMaxCall($_faxMaxCall)
	{
		return ($this->faxMaxCall = $_faxMaxCall);
	}
	/**
	 * Get faxMaxCall
	 * @return int
	 */
	public function getFaxMaxCall()
	{
		return $this->faxMaxCall;
	}
	/**
	 * Set receivId
	 * @param string receivId
	 * @return string
	 */
	public function setReceivId($_receivId)
	{
		return ($this->receivId = $_receivId);
	}
	/**
	 * Get receivId
	 * @return string
	 */
	public function getReceivId()
	{
		return $this->receivId;
	}
	/**
	 * Set senderId
	 * @param string senderId
	 * @return string
	 */
	public function setSenderId($_senderId)
	{
		return ($this->senderId = $_senderId);
	}
	/**
	 * Get senderId
	 * @return string
	 */
	public function getSenderId()
	{
		return $this->senderId;
	}
	/**
	 * Set redirection1Email
	 * @param string redirection1Email
	 * @return string
	 */
	public function setRedirection1Email($_redirection1Email)
	{
		return ($this->redirection1Email = $_redirection1Email);
	}
	/**
	 * Get redirection1Email
	 * @return string
	 */
	public function getRedirection1Email()
	{
		return $this->redirection1Email;
	}
	/**
	 * Set redirection2Email
	 * @param string redirection2Email
	 * @return string
	 */
	public function setRedirection2Email($_redirection2Email)
	{
		return ($this->redirection2Email = $_redirection2Email);
	}
	/**
	 * Get redirection2Email
	 * @return string
	 */
	public function getRedirection2Email()
	{
		return $this->redirection2Email;
	}
	/**
	 * Set redirection3Email
	 * @param string redirection3Email
	 * @return string
	 */
	public function setRedirection3Email($_redirection3Email)
	{
		return ($this->redirection3Email = $_redirection3Email);
	}
	/**
	 * Get redirection3Email
	 * @return string
	 */
	public function getRedirection3Email()
	{
		return $this->redirection3Email;
	}
	/**
	 * Set redirection4Email
	 * @param string redirection4Email
	 * @return string
	 */
	public function setRedirection4Email($_redirection4Email)
	{
		return ($this->redirection4Email = $_redirection4Email);
	}
	/**
	 * Get redirection4Email
	 * @return string
	 */
	public function getRedirection4Email()
	{
		return $this->redirection4Email;
	}
	/**
	 * Set redirection5Email
	 * @param string redirection5Email
	 * @return string
	 */
	public function setRedirection5Email($_redirection5Email)
	{
		return ($this->redirection5Email = $_redirection5Email);
	}
	/**
	 * Get redirection5Email
	 * @return string
	 */
	public function getRedirection5Email()
	{
		return $this->redirection5Email;
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