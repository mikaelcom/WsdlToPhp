<?php
/**
 * Class file for GGAdwordsTypeRequiredError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRequiredError
 * Documentation : Errors due to missing required field.
 * @date 03/07/2012
 */
class GGAdwordsTypeRequiredError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeRequiredErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeRequiredErrorReason reason
	 * @return GGAdwordsTypeRequiredError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param RequiredErrorReason reason
	 * @return RequiredErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeRequiredErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeRequiredErrorReason
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