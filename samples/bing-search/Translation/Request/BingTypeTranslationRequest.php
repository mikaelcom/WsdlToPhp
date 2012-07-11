<?php
/**
 * Class file for BingTypeTranslationRequest
 * @date 02/07/2012
 */
/**
 * Class BingTypeTranslationRequest
 * @date 02/07/2012
 */
class BingTypeTranslationRequest extends BingWsdlClass
{
	/**
	 * The SourceLanguage
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceLanguage;
	/**
	 * The TargetLanguage
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TargetLanguage;
	/**
	 * Constructor
	 * @param string SourceLanguage
	 * @param string TargetLanguage
	 * @return BingTypeTranslationRequest
	 */
	public function __construct($_SourceLanguage,$_TargetLanguage)
	{
		parent::__construct(array('SourceLanguage'=>$_SourceLanguage,'TargetLanguage'=>$_TargetLanguage));
	}
	/**
	 * Set SourceLanguage
	 * @param string SourceLanguage
	 * @return string
	 */
	public function setSourceLanguage($_SourceLanguage)
	{
		return ($this->SourceLanguage = $_SourceLanguage);
	}
	/**
	 * Get SourceLanguage
	 * @return string
	 */
	public function getSourceLanguage()
	{
		return $this->SourceLanguage;
	}
	/**
	 * Set TargetLanguage
	 * @param string TargetLanguage
	 * @return string
	 */
	public function setTargetLanguage($_TargetLanguage)
	{
		return ($this->TargetLanguage = $_TargetLanguage);
	}
	/**
	 * Get TargetLanguage
	 * @return string
	 */
	public function getTargetLanguage()
	{
		return $this->TargetLanguage;
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