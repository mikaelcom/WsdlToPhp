<?php
/**
 * Class file for XiEdgarTypeArrayOfCIKLookup
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfCIKLookup
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfCIKLookup extends XiEdgarWsdlClass
{
	/**
	 * The CIKLookup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeCIKLookup
	 */
	public $CIKLookup;
	/**
	 * Constructor
	 * @param XiEdgarTypeCIKLookup CIKLookup
	 * @return XiEdgarTypeArrayOfCIKLookup
	 */
	public function __construct($_CIKLookup = null)
	{
		parent::__construct(array('CIKLookup'=>$_CIKLookup));
	}
	/**
	 * Set CIKLookup
	 * @param CIKLookup CIKLookup
	 * @return CIKLookup
	 */
	public function setCIKLookup($_CIKLookup)
	{
		return ($this->CIKLookup = $_CIKLookup);
	}
	/**
	 * Get CIKLookup
	 * @return XiEdgarTypeCIKLookup
	 */
	public function getCIKLookup()
	{
		return $this->CIKLookup;
	}
	/**
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeCIKLookup
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeCIKLookup
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeCIKLookup
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeCIKLookup
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeCIKLookup
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CIKLookup'
	 */
	public function getAttributeName()
	{
		return 'CIKLookup';
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