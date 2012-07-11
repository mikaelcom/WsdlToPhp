<?php
/**
 * Class file for GGAdwordsTypeRangeError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRangeError
 * Documentation : A list of all errors associated with the Range constraint.
 * @date 03/07/2012
 */
class GGAdwordsTypeRangeError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeRangeErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeRangeErrorReason reason
	 * @return GGAdwordsTypeRangeError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param RangeErrorReason reason
	 * @return RangeErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeRangeErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeRangeErrorReason
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