<?php
/**
 * Class file for XiBATSRealTimeTypeSymbolList
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeSymbolList
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeSymbolList extends XiBATSRealTimeTypeCommon
{
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
	 * @var XiBATSRealTimeTypeArrayOfSymbolInfo
	 */
	public $Symbols;
	/**
	 * Constructor
	 * @param int Count
	 * @param XiBATSRealTimeTypeArrayOfSymbolInfo Symbols
	 * @return XiBATSRealTimeTypeSymbolList
	 */
	public function __construct($_Count,$_Symbols = null)
	{
		XiBATSRealTimeWsdlClass::__construct(array('Count'=>$_Count,'Symbols'=>new XiBATSRealTimeTypeArrayOfSymbolInfo($_Symbols)));
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
	 * @param ArrayOfSymbolInfo Symbols
	 * @return ArrayOfSymbolInfo
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return XiBATSRealTimeTypeArrayOfSymbolInfo
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