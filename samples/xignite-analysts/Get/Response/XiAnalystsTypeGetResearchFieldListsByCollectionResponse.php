<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldListsByCollectionResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldListsByCollectionResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldListsByCollectionResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetResearchFieldListsByCollectionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeArrayOfAnalystsResearchFieldList
	 */
	public $GetResearchFieldListsByCollectionResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeArrayOfAnalystsResearchFieldList GetResearchFieldListsByCollectionResult
	 * @return XiAnalystsTypeGetResearchFieldListsByCollectionResponse
	 */
	public function __construct($_GetResearchFieldListsByCollectionResult = null)
	{
		parent::__construct(array('GetResearchFieldListsByCollectionResult'=>new XiAnalystsTypeArrayOfAnalystsResearchFieldList($_GetResearchFieldListsByCollectionResult)));
	}
	/**
	 * Set GetResearchFieldListsByCollectionResult
	 * @param ArrayOfAnalystsResearchFieldList GetResearchFieldListsByCollectionResult
	 * @return ArrayOfAnalystsResearchFieldList
	 */
	public function setGetResearchFieldListsByCollectionResult($_GetResearchFieldListsByCollectionResult)
	{
		return ($this->GetResearchFieldListsByCollectionResult = $_GetResearchFieldListsByCollectionResult);
	}
	/**
	 * Get GetResearchFieldListsByCollectionResult
	 * @return XiAnalystsTypeArrayOfAnalystsResearchFieldList
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