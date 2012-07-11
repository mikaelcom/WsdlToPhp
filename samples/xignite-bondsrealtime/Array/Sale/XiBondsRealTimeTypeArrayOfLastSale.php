<?php
/**
 * Class file for XiBondsRealTimeTypeArrayOfLastSale
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeArrayOfLastSale
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeArrayOfLastSale extends XiBondsRealTimeWsdlClass
{
	/**
	 * The LastSale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsRealTimeTypeLastSale
	 */
	public $LastSale;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeLastSale LastSale
	 * @return XiBondsRealTimeTypeArrayOfLastSale
	 */
	public function __construct($_LastSale = null)
	{
		parent::__construct(array('LastSale'=>$_LastSale));
	}
	/**
	 * Set LastSale
	 * @param LastSale LastSale
	 * @return LastSale
	 */
	public function setLastSale($_LastSale)
	{
		return ($this->LastSale = $_LastSale);
	}
	/**
	 * Get LastSale
	 * @return XiBondsRealTimeTypeLastSale
	 */
	public function getLastSale()
	{
		return $this->LastSale;
	}
	/**
	 * Returns the current element
	 * @see XiBondsRealTimeWsdlClass::current()
	 * @return XiBondsRealTimeTypeLastSale
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBondsRealTimeTypeLastSale
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::first()
	 * @return XiBondsRealTimeTypeLastSale
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::last()
	 * @return XiBondsRealTimeTypeLastSale
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsRealTimeTypeLastSale
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'LastSale'
	 */
	public function getAttributeName()
	{
		return 'LastSale';
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