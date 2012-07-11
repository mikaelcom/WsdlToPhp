<?php
/**
 * Class file for XiBondsTypeArrayOfYearlyHighLowPrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeArrayOfYearlyHighLowPrice
 * @date 08/07/2012
 */
class XiBondsTypeArrayOfYearlyHighLowPrice extends XiBondsWsdlClass
{
	/**
	 * The YearlyHighLowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsTypeYearlyHighLowPrice
	 */
	public $YearlyHighLowPrice;
	/**
	 * Constructor
	 * @param XiBondsTypeYearlyHighLowPrice YearlyHighLowPrice
	 * @return XiBondsTypeArrayOfYearlyHighLowPrice
	 */
	public function __construct($_YearlyHighLowPrice = null)
	{
		parent::__construct(array('YearlyHighLowPrice'=>$_YearlyHighLowPrice));
	}
	/**
	 * Set YearlyHighLowPrice
	 * @param YearlyHighLowPrice YearlyHighLowPrice
	 * @return YearlyHighLowPrice
	 */
	public function setYearlyHighLowPrice($_YearlyHighLowPrice)
	{
		return ($this->YearlyHighLowPrice = $_YearlyHighLowPrice);
	}
	/**
	 * Get YearlyHighLowPrice
	 * @return XiBondsTypeYearlyHighLowPrice
	 */
	public function getYearlyHighLowPrice()
	{
		return $this->YearlyHighLowPrice;
	}
	/**
	 * Returns the current element
	 * @see XiBondsWsdlClass::current()
	 * @return XiBondsTypeYearlyHighLowPrice
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsWsdlClass::item()
	 * @param int
	 * @return XiBondsTypeYearlyHighLowPrice
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::first()
	 * @return XiBondsTypeYearlyHighLowPrice
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::last()
	 * @return XiBondsTypeYearlyHighLowPrice
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsTypeYearlyHighLowPrice
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'YearlyHighLowPrice'
	 */
	public function getAttributeName()
	{
		return 'YearlyHighLowPrice';
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