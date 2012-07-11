<?php
/**
 * Class file for GGAdwordsTypeKeywordMatchSetting
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeKeywordMatchSetting
 * Documentation : Improved exact and phrase match option includes misspellings, plurals, and other close variants of your keywords. Default value set to {@code true} to include close variants. For more information, see the article <a href="https://support.google.com/adwords/bin/answer.py?answer=6100"> What are keyword matching options?</a>. This setting is required when creating new campaigns.
 * @date 03/07/2012
 */
class GGAdwordsTypeKeywordMatchSetting extends GGAdwordsTypeSetting
{
	/**
	 * The optIn
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Setting this boolean value to true enables the broadening of exact and phrase keyword matches for this campaign to include small variations such as plurals, common misspellings, diacriticals and acronyms. <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
	 * @var boolean
	 */
	public $optIn;
	/**
	 * Constructor
	 * @param boolean optIn
	 * @return GGAdwordsTypeKeywordMatchSetting
	 */
	public function __construct($_optIn = null)
	{
		GGAdwordsWsdlClass::__construct(array('optIn'=>$_optIn));
	}
	/**
	 * Set optIn
	 * @param boolean optIn
	 * @return boolean
	 */
	public function setOptIn($_optIn)
	{
		return ($this->optIn = $_optIn);
	}
	/**
	 * Get optIn
	 * @return boolean
	 */
	public function getOptIn()
	{
		return $this->optIn;
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