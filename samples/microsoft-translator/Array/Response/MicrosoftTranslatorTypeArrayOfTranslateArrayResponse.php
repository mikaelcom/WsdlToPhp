<?php
/**
 * Class file for MicrosoftTranslatorTypeArrayOfTranslateArrayResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeArrayOfTranslateArrayResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeArrayOfTranslateArrayResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The TranslateArrayResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeTranslateArrayResponse
	 */
	public $TranslateArrayResponse;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeTranslateArrayResponse TranslateArrayResponse
	 * @return MicrosoftTranslatorTypeArrayOfTranslateArrayResponse
	 */
	public function __construct($_TranslateArrayResponse = null)
	{
		parent::__construct(array('TranslateArrayResponse'=>$_TranslateArrayResponse));
	}
	/**
	 * Set TranslateArrayResponse
	 * @param TranslateArrayResponse TranslateArrayResponse
	 * @return TranslateArrayResponse
	 */
	public function setTranslateArrayResponse($_TranslateArrayResponse)
	{
		return ($this->TranslateArrayResponse = $_TranslateArrayResponse);
	}
	/**
	 * Get TranslateArrayResponse
	 * @return MicrosoftTranslatorTypeTranslateArrayResponse
	 */
	public function getTranslateArrayResponse()
	{
		return $this->TranslateArrayResponse;
	}
	/**
	 * Returns the current element
	 * @see MicrosoftTranslatorWsdlClass::current()
	 * @return MicrosoftTranslatorTypeTranslateArrayResponse
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see MicrosoftTranslatorWsdlClass::item()
	 * @param int
	 * @return MicrosoftTranslatorTypeTranslateArrayResponse
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::first()
	 * @return MicrosoftTranslatorTypeTranslateArrayResponse
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::last()
	 * @return MicrosoftTranslatorTypeTranslateArrayResponse
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::offsetGet()
	 * @param int
	 * @return MicrosoftTranslatorTypeTranslateArrayResponse
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'TranslateArrayResponse'
	 */
	public function getAttributeName()
	{
		return 'TranslateArrayResponse';
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