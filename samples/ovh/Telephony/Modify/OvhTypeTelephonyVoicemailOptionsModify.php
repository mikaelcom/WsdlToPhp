<?php
/**
 * Class file for OvhTypeTelephonyVoicemailOptionsModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailOptionsModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailOptionsModify extends OvhWsdlClass
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
	 * The redirection1
	 * @var string
	 */
	public $redirection1;
	/**
	 * The redirection1Email
	 * @var string
	 */
	public $redirection1Email;
	/**
	 * The redirection2
	 * @var string
	 */
	public $redirection2;
	/**
	 * The redirection2Email
	 * @var string
	 */
	public $redirection2Email;
	/**
	 * The redirection3
	 * @var string
	 */
	public $redirection3;
	/**
	 * The redirection3Email
	 * @var string
	 */
	public $redirection3Email;
	/**
	 * The redirection4
	 * @var string
	 */
	public $redirection4;
	/**
	 * The redirection4Email
	 * @var string
	 */
	public $redirection4Email;
	/**
	 * The redirection5
	 * @var string
	 */
	public $redirection5;
	/**
	 * The redirection5Email
	 * @var string
	 */
	public $redirection5Email;
	/**
	 * The annouceMessage
	 * @var string
	 */
	public $annouceMessage;
	/**
	 * The keepMessage
	 * @var boolean
	 */
	public $keepMessage;
	/**
	 * The audioformat
	 * @var string
	 */
	public $audioformat;
	/**
	 * The fromEmail
	 * @var string
	 */
	public $fromEmail;
	/**
	 * The fromName
	 * @var string
	 */
	public $fromName;
	/**
	 * The doNotRecord
	 * @var boolean
	 */
	public $doNotRecord;
	/**
	 * The forcePassword
	 * @var boolean
	 */
	public $forcePassword;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string redirection1
	 * @param string redirection1Email
	 * @param string redirection2
	 * @param string redirection2Email
	 * @param string redirection3
	 * @param string redirection3Email
	 * @param string redirection4
	 * @param string redirection4Email
	 * @param string redirection5
	 * @param string redirection5Email
	 * @param string annouceMessage
	 * @param boolean keepMessage
	 * @param string audioformat
	 * @param string fromEmail
	 * @param string fromName
	 * @param boolean doNotRecord
	 * @param boolean forcePassword
	 * @return OvhTypeTelephonyVoicemailOptionsModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_redirection1 = null,$_redirection1Email = null,$_redirection2 = null,$_redirection2Email = null,$_redirection3 = null,$_redirection3Email = null,$_redirection4 = null,$_redirection4Email = null,$_redirection5 = null,$_redirection5Email = null,$_annouceMessage = null,$_keepMessage = null,$_audioformat = null,$_fromEmail = null,$_fromName = null,$_doNotRecord = null,$_forcePassword = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'redirection1'=>$_redirection1,'redirection1Email'=>$_redirection1Email,'redirection2'=>$_redirection2,'redirection2Email'=>$_redirection2Email,'redirection3'=>$_redirection3,'redirection3Email'=>$_redirection3Email,'redirection4'=>$_redirection4,'redirection4Email'=>$_redirection4Email,'redirection5'=>$_redirection5,'redirection5Email'=>$_redirection5Email,'annouceMessage'=>$_annouceMessage,'keepMessage'=>$_keepMessage,'audioformat'=>$_audioformat,'fromEmail'=>$_fromEmail,'fromName'=>$_fromName,'doNotRecord'=>$_doNotRecord,'forcePassword'=>$_forcePassword));
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
	 * Set redirection1
	 * @param string redirection1
	 * @return string
	 */
	public function setRedirection1($_redirection1)
	{
		return ($this->redirection1 = $_redirection1);
	}
	/**
	 * Get redirection1
	 * @return string
	 */
	public function getRedirection1()
	{
		return $this->redirection1;
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
	 * Set redirection2
	 * @param string redirection2
	 * @return string
	 */
	public function setRedirection2($_redirection2)
	{
		return ($this->redirection2 = $_redirection2);
	}
	/**
	 * Get redirection2
	 * @return string
	 */
	public function getRedirection2()
	{
		return $this->redirection2;
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
	 * Set redirection3
	 * @param string redirection3
	 * @return string
	 */
	public function setRedirection3($_redirection3)
	{
		return ($this->redirection3 = $_redirection3);
	}
	/**
	 * Get redirection3
	 * @return string
	 */
	public function getRedirection3()
	{
		return $this->redirection3;
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
	 * Set redirection4
	 * @param string redirection4
	 * @return string
	 */
	public function setRedirection4($_redirection4)
	{
		return ($this->redirection4 = $_redirection4);
	}
	/**
	 * Get redirection4
	 * @return string
	 */
	public function getRedirection4()
	{
		return $this->redirection4;
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
	 * Set redirection5
	 * @param string redirection5
	 * @return string
	 */
	public function setRedirection5($_redirection5)
	{
		return ($this->redirection5 = $_redirection5);
	}
	/**
	 * Get redirection5
	 * @return string
	 */
	public function getRedirection5()
	{
		return $this->redirection5;
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
	 * Set annouceMessage
	 * @param string annouceMessage
	 * @return string
	 */
	public function setAnnouceMessage($_annouceMessage)
	{
		return ($this->annouceMessage = $_annouceMessage);
	}
	/**
	 * Get annouceMessage
	 * @return string
	 */
	public function getAnnouceMessage()
	{
		return $this->annouceMessage;
	}
	/**
	 * Set keepMessage
	 * @param boolean keepMessage
	 * @return boolean
	 */
	public function setKeepMessage($_keepMessage)
	{
		return ($this->keepMessage = $_keepMessage);
	}
	/**
	 * Get keepMessage
	 * @return boolean
	 */
	public function getKeepMessage()
	{
		return $this->keepMessage;
	}
	/**
	 * Set audioformat
	 * @param string audioformat
	 * @return string
	 */
	public function setAudioformat($_audioformat)
	{
		return ($this->audioformat = $_audioformat);
	}
	/**
	 * Get audioformat
	 * @return string
	 */
	public function getAudioformat()
	{
		return $this->audioformat;
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
	 * Set doNotRecord
	 * @param boolean doNotRecord
	 * @return boolean
	 */
	public function setDoNotRecord($_doNotRecord)
	{
		return ($this->doNotRecord = $_doNotRecord);
	}
	/**
	 * Get doNotRecord
	 * @return boolean
	 */
	public function getDoNotRecord()
	{
		return $this->doNotRecord;
	}
	/**
	 * Set forcePassword
	 * @param boolean forcePassword
	 * @return boolean
	 */
	public function setForcePassword($_forcePassword)
	{
		return ($this->forcePassword = $_forcePassword);
	}
	/**
	 * Get forcePassword
	 * @return boolean
	 */
	public function getForcePassword()
	{
		return $this->forcePassword;
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