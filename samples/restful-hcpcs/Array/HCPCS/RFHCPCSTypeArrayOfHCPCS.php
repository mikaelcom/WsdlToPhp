<?php
/**
 * Class file for RFHCPCSTypeArrayOfHCPCS
 * @date 15/08/2012
 */
/**
 * Class RFHCPCSTypeArrayOfHCPCS
 * @date 15/08/2012
 */
class RFHCPCSTypeArrayOfHCPCS extends RFHCPCSWsdlClass
{
	/**
	 * The HCPCS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var RFHCPCSTypeHCPCS
	 */
	public $HCPCS;
	/**
	 * Constructor
	 * @param RFHCPCSTypeHCPCS HCPCS
	 * @return RFHCPCSTypeArrayOfHCPCS
	 */
	public function __construct($_HCPCS = null)
	{
		parent::__construct(array('HCPCS'=>$_HCPCS));
	}
	/**
	 * Set HCPCS
	 * @param HCPCS HCPCS
	 * @return HCPCS
	 */
	public function setHCPCS($_HCPCS)
	{
		return ($this->HCPCS = $_HCPCS);
	}
	/**
	 * Get HCPCS
	 * @return RFHCPCSTypeHCPCS
	 */
	public function getHCPCS()
	{
		return $this->HCPCS;
	}
	/**
	 * Returns the current element
	 * @see RFHCPCSWsdlClass::current()
	 * @return RFHCPCSTypeHCPCS
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see RFHCPCSWsdlClass::item()
	 * @param int
	 * @return RFHCPCSTypeHCPCS
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see RFHCPCSWsdlClass::first()
	 * @return RFHCPCSTypeHCPCS
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see RFHCPCSWsdlClass::last()
	 * @return RFHCPCSTypeHCPCS
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see RFHCPCSWsdlClass::offsetGet()
	 * @param int
	 * @return RFHCPCSTypeHCPCS
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HCPCS'
	 */
	public function getAttributeName()
	{
		return 'HCPCS';
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