<?php
/**
 * Class file for BingTypeArrayOfNewsResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfNewsResult
 * @date 02/07/2012
 */
class BingTypeArrayOfNewsResult extends BingWsdlClass
{
	/**
	 * The NewsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeNewsResult
	 */
	public $NewsResult;
	/**
	 * Constructor
	 * @param BingTypeNewsResult NewsResult
	 * @return BingTypeArrayOfNewsResult
	 */
	public function __construct($_NewsResult = null)
	{
		parent::__construct(array('NewsResult'=>$_NewsResult));
	}
	/**
	 * Set NewsResult
	 * @param NewsResult NewsResult
	 * @return NewsResult
	 */
	public function setNewsResult($_NewsResult)
	{
		return ($this->NewsResult = $_NewsResult);
	}
	/**
	 * Get NewsResult
	 * @return BingTypeNewsResult
	 */
	public function getNewsResult()
	{
		return $this->NewsResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeNewsResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeNewsResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeNewsResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeNewsResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeNewsResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'NewsResult'
	 */
	public function getAttributeName()
	{
		return 'NewsResult';
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