<?php
/**
 * Class file for GGAdwordsTypeDistinctError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeDistinctError
 * Documentation : Errors related to distinct ids or content.
 * @date 03/07/2012
 */
class GGAdwordsTypeDistinctError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeDistinctErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeDistinctErrorReason reason
	 * @return GGAdwordsTypeDistinctError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param DistinctErrorReason reason
	 * @return DistinctErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeDistinctErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeDistinctErrorReason
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