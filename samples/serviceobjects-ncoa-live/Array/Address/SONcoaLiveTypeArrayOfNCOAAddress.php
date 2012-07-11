<?php
/**
 * Class file for SONcoaLiveTypeArrayOfNCOAAddress
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeArrayOfNCOAAddress
 * @date 06/07/2012
 */
class SONcoaLiveTypeArrayOfNCOAAddress extends SONcoaLiveWsdlClass
{
	/**
	 * The NCOAAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SONcoaLiveTypeNCOAAddress
	 */
	public $NCOAAddress;
	/**
	 * Constructor
	 * @param SONcoaLiveTypeNCOAAddress NCOAAddress
	 * @return SONcoaLiveTypeArrayOfNCOAAddress
	 */
	public function __construct($_NCOAAddress = null)
	{
		parent::__construct(array('NCOAAddress'=>$_NCOAAddress));
	}
	/**
	 * Set NCOAAddress
	 * @param NCOAAddress NCOAAddress
	 * @return NCOAAddress
	 */
	public function setNCOAAddress($_NCOAAddress)
	{
		return ($this->NCOAAddress = $_NCOAAddress);
	}
	/**
	 * Get NCOAAddress
	 * @return SONcoaLiveTypeNCOAAddress
	 */
	public function getNCOAAddress()
	{
		return $this->NCOAAddress;
	}
	/**
	 * Returns the current element
	 * @see SONcoaLiveWsdlClass::current()
	 * @return SONcoaLiveTypeNCOAAddress
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SONcoaLiveWsdlClass::item()
	 * @param int
	 * @return SONcoaLiveTypeNCOAAddress
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SONcoaLiveWsdlClass::first()
	 * @return SONcoaLiveTypeNCOAAddress
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SONcoaLiveWsdlClass::last()
	 * @return SONcoaLiveTypeNCOAAddress
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SONcoaLiveWsdlClass::offsetGet()
	 * @param int
	 * @return SONcoaLiveTypeNCOAAddress
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'NCOAAddress'
	 */
	public function getAttributeName()
	{
		return 'NCOAAddress';
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