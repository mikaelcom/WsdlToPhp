<?php
/**
 * Class file for RFUNSPSCTypeArrayOfUNSPSC
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeArrayOfUNSPSC
 * @date 15/08/2012
 */
class RFUNSPSCTypeArrayOfUNSPSC extends RFUNSPSCWsdlClass
{
	/**
	 * The UNSPSC
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var RFUNSPSCTypeUNSPSC
	 */
	public $UNSPSC;
	/**
	 * Constructor
	 * @param RFUNSPSCTypeUNSPSC UNSPSC
	 * @return RFUNSPSCTypeArrayOfUNSPSC
	 */
	public function __construct($_UNSPSC = null)
	{
		parent::__construct(array('UNSPSC'=>$_UNSPSC));
	}
	/**
	 * Set UNSPSC
	 * @param UNSPSC UNSPSC
	 * @return UNSPSC
	 */
	public function setUNSPSC($_UNSPSC)
	{
		return ($this->UNSPSC = $_UNSPSC);
	}
	/**
	 * Get UNSPSC
	 * @return RFUNSPSCTypeUNSPSC
	 */
	public function getUNSPSC()
	{
		return $this->UNSPSC;
	}
	/**
	 * Returns the current element
	 * @see RFUNSPSCWsdlClass::current()
	 * @return RFUNSPSCTypeUNSPSC
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see RFUNSPSCWsdlClass::item()
	 * @param int
	 * @return RFUNSPSCTypeUNSPSC
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see RFUNSPSCWsdlClass::first()
	 * @return RFUNSPSCTypeUNSPSC
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see RFUNSPSCWsdlClass::last()
	 * @return RFUNSPSCTypeUNSPSC
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see RFUNSPSCWsdlClass::offsetGet()
	 * @param int
	 * @return RFUNSPSCTypeUNSPSC
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'UNSPSC'
	 */
	public function getAttributeName()
	{
		return 'UNSPSC';
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