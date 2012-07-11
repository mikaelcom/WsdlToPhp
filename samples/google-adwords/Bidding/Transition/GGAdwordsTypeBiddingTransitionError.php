<?php
/**
 * Class file for GGAdwordsTypeBiddingTransitionError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBiddingTransitionError
 * Documentation : Bidding transition errors.
 * @date 03/07/2012
 */
class GGAdwordsTypeBiddingTransitionError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeBiddingTransitionErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeBiddingTransitionErrorReason reason
	 * @return GGAdwordsTypeBiddingTransitionError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param BiddingTransitionErrorReason reason
	 * @return BiddingTransitionErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeBiddingTransitionErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeBiddingTransitionErrorReason
	 */
	public function getReason()
	{
		return $this->reason;
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