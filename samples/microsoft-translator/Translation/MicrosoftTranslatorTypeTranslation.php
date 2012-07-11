<?php
/**
 * Class file for MicrosoftTranslatorTypeTranslation
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeTranslation
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeTranslation extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The OriginalText
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $OriginalText;
	/**
	 * The Rating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $Rating;
	/**
	 * The Sequence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $Sequence;
	/**
	 * The TranslatedText
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $TranslatedText;
	/**
	 * Constructor
	 * @param string OriginalText
	 * @param int Rating
	 * @param int Sequence
	 * @param string TranslatedText
	 * @return MicrosoftTranslatorTypeTranslation
	 */
	public function __construct($_OriginalText = null,$_Rating = null,$_Sequence = null,$_TranslatedText = null)
	{
		parent::__construct(array('OriginalText'=>$_OriginalText,'Rating'=>$_Rating,'Sequence'=>$_Sequence,'TranslatedText'=>$_TranslatedText));
	}
	/**
	 * Set OriginalText
	 * @param string OriginalText
	 * @return string
	 */
	public function setOriginalText($_OriginalText)
	{
		return ($this->OriginalText = $_OriginalText);
	}
	/**
	 * Get OriginalText
	 * @return string
	 */
	public function getOriginalText()
	{
		return $this->OriginalText;
	}
	/**
	 * Set Rating
	 * @param int Rating
	 * @return int
	 */
	public function setRating($_Rating)
	{
		return ($this->Rating = $_Rating);
	}
	/**
	 * Get Rating
	 * @return int
	 */
	public function getRating()
	{
		return $this->Rating;
	}
	/**
	 * Set Sequence
	 * @param int Sequence
	 * @return int
	 */
	public function setSequence($_Sequence)
	{
		return ($this->Sequence = $_Sequence);
	}
	/**
	 * Get Sequence
	 * @return int
	 */
	public function getSequence()
	{
		return $this->Sequence;
	}
	/**
	 * Set TranslatedText
	 * @param string TranslatedText
	 * @return string
	 */
	public function setTranslatedText($_TranslatedText)
	{
		return ($this->TranslatedText = $_TranslatedText);
	}
	/**
	 * Get TranslatedText
	 * @return string
	 */
	public function getTranslatedText()
	{
		return $this->TranslatedText;
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