<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldListsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldListsResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldListsResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetResearchFieldListsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfEstimatesResearchFieldList
	 */
	public $GetResearchFieldListsResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeArrayOfEstimatesResearchFieldList GetResearchFieldListsResult
	 * @return XiEstimatesTypeGetResearchFieldListsResponse
	 */
	public function __construct($_GetResearchFieldListsResult = null)
	{
		parent::__construct(array('GetResearchFieldListsResult'=>new XiEstimatesTypeArrayOfEstimatesResearchFieldList($_GetResearchFieldListsResult)));
	}
	/**
	 * Set GetResearchFieldListsResult
	 * @param ArrayOfEstimatesResearchFieldList GetResearchFieldListsResult
	 * @return ArrayOfEstimatesResearchFieldList
	 */
	public function setGetResearchFieldListsResult($_GetResearchFieldListsResult)
	{
		return ($this->GetResearchFieldListsResult = $_GetResearchFieldListsResult);
	}
	/**
	 * Get GetResearchFieldListsResult
	 * @return XiEstimatesTypeArrayOfEstimatesResearchFieldList
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