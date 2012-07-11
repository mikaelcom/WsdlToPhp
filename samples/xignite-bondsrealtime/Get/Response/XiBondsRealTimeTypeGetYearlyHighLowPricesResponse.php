<?php
/**
 * Class file for XiBondsRealTimeTypeGetYearlyHighLowPricesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetYearlyHighLowPricesResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetYearlyHighLowPricesResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetYearlyHighLowPricesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeArrayOfYearlyHighLowPrice
	 */
	public $GetYearlyHighLowPricesResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeArrayOfYearlyHighLowPrice GetYearlyHighLowPricesResult
	 * @return XiBondsRealTimeTypeGetYearlyHighLowPricesResponse
	 */
	public function __construct($_GetYearlyHighLowPricesResult = null)
	{
		parent::__construct(array('GetYearlyHighLowPricesResult'=>new XiBondsRealTimeTypeArrayOfYearlyHighLowPrice($_GetYearlyHighLowPricesResult)));
	}
	/**
	 * Set GetYearlyHighLowPricesResult
	 * @param ArrayOfYearlyHighLowPrice GetYearlyHighLowPricesResult
	 * @return ArrayOfYearlyHighLowPrice
	 */
	public function setGetYearlyHighLowPricesResult($_GetYearlyHighLowPricesResult)
	{
		return ($this->GetYearlyHighLowPricesResult = $_GetYearlyHighLowPricesResult);
	}
	/**
	 * Get GetYearlyHighLowPricesResult
	 * @return XiBondsRealTimeTypeArrayOfYearlyHighLowPrice
	 */
	public function getGetYearlyHighLowPricesResult()
	{
		return $this->GetYearlyHighLowPricesResult;
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