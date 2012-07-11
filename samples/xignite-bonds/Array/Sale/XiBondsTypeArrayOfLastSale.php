<?php
/**
 * Class file for XiBondsTypeArrayOfLastSale
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeArrayOfLastSale
 * @date 08/07/2012
 */
class XiBondsTypeArrayOfLastSale extends XiBondsWsdlClass
{
	/**
	 * The LastSale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsTypeLastSale
	 */
	public $LastSale;
	/**
	 * Constructor
	 * @param XiBondsTypeLastSale LastSale
	 * @return XiBondsTypeArrayOfLastSale
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
	 * @return XiBondsTypeLastSale
	 */
	public function getLastSale()
	{
		return $this->LastSale;
	}
	/**
	 * Returns the current element
	 * @see XiBondsWsdlClass::current()
	 * @return XiBondsTypeLastSale
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsWsdlClass::item()
	 * @param int
	 * @return XiBondsTypeLastSale
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::first()
	 * @return XiBondsTypeLastSale
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::last()
	 * @return XiBondsTypeLastSale
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsTypeLastSale
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