<?php
/**
 * Class file for SOTelVerificationTypeSendSMSResponse
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypeSendSMSResponse
 * @date 08/07/2012
 */
class SOTelVerificationTypeSendSMSResponse extends SOTelVerificationWsdlClass
{
	/**
	 * The SendSMSResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOTelVerificationTypeTelephoneInfo
	 */
	public $SendSMSResult;
	/**
	 * Constructor
	 * @param SOTelVerificationTypeTelephoneInfo SendSMSResult
	 * @return SOTelVerificationTypeSendSMSResponse
	 */
	public function __construct($_SendSMSResult = null)
	{
		parent::__construct(array('SendSMSResult'=>$_SendSMSResult));
	}
	/**
	 * Set SendSMSResult
	 * @param TelephoneInfo SendSMSResult
	 * @return TelephoneInfo
	 */
	public function setSendSMSResult($_SendSMSResult)
	{
		return ($this->SendSMSResult = $_SendSMSResult);
	}
	/**
	 * Get SendSMSResult
	 * @return SOTelVerificationTypeTelephoneInfo
	 */
	public function getSendSMSResult()
	{
		return $this->SendSMSResult;
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