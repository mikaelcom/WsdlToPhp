<?php
/**
 * Class file for GGAdwordsTypeQuotaCheckError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeQuotaCheckError
 * Documentation : Encapsulates the errors thrown during developer quota checks.
 * @date 03/07/2012
 */
class GGAdwordsTypeQuotaCheckError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeQuotaCheckErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeQuotaCheckErrorReason reason
	 * @return GGAdwordsTypeQuotaCheckError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param QuotaCheckErrorReason reason
	 * @return QuotaCheckErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeQuotaCheckErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeQuotaCheckErrorReason
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