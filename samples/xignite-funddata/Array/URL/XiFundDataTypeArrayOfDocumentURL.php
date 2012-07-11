<?php
/**
 * Class file for XiFundDataTypeArrayOfDocumentURL
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfDocumentURL
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfDocumentURL extends XiFundDataWsdlClass
{
	/**
	 * The DocumentURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeDocumentURL
	 */
	public $DocumentURL;
	/**
	 * Constructor
	 * @param XiFundDataTypeDocumentURL DocumentURL
	 * @return XiFundDataTypeArrayOfDocumentURL
	 */
	public function __construct($_DocumentURL = null)
	{
		parent::__construct(array('DocumentURL'=>$_DocumentURL));
	}
	/**
	 * Set DocumentURL
	 * @param DocumentURL DocumentURL
	 * @return DocumentURL
	 */
	public function setDocumentURL($_DocumentURL)
	{
		return ($this->DocumentURL = $_DocumentURL);
	}
	/**
	 * Get DocumentURL
	 * @return XiFundDataTypeDocumentURL
	 */
	public function getDocumentURL()
	{
		return $this->DocumentURL;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeDocumentURL
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeDocumentURL
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeDocumentURL
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeDocumentURL
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeDocumentURL
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'DocumentURL'
	 */
	public function getAttributeName()
	{
		return 'DocumentURL';
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