<?php
/**
 * Class file for XiGlobalmasterTypeArrayOfLegacyExchangeMapping
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeArrayOfLegacyExchangeMapping
 * @date 08/07/2012
 */
class XiGlobalmasterTypeArrayOfLegacyExchangeMapping extends XiGlobalmasterWsdlClass
{
	/**
	 * The LegacyExchangeMapping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalmasterTypeLegacyExchangeMapping
	 */
	public $LegacyExchangeMapping;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeLegacyExchangeMapping LegacyExchangeMapping
	 * @return XiGlobalmasterTypeArrayOfLegacyExchangeMapping
	 */
	public function __construct($_LegacyExchangeMapping = null)
	{
		parent::__construct(array('LegacyExchangeMapping'=>$_LegacyExchangeMapping));
	}
	/**
	 * Set LegacyExchangeMapping
	 * @param LegacyExchangeMapping LegacyExchangeMapping
	 * @return LegacyExchangeMapping
	 */
	public function setLegacyExchangeMapping($_LegacyExchangeMapping)
	{
		return ($this->LegacyExchangeMapping = $_LegacyExchangeMapping);
	}
	/**
	 * Get LegacyExchangeMapping
	 * @return XiGlobalmasterTypeLegacyExchangeMapping
	 */
	public function getLegacyExchangeMapping()
	{
		return $this->LegacyExchangeMapping;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalmasterWsdlClass::current()
	 * @return XiGlobalmasterTypeLegacyExchangeMapping
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalmasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalmasterTypeLegacyExchangeMapping
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::first()
	 * @return XiGlobalmasterTypeLegacyExchangeMapping
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::last()
	 * @return XiGlobalmasterTypeLegacyExchangeMapping
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalmasterTypeLegacyExchangeMapping
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'LegacyExchangeMapping'
	 */
	public function getAttributeName()
	{
		return 'LegacyExchangeMapping';
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