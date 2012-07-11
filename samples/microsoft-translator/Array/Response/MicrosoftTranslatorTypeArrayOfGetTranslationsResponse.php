<?php
/**
 * Class file for MicrosoftTranslatorTypeArrayOfGetTranslationsResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeArrayOfGetTranslationsResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeArrayOfGetTranslationsResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The GetTranslationsResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeGetTranslationsResponse
	 */
	public $GetTranslationsResponse;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeGetTranslationsResponse GetTranslationsResponse
	 * @return MicrosoftTranslatorTypeArrayOfGetTranslationsResponse
	 */
	public function __construct($_GetTranslationsResponse = null)
	{
		parent::__construct(array('GetTranslationsResponse'=>$_GetTranslationsResponse));
	}
	/**
	 * Set GetTranslationsResponse
	 * @param GetTranslationsResponse GetTranslationsResponse
	 * @return GetTranslationsResponse
	 */
	public function setGetTranslationsResponse($_GetTranslationsResponse)
	{
		return ($this->GetTranslationsResponse = $_GetTranslationsResponse);
	}
	/**
	 * Get GetTranslationsResponse
	 * @return MicrosoftTranslatorTypeGetTranslationsResponse
	 */
	public function getGetTranslationsResponse()
	{
		return $this->GetTranslationsResponse;
	}
	/**
	 * Returns the current element
	 * @see MicrosoftTranslatorWsdlClass::current()
	 * @return MicrosoftTranslatorTypeGetTranslationsResponse
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see MicrosoftTranslatorWsdlClass::item()
	 * @param int
	 * @return MicrosoftTranslatorTypeGetTranslationsResponse
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::first()
	 * @return MicrosoftTranslatorTypeGetTranslationsResponse
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::last()
	 * @return MicrosoftTranslatorTypeGetTranslationsResponse
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see MicrosoftTranslatorWsdlClass::offsetGet()
	 * @param int
	 * @return MicrosoftTranslatorTypeGetTranslationsResponse
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'GetTranslationsResponse'
	 */
	public function getAttributeName()
	{
		return 'GetTranslationsResponse';
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