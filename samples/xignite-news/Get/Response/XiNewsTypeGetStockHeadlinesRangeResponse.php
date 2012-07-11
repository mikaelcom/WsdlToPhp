<?php
/**
 * Class file for XiNewsTypeGetStockHeadlinesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetStockHeadlinesRangeResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetStockHeadlinesRangeResponse extends XiNewsWsdlClass
{
	/**
	 * The GetStockHeadlinesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfStockNews
	 */
	public $GetStockHeadlinesRangeResult;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfStockNews GetStockHeadlinesRangeResult
	 * @return XiNewsTypeGetStockHeadlinesRangeResponse
	 */
	public function __construct($_GetStockHeadlinesRangeResult = null)
	{
		parent::__construct(array('GetStockHeadlinesRangeResult'=>new XiNewsTypeArrayOfStockNews($_GetStockHeadlinesRangeResult)));
	}
	/**
	 * Set GetStockHeadlinesRangeResult
	 * @param ArrayOfStockNews GetStockHeadlinesRangeResult
	 * @return ArrayOfStockNews
	 */
	public function setGetStockHeadlinesRangeResult($_GetStockHeadlinesRangeResult)
	{
		return ($this->GetStockHeadlinesRangeResult = $_GetStockHeadlinesRangeResult);
	}
	/**
	 * Get GetStockHeadlinesRangeResult
	 * @return XiNewsTypeArrayOfStockNews
	 */
	public function getGetStockHeadlinesRangeResult()
	{
		return $this->GetStockHeadlinesRangeResult;
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