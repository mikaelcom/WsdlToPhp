<?php
/**
 * Class file for XiIndicesTypeArrayOfIndex
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeArrayOfIndex
 * @date 08/07/2012
 */
class XiIndicesTypeArrayOfIndex extends XiIndicesWsdlClass
{
	/**
	 * The Index
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndicesTypeIndex
	 */
	public $Index;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndex Index
	 * @return XiIndicesTypeArrayOfIndex
	 */
	public function __construct($_Index = null)
	{
		parent::__construct(array('Index'=>$_Index));
	}
	/**
	 * Set Index
	 * @param Index Index
	 * @return Index
	 */
	public function setIndex($_Index)
	{
		return ($this->Index = $_Index);
	}
	/**
	 * Get Index
	 * @return XiIndicesTypeIndex
	 */
	public function getIndex()
	{
		return $this->Index;
	}
	/**
	 * Returns the current element
	 * @see XiIndicesWsdlClass::current()
	 * @return XiIndicesTypeIndex
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndicesWsdlClass::item()
	 * @param int
	 * @return XiIndicesTypeIndex
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::first()
	 * @return XiIndicesTypeIndex
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::last()
	 * @return XiIndicesTypeIndex
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndicesTypeIndex
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Index'
	 */
	public function getAttributeName()
	{
		return 'Index';
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