<?php
/**
 * Class file for GGAdwordsTypeEntityNotFound
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeEntityNotFound
 * Documentation : An id did not correspond to an entity, or it referred to an entity which does not belong to the customer.
 * @date 03/07/2012
 */
class GGAdwordsTypeEntityNotFound extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Reason for this error.
	 * @var GGAdwordsTypeEntityNotFoundReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeEntityNotFoundReason reason
	 * @return GGAdwordsTypeEntityNotFound
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param EntityNotFoundReason reason
	 * @return EntityNotFoundReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeEntityNotFoundReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeEntityNotFoundReason
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