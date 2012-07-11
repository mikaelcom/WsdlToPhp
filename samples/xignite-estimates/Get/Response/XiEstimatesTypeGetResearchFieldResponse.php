<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetResearchFieldResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeEstimatesResearchField
	 */
	public $GetResearchFieldResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeEstimatesResearchField GetResearchFieldResult
	 * @return XiEstimatesTypeGetResearchFieldResponse
	 */
	public function __construct($_GetResearchFieldResult = null)
	{
		parent::__construct(array('GetResearchFieldResult'=>$_GetResearchFieldResult));
	}
	/**
	 * Set GetResearchFieldResult
	 * @param EstimatesResearchField GetResearchFieldResult
	 * @return EstimatesResearchField
	 */
	public function setGetResearchFieldResult($_GetResearchFieldResult)
	{
		return ($this->GetResearchFieldResult = $_GetResearchFieldResult);
	}
	/**
	 * Get GetResearchFieldResult
	 * @return XiEstimatesTypeEstimatesResearchField
	 */
	public function getGetResearchFieldResult()
	{
		return $this->GetResearchFieldResult;
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