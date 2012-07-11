<?php
/**
 * Class file for XiFundDataTypeArrayOfAdviser
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfAdviser
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfAdviser extends XiFundDataWsdlClass
{
	/**
	 * The Adviser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeAdviser
	 */
	public $Adviser;
	/**
	 * Constructor
	 * @param XiFundDataTypeAdviser Adviser
	 * @return XiFundDataTypeArrayOfAdviser
	 */
	public function __construct($_Adviser = null)
	{
		parent::__construct(array('Adviser'=>$_Adviser));
	}
	/**
	 * Set Adviser
	 * @param Adviser Adviser
	 * @return Adviser
	 */
	public function setAdviser($_Adviser)
	{
		return ($this->Adviser = $_Adviser);
	}
	/**
	 * Get Adviser
	 * @return XiFundDataTypeAdviser
	 */
	public function getAdviser()
	{
		return $this->Adviser;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeAdviser
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeAdviser
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeAdviser
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeAdviser
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeAdviser
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Adviser'
	 */
	public function getAttributeName()
	{
		return 'Adviser';
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