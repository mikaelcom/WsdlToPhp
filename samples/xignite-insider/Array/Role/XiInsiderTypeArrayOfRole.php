<?php
/**
 * Class file for XiInsiderTypeArrayOfRole
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfRole
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfRole extends XiInsiderWsdlClass
{
	/**
	 * The Role
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeRole
	 */
	public $Role;
	/**
	 * Constructor
	 * @param XiInsiderTypeRole Role
	 * @return XiInsiderTypeArrayOfRole
	 */
	public function __construct($_Role = null)
	{
		parent::__construct(array('Role'=>$_Role));
	}
	/**
	 * Set Role
	 * @param Role Role
	 * @return Role
	 */
	public function setRole($_Role)
	{
		return ($this->Role = $_Role);
	}
	/**
	 * Get Role
	 * @return XiInsiderTypeRole
	 */
	public function getRole()
	{
		return $this->Role;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeRole
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeRole
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeRole
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeRole
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeRole
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Role'
	 */
	public function getAttributeName()
	{
		return 'Role';
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