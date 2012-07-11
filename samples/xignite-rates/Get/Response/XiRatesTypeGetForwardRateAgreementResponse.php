<?php
/**
 * Class file for XiRatesTypeGetForwardRateAgreementResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetForwardRateAgreementResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetForwardRateAgreementResponse extends XiRatesWsdlClass
{
	/**
	 * The GetForwardRateAgreementResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeForwardRateAgreement
	 */
	public $GetForwardRateAgreementResult;
	/**
	 * Constructor
	 * @param XiRatesTypeForwardRateAgreement GetForwardRateAgreementResult
	 * @return XiRatesTypeGetForwardRateAgreementResponse
	 */
	public function __construct($_GetForwardRateAgreementResult = null)
	{
		parent::__construct(array('GetForwardRateAgreementResult'=>$_GetForwardRateAgreementResult));
	}
	/**
	 * Set GetForwardRateAgreementResult
	 * @param ForwardRateAgreement GetForwardRateAgreementResult
	 * @return ForwardRateAgreement
	 */
	public function setGetForwardRateAgreementResult($_GetForwardRateAgreementResult)
	{
		return ($this->GetForwardRateAgreementResult = $_GetForwardRateAgreementResult);
	}
	/**
	 * Get GetForwardRateAgreementResult
	 * @return XiRatesTypeForwardRateAgreement
	 */
	public function getGetForwardRateAgreementResult()
	{
		return $this->GetForwardRateAgreementResult;
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