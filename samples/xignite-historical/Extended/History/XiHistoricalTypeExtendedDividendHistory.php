<?php
/**
 * Class file for XiHistoricalTypeExtendedDividendHistory
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeExtendedDividendHistory
 * @date 08/07/2012
 */
class XiHistoricalTypeExtendedDividendHistory extends XiHistoricalTypeCommon
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
	 * @var XiHistoricalTypeArrayOfExtendedDividend
	 */
	public $Dividends;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiHistoricalTypeArrayOfExtendedDividend Dividends
	 * @return XiHistoricalTypeExtendedDividendHistory
	 */
	public function __construct($_Symbol = null,$_Dividends = null)
	{
		XiHistoricalWsdlClass::__construct(array('Symbol'=>$_Symbol,'Dividends'=>new XiHistoricalTypeArrayOfExtendedDividend($_Dividends)));
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
	 * @param ArrayOfExtendedDividend Dividends
	 * @return ArrayOfExtendedDividend
	 */
	public function setDividends($_Dividends)
	{
		return ($this->Dividends = $_Dividends);
	}
	/**
	 * Get Dividends
	 * @return XiHistoricalTypeArrayOfExtendedDividend
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