<?php
/**
 * Class file for SOPhoneAppendTypeGetPhoneAppendResponse
 * @date 08/07/2012
 */
/**
 * Class SOPhoneAppendTypeGetPhoneAppendResponse
 * @date 08/07/2012
 */
class SOPhoneAppendTypeGetPhoneAppendResponse extends SOPhoneAppendWsdlClass
{
	/**
	 * The GetPhoneAppendResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneAppendTypePhoneInfo
	 */
	public $GetPhoneAppendResult;
	/**
	 * Constructor
	 * @param SOPhoneAppendTypePhoneInfo GetPhoneAppendResult
	 * @return SOPhoneAppendTypeGetPhoneAppendResponse
	 */
	public function __construct($_GetPhoneAppendResult = null)
	{
		parent::__construct(array('GetPhoneAppendResult'=>$_GetPhoneAppendResult));
	}
	/**
	 * Set GetPhoneAppendResult
	 * @param PhoneInfo GetPhoneAppendResult
	 * @return PhoneInfo
	 */
	public function setGetPhoneAppendResult($_GetPhoneAppendResult)
	{
		return ($this->GetPhoneAppendResult = $_GetPhoneAppendResult);
	}
	/**
	 * Get GetPhoneAppendResult
	 * @return SOPhoneAppendTypePhoneInfo
	 */
	public function getGetPhoneAppendResult()
	{
		return $this->GetPhoneAppendResult;
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