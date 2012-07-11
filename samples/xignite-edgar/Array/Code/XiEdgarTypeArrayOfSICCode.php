<?php
/**
 * Class file for XiEdgarTypeArrayOfSICCode
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfSICCode
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfSICCode extends XiEdgarWsdlClass
{
	/**
	 * The SICCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeSICCode
	 */
	public $SICCode;
	/**
	 * Constructor
	 * @param XiEdgarTypeSICCode SICCode
	 * @return XiEdgarTypeArrayOfSICCode
	 */
	public function __construct($_SICCode = null)
	{
		parent::__construct(array('SICCode'=>$_SICCode));
	}
	/**
	 * Set SICCode
	 * @param SICCode SICCode
	 * @return SICCode
	 */
	public function setSICCode($_SICCode)
	{
		return ($this->SICCode = $_SICCode);
	}
	/**
	 * Get SICCode
	 * @return XiEdgarTypeSICCode
	 */
	public function getSICCode()
	{
		return $this->SICCode;
	}
	/**
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeSICCode
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeSICCode
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeSICCode
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeSICCode
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeSICCode
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SICCode'
	 */
	public function getAttributeName()
	{
		return 'SICCode';
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