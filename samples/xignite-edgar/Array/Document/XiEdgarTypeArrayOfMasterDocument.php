<?php
/**
 * Class file for XiEdgarTypeArrayOfMasterDocument
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfMasterDocument
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfMasterDocument extends XiEdgarWsdlClass
{
	/**
	 * The MasterDocument
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeMasterDocument
	 */
	public $MasterDocument;
	/**
	 * Constructor
	 * @param XiEdgarTypeMasterDocument MasterDocument
	 * @return XiEdgarTypeArrayOfMasterDocument
	 */
	public function __construct($_MasterDocument = null)
	{
		parent::__construct(array('MasterDocument'=>$_MasterDocument));
	}
	/**
	 * Set MasterDocument
	 * @param MasterDocument MasterDocument
	 * @return MasterDocument
	 */
	public function setMasterDocument($_MasterDocument)
	{
		return ($this->MasterDocument = $_MasterDocument);
	}
	/**
	 * Get MasterDocument
	 * @return XiEdgarTypeMasterDocument
	 */
	public function getMasterDocument()
	{
		return $this->MasterDocument;
	}
	/**
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeMasterDocument
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeMasterDocument
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeMasterDocument
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeMasterDocument
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeMasterDocument
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MasterDocument'
	 */
	public function getAttributeName()
	{
		return 'MasterDocument';
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