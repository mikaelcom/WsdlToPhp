<?php
/**
 * Class file for BingTypeArrayOfMobileWebResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfMobileWebResult
 * @date 02/07/2012
 */
class BingTypeArrayOfMobileWebResult extends BingWsdlClass
{
	/**
	 * The MobileWebResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeMobileWebResult
	 */
	public $MobileWebResult;
	/**
	 * Constructor
	 * @param BingTypeMobileWebResult MobileWebResult
	 * @return BingTypeArrayOfMobileWebResult
	 */
	public function __construct($_MobileWebResult = null)
	{
		parent::__construct(array('MobileWebResult'=>$_MobileWebResult));
	}
	/**
	 * Set MobileWebResult
	 * @param MobileWebResult MobileWebResult
	 * @return MobileWebResult
	 */
	public function setMobileWebResult($_MobileWebResult)
	{
		return ($this->MobileWebResult = $_MobileWebResult);
	}
	/**
	 * Get MobileWebResult
	 * @return BingTypeMobileWebResult
	 */
	public function getMobileWebResult()
	{
		return $this->MobileWebResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeMobileWebResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeMobileWebResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeMobileWebResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeMobileWebResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeMobileWebResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MobileWebResult'
	 */
	public function getAttributeName()
	{
		return 'MobileWebResult';
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