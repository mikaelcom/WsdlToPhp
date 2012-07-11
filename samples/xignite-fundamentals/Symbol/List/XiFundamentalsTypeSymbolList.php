<?php
/**
 * Class file for XiFundamentalsTypeSymbolList
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeSymbolList
 * @date 08/07/2012
 */
class XiFundamentalsTypeSymbolList extends XiFundamentalsTypeCommon
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeExchangeTypes
	 */
	public $Exchange;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeArrayOfSymbol
	 */
	public $Symbols;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeExchangeTypes Exchange
	 * @param int Count
	 * @param XiFundamentalsTypeArrayOfSymbol Symbols
	 * @return XiFundamentalsTypeSymbolList
	 */
	public function __construct($_Exchange,$_Count,$_Symbols = null)
	{
		XiFundamentalsWsdlClass::__construct(array('Exchange'=>$_Exchange,'Count'=>$_Count,'Symbols'=>new XiFundamentalsTypeArrayOfSymbol($_Symbols)));
	}
	/**
	 * Set Exchange
	 * @param ExchangeTypes Exchange
	 * @return ExchangeTypes
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiFundamentalsTypeExchangeTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiFundamentalsTypeExchangeTypes
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Symbols
	 * @param ArrayOfSymbol Symbols
	 * @return ArrayOfSymbol
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return XiFundamentalsTypeArrayOfSymbol
	 */
	public function getSymbols()
	{
		return $this->Symbols;
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