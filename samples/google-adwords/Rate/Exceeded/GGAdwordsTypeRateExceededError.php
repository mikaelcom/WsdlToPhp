<?php
/**
 * Class file for GGAdwordsTypeRateExceededError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRateExceededError
 * Documentation : Signals that a call failed because a measured rate exceeded.
 * @date 03/07/2012
 */
class GGAdwordsTypeRateExceededError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeRateExceededErrorReason
	 */
	public $reason;
	/**
	 * The rateName
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Cause of the rate exceeded error.
	 * @var string
	 */
	public $rateName;
	/**
	 * The rateScope
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The scope of the rate (ACCOUNT/DEVELOPER).
	 * @var string
	 */
	public $rateScope;
	/**
	 * The retryAfterSeconds
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The amount of time (in seconds) the client should wait before retrying the request.
	 * @var int
	 */
	public $retryAfterSeconds;
	/**
	 * Constructor
	 * @param GGAdwordsTypeRateExceededErrorReason reason
	 * @param string rateName
	 * @param string rateScope
	 * @param int retryAfterSeconds
	 * @return GGAdwordsTypeRateExceededError
	 */
	public function __construct($_reason = null,$_rateName = null,$_rateScope = null,$_retryAfterSeconds = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason,'rateName'=>$_rateName,'rateScope'=>$_rateScope,'retryAfterSeconds'=>$_retryAfterSeconds));
	}
	/**
	 * Set reason
	 * @param RateExceededErrorReason reason
	 * @return RateExceededErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeRateExceededErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeRateExceededErrorReason
	 */
	public function getReason()
	{
		return $this->reason;
	}
	/**
	 * Set rateName
	 * @param string rateName
	 * @return string
	 */
	public function setRateName($_rateName)
	{
		return ($this->rateName = $_rateName);
	}
	/**
	 * Get rateName
	 * @return string
	 */
	public function getRateName()
	{
		return $this->rateName;
	}
	/**
	 * Set rateScope
	 * @param string rateScope
	 * @return string
	 */
	public function setRateScope($_rateScope)
	{
		return ($this->rateScope = $_rateScope);
	}
	/**
	 * Get rateScope
	 * @return string
	 */
	public function getRateScope()
	{
		return $this->rateScope;
	}
	/**
	 * Set retryAfterSeconds
	 * @param int retryAfterSeconds
	 * @return int
	 */
	public function setRetryAfterSeconds($_retryAfterSeconds)
	{
		return ($this->retryAfterSeconds = $_retryAfterSeconds);
	}
	/**
	 * Get retryAfterSeconds
	 * @return int
	 */
	public function getRetryAfterSeconds()
	{
		return $this->retryAfterSeconds;
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