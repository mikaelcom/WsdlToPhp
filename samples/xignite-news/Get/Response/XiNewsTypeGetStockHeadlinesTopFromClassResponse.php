<?php
/**
 * Class file for XiNewsTypeGetStockHeadlinesTopFromClassResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetStockHeadlinesTopFromClassResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetStockHeadlinesTopFromClassResponse extends XiNewsWsdlClass
{
	/**
	 * The GetStockHeadlinesTopFromClassResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfStockNews
	 */
	public $GetStockHeadlinesTopFromClassResult;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfStockNews GetStockHeadlinesTopFromClassResult
	 * @return XiNewsTypeGetStockHeadlinesTopFromClassResponse
	 */
	public function __construct($_GetStockHeadlinesTopFromClassResult = null)
	{
		parent::__construct(array('GetStockHeadlinesTopFromClassResult'=>new XiNewsTypeArrayOfStockNews($_GetStockHeadlinesTopFromClassResult)));
	}
	/**
	 * Set GetStockHeadlinesTopFromClassResult
	 * @param ArrayOfStockNews GetStockHeadlinesTopFromClassResult
	 * @return ArrayOfStockNews
	 */
	public function setGetStockHeadlinesTopFromClassResult($_GetStockHeadlinesTopFromClassResult)
	{
		return ($this->GetStockHeadlinesTopFromClassResult = $_GetStockHeadlinesTopFromClassResult);
	}
	/**
	 * Get GetStockHeadlinesTopFromClassResult
	 * @return XiNewsTypeArrayOfStockNews
	 */
	public function getGetStockHeadlinesTopFromClassResult()
	{
		return $this->GetStockHeadlinesTopFromClassResult;
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