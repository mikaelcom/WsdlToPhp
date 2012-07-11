<?php
/**
 * Class file for XiIndicesTypeArrayOfIndexDescription
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeArrayOfIndexDescription
 * @date 08/07/2012
 */
class XiIndicesTypeArrayOfIndexDescription extends XiIndicesWsdlClass
{
	/**
	 * The IndexDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndicesTypeIndexDescription
	 */
	public $IndexDescription;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndexDescription IndexDescription
	 * @return XiIndicesTypeArrayOfIndexDescription
	 */
	public function __construct($_IndexDescription = null)
	{
		parent::__construct(array('IndexDescription'=>$_IndexDescription));
	}
	/**
	 * Set IndexDescription
	 * @param IndexDescription IndexDescription
	 * @return IndexDescription
	 */
	public function setIndexDescription($_IndexDescription)
	{
		return ($this->IndexDescription = $_IndexDescription);
	}
	/**
	 * Get IndexDescription
	 * @return XiIndicesTypeIndexDescription
	 */
	public function getIndexDescription()
	{
		return $this->IndexDescription;
	}
	/**
	 * Returns the current element
	 * @see XiIndicesWsdlClass::current()
	 * @return XiIndicesTypeIndexDescription
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndicesWsdlClass::item()
	 * @param int
	 * @return XiIndicesTypeIndexDescription
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::first()
	 * @return XiIndicesTypeIndexDescription
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::last()
	 * @return XiIndicesTypeIndexDescription
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndicesTypeIndexDescription
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'IndexDescription'
	 */
	public function getAttributeName()
	{
		return 'IndexDescription';
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