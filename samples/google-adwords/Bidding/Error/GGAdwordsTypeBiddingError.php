<?php
/**
 * Class file for GGAdwordsTypeBiddingError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBiddingError
 * Documentation : Represents bidding errors.
 * @date 03/07/2012
 */
class GGAdwordsTypeBiddingError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeBiddingErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeBiddingErrorReason reason
	 * @return GGAdwordsTypeBiddingError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param BiddingErrorReason reason
	 * @return BiddingErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeBiddingErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeBiddingErrorReason
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