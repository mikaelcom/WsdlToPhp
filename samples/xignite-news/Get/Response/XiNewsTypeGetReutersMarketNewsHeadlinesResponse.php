<?php
/**
 * Class file for XiNewsTypeGetReutersMarketNewsHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetReutersMarketNewsHeadlinesResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetReutersMarketNewsHeadlinesResponse extends XiNewsWsdlClass
{
	/**
	 * The GetReutersMarketNewsHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfMarketNews
	 */
	public $GetReutersMarketNewsHeadlinesResult;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfMarketNews GetReutersMarketNewsHeadlinesResult
	 * @return XiNewsTypeGetReutersMarketNewsHeadlinesResponse
	 */
	public function __construct($_GetReutersMarketNewsHeadlinesResult = null)
	{
		parent::__construct(array('GetReutersMarketNewsHeadlinesResult'=>new XiNewsTypeArrayOfMarketNews($_GetReutersMarketNewsHeadlinesResult)));
	}
	/**
	 * Set GetReutersMarketNewsHeadlinesResult
	 * @param ArrayOfMarketNews GetReutersMarketNewsHeadlinesResult
	 * @return ArrayOfMarketNews
	 */
	public function setGetReutersMarketNewsHeadlinesResult($_GetReutersMarketNewsHeadlinesResult)
	{
		return ($this->GetReutersMarketNewsHeadlinesResult = $_GetReutersMarketNewsHeadlinesResult);
	}
	/**
	 * Get GetReutersMarketNewsHeadlinesResult
	 * @return XiNewsTypeArrayOfMarketNews
	 */
	public function getGetReutersMarketNewsHeadlinesResult()
	{
		return $this->GetReutersMarketNewsHeadlinesResult;
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