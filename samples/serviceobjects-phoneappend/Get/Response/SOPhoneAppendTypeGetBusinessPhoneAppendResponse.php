<?php
/**
 * Class file for SOPhoneAppendTypeGetBusinessPhoneAppendResponse
 * @date 08/07/2012
 */
/**
 * Class SOPhoneAppendTypeGetBusinessPhoneAppendResponse
 * @date 08/07/2012
 */
class SOPhoneAppendTypeGetBusinessPhoneAppendResponse extends SOPhoneAppendWsdlClass
{
	/**
	 * The GetBusinessPhoneAppendResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneAppendTypePhoneInfo
	 */
	public $GetBusinessPhoneAppendResult;
	/**
	 * Constructor
	 * @param SOPhoneAppendTypePhoneInfo GetBusinessPhoneAppendResult
	 * @return SOPhoneAppendTypeGetBusinessPhoneAppendResponse
	 */
	public function __construct($_GetBusinessPhoneAppendResult = null)
	{
		parent::__construct(array('GetBusinessPhoneAppendResult'=>$_GetBusinessPhoneAppendResult));
	}
	/**
	 * Set GetBusinessPhoneAppendResult
	 * @param PhoneInfo GetBusinessPhoneAppendResult
	 * @return PhoneInfo
	 */
	public function setGetBusinessPhoneAppendResult($_GetBusinessPhoneAppendResult)
	{
		return ($this->GetBusinessPhoneAppendResult = $_GetBusinessPhoneAppendResult);
	}
	/**
	 * Get GetBusinessPhoneAppendResult
	 * @return SOPhoneAppendTypePhoneInfo
	 */
	public function getGetBusinessPhoneAppendResult()
	{
		return $this->GetBusinessPhoneAppendResult;
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