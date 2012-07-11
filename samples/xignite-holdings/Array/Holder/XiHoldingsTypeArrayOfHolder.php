<?php
/**
 * Class file for XiHoldingsTypeArrayOfHolder
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeArrayOfHolder
 * @date 08/07/2012
 */
class XiHoldingsTypeArrayOfHolder extends XiHoldingsWsdlClass
{
	/**
	 * The Holder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHoldingsTypeHolder
	 */
	public $Holder;
	/**
	 * Constructor
	 * @param XiHoldingsTypeHolder Holder
	 * @return XiHoldingsTypeArrayOfHolder
	 */
	public function __construct($_Holder = null)
	{
		parent::__construct(array('Holder'=>$_Holder));
	}
	/**
	 * Set Holder
	 * @param Holder Holder
	 * @return Holder
	 */
	public function setHolder($_Holder)
	{
		return ($this->Holder = $_Holder);
	}
	/**
	 * Get Holder
	 * @return XiHoldingsTypeHolder
	 */
	public function getHolder()
	{
		return $this->Holder;
	}
	/**
	 * Returns the current element
	 * @see XiHoldingsWsdlClass::current()
	 * @return XiHoldingsTypeHolder
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHoldingsWsdlClass::item()
	 * @param int
	 * @return XiHoldingsTypeHolder
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::first()
	 * @return XiHoldingsTypeHolder
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::last()
	 * @return XiHoldingsTypeHolder
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiHoldingsTypeHolder
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Holder'
	 */
	public function getAttributeName()
	{
		return 'Holder';
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