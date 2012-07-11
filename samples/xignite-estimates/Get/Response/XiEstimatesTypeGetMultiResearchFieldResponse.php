<?php
/**
 * Class file for XiEstimatesTypeGetMultiResearchFieldResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetMultiResearchFieldResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetMultiResearchFieldResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetMultiResearchFieldResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeMultiEstimatesResearchField
	 */
	public $GetMultiResearchFieldResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeMultiEstimatesResearchField GetMultiResearchFieldResult
	 * @return XiEstimatesTypeGetMultiResearchFieldResponse
	 */
	public function __construct($_GetMultiResearchFieldResult = null)
	{
		parent::__construct(array('GetMultiResearchFieldResult'=>$_GetMultiResearchFieldResult));
	}
	/**
	 * Set GetMultiResearchFieldResult
	 * @param MultiEstimatesResearchField GetMultiResearchFieldResult
	 * @return MultiEstimatesResearchField
	 */
	public function setGetMultiResearchFieldResult($_GetMultiResearchFieldResult)
	{
		return ($this->GetMultiResearchFieldResult = $_GetMultiResearchFieldResult);
	}
	/**
	 * Get GetMultiResearchFieldResult
	 * @return XiEstimatesTypeMultiEstimatesResearchField
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