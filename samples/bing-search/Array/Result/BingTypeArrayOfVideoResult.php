<?php
/**
 * Class file for BingTypeArrayOfVideoResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfVideoResult
 * @date 02/07/2012
 */
class BingTypeArrayOfVideoResult extends BingWsdlClass
{
	/**
	 * The VideoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeVideoResult
	 */
	public $VideoResult;
	/**
	 * Constructor
	 * @param BingTypeVideoResult VideoResult
	 * @return BingTypeArrayOfVideoResult
	 */
	public function __construct($_VideoResult = null)
	{
		parent::__construct(array('VideoResult'=>$_VideoResult));
	}
	/**
	 * Set VideoResult
	 * @param VideoResult VideoResult
	 * @return VideoResult
	 */
	public function setVideoResult($_VideoResult)
	{
		return ($this->VideoResult = $_VideoResult);
	}
	/**
	 * Get VideoResult
	 * @return BingTypeVideoResult
	 */
	public function getVideoResult()
	{
		return $this->VideoResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeVideoResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeVideoResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeVideoResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeVideoResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeVideoResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'VideoResult'
	 */
	public function getAttributeName()
	{
		return 'VideoResult';
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