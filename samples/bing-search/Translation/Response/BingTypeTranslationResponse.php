<?php
/**
 * Class file for BingTypeTranslationResponse
 * @date 02/07/2012
 */
/**
 * Class BingTypeTranslationResponse
 * @date 02/07/2012
 */
class BingTypeTranslationResponse extends BingWsdlClass
{
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfTranslationResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param BingTypeArrayOfTranslationResult Results
	 * @return BingTypeTranslationResponse
	 */
	public function __construct($_Results = null)
	{
		parent::__construct(array('Results'=>new BingTypeArrayOfTranslationResult($_Results)));
	}
	/**
	 * Set Results
	 * @param ArrayOfTranslationResult Results
	 * @return ArrayOfTranslationResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return BingTypeArrayOfTranslationResult
	 */
	public function getResults()
	{
		return $this->Results;
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