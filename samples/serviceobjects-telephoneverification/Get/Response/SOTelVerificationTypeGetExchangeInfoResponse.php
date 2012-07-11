<?php
/**
 * Class file for SOTelVerificationTypeGetExchangeInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypeGetExchangeInfoResponse
 * @date 08/07/2012
 */
class SOTelVerificationTypeGetExchangeInfoResponse extends SOTelVerificationWsdlClass
{
	/**
	 * The GetExchangeInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOTelVerificationTypeTelephoneInfo
	 */
	public $GetExchangeInfoResult;
	/**
	 * Constructor
	 * @param SOTelVerificationTypeTelephoneInfo GetExchangeInfoResult
	 * @return SOTelVerificationTypeGetExchangeInfoResponse
	 */
	public function __construct($_GetExchangeInfoResult = null)
	{
		parent::__construct(array('GetExchangeInfoResult'=>$_GetExchangeInfoResult));
	}
	/**
	 * Set GetExchangeInfoResult
	 * @param TelephoneInfo GetExchangeInfoResult
	 * @return TelephoneInfo
	 */
	public function setGetExchangeInfoResult($_GetExchangeInfoResult)
	{
		return ($this->GetExchangeInfoResult = $_GetExchangeInfoResult);
	}
	/**
	 * Get GetExchangeInfoResult
	 * @return SOTelVerificationTypeTelephoneInfo
	 */
	public function getGetExchangeInfoResult()
	{
		return $this->GetExchangeInfoResult;
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