<?php
/**
 * Class file for XiBondsTypeGetDailyOpenHighLowClosePricesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetDailyOpenHighLowClosePricesResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetDailyOpenHighLowClosePricesResponse extends XiBondsWsdlClass
{
	/**
	 * The GetDailyOpenHighLowClosePricesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeArrayOfDailyOpenHighLowClosePrice
	 */
	public $GetDailyOpenHighLowClosePricesResult;
	/**
	 * Constructor
	 * @param XiBondsTypeArrayOfDailyOpenHighLowClosePrice GetDailyOpenHighLowClosePricesResult
	 * @return XiBondsTypeGetDailyOpenHighLowClosePricesResponse
	 */
	public function __construct($_GetDailyOpenHighLowClosePricesResult = null)
	{
		parent::__construct(array('GetDailyOpenHighLowClosePricesResult'=>new XiBondsTypeArrayOfDailyOpenHighLowClosePrice($_GetDailyOpenHighLowClosePricesResult)));
	}
	/**
	 * Set GetDailyOpenHighLowClosePricesResult
	 * @param ArrayOfDailyOpenHighLowClosePrice GetDailyOpenHighLowClosePricesResult
	 * @return ArrayOfDailyOpenHighLowClosePrice
	 */
	public function setGetDailyOpenHighLowClosePricesResult($_GetDailyOpenHighLowClosePricesResult)
	{
		return ($this->GetDailyOpenHighLowClosePricesResult = $_GetDailyOpenHighLowClosePricesResult);
	}
	/**
	 * Get GetDailyOpenHighLowClosePricesResult
	 * @return XiBondsTypeArrayOfDailyOpenHighLowClosePrice
	 */
	public function getGetDailyOpenHighLowClosePricesResult()
	{
		return $this->GetDailyOpenHighLowClosePricesResult;
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