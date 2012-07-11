<?php
/**
 * Class file for XiEdgarTypeArrayOfDocument
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfDocument
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfDocument extends XiEdgarWsdlClass
{
	/**
	 * The Document
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeDocument
	 */
	public $Document;
	/**
	 * Constructor
	 * @param XiEdgarTypeDocument Document
	 * @return XiEdgarTypeArrayOfDocument
	 */
	public function __construct($_Document = null)
	{
		parent::__construct(array('Document'=>$_Document));
	}
	/**
	 * Set Document
	 * @param Document Document
	 * @return Document
	 */
	public function setDocument($_Document)
	{
		return ($this->Document = $_Document);
	}
	/**
	 * Get Document
	 * @return XiEdgarTypeDocument
	 */
	public function getDocument()
	{
		return $this->Document;
	}
	/**
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeDocument
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeDocument
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeDocument
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeDocument
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeDocument
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Document'
	 */
	public function getAttributeName()
	{
		return 'Document';
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