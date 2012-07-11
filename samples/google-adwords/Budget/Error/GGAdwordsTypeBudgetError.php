<?php
/**
 * Class file for GGAdwordsTypeBudgetError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBudgetError
 * Documentation : A list of all the error codes being used by the common budget domain package.
 * @date 03/07/2012
 */
class GGAdwordsTypeBudgetError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeBudgetErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeBudgetErrorReason reason
	 * @return GGAdwordsTypeBudgetError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param BudgetErrorReason reason
	 * @return BudgetErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeBudgetErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeBudgetErrorReason
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