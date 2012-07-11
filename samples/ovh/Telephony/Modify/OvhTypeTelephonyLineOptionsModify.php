<?php
/**
 * Class file for OvhTypeTelephonyLineOptionsModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineOptionsModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineOptionsModify extends OvhWsdlClass
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
	 * The identificationRestriction
	 * @var boolean
	 */
	public $identificationRestriction;
	/**
	 * The anonymousCallRejection
	 * @var boolean
	 */
	public $anonymousCallRejection;
	/**
	 * The doNotDisturb
	 * @var boolean
	 */
	public $doNotDisturb;
	/**
	 * The absentSuscriber
	 * @var boolean
	 */
	public $absentSuscriber;
	/**
	 * The lockOutCall
	 * @var boolean
	 */
	public $lockOutCall;
	/**
	 * The lockOutCallPassword
	 * @var string
	 */
	public $lockOutCallPassword;
	/**
	 * The forwardUnconditional
	 * @var boolean
	 */
	public $forwardUnconditional;
	/**
	 * The forwardUnconditionalNumber
	 * @var string
	 */
	public $forwardUnconditionalNumber;
	/**
	 * The forwardNoReply
	 * @var boolean
	 */
	public $forwardNoReply;
	/**
	 * The forwardNoReplyDelay
	 * @var int
	 */
	public $forwardNoReplyDelay;
	/**
	 * The forwardNoReplyNumber
	 * @var string
	 */
	public $forwardNoReplyNumber;
	/**
	 * The forwardBusy
	 * @var boolean
	 */
	public $forwardBusy;
	/**
	 * The forwardBusyNumber
	 * @var string
	 */
	public $forwardBusyNumber;
	/**
	 * The forwardBackup
	 * @var boolean
	 */
	public $forwardBackup;
	/**
	 * The forwardBackupNumber
	 * @var string
	 */
	public $forwardBackupNumber;
	/**
	 * The displayCallNumber
	 * @var string
	 */
	public $displayCallNumber;
	/**
	 * The callWaiting
	 * @var boolean
	 */
	public $callWaiting;
	/**
	 * The forwardNoReplyNature
	 * @var string
	 */
	public $forwardNoReplyNature;
	/**
	 * The forwardBackupNature
	 * @var string
	 */
	public $forwardBackupNature;
	/**
	 * The forwardUnconditionalNature
	 * @var string
	 */
	public $forwardUnconditionalNature;
	/**
	 * The forwardBusyNature
	 * @var string
	 */
	public $forwardBusyNature;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param boolean identificationRestriction
	 * @param boolean anonymousCallRejection
	 * @param boolean doNotDisturb
	 * @param boolean absentSuscriber
	 * @param boolean lockOutCall
	 * @param string lockOutCallPassword
	 * @param boolean forwardUnconditional
	 * @param string forwardUnconditionalNumber
	 * @param boolean forwardNoReply
	 * @param int forwardNoReplyDelay
	 * @param string forwardNoReplyNumber
	 * @param boolean forwardBusy
	 * @param string forwardBusyNumber
	 * @param boolean forwardBackup
	 * @param string forwardBackupNumber
	 * @param string displayCallNumber
	 * @param boolean callWaiting
	 * @param string forwardNoReplyNature
	 * @param string forwardBackupNature
	 * @param string forwardUnconditionalNature
	 * @param string forwardBusyNature
	 * @return OvhTypeTelephonyLineOptionsModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_identificationRestriction = null,$_anonymousCallRejection = null,$_doNotDisturb = null,$_absentSuscriber = null,$_lockOutCall = null,$_lockOutCallPassword = null,$_forwardUnconditional = null,$_forwardUnconditionalNumber = null,$_forwardNoReply = null,$_forwardNoReplyDelay = null,$_forwardNoReplyNumber = null,$_forwardBusy = null,$_forwardBusyNumber = null,$_forwardBackup = null,$_forwardBackupNumber = null,$_displayCallNumber = null,$_callWaiting = null,$_forwardNoReplyNature = null,$_forwardBackupNature = null,$_forwardUnconditionalNature = null,$_forwardBusyNature = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'identificationRestriction'=>$_identificationRestriction,'anonymousCallRejection'=>$_anonymousCallRejection,'doNotDisturb'=>$_doNotDisturb,'absentSuscriber'=>$_absentSuscriber,'lockOutCall'=>$_lockOutCall,'lockOutCallPassword'=>$_lockOutCallPassword,'forwardUnconditional'=>$_forwardUnconditional,'forwardUnconditionalNumber'=>$_forwardUnconditionalNumber,'forwardNoReply'=>$_forwardNoReply,'forwardNoReplyDelay'=>$_forwardNoReplyDelay,'forwardNoReplyNumber'=>$_forwardNoReplyNumber,'forwardBusy'=>$_forwardBusy,'forwardBusyNumber'=>$_forwardBusyNumber,'forwardBackup'=>$_forwardBackup,'forwardBackupNumber'=>$_forwardBackupNumber,'displayCallNumber'=>$_displayCallNumber,'callWaiting'=>$_callWaiting,'forwardNoReplyNature'=>$_forwardNoReplyNature,'forwardBackupNature'=>$_forwardBackupNature,'forwardUnconditionalNature'=>$_forwardUnconditionalNature,'forwardBusyNature'=>$_forwardBusyNature));
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
	 * Set identificationRestriction
	 * @param boolean identificationRestriction
	 * @return boolean
	 */
	public function setIdentificationRestriction($_identificationRestriction)
	{
		return ($this->identificationRestriction = $_identificationRestriction);
	}
	/**
	 * Get identificationRestriction
	 * @return boolean
	 */
	public function getIdentificationRestriction()
	{
		return $this->identificationRestriction;
	}
	/**
	 * Set anonymousCallRejection
	 * @param boolean anonymousCallRejection
	 * @return boolean
	 */
	public function setAnonymousCallRejection($_anonymousCallRejection)
	{
		return ($this->anonymousCallRejection = $_anonymousCallRejection);
	}
	/**
	 * Get anonymousCallRejection
	 * @return boolean
	 */
	public function getAnonymousCallRejection()
	{
		return $this->anonymousCallRejection;
	}
	/**
	 * Set doNotDisturb
	 * @param boolean doNotDisturb
	 * @return boolean
	 */
	public function setDoNotDisturb($_doNotDisturb)
	{
		return ($this->doNotDisturb = $_doNotDisturb);
	}
	/**
	 * Get doNotDisturb
	 * @return boolean
	 */
	public function getDoNotDisturb()
	{
		return $this->doNotDisturb;
	}
	/**
	 * Set absentSuscriber
	 * @param boolean absentSuscriber
	 * @return boolean
	 */
	public function setAbsentSuscriber($_absentSuscriber)
	{
		return ($this->absentSuscriber = $_absentSuscriber);
	}
	/**
	 * Get absentSuscriber
	 * @return boolean
	 */
	public function getAbsentSuscriber()
	{
		return $this->absentSuscriber;
	}
	/**
	 * Set lockOutCall
	 * @param boolean lockOutCall
	 * @return boolean
	 */
	public function setLockOutCall($_lockOutCall)
	{
		return ($this->lockOutCall = $_lockOutCall);
	}
	/**
	 * Get lockOutCall
	 * @return boolean
	 */
	public function getLockOutCall()
	{
		return $this->lockOutCall;
	}
	/**
	 * Set lockOutCallPassword
	 * @param string lockOutCallPassword
	 * @return string
	 */
	public function setLockOutCallPassword($_lockOutCallPassword)
	{
		return ($this->lockOutCallPassword = $_lockOutCallPassword);
	}
	/**
	 * Get lockOutCallPassword
	 * @return string
	 */
	public function getLockOutCallPassword()
	{
		return $this->lockOutCallPassword;
	}
	/**
	 * Set forwardUnconditional
	 * @param boolean forwardUnconditional
	 * @return boolean
	 */
	public function setForwardUnconditional($_forwardUnconditional)
	{
		return ($this->forwardUnconditional = $_forwardUnconditional);
	}
	/**
	 * Get forwardUnconditional
	 * @return boolean
	 */
	public function getForwardUnconditional()
	{
		return $this->forwardUnconditional;
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
	 * Set forwardNoReply
	 * @param boolean forwardNoReply
	 * @return boolean
	 */
	public function setForwardNoReply($_forwardNoReply)
	{
		return ($this->forwardNoReply = $_forwardNoReply);
	}
	/**
	 * Get forwardNoReply
	 * @return boolean
	 */
	public function getForwardNoReply()
	{
		return $this->forwardNoReply;
	}
	/**
	 * Set forwardNoReplyDelay
	 * @param int forwardNoReplyDelay
	 * @return int
	 */
	public function setForwardNoReplyDelay($_forwardNoReplyDelay)
	{
		return ($this->forwardNoReplyDelay = $_forwardNoReplyDelay);
	}
	/**
	 * Get forwardNoReplyDelay
	 * @return int
	 */
	public function getForwardNoReplyDelay()
	{
		return $this->forwardNoReplyDelay;
	}
	/**
	 * Set forwardNoReplyNumber
	 * @param string forwardNoReplyNumber
	 * @return string
	 */
	public function setForwardNoReplyNumber($_forwardNoReplyNumber)
	{
		return ($this->forwardNoReplyNumber = $_forwardNoReplyNumber);
	}
	/**
	 * Get forwardNoReplyNumber
	 * @return string
	 */
	public function getForwardNoReplyNumber()
	{
		return $this->forwardNoReplyNumber;
	}
	/**
	 * Set forwardBusy
	 * @param boolean forwardBusy
	 * @return boolean
	 */
	public function setForwardBusy($_forwardBusy)
	{
		return ($this->forwardBusy = $_forwardBusy);
	}
	/**
	 * Get forwardBusy
	 * @return boolean
	 */
	public function getForwardBusy()
	{
		return $this->forwardBusy;
	}
	/**
	 * Set forwardBusyNumber
	 * @param string forwardBusyNumber
	 * @return string
	 */
	public function setForwardBusyNumber($_forwardBusyNumber)
	{
		return ($this->forwardBusyNumber = $_forwardBusyNumber);
	}
	/**
	 * Get forwardBusyNumber
	 * @return string
	 */
	public function getForwardBusyNumber()
	{
		return $this->forwardBusyNumber;
	}
	/**
	 * Set forwardBackup
	 * @param boolean forwardBackup
	 * @return boolean
	 */
	public function setForwardBackup($_forwardBackup)
	{
		return ($this->forwardBackup = $_forwardBackup);
	}
	/**
	 * Get forwardBackup
	 * @return boolean
	 */
	public function getForwardBackup()
	{
		return $this->forwardBackup;
	}
	/**
	 * Set forwardBackupNumber
	 * @param string forwardBackupNumber
	 * @return string
	 */
	public function setForwardBackupNumber($_forwardBackupNumber)
	{
		return ($this->forwardBackupNumber = $_forwardBackupNumber);
	}
	/**
	 * Get forwardBackupNumber
	 * @return string
	 */
	public function getForwardBackupNumber()
	{
		return $this->forwardBackupNumber;
	}
	/**
	 * Set displayCallNumber
	 * @param string displayCallNumber
	 * @return string
	 */
	public function setDisplayCallNumber($_displayCallNumber)
	{
		return ($this->displayCallNumber = $_displayCallNumber);
	}
	/**
	 * Get displayCallNumber
	 * @return string
	 */
	public function getDisplayCallNumber()
	{
		return $this->displayCallNumber;
	}
	/**
	 * Set callWaiting
	 * @param boolean callWaiting
	 * @return boolean
	 */
	public function setCallWaiting($_callWaiting)
	{
		return ($this->callWaiting = $_callWaiting);
	}
	/**
	 * Get callWaiting
	 * @return boolean
	 */
	public function getCallWaiting()
	{
		return $this->callWaiting;
	}
	/**
	 * Set forwardNoReplyNature
	 * @param string forwardNoReplyNature
	 * @return string
	 */
	public function setForwardNoReplyNature($_forwardNoReplyNature)
	{
		return ($this->forwardNoReplyNature = $_forwardNoReplyNature);
	}
	/**
	 * Get forwardNoReplyNature
	 * @return string
	 */
	public function getForwardNoReplyNature()
	{
		return $this->forwardNoReplyNature;
	}
	/**
	 * Set forwardBackupNature
	 * @param string forwardBackupNature
	 * @return string
	 */
	public function setForwardBackupNature($_forwardBackupNature)
	{
		return ($this->forwardBackupNature = $_forwardBackupNature);
	}
	/**
	 * Get forwardBackupNature
	 * @return string
	 */
	public function getForwardBackupNature()
	{
		return $this->forwardBackupNature;
	}
	/**
	 * Set forwardUnconditionalNature
	 * @param string forwardUnconditionalNature
	 * @return string
	 */
	public function setForwardUnconditionalNature($_forwardUnconditionalNature)
	{
		return ($this->forwardUnconditionalNature = $_forwardUnconditionalNature);
	}
	/**
	 * Get forwardUnconditionalNature
	 * @return string
	 */
	public function getForwardUnconditionalNature()
	{
		return $this->forwardUnconditionalNature;
	}
	/**
	 * Set forwardBusyNature
	 * @param string forwardBusyNature
	 * @return string
	 */
	public function setForwardBusyNature($_forwardBusyNature)
	{
		return ($this->forwardBusyNature = $_forwardBusyNature);
	}
	/**
	 * Get forwardBusyNature
	 * @return string
	 */
	public function getForwardBusyNature()
	{
		return $this->forwardBusyNature;
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