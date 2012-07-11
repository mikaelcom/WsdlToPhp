<?php
/**
 * Class file for MicrosoftTranslatorTypeArrayOfTranslationMatch
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeArrayOfTranslationMatch
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeArrayOfTranslationMatch extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The TranslationMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeTranslationMatch
	 */
	public $TranslationMatch;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeTranslationMatch TranslationMatch
	 * @return MicrosoftTranslatorTypeArrayOfTranslationMatch
	 */
	public function __construct($_TranslationMatch = null)
	{
		parent::__construct(array('TranslationMatch'=>$_TranslationMatch));
	}
	/**
	 * Set TranslationMatch
	 * @param TranslationMatch TranslationMatch
	 * @return TranslationMatch
	 */
	public function setTranslationMatch($_TranslationMatch)
	{
		return ($this->TranslationMatch = $_TranslationMatch);
	}
	/**
	 * Get TranslationMatch
	 * @return MicrosoftTranslatorTypeTranslationMatch
	 */
	public function getTranslationMatch()
	{
		return $this->TranslationMatch;
	}
	/**
	 * Returns the current element
	 * @see MicrosoftTranslatorWsdlClass::current()
	 * @return MicrosoftTranslatorTypeTranslationMatch
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see MicrosoftTranslatorWsdlClass::item()
	 * @param int
	 * @return MicrosoftTranslatorTypeTranslationMatch
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::first()
	 * @return MicrosoftTranslatorTypeTranslationMatch
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::last()
	 * @return MicrosoftTranslatorTypeTranslationMatch
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::offsetGet()
	 * @param int
	 * @return MicrosoftTranslatorTypeTranslationMatch
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'TranslationMatch'
	 */
	public function getAttributeName()
	{
		return 'TranslationMatch';
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