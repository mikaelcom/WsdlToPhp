<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldListsByCollectionResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldListsByCollectionResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldListsByCollectionResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetResearchFieldListsByCollectionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfEstimatesResearchFieldList
	 */
	public $GetResearchFieldListsByCollectionResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeArrayOfEstimatesResearchFieldList GetResearchFieldListsByCollectionResult
	 * @return XiEstimatesTypeGetResearchFieldListsByCollectionResponse
	 */
	public function __construct($_GetResearchFieldListsByCollectionResult = null)
	{
		parent::__construct(array('GetResearchFieldListsByCollectionResult'=>new XiEstimatesTypeArrayOfEstimatesResearchFieldList($_GetResearchFieldListsByCollectionResult)));
	}
	/**
	 * Set GetResearchFieldListsByCollectionResult
	 * @param ArrayOfEstimatesResearchFieldList GetResearchFieldListsByCollectionResult
	 * @return ArrayOfEstimatesResearchFieldList
	 */
	public function setGetResearchFieldListsByCollectionResult($_GetResearchFieldListsByCollectionResult)
	{
		return ($this->GetResearchFieldListsByCollectionResult = $_GetResearchFieldListsByCollectionResult);
	}
	/**
	 * Get GetResearchFieldListsByCollectionResult
	 * @return XiEstimatesTypeArrayOfEstimatesResearchFieldList
	 */
	public function getGetResearchFieldListsByCollectionResult()
	{
		return $this->GetResearchFieldListsByCollectionResult;
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