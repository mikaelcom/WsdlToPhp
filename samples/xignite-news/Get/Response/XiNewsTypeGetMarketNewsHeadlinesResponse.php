<?php
/**
 * Class file for XiNewsTypeGetMarketNewsHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetMarketNewsHeadlinesResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetMarketNewsHeadlinesResponse extends XiNewsWsdlClass
{
	/**
	 * The GetMarketNewsHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfMarketNews
	 */
	public $GetMarketNewsHeadlinesResult;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfMarketNews GetMarketNewsHeadlinesResult
	 * @return XiNewsTypeGetMarketNewsHeadlinesResponse
	 */
	public function __construct($_GetMarketNewsHeadlinesResult = null)
	{
		parent::__construct(array('GetMarketNewsHeadlinesResult'=>new XiNewsTypeArrayOfMarketNews($_GetMarketNewsHeadlinesResult)));
	}
	/**
	 * Set GetMarketNewsHeadlinesResult
	 * @param ArrayOfMarketNews GetMarketNewsHeadlinesResult
	 * @return ArrayOfMarketNews
	 */
	public function setGetMarketNewsHeadlinesResult($_GetMarketNewsHeadlinesResult)
	{
		return ($this->GetMarketNewsHeadlinesResult = $_GetMarketNewsHeadlinesResult);
	}
	/**
	 * Get GetMarketNewsHeadlinesResult
	 * @return XiNewsTypeArrayOfMarketNews
	 */
	public function getGetMarketNewsHeadlinesResult()
	{
		return $this->GetMarketNewsHeadlinesResult;
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