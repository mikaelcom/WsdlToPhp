<?php
/**
 * Class file for CdyneIntAddressTypeArrayOfKeyValue
 * @date 03/07/2012
 */
/**
 * Class CdyneIntAddressTypeArrayOfKeyValue
 * @date 03/07/2012
 */
class CdyneIntAddressTypeArrayOfKeyValue extends CdyneIntAddressWsdlClass
{
	/**
	 * The KeyValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var CdyneIntAddressTypeKeyValue
	 */
	public $KeyValue;
	/**
	 * Constructor
	 * @param CdyneIntAddressTypeKeyValue KeyValue
	 * @return CdyneIntAddressTypeArrayOfKeyValue
	 */
	public function __construct($_KeyValue = null)
	{
		parent::__construct(array('KeyValue'=>$_KeyValue));
	}
	/**
	 * Set KeyValue
	 * @param KeyValue KeyValue
	 * @return KeyValue
	 */
	public function setKeyValue($_KeyValue)
	{
		return ($this->KeyValue = $_KeyValue);
	}
	/**
	 * Get KeyValue
	 * @return CdyneIntAddressTypeKeyValue
	 */
	public function getKeyValue()
	{
		return $this->KeyValue;
	}
	/**
	 * Returns the current element
	 * @see CdyneIntAddressWsdlClass::current()
	 * @return CdyneIntAddressTypeKeyValue
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see CdyneIntAddressWsdlClass::item()
	 * @param int
	 * @return CdyneIntAddressTypeKeyValue
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see CdyneIntAddressWsdlClass::first()
	 * @return CdyneIntAddressTypeKeyValue
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see CdyneIntAddressWsdlClass::last()
	 * @return CdyneIntAddressTypeKeyValue
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see CdyneIntAddressWsdlClass::offsetGet()
	 * @param int
	 * @return CdyneIntAddressTypeKeyValue
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'KeyValue'
	 */
	public function getAttributeName()
	{
		return 'KeyValue';
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