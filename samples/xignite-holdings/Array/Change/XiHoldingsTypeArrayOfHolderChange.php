<?php
/**
 * Class file for XiHoldingsTypeArrayOfHolderChange
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeArrayOfHolderChange
 * @date 08/07/2012
 */
class XiHoldingsTypeArrayOfHolderChange extends XiHoldingsWsdlClass
{
	/**
	 * The HolderChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHoldingsTypeHolderChange
	 */
	public $HolderChange;
	/**
	 * Constructor
	 * @param XiHoldingsTypeHolderChange HolderChange
	 * @return XiHoldingsTypeArrayOfHolderChange
	 */
	public function __construct($_HolderChange = null)
	{
		parent::__construct(array('HolderChange'=>$_HolderChange));
	}
	/**
	 * Set HolderChange
	 * @param HolderChange HolderChange
	 * @return HolderChange
	 */
	public function setHolderChange($_HolderChange)
	{
		return ($this->HolderChange = $_HolderChange);
	}
	/**
	 * Get HolderChange
	 * @return XiHoldingsTypeHolderChange
	 */
	public function getHolderChange()
	{
		return $this->HolderChange;
	}
	/**
	 * Returns the current element
	 * @see XiHoldingsWsdlClass::current()
	 * @return XiHoldingsTypeHolderChange
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHoldingsWsdlClass::item()
	 * @param int
	 * @return XiHoldingsTypeHolderChange
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::first()
	 * @return XiHoldingsTypeHolderChange
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::last()
	 * @return XiHoldingsTypeHolderChange
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiHoldingsTypeHolderChange
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HolderChange'
	 */
	public function getAttributeName()
	{
		return 'HolderChange';
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