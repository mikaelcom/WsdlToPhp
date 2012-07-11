<?php
/**
 * Class file for GGAdwordsTypeNotWhitelistedError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeNotWhitelistedError
 * Documentation : Indicates that the customer is not whitelisted for accessing the API.
 * @date 03/07/2012
 */
class GGAdwordsTypeNotWhitelistedError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeNotWhitelistedErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeNotWhitelistedErrorReason reason
	 * @return GGAdwordsTypeNotWhitelistedError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param NotWhitelistedErrorReason reason
	 * @return NotWhitelistedErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeNotWhitelistedErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeNotWhitelistedErrorReason
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