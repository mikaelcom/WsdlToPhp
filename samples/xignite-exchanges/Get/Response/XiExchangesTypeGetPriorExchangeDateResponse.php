<?php
/**
 * Class file for XiExchangesTypeGetPriorExchangeDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetPriorExchangeDateResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetPriorExchangeDateResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetPriorExchangeDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeExchangeDate
	 */
	public $GetPriorExchangeDateResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchangeDate GetPriorExchangeDateResult
	 * @return XiExchangesTypeGetPriorExchangeDateResponse
	 */
	public function __construct($_GetPriorExchangeDateResult = null)
	{
		parent::__construct(array('GetPriorExchangeDateResult'=>$_GetPriorExchangeDateResult));
	}
	/**
	 * Set GetPriorExchangeDateResult
	 * @param ExchangeDate GetPriorExchangeDateResult
	 * @return ExchangeDate
	 */
	public function setGetPriorExchangeDateResult($_GetPriorExchangeDateResult)
	{
		return ($this->GetPriorExchangeDateResult = $_GetPriorExchangeDateResult);
	}
	/**
	 * Get GetPriorExchangeDateResult
	 * @return XiExchangesTypeExchangeDate
	 */
	public function getGetPriorExchangeDateResult()
	{
		return $this->GetPriorExchangeDateResult;
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