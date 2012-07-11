<?php
/**
 * Class file for GGAdwordsTypeNewEntityCreationError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeNewEntityCreationError
 * Documentation : Error associated with creation of new entities using {@link com.google.ads.api.services.common.id.TempId}s.
 * @date 03/07/2012
 */
class GGAdwordsTypeNewEntityCreationError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeNewEntityCreationErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeNewEntityCreationErrorReason reason
	 * @return GGAdwordsTypeNewEntityCreationError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param NewEntityCreationErrorReason reason
	 * @return NewEntityCreationErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeNewEntityCreationErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeNewEntityCreationErrorReason
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