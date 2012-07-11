<?php
/**
 * Class file for XiBATSLastSaleTypeArrayOfSymbolInfo
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleTypeArrayOfSymbolInfo
 * @date 08/07/2012
 */
class XiBATSLastSaleTypeArrayOfSymbolInfo extends XiBATSLastSaleWsdlClass
{
	/**
	 * The SymbolInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBATSLastSaleTypeSymbolInfo
	 */
	public $SymbolInfo;
	/**
	 * Constructor
	 * @param XiBATSLastSaleTypeSymbolInfo SymbolInfo
	 * @return XiBATSLastSaleTypeArrayOfSymbolInfo
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
	 * @return XiBATSLastSaleTypeSymbolInfo
	 */
	public function getSymbolInfo()
	{
		return $this->SymbolInfo;
	}
	/**
	 * Returns the current element
	 * @see XiBATSLastSaleWsdlClass::current()
	 * @return XiBATSLastSaleTypeSymbolInfo
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBATSLastSaleWsdlClass::item()
	 * @param int
	 * @return XiBATSLastSaleTypeSymbolInfo
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBATSLastSaleWsdlClass::first()
	 * @return XiBATSLastSaleTypeSymbolInfo
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBATSLastSaleWsdlClass::last()
	 * @return XiBATSLastSaleTypeSymbolInfo
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBATSLastSaleWsdlClass::offsetGet()
	 * @param int
	 * @return XiBATSLastSaleTypeSymbolInfo
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