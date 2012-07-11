<?php
/**
 * Class file for XiInsiderTypeArrayOfInsiderOwnership
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfInsiderOwnership
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfInsiderOwnership extends XiInsiderWsdlClass
{
	/**
	 * The InsiderOwnership
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeInsiderOwnership
	 */
	public $InsiderOwnership;
	/**
	 * Constructor
	 * @param XiInsiderTypeInsiderOwnership InsiderOwnership
	 * @return XiInsiderTypeArrayOfInsiderOwnership
	 */
	public function __construct($_InsiderOwnership = null)
	{
		parent::__construct(array('InsiderOwnership'=>$_InsiderOwnership));
	}
	/**
	 * Set InsiderOwnership
	 * @param InsiderOwnership InsiderOwnership
	 * @return InsiderOwnership
	 */
	public function setInsiderOwnership($_InsiderOwnership)
	{
		return ($this->InsiderOwnership = $_InsiderOwnership);
	}
	/**
	 * Get InsiderOwnership
	 * @return XiInsiderTypeInsiderOwnership
	 */
	public function getInsiderOwnership()
	{
		return $this->InsiderOwnership;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeInsiderOwnership
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeInsiderOwnership
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeInsiderOwnership
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeInsiderOwnership
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeInsiderOwnership
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'InsiderOwnership'
	 */
	public function getAttributeName()
	{
		return 'InsiderOwnership';
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