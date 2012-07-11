<?php
/**
 * Class file for XiMetalsTypeGetTopIndustryHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetTopIndustryHeadlinesResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetTopIndustryHeadlinesResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetTopIndustryHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfMarketNews
	 */
	public $GetTopIndustryHeadlinesResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeArrayOfMarketNews GetTopIndustryHeadlinesResult
	 * @return XiMetalsTypeGetTopIndustryHeadlinesResponse
	 */
	public function __construct($_GetTopIndustryHeadlinesResult = null)
	{
		parent::__construct(array('GetTopIndustryHeadlinesResult'=>new XiMetalsTypeArrayOfMarketNews($_GetTopIndustryHeadlinesResult)));
	}
	/**
	 * Set GetTopIndustryHeadlinesResult
	 * @param ArrayOfMarketNews GetTopIndustryHeadlinesResult
	 * @return ArrayOfMarketNews
	 */
	public function setGetTopIndustryHeadlinesResult($_GetTopIndustryHeadlinesResult)
	{
		return ($this->GetTopIndustryHeadlinesResult = $_GetTopIndustryHeadlinesResult);
	}
	/**
	 * Get GetTopIndustryHeadlinesResult
	 * @return XiMetalsTypeArrayOfMarketNews
	 */
	public function getGetTopIndustryHeadlinesResult()
	{
		return $this->GetTopIndustryHeadlinesResult;
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