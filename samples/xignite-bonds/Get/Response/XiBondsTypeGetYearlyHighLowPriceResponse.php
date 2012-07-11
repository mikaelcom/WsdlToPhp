<?php
/**
 * Class file for XiBondsTypeGetYearlyHighLowPriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetYearlyHighLowPriceResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetYearlyHighLowPriceResponse extends XiBondsWsdlClass
{
	/**
	 * The GetYearlyHighLowPriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeYearlyHighLowPrice
	 */
	public $GetYearlyHighLowPriceResult;
	/**
	 * Constructor
	 * @param XiBondsTypeYearlyHighLowPrice GetYearlyHighLowPriceResult
	 * @return XiBondsTypeGetYearlyHighLowPriceResponse
	 */
	public function __construct($_GetYearlyHighLowPriceResult = null)
	{
		parent::__construct(array('GetYearlyHighLowPriceResult'=>$_GetYearlyHighLowPriceResult));
	}
	/**
	 * Set GetYearlyHighLowPriceResult
	 * @param YearlyHighLowPrice GetYearlyHighLowPriceResult
	 * @return YearlyHighLowPrice
	 */
	public function setGetYearlyHighLowPriceResult($_GetYearlyHighLowPriceResult)
	{
		return ($this->GetYearlyHighLowPriceResult = $_GetYearlyHighLowPriceResult);
	}
	/**
	 * Get GetYearlyHighLowPriceResult
	 * @return XiBondsTypeYearlyHighLowPrice
	 */
	public function getGetYearlyHighLowPriceResult()
	{
		return $this->GetYearlyHighLowPriceResult;
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