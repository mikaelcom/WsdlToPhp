<?php
/**
 * Class file for GGAdwordsTypeNotEmptyError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeNotEmptyError
 * Documentation : Errors corresponding with violation of a NOT EMPTY check.
 * @date 03/07/2012
 */
class GGAdwordsTypeNotEmptyError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeNotEmptyErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeNotEmptyErrorReason reason
	 * @return GGAdwordsTypeNotEmptyError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param NotEmptyErrorReason reason
	 * @return NotEmptyErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeNotEmptyErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeNotEmptyErrorReason
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