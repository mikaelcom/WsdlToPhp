<?php
/**
 * Class file for XiFundDataTypeArrayOfReturn
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfReturn
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfReturn extends XiFundDataWsdlClass
{
	/**
	 * The Return
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeReturn
	 */
	public $Return;
	/**
	 * Constructor
	 * @param XiFundDataTypeReturn Return
	 * @return XiFundDataTypeArrayOfReturn
	 */
	public function __construct($_Return = null)
	{
		parent::__construct(array('Return'=>$_Return));
	}
	/**
	 * Set Return
	 * @param Return Return
	 * @return Return
	 */
	public function setReturn($_Return)
	{
		return ($this->Return = $_Return);
	}
	/**
	 * Get Return
	 * @return XiFundDataTypeReturn
	 */
	public function getReturn()
	{
		return $this->Return;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeReturn
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeReturn
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeReturn
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeReturn
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeReturn
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Return'
	 */
	public function getAttributeName()
	{
		return 'Return';
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