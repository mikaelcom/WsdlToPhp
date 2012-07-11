<?php
/**
 * Class file for MicrosoftTranslatorTypeGetTranslationsResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeGetTranslationsResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeGetTranslationsResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $From;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $State;
	/**
	 * The Translations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfTranslationMatch
	 */
	public $Translations;
	/**
	 * Constructor
	 * @param string From
	 * @param string State
	 * @param MicrosoftTranslatorTypeArrayOfTranslationMatch Translations
	 * @return MicrosoftTranslatorTypeGetTranslationsResponse
	 */
	public function __construct($_From = null,$_State = null,$_Translations = null)
	{
		parent::__construct(array('From'=>$_From,'State'=>$_State,'Translations'=>new MicrosoftTranslatorTypeArrayOfTranslationMatch($_Translations)));
	}
	/**
	 * Set From
	 * @param string From
	 * @return string
	 */
	public function setFrom($_From)
	{
		return ($this->From = $_From);
	}
	/**
	 * Get From
	 * @return string
	 */
	public function getFrom()
	{
		return $this->From;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set Translations
	 * @param ArrayOfTranslationMatch Translations
	 * @return ArrayOfTranslationMatch
	 */
	public function setTranslations($_Translations)
	{
		return ($this->Translations = $_Translations);
	}
	/**
	 * Get Translations
	 * @return MicrosoftTranslatorTypeArrayOfTranslationMatch
	 */
	public function getTranslations()
	{
		return $this->Translations;
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