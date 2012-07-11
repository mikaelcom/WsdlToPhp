<?php
/**
 * Class file for XiQuotesTypeArrayOfIndex
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfIndex
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfIndex extends XiQuotesWsdlClass
{
	/**
	 * The Index
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeIndex
	 */
	public $Index;
	/**
	 * Constructor
	 * @param XiQuotesTypeIndex Index
	 * @return XiQuotesTypeArrayOfIndex
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
	 * @return XiQuotesTypeIndex
	 */
	public function getIndex()
	{
		return $this->Index;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeIndex
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeIndex
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeIndex
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeIndex
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeIndex
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