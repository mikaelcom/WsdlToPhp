<?php
/**
 * Class file for XiOFACTypeArrayOfOFACAlternateName
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeArrayOfOFACAlternateName
 * @date 08/07/2012
 */
class XiOFACTypeArrayOfOFACAlternateName extends XiOFACWsdlClass
{
	/**
	 * The OFACAlternateName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiOFACTypeOFACAlternateName
	 */
	public $OFACAlternateName;
	/**
	 * Constructor
	 * @param XiOFACTypeOFACAlternateName OFACAlternateName
	 * @return XiOFACTypeArrayOfOFACAlternateName
	 */
	public function __construct($_OFACAlternateName = null)
	{
		parent::__construct(array('OFACAlternateName'=>$_OFACAlternateName));
	}
	/**
	 * Set OFACAlternateName
	 * @param OFACAlternateName OFACAlternateName
	 * @return OFACAlternateName
	 */
	public function setOFACAlternateName($_OFACAlternateName)
	{
		return ($this->OFACAlternateName = $_OFACAlternateName);
	}
	/**
	 * Get OFACAlternateName
	 * @return XiOFACTypeOFACAlternateName
	 */
	public function getOFACAlternateName()
	{
		return $this->OFACAlternateName;
	}
	/**
	 * Returns the current element
	 * @see XiOFACWsdlClass::current()
	 * @return XiOFACTypeOFACAlternateName
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiOFACWsdlClass::item()
	 * @param int
	 * @return XiOFACTypeOFACAlternateName
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::first()
	 * @return XiOFACTypeOFACAlternateName
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::last()
	 * @return XiOFACTypeOFACAlternateName
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::offsetGet()
	 * @param int
	 * @return XiOFACTypeOFACAlternateName
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OFACAlternateName'
	 */
	public function getAttributeName()
	{
		return 'OFACAlternateName';
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