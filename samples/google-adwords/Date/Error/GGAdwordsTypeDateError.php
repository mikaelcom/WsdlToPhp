<?php
/**
 * Class file for GGAdwordsTypeDateError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeDateError
 * Documentation : Errors associated with invalid dates and date ranges.
 * @date 03/07/2012
 */
class GGAdwordsTypeDateError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeDateErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeDateErrorReason reason
	 * @return GGAdwordsTypeDateError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param DateErrorReason reason
	 * @return DateErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeDateErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeDateErrorReason
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