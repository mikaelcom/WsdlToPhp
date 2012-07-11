<?php
/**
 * Class file for GGAdwordsTypeQuotaError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeQuotaError
 * Documentation : Errors that are thrown if a quota limit is exceeded.
 * @date 03/07/2012
 */
class GGAdwordsTypeQuotaError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeQuotaErrorReason
	 */
	public $reason;
	/**
	 * The limit
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The number of entities allowed for this quota.
	 * @var int
	 */
	public $limit;
	/**
	 * Constructor
	 * @param GGAdwordsTypeQuotaErrorReason reason
	 * @param int limit
	 * @return GGAdwordsTypeQuotaError
	 */
	public function __construct($_reason = null,$_limit = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason,'limit'=>$_limit));
	}
	/**
	 * Set reason
	 * @param QuotaErrorReason reason
	 * @return QuotaErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeQuotaErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeQuotaErrorReason
	 */
	public function getReason()
	{
		return $this->reason;
	}
	/**
	 * Set limit
	 * @param int limit
	 * @return int
	 */
	public function setLimit($_limit)
	{
		return ($this->limit = $_limit);
	}
	/**
	 * Get limit
	 * @return int
	 */
	public function getLimit()
	{
		return $this->limit;
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