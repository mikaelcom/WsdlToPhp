<?php
/**
 * Class file for XiFundamentalsTypeArrayOfSector
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeArrayOfSector
 * @date 08/07/2012
 */
class XiFundamentalsTypeArrayOfSector extends XiFundamentalsWsdlClass
{
	/**
	 * The Sector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundamentalsTypeSector
	 */
	public $Sector;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeSector Sector
	 * @return XiFundamentalsTypeArrayOfSector
	 */
	public function __construct($_Sector = null)
	{
		parent::__construct(array('Sector'=>$_Sector));
	}
	/**
	 * Set Sector
	 * @param Sector Sector
	 * @return Sector
	 */
	public function setSector($_Sector)
	{
		return ($this->Sector = $_Sector);
	}
	/**
	 * Get Sector
	 * @return XiFundamentalsTypeSector
	 */
	public function getSector()
	{
		return $this->Sector;
	}
	/**
	 * Returns the current element
	 * @see XiFundamentalsWsdlClass::current()
	 * @return XiFundamentalsTypeSector
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiFundamentalsTypeSector
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::first()
	 * @return XiFundamentalsTypeSector
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::last()
	 * @return XiFundamentalsTypeSector
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundamentalsTypeSector
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Sector'
	 */
	public function getAttributeName()
	{
		return 'Sector';
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