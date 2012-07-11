<?php
/**
 * Class file for MicrosoftTranslatorTypeBreakSentencesResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeBreakSentencesResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeBreakSentencesResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The BreakSentencesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfint
	 */
	public $BreakSentencesResult;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeArrayOfint BreakSentencesResult
	 * @return MicrosoftTranslatorTypeBreakSentencesResponse
	 */
	public function __construct($_BreakSentencesResult = null)
	{
		parent::__construct(array('BreakSentencesResult'=>new MicrosoftTranslatorTypeArrayOfint($_BreakSentencesResult)));
	}
	/**
	 * Set BreakSentencesResult
	 * @param ArrayOfint BreakSentencesResult
	 * @return ArrayOfint
	 */
	public function setBreakSentencesResult($_BreakSentencesResult)
	{
		return ($this->BreakSentencesResult = $_BreakSentencesResult);
	}
	/**
	 * Get BreakSentencesResult
	 * @return MicrosoftTranslatorTypeArrayOfint
	 */
	public function getBreakSentencesResult()
	{
		return $this->BreakSentencesResult;
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