<?php
/**
 * Class file for BingTypeArrayOfTranslationResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfTranslationResult
 * @date 02/07/2012
 */
class BingTypeArrayOfTranslationResult extends BingWsdlClass
{
	/**
	 * The TranslationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeTranslationResult
	 */
	public $TranslationResult;
	/**
	 * Constructor
	 * @param BingTypeTranslationResult TranslationResult
	 * @return BingTypeArrayOfTranslationResult
	 */
	public function __construct($_TranslationResult = null)
	{
		parent::__construct(array('TranslationResult'=>$_TranslationResult));
	}
	/**
	 * Set TranslationResult
	 * @param TranslationResult TranslationResult
	 * @return TranslationResult
	 */
	public function setTranslationResult($_TranslationResult)
	{
		return ($this->TranslationResult = $_TranslationResult);
	}
	/**
	 * Get TranslationResult
	 * @return BingTypeTranslationResult
	 */
	public function getTranslationResult()
	{
		return $this->TranslationResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeTranslationResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeTranslationResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeTranslationResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeTranslationResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeTranslationResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'TranslationResult'
	 */
	public function getAttributeName()
	{
		return 'TranslationResult';
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