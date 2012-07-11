<?php
/**
 * Class file for BingTypeArrayOfSourceType
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfSourceType
 * @date 02/07/2012
 */
class BingTypeArrayOfSourceType extends BingWsdlClass
{
	/**
	 * The SourceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeSourceType
	 */
	public $SourceType;
	/**
	 * Constructor
	 * @param BingTypeSourceType SourceType
	 * @return BingTypeArrayOfSourceType
	 */
	public function __construct($_SourceType = null)
	{
		parent::__construct(array('SourceType'=>$_SourceType));
	}
	/**
	 * Set SourceType
	 * @param SourceType SourceType
	 * @return SourceType
	 */
	public function setSourceType($_SourceType)
	{
		return ($this->SourceType = $_SourceType);
	}
	/**
	 * Get SourceType
	 * @return BingTypeSourceType
	 */
	public function getSourceType()
	{
		return $this->SourceType;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeSourceType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeSourceType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeSourceType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeSourceType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeSourceType
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see BingWsdlClass::add()
	 * @param BingTypeSourceType
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return BingTypeSourceType::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'SourceType'
	 */
	public function getAttributeName()
	{
		return 'SourceType';
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