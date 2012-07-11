<?php
/**
 * Class file for GGAdwordsTypeInternalApiError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeInternalApiError
 * Documentation : Indicates that a server-side error has occured. {@code InternalApiError}s are generally not the result of an invalid request or message sent by the client.
 * @date 03/07/2012
 */
class GGAdwordsTypeInternalApiError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeInternalApiErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeInternalApiErrorReason reason
	 * @return GGAdwordsTypeInternalApiError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param InternalApiErrorReason reason
	 * @return InternalApiErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeInternalApiErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeInternalApiErrorReason
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