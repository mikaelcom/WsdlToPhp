<?php
/**
 * Class file for XiAnalystsTypeSearchResearchFieldsResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeSearchResearchFieldsResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeSearchResearchFieldsResponse extends XiAnalystsWsdlClass
{
	/**
	 * The SearchResearchFieldsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeArrayOfAnalystsResearchField
	 */
	public $SearchResearchFieldsResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeArrayOfAnalystsResearchField SearchResearchFieldsResult
	 * @return XiAnalystsTypeSearchResearchFieldsResponse
	 */
	public function __construct($_SearchResearchFieldsResult = null)
	{
		parent::__construct(array('SearchResearchFieldsResult'=>new XiAnalystsTypeArrayOfAnalystsResearchField($_SearchResearchFieldsResult)));
	}
	/**
	 * Set SearchResearchFieldsResult
	 * @param ArrayOfAnalystsResearchField SearchResearchFieldsResult
	 * @return ArrayOfAnalystsResearchField
	 */
	public function setSearchResearchFieldsResult($_SearchResearchFieldsResult)
	{
		return ($this->SearchResearchFieldsResult = $_SearchResearchFieldsResult);
	}
	/**
	 * Get SearchResearchFieldsResult
	 * @return XiAnalystsTypeArrayOfAnalystsResearchField
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