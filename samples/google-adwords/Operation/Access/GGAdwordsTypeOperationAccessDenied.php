<?php
/**
 * Class file for GGAdwordsTypeOperationAccessDenied
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeOperationAccessDenied
 * Documentation : Operation not permitted due to the invoked service's access policy.
 * @date 03/07/2012
 */
class GGAdwordsTypeOperationAccessDenied extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeOperationAccessDeniedReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeOperationAccessDeniedReason reason
	 * @return GGAdwordsTypeOperationAccessDenied
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param OperationAccessDeniedReason reason
	 * @return OperationAccessDeniedReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeOperationAccessDeniedReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeOperationAccessDeniedReason
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