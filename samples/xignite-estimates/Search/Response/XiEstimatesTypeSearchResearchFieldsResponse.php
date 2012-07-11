<?php
/**
 * Class file for XiEstimatesTypeSearchResearchFieldsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeSearchResearchFieldsResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeSearchResearchFieldsResponse extends XiEstimatesWsdlClass
{
	/**
	 * The SearchResearchFieldsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfEstimatesResearchField
	 */
	public $SearchResearchFieldsResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeArrayOfEstimatesResearchField SearchResearchFieldsResult
	 * @return XiEstimatesTypeSearchResearchFieldsResponse
	 */
	public function __construct($_SearchResearchFieldsResult = null)
	{
		parent::__construct(array('SearchResearchFieldsResult'=>new XiEstimatesTypeArrayOfEstimatesResearchField($_SearchResearchFieldsResult)));
	}
	/**
	 * Set SearchResearchFieldsResult
	 * @param ArrayOfEstimatesResearchField SearchResearchFieldsResult
	 * @return ArrayOfEstimatesResearchField
	 */
	public function setSearchResearchFieldsResult($_SearchResearchFieldsResult)
	{
		return ($this->SearchResearchFieldsResult = $_SearchResearchFieldsResult);
	}
	/**
	 * Get SearchResearchFieldsResult
	 * @return XiEstimatesTypeArrayOfEstimatesResearchField
	 */
	public function getSearchResearchFieldsResult()
	{
		return $this->SearchResearchFieldsResult;
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