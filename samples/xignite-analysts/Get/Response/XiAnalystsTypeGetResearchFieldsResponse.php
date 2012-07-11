<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldsResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldsResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldsResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetResearchFieldsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeArrayOfAnalystsResearchField
	 */
	public $GetResearchFieldsResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeArrayOfAnalystsResearchField GetResearchFieldsResult
	 * @return XiAnalystsTypeGetResearchFieldsResponse
	 */
	public function __construct($_GetResearchFieldsResult = null)
	{
		parent::__construct(array('GetResearchFieldsResult'=>new XiAnalystsTypeArrayOfAnalystsResearchField($_GetResearchFieldsResult)));
	}
	/**
	 * Set GetResearchFieldsResult
	 * @param ArrayOfAnalystsResearchField GetResearchFieldsResult
	 * @return ArrayOfAnalystsResearchField
	 */
	public function setGetResearchFieldsResult($_GetResearchFieldsResult)
	{
		return ($this->GetResearchFieldsResult = $_GetResearchFieldsResult);
	}
	/**
	 * Get GetResearchFieldsResult
	 * @return XiAnalystsTypeArrayOfAnalystsResearchField
	 */
	public function getGetResearchFieldsResult()
	{
		return $this->GetResearchFieldsResult;
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