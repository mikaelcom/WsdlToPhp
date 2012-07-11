<?php
/**
 * Class file for MicrosoftTranslatorTypeTranslationMatch
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeTranslationMatch
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeTranslationMatch extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The Count
	 * @var int
	 */
	public $Count;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Error;
	/**
	 * The MatchDegree
	 * @var int
	 */
	public $MatchDegree;
	/**
	 * The MatchedOriginalText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $MatchedOriginalText;
	/**
	 * The Rating
	 * @var int
	 */
	public $Rating;
	/**
	 * The TranslatedText
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $TranslatedText;
	/**
	 * Constructor
	 * @param int Count
	 * @param string Error
	 * @param int MatchDegree
	 * @param string MatchedOriginalText
	 * @param int Rating
	 * @param string TranslatedText
	 * @return MicrosoftTranslatorTypeTranslationMatch
	 */
	public function __construct($_Count = null,$_Error = null,$_MatchDegree = null,$_MatchedOriginalText = null,$_Rating = null,$_TranslatedText = null)
	{
		parent::__construct(array('Count'=>$_Count,'Error'=>$_Error,'MatchDegree'=>$_MatchDegree,'MatchedOriginalText'=>$_MatchedOriginalText,'Rating'=>$_Rating,'TranslatedText'=>$_TranslatedText));
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Error
	 * @param string Error
	 * @return string
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return string
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set MatchDegree
	 * @param int MatchDegree
	 * @return int
	 */
	public function setMatchDegree($_MatchDegree)
	{
		return ($this->MatchDegree = $_MatchDegree);
	}
	/**
	 * Get MatchDegree
	 * @return int
	 */
	public function getMatchDegree()
	{
		return $this->MatchDegree;
	}
	/**
	 * Set MatchedOriginalText
	 * @param string MatchedOriginalText
	 * @return string
	 */
	public function setMatchedOriginalText($_MatchedOriginalText)
	{
		return ($this->MatchedOriginalText = $_MatchedOriginalText);
	}
	/**
	 * Get MatchedOriginalText
	 * @return string
	 */
	public function getMatchedOriginalText()
	{
		return $this->MatchedOriginalText;
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