<?php
/**
 * Class file for XiBondsTypeArrayOfDurationAndConvexity
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeArrayOfDurationAndConvexity
 * @date 08/07/2012
 */
class XiBondsTypeArrayOfDurationAndConvexity extends XiBondsWsdlClass
{
	/**
	 * The DurationAndConvexity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsTypeDurationAndConvexity
	 */
	public $DurationAndConvexity;
	/**
	 * Constructor
	 * @param XiBondsTypeDurationAndConvexity DurationAndConvexity
	 * @return XiBondsTypeArrayOfDurationAndConvexity
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
	 * @return XiBondsTypeDurationAndConvexity
	 */
	public function getDurationAndConvexity()
	{
		return $this->DurationAndConvexity;
	}
	/**
	 * Returns the current element
	 * @see XiBondsWsdlClass::current()
	 * @return XiBondsTypeDurationAndConvexity
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsWsdlClass::item()
	 * @param int
	 * @return XiBondsTypeDurationAndConvexity
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::first()
	 * @return XiBondsTypeDurationAndConvexity
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::last()
	 * @return XiBondsTypeDurationAndConvexity
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsTypeDurationAndConvexity
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