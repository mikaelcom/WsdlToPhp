<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldsResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldsResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetResearchFieldsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfEstimatesResearchField
	 */
	public $GetResearchFieldsResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeArrayOfEstimatesResearchField GetResearchFieldsResult
	 * @return XiEstimatesTypeGetResearchFieldsResponse
	 */
	public function __construct($_GetResearchFieldsResult = null)
	{
		parent::__construct(array('GetResearchFieldsResult'=>new XiEstimatesTypeArrayOfEstimatesResearchField($_GetResearchFieldsResult)));
	}
	/**
	 * Set GetResearchFieldsResult
	 * @param ArrayOfEstimatesResearchField GetResearchFieldsResult
	 * @return ArrayOfEstimatesResearchField
	 */
	public function setGetResearchFieldsResult($_GetResearchFieldsResult)
	{
		return ($this->GetResearchFieldsResult = $_GetResearchFieldsResult);
	}
	/**
	 * Get GetResearchFieldsResult
	 * @return XiEstimatesTypeArrayOfEstimatesResearchField
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