<?php
/**
 * Class file for XiBondsTypeArrayOfDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeArrayOfDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
class XiBondsTypeArrayOfDailyOpenHighLowClosePrice extends XiBondsWsdlClass
{
	/**
	 * The DailyOpenHighLowClosePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsTypeDailyOpenHighLowClosePrice
	 */
	public $DailyOpenHighLowClosePrice;
	/**
	 * Constructor
	 * @param XiBondsTypeDailyOpenHighLowClosePrice DailyOpenHighLowClosePrice
	 * @return XiBondsTypeArrayOfDailyOpenHighLowClosePrice
	 */
	public function __construct($_DailyOpenHighLowClosePrice = null)
	{
		parent::__construct(array('DailyOpenHighLowClosePrice'=>$_DailyOpenHighLowClosePrice));
	}
	/**
	 * Set DailyOpenHighLowClosePrice
	 * @param DailyOpenHighLowClosePrice DailyOpenHighLowClosePrice
	 * @return DailyOpenHighLowClosePrice
	 */
	public function setDailyOpenHighLowClosePrice($_DailyOpenHighLowClosePrice)
	{
		return ($this->DailyOpenHighLowClosePrice = $_DailyOpenHighLowClosePrice);
	}
	/**
	 * Get DailyOpenHighLowClosePrice
	 * @return XiBondsTypeDailyOpenHighLowClosePrice
	 */
	public function getDailyOpenHighLowClosePrice()
	{
		return $this->DailyOpenHighLowClosePrice;
	}
	/**
	 * Returns the current element
	 * @see XiBondsWsdlClass::current()
	 * @return XiBondsTypeDailyOpenHighLowClosePrice
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsWsdlClass::item()
	 * @param int
	 * @return XiBondsTypeDailyOpenHighLowClosePrice
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::first()
	 * @return XiBondsTypeDailyOpenHighLowClosePrice
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::last()
	 * @return XiBondsTypeDailyOpenHighLowClosePrice
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsTypeDailyOpenHighLowClosePrice
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'DailyOpenHighLowClosePrice'
	 */
	public function getAttributeName()
	{
		return 'DailyOpenHighLowClosePrice';
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