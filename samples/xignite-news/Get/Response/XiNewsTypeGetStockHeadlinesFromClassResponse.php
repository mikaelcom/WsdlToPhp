<?php
/**
 * Class file for XiNewsTypeGetStockHeadlinesFromClassResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetStockHeadlinesFromClassResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetStockHeadlinesFromClassResponse extends XiNewsWsdlClass
{
	/**
	 * The GetStockHeadlinesFromClassResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfStockNews
	 */
	public $GetStockHeadlinesFromClassResult;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfStockNews GetStockHeadlinesFromClassResult
	 * @return XiNewsTypeGetStockHeadlinesFromClassResponse
	 */
	public function __construct($_GetStockHeadlinesFromClassResult = null)
	{
		parent::__construct(array('GetStockHeadlinesFromClassResult'=>new XiNewsTypeArrayOfStockNews($_GetStockHeadlinesFromClassResult)));
	}
	/**
	 * Set GetStockHeadlinesFromClassResult
	 * @param ArrayOfStockNews GetStockHeadlinesFromClassResult
	 * @return ArrayOfStockNews
	 */
	public function setGetStockHeadlinesFromClassResult($_GetStockHeadlinesFromClassResult)
	{
		return ($this->GetStockHeadlinesFromClassResult = $_GetStockHeadlinesFromClassResult);
	}
	/**
	 * Get GetStockHeadlinesFromClassResult
	 * @return XiNewsTypeArrayOfStockNews
	 */
	public function getGetStockHeadlinesFromClassResult()
	{
		return $this->GetStockHeadlinesFromClassResult;
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