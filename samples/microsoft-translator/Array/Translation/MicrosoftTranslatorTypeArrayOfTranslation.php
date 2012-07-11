<?php
/**
 * Class file for MicrosoftTranslatorTypeArrayOfTranslation
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeArrayOfTranslation
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeArrayOfTranslation extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The Translation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeTranslation
	 */
	public $Translation;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeTranslation Translation
	 * @return MicrosoftTranslatorTypeArrayOfTranslation
	 */
	public function __construct($_Translation = null)
	{
		parent::__construct(array('Translation'=>$_Translation));
	}
	/**
	 * Set Translation
	 * @param Translation Translation
	 * @return Translation
	 */
	public function setTranslation($_Translation)
	{
		return ($this->Translation = $_Translation);
	}
	/**
	 * Get Translation
	 * @return MicrosoftTranslatorTypeTranslation
	 */
	public function getTranslation()
	{
		return $this->Translation;
	}
	/**
	 * Returns the current element
	 * @see MicrosoftTranslatorWsdlClass::current()
	 * @return MicrosoftTranslatorTypeTranslation
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see MicrosoftTranslatorWsdlClass::item()
	 * @param int
	 * @return MicrosoftTranslatorTypeTranslation
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::first()
	 * @return MicrosoftTranslatorTypeTranslation
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::last()
	 * @return MicrosoftTranslatorTypeTranslation
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::offsetGet()
	 * @param int
	 * @return MicrosoftTranslatorTypeTranslation
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Translation'
	 */
	public function getAttributeName()
	{
		return 'Translation';
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