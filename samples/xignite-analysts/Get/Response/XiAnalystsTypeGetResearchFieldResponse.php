<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetResearchFieldResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeAnalystsResearchField
	 */
	public $GetResearchFieldResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeAnalystsResearchField GetResearchFieldResult
	 * @return XiAnalystsTypeGetResearchFieldResponse
	 */
	public function __construct($_GetResearchFieldResult = null)
	{
		parent::__construct(array('GetResearchFieldResult'=>$_GetResearchFieldResult));
	}
	/**
	 * Set GetResearchFieldResult
	 * @param AnalystsResearchField GetResearchFieldResult
	 * @return AnalystsResearchField
	 */
	public function setGetResearchFieldResult($_GetResearchFieldResult)
	{
		return ($this->GetResearchFieldResult = $_GetResearchFieldResult);
	}
	/**
	 * Get GetResearchFieldResult
	 * @return XiAnalystsTypeAnalystsResearchField
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