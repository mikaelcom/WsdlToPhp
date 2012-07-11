<?php
/**
 * Class file for XiFinancialsTypeSymbolList
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeSymbolList
 * @date 08/07/2012
 */
class XiFinancialsTypeSymbolList extends XiFinancialsTypeCommon
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeExchangeTypes
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
	 * @var XiFinancialsTypeArrayOfSymbol
	 */
	public $Symbols;
	/**
	 * Constructor
	 * @param XiFinancialsTypeExchangeTypes Exchange
	 * @param int Count
	 * @param XiFinancialsTypeArrayOfSymbol Symbols
	 * @return XiFinancialsTypeSymbolList
	 */
	public function __construct($_Exchange,$_Count,$_Symbols = null)
	{
		XiFinancialsWsdlClass::__construct(array('Exchange'=>$_Exchange,'Count'=>$_Count,'Symbols'=>new XiFinancialsTypeArrayOfSymbol($_Symbols)));
	}
	/**
	 * Set Exchange
	 * @param ExchangeTypes Exchange
	 * @return ExchangeTypes
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiFinancialsTypeExchangeTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiFinancialsTypeExchangeTypes
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
	 * @return XiFinancialsTypeArrayOfSymbol
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