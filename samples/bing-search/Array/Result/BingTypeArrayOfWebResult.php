<?php
/**
 * Class file for BingTypeArrayOfWebResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfWebResult
 * @date 02/07/2012
 */
class BingTypeArrayOfWebResult extends BingWsdlClass
{
	/**
	 * The WebResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeWebResult
	 */
	public $WebResult;
	/**
	 * Constructor
	 * @param BingTypeWebResult WebResult
	 * @return BingTypeArrayOfWebResult
	 */
	public function __construct($_WebResult = null)
	{
		parent::__construct(array('WebResult'=>$_WebResult));
	}
	/**
	 * Set WebResult
	 * @param WebResult WebResult
	 * @return WebResult
	 */
	public function setWebResult($_WebResult)
	{
		return ($this->WebResult = $_WebResult);
	}
	/**
	 * Get WebResult
	 * @return BingTypeWebResult
	 */
	public function getWebResult()
	{
		return $this->WebResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeWebResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeWebResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeWebResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeWebResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeWebResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'WebResult'
	 */
	public function getAttributeName()
	{
		return 'WebResult';
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