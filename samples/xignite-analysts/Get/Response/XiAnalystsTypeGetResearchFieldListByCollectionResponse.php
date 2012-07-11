<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldListByCollectionResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldListByCollectionResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldListByCollectionResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetResearchFieldListByCollectionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeAnalystsResearchFieldList
	 */
	public $GetResearchFieldListByCollectionResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeAnalystsResearchFieldList GetResearchFieldListByCollectionResult
	 * @return XiAnalystsTypeGetResearchFieldListByCollectionResponse
	 */
	public function __construct($_GetResearchFieldListByCollectionResult = null)
	{
		parent::__construct(array('GetResearchFieldListByCollectionResult'=>$_GetResearchFieldListByCollectionResult));
	}
	/**
	 * Set GetResearchFieldListByCollectionResult
	 * @param AnalystsResearchFieldList GetResearchFieldListByCollectionResult
	 * @return AnalystsResearchFieldList
	 */
	public function setGetResearchFieldListByCollectionResult($_GetResearchFieldListByCollectionResult)
	{
		return ($this->GetResearchFieldListByCollectionResult = $_GetResearchFieldListByCollectionResult);
	}
	/**
	 * Get GetResearchFieldListByCollectionResult
	 * @return XiAnalystsTypeAnalystsResearchFieldList
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