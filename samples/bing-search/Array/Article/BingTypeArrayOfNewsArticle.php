<?php
/**
 * Class file for BingTypeArrayOfNewsArticle
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfNewsArticle
 * @date 02/07/2012
 */
class BingTypeArrayOfNewsArticle extends BingWsdlClass
{
	/**
	 * The NewsArticle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeNewsArticle
	 */
	public $NewsArticle;
	/**
	 * Constructor
	 * @param BingTypeNewsArticle NewsArticle
	 * @return BingTypeArrayOfNewsArticle
	 */
	public function __construct($_NewsArticle = null)
	{
		parent::__construct(array('NewsArticle'=>$_NewsArticle));
	}
	/**
	 * Set NewsArticle
	 * @param NewsArticle NewsArticle
	 * @return NewsArticle
	 */
	public function setNewsArticle($_NewsArticle)
	{
		return ($this->NewsArticle = $_NewsArticle);
	}
	/**
	 * Get NewsArticle
	 * @return BingTypeNewsArticle
	 */
	public function getNewsArticle()
	{
		return $this->NewsArticle;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeNewsArticle
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeNewsArticle
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeNewsArticle
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeNewsArticle
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeNewsArticle
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'NewsArticle'
	 */
	public function getAttributeName()
	{
		return 'NewsArticle';
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