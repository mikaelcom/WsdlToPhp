<?php
/**
 * Class file for BingTypeArrayOfNewsCollection
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfNewsCollection
 * @date 02/07/2012
 */
class BingTypeArrayOfNewsCollection extends BingWsdlClass
{
	/**
	 * The NewsCollection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeNewsCollection
	 */
	public $NewsCollection;
	/**
	 * Constructor
	 * @param BingTypeNewsCollection NewsCollection
	 * @return BingTypeArrayOfNewsCollection
	 */
	public function __construct($_NewsCollection = null)
	{
		parent::__construct(array('NewsCollection'=>$_NewsCollection));
	}
	/**
	 * Set NewsCollection
	 * @param NewsCollection NewsCollection
	 * @return NewsCollection
	 */
	public function setNewsCollection($_NewsCollection)
	{
		return ($this->NewsCollection = $_NewsCollection);
	}
	/**
	 * Get NewsCollection
	 * @return BingTypeNewsCollection
	 */
	public function getNewsCollection()
	{
		return $this->NewsCollection;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeNewsCollection
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeNewsCollection
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeNewsCollection
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeNewsCollection
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeNewsCollection
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'NewsCollection'
	 */
	public function getAttributeName()
	{
		return 'NewsCollection';
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