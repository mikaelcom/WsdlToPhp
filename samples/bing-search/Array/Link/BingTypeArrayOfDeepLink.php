<?php
/**
 * Class file for BingTypeArrayOfDeepLink
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfDeepLink
 * @date 02/07/2012
 */
class BingTypeArrayOfDeepLink extends BingWsdlClass
{
	/**
	 * The DeepLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeDeepLink
	 */
	public $DeepLink;
	/**
	 * Constructor
	 * @param BingTypeDeepLink DeepLink
	 * @return BingTypeArrayOfDeepLink
	 */
	public function __construct($_DeepLink = null)
	{
		parent::__construct(array('DeepLink'=>$_DeepLink));
	}
	/**
	 * Set DeepLink
	 * @param DeepLink DeepLink
	 * @return DeepLink
	 */
	public function setDeepLink($_DeepLink)
	{
		return ($this->DeepLink = $_DeepLink);
	}
	/**
	 * Get DeepLink
	 * @return BingTypeDeepLink
	 */
	public function getDeepLink()
	{
		return $this->DeepLink;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeDeepLink
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeDeepLink
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeDeepLink
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeDeepLink
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeDeepLink
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'DeepLink'
	 */
	public function getAttributeName()
	{
		return 'DeepLink';
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