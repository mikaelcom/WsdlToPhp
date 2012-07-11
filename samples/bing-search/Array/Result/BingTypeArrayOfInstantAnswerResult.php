<?php
/**
 * Class file for BingTypeArrayOfInstantAnswerResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfInstantAnswerResult
 * @date 02/07/2012
 */
class BingTypeArrayOfInstantAnswerResult extends BingWsdlClass
{
	/**
	 * The InstantAnswerResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeInstantAnswerResult
	 */
	public $InstantAnswerResult;
	/**
	 * Constructor
	 * @param BingTypeInstantAnswerResult InstantAnswerResult
	 * @return BingTypeArrayOfInstantAnswerResult
	 */
	public function __construct($_InstantAnswerResult = null)
	{
		parent::__construct(array('InstantAnswerResult'=>$_InstantAnswerResult));
	}
	/**
	 * Set InstantAnswerResult
	 * @param InstantAnswerResult InstantAnswerResult
	 * @return InstantAnswerResult
	 */
	public function setInstantAnswerResult($_InstantAnswerResult)
	{
		return ($this->InstantAnswerResult = $_InstantAnswerResult);
	}
	/**
	 * Get InstantAnswerResult
	 * @return BingTypeInstantAnswerResult
	 */
	public function getInstantAnswerResult()
	{
		return $this->InstantAnswerResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeInstantAnswerResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeInstantAnswerResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeInstantAnswerResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeInstantAnswerResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeInstantAnswerResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'InstantAnswerResult'
	 */
	public function getAttributeName()
	{
		return 'InstantAnswerResult';
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