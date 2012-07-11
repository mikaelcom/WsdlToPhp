<?php
/**
 * Class file for XiBondsTypeArrayOfPriceComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeArrayOfPriceComposite
 * @date 08/07/2012
 */
class XiBondsTypeArrayOfPriceComposite extends XiBondsWsdlClass
{
	/**
	 * The PriceComposite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsTypePriceComposite
	 */
	public $PriceComposite;
	/**
	 * Constructor
	 * @param XiBondsTypePriceComposite PriceComposite
	 * @return XiBondsTypeArrayOfPriceComposite
	 */
	public function __construct($_PriceComposite = null)
	{
		parent::__construct(array('PriceComposite'=>$_PriceComposite));
	}
	/**
	 * Set PriceComposite
	 * @param PriceComposite PriceComposite
	 * @return PriceComposite
	 */
	public function setPriceComposite($_PriceComposite)
	{
		return ($this->PriceComposite = $_PriceComposite);
	}
	/**
	 * Get PriceComposite
	 * @return XiBondsTypePriceComposite
	 */
	public function getPriceComposite()
	{
		return $this->PriceComposite;
	}
	/**
	 * Returns the current element
	 * @see XiBondsWsdlClass::current()
	 * @return XiBondsTypePriceComposite
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsWsdlClass::item()
	 * @param int
	 * @return XiBondsTypePriceComposite
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::first()
	 * @return XiBondsTypePriceComposite
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::last()
	 * @return XiBondsTypePriceComposite
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsTypePriceComposite
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'PriceComposite'
	 */
	public function getAttributeName()
	{
		return 'PriceComposite';
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