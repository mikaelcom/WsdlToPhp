<?php
/**
 * Class file for GGAdwordsTypeBetaError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBetaError
 * Documentation : Errors that are thrown when a Beta feature is accessed incorrectly.
 * @date 03/07/2012
 */
class GGAdwordsTypeBetaError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeBetaErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeBetaErrorReason reason
	 * @return GGAdwordsTypeBetaError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param BetaErrorReason reason
	 * @return BetaErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeBetaErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeBetaErrorReason
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