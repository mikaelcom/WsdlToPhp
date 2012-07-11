<?php
/**
 * Class file for GGAdwordsTypeStatsQueryError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeStatsQueryError
 * Documentation : Represents possible error codes when querying for stats.
 * @date 03/07/2012
 */
class GGAdwordsTypeStatsQueryError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeStatsQueryErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeStatsQueryErrorReason reason
	 * @return GGAdwordsTypeStatsQueryError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param StatsQueryErrorReason reason
	 * @return StatsQueryErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeStatsQueryErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeStatsQueryErrorReason
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