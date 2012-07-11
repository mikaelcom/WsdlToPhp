<?php
/**
 * Class file for CdyneSpellCheckerTypeWords
 * @date 03/07/2012
 */
/**
 * Class CdyneSpellCheckerTypeWords
 * @date 03/07/2012
 */
class CdyneSpellCheckerTypeWords extends CdyneSpellCheckerWsdlClass
{
	/**
	 * The Suggestions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Suggestions;
	/**
	 * The word
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $word;
	/**
	 * The SuggestionCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $SuggestionCount;
	/**
	 * Constructor
	 * @param string Suggestions
	 * @param string word
	 * @param int SuggestionCount
	 * @return CdyneSpellCheckerTypeWords
	 */
	public function __construct($_Suggestions = null,$_word = null,$_SuggestionCount)
	{
		parent::__construct(array('Suggestions'=>$_Suggestions,'word'=>$_word,'SuggestionCount'=>$_SuggestionCount));
	}
	/**
	 * Set Suggestions
	 * @param string Suggestions
	 * @return string
	 */
	public function setSuggestions($_Suggestions)
	{
		return ($this->Suggestions = $_Suggestions);
	}
	/**
	 * Get Suggestions
	 * @return string
	 */
	public function getSuggestions()
	{
		return $this->Suggestions;
	}
	/**
	 * Set word
	 * @param string word
	 * @return string
	 */
	public function setWord($_word)
	{
		return ($this->word = $_word);
	}
	/**
	 * Get word
	 * @return string
	 */
	public function getWord()
	{
		return $this->word;
	}
	/**
	 * Set SuggestionCount
	 * @param int SuggestionCount
	 * @return int
	 */
	public function setSuggestionCount($_SuggestionCount)
	{
		return ($this->SuggestionCount = $_SuggestionCount);
	}
	/**
	 * Get SuggestionCount
	 * @return int
	 */
	public function getSuggestionCount()
	{
		return $this->SuggestionCount;
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