<?php
/**
 * Class file for BingTypeInstantAnswerResponse
 * @date 02/07/2012
 */
/**
 * Class BingTypeInstantAnswerResponse
 * @date 02/07/2012
 */
class BingTypeInstantAnswerResponse extends BingWsdlClass
{
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfInstantAnswerResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param BingTypeArrayOfInstantAnswerResult Results
	 * @return BingTypeInstantAnswerResponse
	 */
	public function __construct($_Results = null)
	{
		parent::__construct(array('Results'=>new BingTypeArrayOfInstantAnswerResult($_Results)));
	}
	/**
	 * Set Results
	 * @param ArrayOfInstantAnswerResult Results
	 * @return ArrayOfInstantAnswerResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return BingTypeArrayOfInstantAnswerResult
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