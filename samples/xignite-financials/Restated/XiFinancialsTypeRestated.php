<?php
/**
 * Class file for XiFinancialsTypeRestated
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeRestated
 * @date 08/07/2012
 */
class XiFinancialsTypeRestated extends XiFinancialsTypeCommon
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
	 * The SymbolList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfRestatedSymbol
	 */
	public $SymbolList;
	/**
	 * Constructor
	 * @param int Count
	 * @param XiFinancialsTypeArrayOfRestatedSymbol SymbolList
	 * @return XiFinancialsTypeRestated
	 */
	public function __construct($_Count,$_SymbolList = null)
	{
		XiFinancialsWsdlClass::__construct(array('Count'=>$_Count,'SymbolList'=>new XiFinancialsTypeArrayOfRestatedSymbol($_SymbolList)));
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
	 * Set SymbolList
	 * @param ArrayOfRestatedSymbol SymbolList
	 * @return ArrayOfRestatedSymbol
	 */
	public function setSymbolList($_SymbolList)
	{
		return ($this->SymbolList = $_SymbolList);
	}
	/**
	 * Get SymbolList
	 * @return XiFinancialsTypeArrayOfRestatedSymbol
	 */
	public function getSymbolList()
	{
		return $this->SymbolList;
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