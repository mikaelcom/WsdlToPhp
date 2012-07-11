<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldListByCollectionResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldListByCollectionResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldListByCollectionResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetResearchFieldListByCollectionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeEstimatesResearchFieldList
	 */
	public $GetResearchFieldListByCollectionResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeEstimatesResearchFieldList GetResearchFieldListByCollectionResult
	 * @return XiEstimatesTypeGetResearchFieldListByCollectionResponse
	 */
	public function __construct($_GetResearchFieldListByCollectionResult = null)
	{
		parent::__construct(array('GetResearchFieldListByCollectionResult'=>$_GetResearchFieldListByCollectionResult));
	}
	/**
	 * Set GetResearchFieldListByCollectionResult
	 * @param EstimatesResearchFieldList GetResearchFieldListByCollectionResult
	 * @return EstimatesResearchFieldList
	 */
	public function setGetResearchFieldListByCollectionResult($_GetResearchFieldListByCollectionResult)
	{
		return ($this->GetResearchFieldListByCollectionResult = $_GetResearchFieldListByCollectionResult);
	}
	/**
	 * Get GetResearchFieldListByCollectionResult
	 * @return XiEstimatesTypeEstimatesResearchFieldList
	 */
	public function getGetResearchFieldListByCollectionResult()
	{
		return $this->GetResearchFieldListByCollectionResult;
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