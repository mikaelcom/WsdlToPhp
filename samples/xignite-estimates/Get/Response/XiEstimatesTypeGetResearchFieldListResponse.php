<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldListResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldListResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldListResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetResearchFieldListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeEstimatesResearchFieldList
	 */
	public $GetResearchFieldListResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeEstimatesResearchFieldList GetResearchFieldListResult
	 * @return XiEstimatesTypeGetResearchFieldListResponse
	 */
	public function __construct($_GetResearchFieldListResult = null)
	{
		parent::__construct(array('GetResearchFieldListResult'=>$_GetResearchFieldListResult));
	}
	/**
	 * Set GetResearchFieldListResult
	 * @param EstimatesResearchFieldList GetResearchFieldListResult
	 * @return EstimatesResearchFieldList
	 */
	public function setGetResearchFieldListResult($_GetResearchFieldListResult)
	{
		return ($this->GetResearchFieldListResult = $_GetResearchFieldListResult);
	}
	/**
	 * Get GetResearchFieldListResult
	 * @return XiEstimatesTypeEstimatesResearchFieldList
	 */
	public function getGetResearchFieldListResult()
	{
		return $this->GetResearchFieldListResult;
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