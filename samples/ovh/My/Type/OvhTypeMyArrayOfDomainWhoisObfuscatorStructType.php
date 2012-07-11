<?php
/**
 * Class file for OvhTypeMyArrayOfDomainWhoisObfuscatorStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDomainWhoisObfuscatorStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDomainWhoisObfuscatorStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDomainWhoisObfuscatorStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDomainWhoisObfuscatorStruct item
	 * @return OvhTypeMyArrayOfDomainWhoisObfuscatorStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param domainWhoisObfuscatorStruct item
	 * @return domainWhoisObfuscatorStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypedomainWhoisObfuscatorStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDomainWhoisObfuscatorStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDomainWhoisObfuscatorStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDomainWhoisObfuscatorStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDomainWhoisObfuscatorStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDomainWhoisObfuscatorStruct
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'item'
	 */
	public function getAttributeName()
	{
		return 'item';
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