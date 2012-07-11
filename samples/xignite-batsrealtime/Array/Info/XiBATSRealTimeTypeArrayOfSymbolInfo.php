<?php
/**
 * Class file for XiBATSRealTimeTypeArrayOfSymbolInfo
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeArrayOfSymbolInfo
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeArrayOfSymbolInfo extends XiBATSRealTimeWsdlClass
{
	/**
	 * The SymbolInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBATSRealTimeTypeSymbolInfo
	 */
	public $SymbolInfo;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeSymbolInfo SymbolInfo
	 * @return XiBATSRealTimeTypeArrayOfSymbolInfo
	 */
	public function __construct($_SymbolInfo = null)
	{
		parent::__construct(array('SymbolInfo'=>$_SymbolInfo));
	}
	/**
	 * Set SymbolInfo
	 * @param SymbolInfo SymbolInfo
	 * @return SymbolInfo
	 */
	public function setSymbolInfo($_SymbolInfo)
	{
		return ($this->SymbolInfo = $_SymbolInfo);
	}
	/**
	 * Get SymbolInfo
	 * @return XiBATSRealTimeTypeSymbolInfo
	 */
	public function getSymbolInfo()
	{
		return $this->SymbolInfo;
	}
	/**
	 * Returns the current element
	 * @see XiBATSRealTimeWsdlClass::current()
	 * @return XiBATSRealTimeTypeSymbolInfo
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBATSRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBATSRealTimeTypeSymbolInfo
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBATSRealTimeWsdlClass::first()
	 * @return XiBATSRealTimeTypeSymbolInfo
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBATSRealTimeWsdlClass::last()
	 * @return XiBATSRealTimeTypeSymbolInfo
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBATSRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBATSRealTimeTypeSymbolInfo
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SymbolInfo'
	 */
	public function getAttributeName()
	{
		return 'SymbolInfo';
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