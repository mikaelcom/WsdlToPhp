<?php
/**
 * Class file for GGAdwordsTypeStringLengthError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeStringLengthError
 * Documentation : A list of all errors associated with the @ContentsString constraint.
 * @date 03/07/2012
 */
class GGAdwordsTypeStringLengthError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeStringLengthErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeStringLengthErrorReason reason
	 * @return GGAdwordsTypeStringLengthError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param StringLengthErrorReason reason
	 * @return StringLengthErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeStringLengthErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeStringLengthErrorReason
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