<?php
/**
 * Class file for GGAdwordsTypeTargetError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeTargetError
 * Documentation : A list of all the error codes being used by the common targeting package.
 * @date 03/07/2012
 */
class GGAdwordsTypeTargetError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeTargetErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeTargetErrorReason reason
	 * @return GGAdwordsTypeTargetError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param TargetErrorReason reason
	 * @return TargetErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeTargetErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeTargetErrorReason
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