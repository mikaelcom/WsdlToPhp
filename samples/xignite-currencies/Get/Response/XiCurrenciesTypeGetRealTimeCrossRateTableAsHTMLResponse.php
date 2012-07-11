<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeCrossRateTableAsHTMLResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeCrossRateTableAsHTMLResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeCrossRateTableAsHTMLResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRealTimeCrossRateTableAsHTMLResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHTMLCrossRateTable
	 */
	public $GetRealTimeCrossRateTableAsHTMLResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHTMLCrossRateTable GetRealTimeCrossRateTableAsHTMLResult
	 * @return XiCurrenciesTypeGetRealTimeCrossRateTableAsHTMLResponse
	 */
	public function __construct($_GetRealTimeCrossRateTableAsHTMLResult = null)
	{
		parent::__construct(array('GetRealTimeCrossRateTableAsHTMLResult'=>$_GetRealTimeCrossRateTableAsHTMLResult));
	}
	/**
	 * Set GetRealTimeCrossRateTableAsHTMLResult
	 * @param HTMLCrossRateTable GetRealTimeCrossRateTableAsHTMLResult
	 * @return HTMLCrossRateTable
	 */
	public function setGetRealTimeCrossRateTableAsHTMLResult($_GetRealTimeCrossRateTableAsHTMLResult)
	{
		return ($this->GetRealTimeCrossRateTableAsHTMLResult = $_GetRealTimeCrossRateTableAsHTMLResult);
	}
	/**
	 * Get GetRealTimeCrossRateTableAsHTMLResult
	 * @return XiCurrenciesTypeHTMLCrossRateTable
	 */
	public function getGetRealTimeCrossRateTableAsHTMLResult()
	{
		return $this->GetRealTimeCrossRateTableAsHTMLResult;
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