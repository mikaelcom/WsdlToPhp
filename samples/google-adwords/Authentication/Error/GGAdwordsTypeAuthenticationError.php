<?php
/**
 * Class file for GGAdwordsTypeAuthenticationError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeAuthenticationError
 * Documentation : Errors returned when Authentication failed.
 * @date 03/07/2012
 */
class GGAdwordsTypeAuthenticationError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeAuthenticationErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeAuthenticationErrorReason reason
	 * @return GGAdwordsTypeAuthenticationError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param AuthenticationErrorReason reason
	 * @return AuthenticationErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeAuthenticationErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeAuthenticationErrorReason
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