<?php
/**
 * Class file for XiGlobalmasterTypeArrayOfIdentifierResult
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeArrayOfIdentifierResult
 * @date 08/07/2012
 */
class XiGlobalmasterTypeArrayOfIdentifierResult extends XiGlobalmasterWsdlClass
{
	/**
	 * The IdentifierResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalmasterTypeIdentifierResult
	 */
	public $IdentifierResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeIdentifierResult IdentifierResult
	 * @return XiGlobalmasterTypeArrayOfIdentifierResult
	 */
	public function __construct($_IdentifierResult = null)
	{
		parent::__construct(array('IdentifierResult'=>$_IdentifierResult));
	}
	/**
	 * Set IdentifierResult
	 * @param IdentifierResult IdentifierResult
	 * @return IdentifierResult
	 */
	public function setIdentifierResult($_IdentifierResult)
	{
		return ($this->IdentifierResult = $_IdentifierResult);
	}
	/**
	 * Get IdentifierResult
	 * @return XiGlobalmasterTypeIdentifierResult
	 */
	public function getIdentifierResult()
	{
		return $this->IdentifierResult;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalmasterWsdlClass::current()
	 * @return XiGlobalmasterTypeIdentifierResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalmasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalmasterTypeIdentifierResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::first()
	 * @return XiGlobalmasterTypeIdentifierResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::last()
	 * @return XiGlobalmasterTypeIdentifierResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalmasterTypeIdentifierResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'IdentifierResult'
	 */
	public function getAttributeName()
	{
		return 'IdentifierResult';
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