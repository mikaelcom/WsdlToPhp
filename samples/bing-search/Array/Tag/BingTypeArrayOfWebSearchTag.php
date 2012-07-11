<?php
/**
 * Class file for BingTypeArrayOfWebSearchTag
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfWebSearchTag
 * @date 02/07/2012
 */
class BingTypeArrayOfWebSearchTag extends BingWsdlClass
{
	/**
	 * The WebSearchTag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeWebSearchTag
	 */
	public $WebSearchTag;
	/**
	 * Constructor
	 * @param BingTypeWebSearchTag WebSearchTag
	 * @return BingTypeArrayOfWebSearchTag
	 */
	public function __construct($_WebSearchTag = null)
	{
		parent::__construct(array('WebSearchTag'=>$_WebSearchTag));
	}
	/**
	 * Set WebSearchTag
	 * @param WebSearchTag WebSearchTag
	 * @return WebSearchTag
	 */
	public function setWebSearchTag($_WebSearchTag)
	{
		return ($this->WebSearchTag = $_WebSearchTag);
	}
	/**
	 * Get WebSearchTag
	 * @return BingTypeWebSearchTag
	 */
	public function getWebSearchTag()
	{
		return $this->WebSearchTag;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeWebSearchTag
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeWebSearchTag
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeWebSearchTag
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeWebSearchTag
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeWebSearchTag
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'WebSearchTag'
	 */
	public function getAttributeName()
	{
		return 'WebSearchTag';
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