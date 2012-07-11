<?php
/**
 * Class file for XiBondsRealTimeTypeArrayOfPriceComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeArrayOfPriceComposite
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeArrayOfPriceComposite extends XiBondsRealTimeWsdlClass
{
	/**
	 * The PriceComposite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsRealTimeTypePriceComposite
	 */
	public $PriceComposite;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypePriceComposite PriceComposite
	 * @return XiBondsRealTimeTypeArrayOfPriceComposite
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
	 * @return XiBondsRealTimeTypePriceComposite
	 */
	public function getPriceComposite()
	{
		return $this->PriceComposite;
	}
	/**
	 * Returns the current element
	 * @see XiBondsRealTimeWsdlClass::current()
	 * @return XiBondsRealTimeTypePriceComposite
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBondsRealTimeTypePriceComposite
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::first()
	 * @return XiBondsRealTimeTypePriceComposite
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::last()
	 * @return XiBondsRealTimeTypePriceComposite
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsRealTimeTypePriceComposite
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