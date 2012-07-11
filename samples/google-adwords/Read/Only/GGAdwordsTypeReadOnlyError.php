<?php
/**
 * Class file for GGAdwordsTypeReadOnlyError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeReadOnlyError
 * Documentation : Errors from attempting to write to read-only fields.
 * @date 03/07/2012
 */
class GGAdwordsTypeReadOnlyError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeReadOnlyErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeReadOnlyErrorReason reason
	 * @return GGAdwordsTypeReadOnlyError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param ReadOnlyErrorReason reason
	 * @return ReadOnlyErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeReadOnlyErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeReadOnlyErrorReason
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