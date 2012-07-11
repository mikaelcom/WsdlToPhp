<?php
/**
 * Class file for XiAnalystsTypeGetMultiResearchFieldResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetMultiResearchFieldResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetMultiResearchFieldResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetMultiResearchFieldResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeMultiAnalystsResearchField
	 */
	public $GetMultiResearchFieldResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeMultiAnalystsResearchField GetMultiResearchFieldResult
	 * @return XiAnalystsTypeGetMultiResearchFieldResponse
	 */
	public function __construct($_GetMultiResearchFieldResult = null)
	{
		parent::__construct(array('GetMultiResearchFieldResult'=>$_GetMultiResearchFieldResult));
	}
	/**
	 * Set GetMultiResearchFieldResult
	 * @param MultiAnalystsResearchField GetMultiResearchFieldResult
	 * @return MultiAnalystsResearchField
	 */
	public function setGetMultiResearchFieldResult($_GetMultiResearchFieldResult)
	{
		return ($this->GetMultiResearchFieldResult = $_GetMultiResearchFieldResult);
	}
	/**
	 * Get GetMultiResearchFieldResult
	 * @return XiAnalystsTypeMultiAnalystsResearchField
	 */
	public function getGetMultiResearchFieldResult()
	{
		return $this->GetMultiResearchFieldResult;
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