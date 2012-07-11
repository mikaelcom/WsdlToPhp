<?php
/**
 * Class file for XiHoldingsTypeArrayOfHoldingChange
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeArrayOfHoldingChange
 * @date 08/07/2012
 */
class XiHoldingsTypeArrayOfHoldingChange extends XiHoldingsWsdlClass
{
	/**
	 * The HoldingChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHoldingsTypeHoldingChange
	 */
	public $HoldingChange;
	/**
	 * Constructor
	 * @param XiHoldingsTypeHoldingChange HoldingChange
	 * @return XiHoldingsTypeArrayOfHoldingChange
	 */
	public function __construct($_HoldingChange = null)
	{
		parent::__construct(array('HoldingChange'=>$_HoldingChange));
	}
	/**
	 * Set HoldingChange
	 * @param HoldingChange HoldingChange
	 * @return HoldingChange
	 */
	public function setHoldingChange($_HoldingChange)
	{
		return ($this->HoldingChange = $_HoldingChange);
	}
	/**
	 * Get HoldingChange
	 * @return XiHoldingsTypeHoldingChange
	 */
	public function getHoldingChange()
	{
		return $this->HoldingChange;
	}
	/**
	 * Returns the current element
	 * @see XiHoldingsWsdlClass::current()
	 * @return XiHoldingsTypeHoldingChange
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHoldingsWsdlClass::item()
	 * @param int
	 * @return XiHoldingsTypeHoldingChange
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::first()
	 * @return XiHoldingsTypeHoldingChange
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::last()
	 * @return XiHoldingsTypeHoldingChange
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiHoldingsTypeHoldingChange
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HoldingChange'
	 */
	public function getAttributeName()
	{
		return 'HoldingChange';
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