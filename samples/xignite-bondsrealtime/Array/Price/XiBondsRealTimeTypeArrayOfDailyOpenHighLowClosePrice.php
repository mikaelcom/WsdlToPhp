<?php
/**
 * Class file for XiBondsRealTimeTypeArrayOfDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeArrayOfDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeArrayOfDailyOpenHighLowClosePrice extends XiBondsRealTimeWsdlClass
{
	/**
	 * The DailyOpenHighLowClosePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsRealTimeTypeDailyOpenHighLowClosePrice
	 */
	public $DailyOpenHighLowClosePrice;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeDailyOpenHighLowClosePrice DailyOpenHighLowClosePrice
	 * @return XiBondsRealTimeTypeArrayOfDailyOpenHighLowClosePrice
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
	 * @return XiBondsRealTimeTypeDailyOpenHighLowClosePrice
	 */
	public function getDailyOpenHighLowClosePrice()
	{
		return $this->DailyOpenHighLowClosePrice;
	}
	/**
	 * Returns the current element
	 * @see XiBondsRealTimeWsdlClass::current()
	 * @return XiBondsRealTimeTypeDailyOpenHighLowClosePrice
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBondsRealTimeTypeDailyOpenHighLowClosePrice
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::first()
	 * @return XiBondsRealTimeTypeDailyOpenHighLowClosePrice
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::last()
	 * @return XiBondsRealTimeTypeDailyOpenHighLowClosePrice
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsRealTimeTypeDailyOpenHighLowClosePrice
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