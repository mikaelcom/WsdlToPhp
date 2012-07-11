<?php
/**
 * Class file for XiExchangesTypeGetExchangeDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeDateResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeDateResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangeDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeStringResult
	 */
	public $GetExchangeDateResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeStringResult GetExchangeDateResult
	 * @return XiExchangesTypeGetExchangeDateResponse
	 */
	public function __construct($_GetExchangeDateResult = null)
	{
		parent::__construct(array('GetExchangeDateResult'=>$_GetExchangeDateResult));
	}
	/**
	 * Set GetExchangeDateResult
	 * @param StringResult GetExchangeDateResult
	 * @return StringResult
	 */
	public function setGetExchangeDateResult($_GetExchangeDateResult)
	{
		return ($this->GetExchangeDateResult = $_GetExchangeDateResult);
	}
	/**
	 * Get GetExchangeDateResult
	 * @return XiExchangesTypeStringResult
	 */
	public function getGetExchangeDateResult()
	{
		return $this->GetExchangeDateResult;
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