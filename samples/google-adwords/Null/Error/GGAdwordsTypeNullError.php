<?php
/**
 * Class file for GGAdwordsTypeNullError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeNullError
 * Documentation : Errors associated with violation of a NOT NULL check.
 * @date 03/07/2012
 */
class GGAdwordsTypeNullError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeNullErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeNullErrorReason reason
	 * @return GGAdwordsTypeNullError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param NullErrorReason reason
	 * @return NullErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeNullErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeNullErrorReason
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