<?php
/**
 * Class file for OvhTypeTelephonyHuntingInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingInfoReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingInfoReturn extends OvhWsdlClass
{
	/**
	 * The members
	 * @var OvhTypeMyArrayOfTelephonyHuntingInfoMemberStructType
	 */
	public $members;
	/**
	 * The strategy
	 * @var string
	 */
	public $strategy;
	/**
	 * The pattern
	 * @var string
	 */
	public $pattern;
	/**
	 * The onHoldTimer
	 * @var int
	 */
	public $onHoldTimer;
	/**
	 * The queueSize
	 * @var int
	 */
	public $queueSize;
	/**
	 * The numberOfCalls
	 * @var int
	 */
	public $numberOfCalls;
	/**
	 * The noReplyTimer
	 * @var int
	 */
	public $noReplyTimer;
	/**
	 * The mainVoicemail
	 * @var string
	 */
	public $mainVoicemail;
	/**
	 * The toneOnHold
	 * @var boolean
	 */
	public $toneOnHold;
	/**
	 * The toneRingback
	 * @var boolean
	 */
	public $toneRingback;
	/**
	 * The toneOnClosure
	 * @var boolean
	 */
	public $toneOnClosure;
	/**
	 * The anonymousCallRejection
	 * @var boolean
	 */
	public $anonymousCallRejection;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyHuntingInfoMemberStructType members
	 * @param string strategy
	 * @param string pattern
	 * @param int onHoldTimer
	 * @param int queueSize
	 * @param int numberOfCalls
	 * @param int noReplyTimer
	 * @param string mainVoicemail
	 * @param boolean toneOnHold
	 * @param boolean toneRingback
	 * @param boolean toneOnClosure
	 * @param boolean anonymousCallRejection
	 * @return OvhTypeTelephonyHuntingInfoReturn
	 */
	public function __construct($_members = null,$_strategy = null,$_pattern = null,$_onHoldTimer = null,$_queueSize = null,$_numberOfCalls = null,$_noReplyTimer = null,$_mainVoicemail = null,$_toneOnHold = null,$_toneRingback = null,$_toneOnClosure = null,$_anonymousCallRejection = null)
	{
		parent::__construct(array('members'=>new OvhTypeMyArrayOfTelephonyHuntingInfoMemberStructType($_members),'strategy'=>$_strategy,'pattern'=>$_pattern,'onHoldTimer'=>$_onHoldTimer,'queueSize'=>$_queueSize,'numberOfCalls'=>$_numberOfCalls,'noReplyTimer'=>$_noReplyTimer,'mainVoicemail'=>$_mainVoicemail,'toneOnHold'=>$_toneOnHold,'toneRingback'=>$_toneRingback,'toneOnClosure'=>$_toneOnClosure,'anonymousCallRejection'=>$_anonymousCallRejection));
	}
	/**
	 * Set members
	 * @param MyArrayOfTelephonyHuntingInfoMemberStructType members
	 * @return MyArrayOfTelephonyHuntingInfoMemberStructType
	 */
	public function setMembers($_members)
	{
		return ($this->members = $_members);
	}
	/**
	 * Get members
	 * @return OvhTypeMyArrayOfTelephonyHuntingInfoMemberStructType
	 */
	public function getMembers()
	{
		return $this->members;
	}
	/**
	 * Set strategy
	 * @param string strategy
	 * @return string
	 */
	public function setStrategy($_strategy)
	{
		return ($this->strategy = $_strategy);
	}
	/**
	 * Get strategy
	 * @return string
	 */
	public function getStrategy()
	{
		return $this->strategy;
	}
	/**
	 * Set pattern
	 * @param string pattern
	 * @return string
	 */
	public function setPattern($_pattern)
	{
		return ($this->pattern = $_pattern);
	}
	/**
	 * Get pattern
	 * @return string
	 */
	public function getPattern()
	{
		return $this->pattern;
	}
	/**
	 * Set onHoldTimer
	 * @param int onHoldTimer
	 * @return int
	 */
	public function setOnHoldTimer($_onHoldTimer)
	{
		return ($this->onHoldTimer = $_onHoldTimer);
	}
	/**
	 * Get onHoldTimer
	 * @return int
	 */
	public function getOnHoldTimer()
	{
		return $this->onHoldTimer;
	}
	/**
	 * Set queueSize
	 * @param int queueSize
	 * @return int
	 */
	public function setQueueSize($_queueSize)
	{
		return ($this->queueSize = $_queueSize);
	}
	/**
	 * Get queueSize
	 * @return int
	 */
	public function getQueueSize()
	{
		return $this->queueSize;
	}
	/**
	 * Set numberOfCalls
	 * @param int numberOfCalls
	 * @return int
	 */
	public function setNumberOfCalls($_numberOfCalls)
	{
		return ($this->numberOfCalls = $_numberOfCalls);
	}
	/**
	 * Get numberOfCalls
	 * @return int
	 */
	public function getNumberOfCalls()
	{
		return $this->numberOfCalls;
	}
	/**
	 * Set noReplyTimer
	 * @param int noReplyTimer
	 * @return int
	 */
	public function setNoReplyTimer($_noReplyTimer)
	{
		return ($this->noReplyTimer = $_noReplyTimer);
	}
	/**
	 * Get noReplyTimer
	 * @return int
	 */
	public function getNoReplyTimer()
	{
		return $this->noReplyTimer;
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
	 * Set toneOnHold
	 * @param boolean toneOnHold
	 * @return boolean
	 */
	public function setToneOnHold($_toneOnHold)
	{
		return ($this->toneOnHold = $_toneOnHold);
	}
	/**
	 * Get toneOnHold
	 * @return boolean
	 */
	public function getToneOnHold()
	{
		return $this->toneOnHold;
	}
	/**
	 * Set toneRingback
	 * @param boolean toneRingback
	 * @return boolean
	 */
	public function setToneRingback($_toneRingback)
	{
		return ($this->toneRingback = $_toneRingback);
	}
	/**
	 * Get toneRingback
	 * @return boolean
	 */
	public function getToneRingback()
	{
		return $this->toneRingback;
	}
	/**
	 * Set toneOnClosure
	 * @param boolean toneOnClosure
	 * @return boolean
	 */
	public function setToneOnClosure($_toneOnClosure)
	{
		return ($this->toneOnClosure = $_toneOnClosure);
	}
	/**
	 * Get toneOnClosure
	 * @return boolean
	 */
	public function getToneOnClosure()
	{
		return $this->toneOnClosure;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>