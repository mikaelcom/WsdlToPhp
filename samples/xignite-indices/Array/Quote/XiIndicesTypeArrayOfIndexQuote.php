<?php
/**
 * Class file for XiIndicesTypeArrayOfIndexQuote
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeArrayOfIndexQuote
 * @date 08/07/2012
 */
class XiIndicesTypeArrayOfIndexQuote extends XiIndicesWsdlClass
{
	/**
	 * The IndexQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndicesTypeIndexQuote
	 */
	public $IndexQuote;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndexQuote IndexQuote
	 * @return XiIndicesTypeArrayOfIndexQuote
	 */
	public function __construct($_IndexQuote = null)
	{
		parent::__construct(array('IndexQuote'=>$_IndexQuote));
	}
	/**
	 * Set IndexQuote
	 * @param IndexQuote IndexQuote
	 * @return IndexQuote
	 */
	public function setIndexQuote($_IndexQuote)
	{
		return ($this->IndexQuote = $_IndexQuote);
	}
	/**
	 * Get IndexQuote
	 * @return XiIndicesTypeIndexQuote
	 */
	public function getIndexQuote()
	{
		return $this->IndexQuote;
	}
	/**
	 * Returns the current element
	 * @see XiIndicesWsdlClass::current()
	 * @return XiIndicesTypeIndexQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndicesWsdlClass::item()
	 * @param int
	 * @return XiIndicesTypeIndexQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::first()
	 * @return XiIndicesTypeIndexQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::last()
	 * @return XiIndicesTypeIndexQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndicesTypeIndexQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'IndexQuote'
	 */
	public function getAttributeName()
	{
		return 'IndexQuote';
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