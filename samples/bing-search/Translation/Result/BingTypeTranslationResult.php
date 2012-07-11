<?php
/**
 * Class file for BingTypeTranslationResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeTranslationResult
 * @date 02/07/2012
 */
class BingTypeTranslationResult extends BingWsdlClass
{
	/**
	 * The TranslatedTerm
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TranslatedTerm;
	/**
	 * Constructor
	 * @param string TranslatedTerm
	 * @return BingTypeTranslationResult
	 */
	public function __construct($_TranslatedTerm = null)
	{
		parent::__construct(array('TranslatedTerm'=>$_TranslatedTerm));
	}
	/**
	 * Set TranslatedTerm
	 * @param string TranslatedTerm
	 * @return string
	 */
	public function setTranslatedTerm($_TranslatedTerm)
	{
		return ($this->TranslatedTerm = $_TranslatedTerm);
	}
	/**
	 * Get TranslatedTerm
	 * @return string
	 */
	public function getTranslatedTerm()
	{
		return $this->TranslatedTerm;
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