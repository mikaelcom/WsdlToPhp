<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyReportResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyReportResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyReportResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetCurrencyReportResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeReport
	 */
	public $GetCurrencyReportResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeReport GetCurrencyReportResult
	 * @return XiCurrenciesTypeGetCurrencyReportResponse
	 */
	public function __construct($_GetCurrencyReportResult = null)
	{
		parent::__construct(array('GetCurrencyReportResult'=>$_GetCurrencyReportResult));
	}
	/**
	 * Set GetCurrencyReportResult
	 * @param Report GetCurrencyReportResult
	 * @return Report
	 */
	public function setGetCurrencyReportResult($_GetCurrencyReportResult)
	{
		return ($this->GetCurrencyReportResult = $_GetCurrencyReportResult);
	}
	/**
	 * Get GetCurrencyReportResult
	 * @return XiCurrenciesTypeReport
	 */
	public function getGetCurrencyReportResult()
	{
		return $this->GetCurrencyReportResult;
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