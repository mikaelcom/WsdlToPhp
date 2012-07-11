<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRateTableAsHTMLResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRateTableAsHTMLResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRateTableAsHTMLResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRateTableAsHTMLResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHTMLCrossRateTable
	 */
	public $GetHistoricalCrossRateTableAsHTMLResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHTMLCrossRateTable GetHistoricalCrossRateTableAsHTMLResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTableAsHTMLResponse
	 */
	public function __construct($_GetHistoricalCrossRateTableAsHTMLResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRateTableAsHTMLResult'=>$_GetHistoricalCrossRateTableAsHTMLResult));
	}
	/**
	 * Set GetHistoricalCrossRateTableAsHTMLResult
	 * @param HTMLCrossRateTable GetHistoricalCrossRateTableAsHTMLResult
	 * @return HTMLCrossRateTable
	 */
	public function setGetHistoricalCrossRateTableAsHTMLResult($_GetHistoricalCrossRateTableAsHTMLResult)
	{
		return ($this->GetHistoricalCrossRateTableAsHTMLResult = $_GetHistoricalCrossRateTableAsHTMLResult);
	}
	/**
	 * Get GetHistoricalCrossRateTableAsHTMLResult
	 * @return XiCurrenciesTypeHTMLCrossRateTable
	 */
	public function getGetHistoricalCrossRateTableAsHTMLResult()
	{
		return $this->GetHistoricalCrossRateTableAsHTMLResult;
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