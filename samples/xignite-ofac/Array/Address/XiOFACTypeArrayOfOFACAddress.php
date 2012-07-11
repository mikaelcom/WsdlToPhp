<?php
/**
 * Class file for XiOFACTypeArrayOfOFACAddress
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeArrayOfOFACAddress
 * @date 08/07/2012
 */
class XiOFACTypeArrayOfOFACAddress extends XiOFACWsdlClass
{
	/**
	 * The OFACAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiOFACTypeOFACAddress
	 */
	public $OFACAddress;
	/**
	 * Constructor
	 * @param XiOFACTypeOFACAddress OFACAddress
	 * @return XiOFACTypeArrayOfOFACAddress
	 */
	public function __construct($_OFACAddress = null)
	{
		parent::__construct(array('OFACAddress'=>$_OFACAddress));
	}
	/**
	 * Set OFACAddress
	 * @param OFACAddress OFACAddress
	 * @return OFACAddress
	 */
	public function setOFACAddress($_OFACAddress)
	{
		return ($this->OFACAddress = $_OFACAddress);
	}
	/**
	 * Get OFACAddress
	 * @return XiOFACTypeOFACAddress
	 */
	public function getOFACAddress()
	{
		return $this->OFACAddress;
	}
	/**
	 * Returns the current element
	 * @see XiOFACWsdlClass::current()
	 * @return XiOFACTypeOFACAddress
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiOFACWsdlClass::item()
	 * @param int
	 * @return XiOFACTypeOFACAddress
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::first()
	 * @return XiOFACTypeOFACAddress
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::last()
	 * @return XiOFACTypeOFACAddress
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::offsetGet()
	 * @param int
	 * @return XiOFACTypeOFACAddress
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OFACAddress'
	 */
	public function getAttributeName()
	{
		return 'OFACAddress';
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