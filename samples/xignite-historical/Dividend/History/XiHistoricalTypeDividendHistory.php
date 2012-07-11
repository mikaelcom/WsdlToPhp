<?php
/**
 * Class file for XiHistoricalTypeDividendHistory
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeDividendHistory
 * @date 08/07/2012
 */
class XiHistoricalTypeDividendHistory extends XiHistoricalTypeCommon
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Dividends
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfDividend
	 */
	public $Dividends;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiHistoricalTypeArrayOfDividend Dividends
	 * @return XiHistoricalTypeDividendHistory
	 */
	public function __construct($_Symbol = null,$_Dividends = null)
	{
		XiHistoricalWsdlClass::__construct(array('Symbol'=>$_Symbol,'Dividends'=>new XiHistoricalTypeArrayOfDividend($_Dividends)));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Dividends
	 * @param ArrayOfDividend Dividends
	 * @return ArrayOfDividend
	 */
	public function setDividends($_Dividends)
	{
		return ($this->Dividends = $_Dividends);
	}
	/**
	 * Get Dividends
	 * @return XiHistoricalTypeArrayOfDividend
	 */
	public function getDividends()
	{
		return $this->Dividends;
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