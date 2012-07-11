<?php
/**
 * Class file for BingTypeArrayOfRelatedSearchResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfRelatedSearchResult
 * @date 02/07/2012
 */
class BingTypeArrayOfRelatedSearchResult extends BingWsdlClass
{
	/**
	 * The RelatedSearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeRelatedSearchResult
	 */
	public $RelatedSearchResult;
	/**
	 * Constructor
	 * @param BingTypeRelatedSearchResult RelatedSearchResult
	 * @return BingTypeArrayOfRelatedSearchResult
	 */
	public function __construct($_RelatedSearchResult = null)
	{
		parent::__construct(array('RelatedSearchResult'=>$_RelatedSearchResult));
	}
	/**
	 * Set RelatedSearchResult
	 * @param RelatedSearchResult RelatedSearchResult
	 * @return RelatedSearchResult
	 */
	public function setRelatedSearchResult($_RelatedSearchResult)
	{
		return ($this->RelatedSearchResult = $_RelatedSearchResult);
	}
	/**
	 * Get RelatedSearchResult
	 * @return BingTypeRelatedSearchResult
	 */
	public function getRelatedSearchResult()
	{
		return $this->RelatedSearchResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeRelatedSearchResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeRelatedSearchResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeRelatedSearchResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeRelatedSearchResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeRelatedSearchResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RelatedSearchResult'
	 */
	public function getAttributeName()
	{
		return 'RelatedSearchResult';
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