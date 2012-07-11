<?php
/**
 * Class file for GGAdwordsTypeRequestError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRequestError
 * Documentation : Encapsulates the generic errors thrown when there's an error with user request.
 * @date 03/07/2012
 */
class GGAdwordsTypeRequestError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeRequestErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeRequestErrorReason reason
	 * @return GGAdwordsTypeRequestError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param RequestErrorReason reason
	 * @return RequestErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeRequestErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeRequestErrorReason
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