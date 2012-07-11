<?php
/**
 * Class file for BingTypeArrayOfMobileWebSearchOption
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfMobileWebSearchOption
 * @date 02/07/2012
 */
class BingTypeArrayOfMobileWebSearchOption extends BingWsdlClass
{
	/**
	 * The MobileWebSearchOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeMobileWebSearchOption
	 */
	public $MobileWebSearchOption;
	/**
	 * Constructor
	 * @param BingTypeMobileWebSearchOption MobileWebSearchOption
	 * @return BingTypeArrayOfMobileWebSearchOption
	 */
	public function __construct($_MobileWebSearchOption = null)
	{
		parent::__construct(array('MobileWebSearchOption'=>$_MobileWebSearchOption));
	}
	/**
	 * Set MobileWebSearchOption
	 * @param MobileWebSearchOption MobileWebSearchOption
	 * @return MobileWebSearchOption
	 */
	public function setMobileWebSearchOption($_MobileWebSearchOption)
	{
		return ($this->MobileWebSearchOption = $_MobileWebSearchOption);
	}
	/**
	 * Get MobileWebSearchOption
	 * @return BingTypeMobileWebSearchOption
	 */
	public function getMobileWebSearchOption()
	{
		return $this->MobileWebSearchOption;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeMobileWebSearchOption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeMobileWebSearchOption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeMobileWebSearchOption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeMobileWebSearchOption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeMobileWebSearchOption
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see BingWsdlClass::add()
	 * @param BingTypeMobileWebSearchOption
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return BingTypeMobileWebSearchOption::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'MobileWebSearchOption'
	 */
	public function getAttributeName()
	{
		return 'MobileWebSearchOption';
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