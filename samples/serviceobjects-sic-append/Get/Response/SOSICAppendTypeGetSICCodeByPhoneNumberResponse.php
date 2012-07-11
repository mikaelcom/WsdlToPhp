<?php
/**
 * Class file for SOSICAppendTypeGetSICCodeByPhoneNumberResponse
 * @date 08/07/2012
 */
/**
 * Class SOSICAppendTypeGetSICCodeByPhoneNumberResponse
 * @date 08/07/2012
 */
class SOSICAppendTypeGetSICCodeByPhoneNumberResponse extends SOSICAppendWsdlClass
{
	/**
	 * The GetSICCodeByPhoneNumberResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOSICAppendTypeArrayOfSICAppendResponse
	 */
	public $GetSICCodeByPhoneNumberResult;
	/**
	 * Constructor
	 * @param SOSICAppendTypeArrayOfSICAppendResponse GetSICCodeByPhoneNumberResult
	 * @return SOSICAppendTypeGetSICCodeByPhoneNumberResponse
	 */
	public function __construct($_GetSICCodeByPhoneNumberResult = null)
	{
		parent::__construct(array('GetSICCodeByPhoneNumberResult'=>new SOSICAppendTypeArrayOfSICAppendResponse($_GetSICCodeByPhoneNumberResult)));
	}
	/**
	 * Set GetSICCodeByPhoneNumberResult
	 * @param ArrayOfSICAppendResponse GetSICCodeByPhoneNumberResult
	 * @return ArrayOfSICAppendResponse
	 */
	public function setGetSICCodeByPhoneNumberResult($_GetSICCodeByPhoneNumberResult)
	{
		return ($this->GetSICCodeByPhoneNumberResult = $_GetSICCodeByPhoneNumberResult);
	}
	/**
	 * Get GetSICCodeByPhoneNumberResult
	 * @return SOSICAppendTypeArrayOfSICAppendResponse
	 */
	public function getGetSICCodeByPhoneNumberResult()
	{
		return $this->GetSICCodeByPhoneNumberResult;
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