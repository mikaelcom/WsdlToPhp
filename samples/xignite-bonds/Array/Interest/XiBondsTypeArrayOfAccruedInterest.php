<?php
/**
 * Class file for XiBondsTypeArrayOfAccruedInterest
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeArrayOfAccruedInterest
 * @date 08/07/2012
 */
class XiBondsTypeArrayOfAccruedInterest extends XiBondsWsdlClass
{
	/**
	 * The AccruedInterest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsTypeAccruedInterest
	 */
	public $AccruedInterest;
	/**
	 * Constructor
	 * @param XiBondsTypeAccruedInterest AccruedInterest
	 * @return XiBondsTypeArrayOfAccruedInterest
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
	 * @return XiBondsTypeAccruedInterest
	 */
	public function getAccruedInterest()
	{
		return $this->AccruedInterest;
	}
	/**
	 * Returns the current element
	 * @see XiBondsWsdlClass::current()
	 * @return XiBondsTypeAccruedInterest
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsWsdlClass::item()
	 * @param int
	 * @return XiBondsTypeAccruedInterest
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::first()
	 * @return XiBondsTypeAccruedInterest
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::last()
	 * @return XiBondsTypeAccruedInterest
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsTypeAccruedInterest
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