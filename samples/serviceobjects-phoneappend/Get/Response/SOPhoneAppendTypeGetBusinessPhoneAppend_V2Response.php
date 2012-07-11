<?php
/**
 * Class file for SOPhoneAppendTypeGetBusinessPhoneAppend_V2Response
 * @date 08/07/2012
 */
/**
 * Class SOPhoneAppendTypeGetBusinessPhoneAppend_V2Response
 * @date 08/07/2012
 */
class SOPhoneAppendTypeGetBusinessPhoneAppend_V2Response extends SOPhoneAppendWsdlClass
{
	/**
	 * The GetBusinessPhoneAppend_V2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneAppendTypePhoneInfo_V2
	 */
	public $GetBusinessPhoneAppend_V2Result;
	/**
	 * Constructor
	 * @param SOPhoneAppendTypePhoneInfo_V2 GetBusinessPhoneAppend_V2Result
	 * @return SOPhoneAppendTypeGetBusinessPhoneAppend_V2Response
	 */
	public function __construct($_GetBusinessPhoneAppend_V2Result = null)
	{
		parent::__construct(array('GetBusinessPhoneAppend_V2Result'=>$_GetBusinessPhoneAppend_V2Result));
	}
	/**
	 * Set GetBusinessPhoneAppend_V2Result
	 * @param PhoneInfo_V2 GetBusinessPhoneAppend_V2Result
	 * @return PhoneInfo_V2
	 */
	public function setGetBusinessPhoneAppend_V2Result($_GetBusinessPhoneAppend_V2Result)
	{
		return ($this->GetBusinessPhoneAppend_V2Result = $_GetBusinessPhoneAppend_V2Result);
	}
	/**
	 * Get GetBusinessPhoneAppend_V2Result
	 * @return SOPhoneAppendTypePhoneInfo_V2
	 */
	public function getGetBusinessPhoneAppend_V2Result()
	{
		return $this->GetBusinessPhoneAppend_V2Result;
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