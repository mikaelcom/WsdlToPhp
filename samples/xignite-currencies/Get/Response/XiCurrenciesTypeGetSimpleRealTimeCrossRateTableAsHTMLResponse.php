<?php
/**
 * Class file for XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTMLResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTMLResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTMLResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetSimpleRealTimeCrossRateTableAsHTMLResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHTMLCrossRateTable
	 */
	public $GetSimpleRealTimeCrossRateTableAsHTMLResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHTMLCrossRateTable GetSimpleRealTimeCrossRateTableAsHTMLResult
	 * @return XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTMLResponse
	 */
	public function __construct($_GetSimpleRealTimeCrossRateTableAsHTMLResult = null)
	{
		parent::__construct(array('GetSimpleRealTimeCrossRateTableAsHTMLResult'=>$_GetSimpleRealTimeCrossRateTableAsHTMLResult));
	}
	/**
	 * Set GetSimpleRealTimeCrossRateTableAsHTMLResult
	 * @param HTMLCrossRateTable GetSimpleRealTimeCrossRateTableAsHTMLResult
	 * @return HTMLCrossRateTable
	 */
	public function setGetSimpleRealTimeCrossRateTableAsHTMLResult($_GetSimpleRealTimeCrossRateTableAsHTMLResult)
	{
		return ($this->GetSimpleRealTimeCrossRateTableAsHTMLResult = $_GetSimpleRealTimeCrossRateTableAsHTMLResult);
	}
	/**
	 * Get GetSimpleRealTimeCrossRateTableAsHTMLResult
	 * @return XiCurrenciesTypeHTMLCrossRateTable
	 */
	public function getGetSimpleRealTimeCrossRateTableAsHTMLResult()
	{
		return $this->GetSimpleRealTimeCrossRateTableAsHTMLResult;
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