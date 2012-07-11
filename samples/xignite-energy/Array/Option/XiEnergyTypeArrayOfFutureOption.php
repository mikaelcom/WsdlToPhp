<?php
/**
 * Class file for XiEnergyTypeArrayOfFutureOption
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeArrayOfFutureOption
 * @date 08/07/2012
 */
class XiEnergyTypeArrayOfFutureOption extends XiEnergyWsdlClass
{
	/**
	 * The FutureOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEnergyTypeFutureOption
	 */
	public $FutureOption;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureOption FutureOption
	 * @return XiEnergyTypeArrayOfFutureOption
	 */
	public function __construct($_FutureOption = null)
	{
		parent::__construct(array('FutureOption'=>$_FutureOption));
	}
	/**
	 * Set FutureOption
	 * @param FutureOption FutureOption
	 * @return FutureOption
	 */
	public function setFutureOption($_FutureOption)
	{
		return ($this->FutureOption = $_FutureOption);
	}
	/**
	 * Get FutureOption
	 * @return XiEnergyTypeFutureOption
	 */
	public function getFutureOption()
	{
		return $this->FutureOption;
	}
	/**
	 * Returns the current element
	 * @see XiEnergyWsdlClass::current()
	 * @return XiEnergyTypeFutureOption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEnergyWsdlClass::item()
	 * @param int
	 * @return XiEnergyTypeFutureOption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::first()
	 * @return XiEnergyTypeFutureOption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::last()
	 * @return XiEnergyTypeFutureOption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::offsetGet()
	 * @param int
	 * @return XiEnergyTypeFutureOption
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FutureOption'
	 */
	public function getAttributeName()
	{
		return 'FutureOption';
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