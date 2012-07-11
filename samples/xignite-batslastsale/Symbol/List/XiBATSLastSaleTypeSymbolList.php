<?php
/**
 * Class file for XiBATSLastSaleTypeSymbolList
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleTypeSymbolList
 * @date 08/07/2012
 */
class XiBATSLastSaleTypeSymbolList extends XiBATSLastSaleTypeCommon
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
	 * @var XiBATSLastSaleTypeArrayOfSymbolInfo
	 */
	public $Symbols;
	/**
	 * Constructor
	 * @param int Count
	 * @param XiBATSLastSaleTypeArrayOfSymbolInfo Symbols
	 * @return XiBATSLastSaleTypeSymbolList
	 */
	public function __construct($_Count,$_Symbols = null)
	{
		XiBATSLastSaleWsdlClass::__construct(array('Count'=>$_Count,'Symbols'=>new XiBATSLastSaleTypeArrayOfSymbolInfo($_Symbols)));
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
	 * @return XiBATSLastSaleTypeArrayOfSymbolInfo
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