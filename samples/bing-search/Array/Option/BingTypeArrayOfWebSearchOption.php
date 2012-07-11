<?php
/**
 * Class file for BingTypeArrayOfWebSearchOption
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfWebSearchOption
 * @date 02/07/2012
 */
class BingTypeArrayOfWebSearchOption extends BingWsdlClass
{
	/**
	 * The WebSearchOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeWebSearchOption
	 */
	public $WebSearchOption;
	/**
	 * Constructor
	 * @param BingTypeWebSearchOption WebSearchOption
	 * @return BingTypeArrayOfWebSearchOption
	 */
	public function __construct($_WebSearchOption = null)
	{
		parent::__construct(array('WebSearchOption'=>$_WebSearchOption));
	}
	/**
	 * Set WebSearchOption
	 * @param WebSearchOption WebSearchOption
	 * @return WebSearchOption
	 */
	public function setWebSearchOption($_WebSearchOption)
	{
		return ($this->WebSearchOption = $_WebSearchOption);
	}
	/**
	 * Get WebSearchOption
	 * @return BingTypeWebSearchOption
	 */
	public function getWebSearchOption()
	{
		return $this->WebSearchOption;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeWebSearchOption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeWebSearchOption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeWebSearchOption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeWebSearchOption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeWebSearchOption
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see BingWsdlClass::add()
	 * @param BingTypeWebSearchOption
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return BingTypeWebSearchOption::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'WebSearchOption'
	 */
	public function getAttributeName()
	{
		return 'WebSearchOption';
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