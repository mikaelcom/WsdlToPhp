<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldListsResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldListsResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldListsResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetResearchFieldListsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeArrayOfAnalystsResearchFieldList
	 */
	public $GetResearchFieldListsResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeArrayOfAnalystsResearchFieldList GetResearchFieldListsResult
	 * @return XiAnalystsTypeGetResearchFieldListsResponse
	 */
	public function __construct($_GetResearchFieldListsResult = null)
	{
		parent::__construct(array('GetResearchFieldListsResult'=>new XiAnalystsTypeArrayOfAnalystsResearchFieldList($_GetResearchFieldListsResult)));
	}
	/**
	 * Set GetResearchFieldListsResult
	 * @param ArrayOfAnalystsResearchFieldList GetResearchFieldListsResult
	 * @return ArrayOfAnalystsResearchFieldList
	 */
	public function setGetResearchFieldListsResult($_GetResearchFieldListsResult)
	{
		return ($this->GetResearchFieldListsResult = $_GetResearchFieldListsResult);
	}
	/**
	 * Get GetResearchFieldListsResult
	 * @return XiAnalystsTypeArrayOfAnalystsResearchFieldList
	 */
	public function getGetResearchFieldListsResult()
	{
		return $this->GetResearchFieldListsResult;
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