<?php
/**
 * Class file for XiMoneyMarketsTypeGetForwardRateAgreementResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetForwardRateAgreementResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetForwardRateAgreementResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetForwardRateAgreementResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeForwardRateAgreement
	 */
	public $GetForwardRateAgreementResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeForwardRateAgreement GetForwardRateAgreementResult
	 * @return XiMoneyMarketsTypeGetForwardRateAgreementResponse
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
	 * @return XiMoneyMarketsTypeForwardRateAgreement
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