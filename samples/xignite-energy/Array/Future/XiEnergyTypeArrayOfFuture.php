<?php
/**
 * Class file for XiEnergyTypeArrayOfFuture
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeArrayOfFuture
 * @date 08/07/2012
 */
class XiEnergyTypeArrayOfFuture extends XiEnergyWsdlClass
{
	/**
	 * The Future
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEnergyTypeFuture
	 */
	public $Future;
	/**
	 * Constructor
	 * @param XiEnergyTypeFuture Future
	 * @return XiEnergyTypeArrayOfFuture
	 */
	public function __construct($_Future = null)
	{
		parent::__construct(array('Future'=>$_Future));
	}
	/**
	 * Set Future
	 * @param Future Future
	 * @return Future
	 */
	public function setFuture($_Future)
	{
		return ($this->Future = $_Future);
	}
	/**
	 * Get Future
	 * @return XiEnergyTypeFuture
	 */
	public function getFuture()
	{
		return $this->Future;
	}
	/**
	 * Returns the current element
	 * @see XiEnergyWsdlClass::current()
	 * @return XiEnergyTypeFuture
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEnergyWsdlClass::item()
	 * @param int
	 * @return XiEnergyTypeFuture
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::first()
	 * @return XiEnergyTypeFuture
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::last()
	 * @return XiEnergyTypeFuture
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::offsetGet()
	 * @param int
	 * @return XiEnergyTypeFuture
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Future'
	 */
	public function getAttributeName()
	{
		return 'Future';
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