<?php
/**
 * Class file for GGAdwordsTypeRejectedError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRejectedError
 * @date 03/07/2012
 */
class GGAdwordsTypeRejectedError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeRejectedErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeRejectedErrorReason reason
	 * @return GGAdwordsTypeRejectedError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param RejectedErrorReason reason
	 * @return RejectedErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeRejectedErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeRejectedErrorReason
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