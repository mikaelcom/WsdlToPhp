<?php
/**
 * Class file for XiExchangesTypeGetNextExchangeDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetNextExchangeDateResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetNextExchangeDateResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetNextExchangeDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeExchangeDate
	 */
	public $GetNextExchangeDateResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchangeDate GetNextExchangeDateResult
	 * @return XiExchangesTypeGetNextExchangeDateResponse
	 */
	public function __construct($_GetNextExchangeDateResult = null)
	{
		parent::__construct(array('GetNextExchangeDateResult'=>$_GetNextExchangeDateResult));
	}
	/**
	 * Set GetNextExchangeDateResult
	 * @param ExchangeDate GetNextExchangeDateResult
	 * @return ExchangeDate
	 */
	public function setGetNextExchangeDateResult($_GetNextExchangeDateResult)
	{
		return ($this->GetNextExchangeDateResult = $_GetNextExchangeDateResult);
	}
	/**
	 * Get GetNextExchangeDateResult
	 * @return XiExchangesTypeExchangeDate
	 */
	public function getGetNextExchangeDateResult()
	{
		return $this->GetNextExchangeDateResult;
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