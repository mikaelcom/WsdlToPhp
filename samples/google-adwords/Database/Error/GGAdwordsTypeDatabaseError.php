<?php
/**
 * Class file for GGAdwordsTypeDatabaseError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeDatabaseError
 * Documentation : Errors that are thrown due to a database access problem.
 * @date 03/07/2012
 */
class GGAdwordsTypeDatabaseError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeDatabaseErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeDatabaseErrorReason reason
	 * @return GGAdwordsTypeDatabaseError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param DatabaseErrorReason reason
	 * @return DatabaseErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeDatabaseErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeDatabaseErrorReason
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