<?php
/**
 * Class file for GGAdwordsTypeOperatorError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeOperatorError
 * Documentation : Errors due to the use of unsupported operations.
 * @date 03/07/2012
 */
class GGAdwordsTypeOperatorError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeOperatorErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeOperatorErrorReason reason
	 * @return GGAdwordsTypeOperatorError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param OperatorErrorReason reason
	 * @return OperatorErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeOperatorErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeOperatorErrorReason
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