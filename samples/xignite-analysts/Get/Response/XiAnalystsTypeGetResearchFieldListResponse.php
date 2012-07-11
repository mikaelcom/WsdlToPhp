<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldListResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldListResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldListResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetResearchFieldListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeAnalystsResearchFieldList
	 */
	public $GetResearchFieldListResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeAnalystsResearchFieldList GetResearchFieldListResult
	 * @return XiAnalystsTypeGetResearchFieldListResponse
	 */
	public function __construct($_GetResearchFieldListResult = null)
	{
		parent::__construct(array('GetResearchFieldListResult'=>$_GetResearchFieldListResult));
	}
	/**
	 * Set GetResearchFieldListResult
	 * @param AnalystsResearchFieldList GetResearchFieldListResult
	 * @return AnalystsResearchFieldList
	 */
	public function setGetResearchFieldListResult($_GetResearchFieldListResult)
	{
		return ($this->GetResearchFieldListResult = $_GetResearchFieldListResult);
	}
	/**
	 * Get GetResearchFieldListResult
	 * @return XiAnalystsTypeAnalystsResearchFieldList
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