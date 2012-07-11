<?php
/**
 * Class file for XiBondsRealTimeTypeArrayOfYearlyHighLowPrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeArrayOfYearlyHighLowPrice
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeArrayOfYearlyHighLowPrice extends XiBondsRealTimeWsdlClass
{
	/**
	 * The YearlyHighLowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsRealTimeTypeYearlyHighLowPrice
	 */
	public $YearlyHighLowPrice;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeYearlyHighLowPrice YearlyHighLowPrice
	 * @return XiBondsRealTimeTypeArrayOfYearlyHighLowPrice
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
	 * @return XiBondsRealTimeTypeYearlyHighLowPrice
	 */
	public function getYearlyHighLowPrice()
	{
		return $this->YearlyHighLowPrice;
	}
	/**
	 * Returns the current element
	 * @see XiBondsRealTimeWsdlClass::current()
	 * @return XiBondsRealTimeTypeYearlyHighLowPrice
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBondsRealTimeTypeYearlyHighLowPrice
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::first()
	 * @return XiBondsRealTimeTypeYearlyHighLowPrice
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::last()
	 * @return XiBondsRealTimeTypeYearlyHighLowPrice
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsRealTimeTypeYearlyHighLowPrice
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