<?php
/**
 * Class file for GGAdwordsTypeAdxError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeAdxError
 * Documentation : Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @date 03/07/2012
 */
class GGAdwordsTypeAdxError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeAdxErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeAdxErrorReason reason
	 * @return GGAdwordsTypeAdxError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param AdxErrorReason reason
	 * @return AdxErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeAdxErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeAdxErrorReason
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