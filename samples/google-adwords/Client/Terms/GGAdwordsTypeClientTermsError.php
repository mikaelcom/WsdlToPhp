<?php
/**
 * Class file for GGAdwordsTypeClientTermsError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeClientTermsError
 * Documentation : Error due to user not accepting the AdWords terms of service.
 * @date 03/07/2012
 */
class GGAdwordsTypeClientTermsError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeClientTermsErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeClientTermsErrorReason reason
	 * @return GGAdwordsTypeClientTermsError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param ClientTermsErrorReason reason
	 * @return ClientTermsErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeClientTermsErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeClientTermsErrorReason
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