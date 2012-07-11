<?php
/**
 * Class file for XiBondsRealTimeTypeArrayOfAccruedInterest
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeArrayOfAccruedInterest
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeArrayOfAccruedInterest extends XiBondsRealTimeWsdlClass
{
	/**
	 * The AccruedInterest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsRealTimeTypeAccruedInterest
	 */
	public $AccruedInterest;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeAccruedInterest AccruedInterest
	 * @return XiBondsRealTimeTypeArrayOfAccruedInterest
	 */
	public function __construct($_AccruedInterest = null)
	{
		parent::__construct(array('AccruedInterest'=>$_AccruedInterest));
	}
	/**
	 * Set AccruedInterest
	 * @param AccruedInterest AccruedInterest
	 * @return AccruedInterest
	 */
	public function setAccruedInterest($_AccruedInterest)
	{
		return ($this->AccruedInterest = $_AccruedInterest);
	}
	/**
	 * Get AccruedInterest
	 * @return XiBondsRealTimeTypeAccruedInterest
	 */
	public function getAccruedInterest()
	{
		return $this->AccruedInterest;
	}
	/**
	 * Returns the current element
	 * @see XiBondsRealTimeWsdlClass::current()
	 * @return XiBondsRealTimeTypeAccruedInterest
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBondsRealTimeTypeAccruedInterest
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::first()
	 * @return XiBondsRealTimeTypeAccruedInterest
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::last()
	 * @return XiBondsRealTimeTypeAccruedInterest
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsRealTimeTypeAccruedInterest
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'AccruedInterest'
	 */
	public function getAttributeName()
	{
		return 'AccruedInterest';
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