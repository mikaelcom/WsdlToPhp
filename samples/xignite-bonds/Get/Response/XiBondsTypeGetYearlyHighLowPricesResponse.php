<?php
/**
 * Class file for XiBondsTypeGetYearlyHighLowPricesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetYearlyHighLowPricesResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetYearlyHighLowPricesResponse extends XiBondsWsdlClass
{
	/**
	 * The GetYearlyHighLowPricesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeArrayOfYearlyHighLowPrice
	 */
	public $GetYearlyHighLowPricesResult;
	/**
	 * Constructor
	 * @param XiBondsTypeArrayOfYearlyHighLowPrice GetYearlyHighLowPricesResult
	 * @return XiBondsTypeGetYearlyHighLowPricesResponse
	 */
	public function __construct($_GetYearlyHighLowPricesResult = null)
	{
		parent::__construct(array('GetYearlyHighLowPricesResult'=>new XiBondsTypeArrayOfYearlyHighLowPrice($_GetYearlyHighLowPricesResult)));
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
	 * @return XiBondsTypeArrayOfYearlyHighLowPrice
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