<?php
/**
 * Class file for XiFundHoldingsTypeListFundsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeListFundsResponse
 * @date 08/07/2012
 */
class XiFundHoldingsTypeListFundsResponse extends XiFundHoldingsWsdlClass
{
	/**
	 * The ListFundsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeArrayOfOLFund
	 */
	public $ListFundsResult;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeArrayOfOLFund ListFundsResult
	 * @return XiFundHoldingsTypeListFundsResponse
	 */
	public function __construct($_ListFundsResult = null)
	{
		parent::__construct(array('ListFundsResult'=>new XiFundHoldingsTypeArrayOfOLFund($_ListFundsResult)));
	}
	/**
	 * Set ListFundsResult
	 * @param ArrayOfOLFund ListFundsResult
	 * @return ArrayOfOLFund
	 */
	public function setListFundsResult($_ListFundsResult)
	{
		return ($this->ListFundsResult = $_ListFundsResult);
	}
	/**
	 * Get ListFundsResult
	 * @return XiFundHoldingsTypeArrayOfOLFund
	 */
	public function getListFundsResult()
	{
		return $this->ListFundsResult;
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