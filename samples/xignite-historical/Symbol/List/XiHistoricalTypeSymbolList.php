<?php
/**
 * Class file for XiHistoricalTypeSymbolList
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeSymbolList
 * @date 08/07/2012
 */
class XiHistoricalTypeSymbolList extends XiHistoricalTypeCommon
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfString
	 */
	public $Symbol;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfString Symbol
	 * @return XiHistoricalTypeSymbolList
	 */
	public function __construct($_Symbol = null)
	{
		XiHistoricalWsdlClass::__construct(array('Symbol'=>new XiHistoricalTypeArrayOfString($_Symbol)));
	}
	/**
	 * Set Symbol
	 * @param ArrayOfString Symbol
	 * @return ArrayOfString
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return XiHistoricalTypeArrayOfString
	 */
	public function getSymbol()
	{
		return $this->Symbol;
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