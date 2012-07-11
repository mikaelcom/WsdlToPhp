<?php
/**
 * Class file for XiBondsRealTimeTypeArrayOfDurationAndConvexity
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeArrayOfDurationAndConvexity
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeArrayOfDurationAndConvexity extends XiBondsRealTimeWsdlClass
{
	/**
	 * The DurationAndConvexity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsRealTimeTypeDurationAndConvexity
	 */
	public $DurationAndConvexity;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeDurationAndConvexity DurationAndConvexity
	 * @return XiBondsRealTimeTypeArrayOfDurationAndConvexity
	 */
	public function __construct($_DurationAndConvexity = null)
	{
		parent::__construct(array('DurationAndConvexity'=>$_DurationAndConvexity));
	}
	/**
	 * Set DurationAndConvexity
	 * @param DurationAndConvexity DurationAndConvexity
	 * @return DurationAndConvexity
	 */
	public function setDurationAndConvexity($_DurationAndConvexity)
	{
		return ($this->DurationAndConvexity = $_DurationAndConvexity);
	}
	/**
	 * Get DurationAndConvexity
	 * @return XiBondsRealTimeTypeDurationAndConvexity
	 */
	public function getDurationAndConvexity()
	{
		return $this->DurationAndConvexity;
	}
	/**
	 * Returns the current element
	 * @see XiBondsRealTimeWsdlClass::current()
	 * @return XiBondsRealTimeTypeDurationAndConvexity
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBondsRealTimeTypeDurationAndConvexity
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::first()
	 * @return XiBondsRealTimeTypeDurationAndConvexity
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::last()
	 * @return XiBondsRealTimeTypeDurationAndConvexity
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsRealTimeTypeDurationAndConvexity
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'DurationAndConvexity'
	 */
	public function getAttributeName()
	{
		return 'DurationAndConvexity';
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