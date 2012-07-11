<?php
/**
 * Class file for XiNewsTypeGetStockHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetStockHeadlinesResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetStockHeadlinesResponse extends XiNewsWsdlClass
{
	/**
	 * The GetStockHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfStockNews
	 */
	public $GetStockHeadlinesResult;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfStockNews GetStockHeadlinesResult
	 * @return XiNewsTypeGetStockHeadlinesResponse
	 */
	public function __construct($_GetStockHeadlinesResult = null)
	{
		parent::__construct(array('GetStockHeadlinesResult'=>new XiNewsTypeArrayOfStockNews($_GetStockHeadlinesResult)));
	}
	/**
	 * Set GetStockHeadlinesResult
	 * @param ArrayOfStockNews GetStockHeadlinesResult
	 * @return ArrayOfStockNews
	 */
	public function setGetStockHeadlinesResult($_GetStockHeadlinesResult)
	{
		return ($this->GetStockHeadlinesResult = $_GetStockHeadlinesResult);
	}
	/**
	 * Get GetStockHeadlinesResult
	 * @return XiNewsTypeArrayOfStockNews
	 */
	public function getGetStockHeadlinesResult()
	{
		return $this->GetStockHeadlinesResult;
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