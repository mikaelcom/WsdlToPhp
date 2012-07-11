<?php
/**
 * Class file for GGAdwordsTypeAuthorizationError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeAuthorizationError
 * Documentation : Errors encountered when trying to authorize a user.
 * @date 03/07/2012
 */
class GGAdwordsTypeAuthorizationError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeAuthorizationErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeAuthorizationErrorReason reason
	 * @return GGAdwordsTypeAuthorizationError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param AuthorizationErrorReason reason
	 * @return AuthorizationErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeAuthorizationErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeAuthorizationErrorReason
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