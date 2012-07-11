<?php
/**
 * Class file for XiFuturesTypeListFrontMonthContractsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListFrontMonthContractsResponse
 * @date 08/07/2012
 */
class XiFuturesTypeListFrontMonthContractsResponse extends XiFuturesWsdlClass
{
	/**
	 * The ListFrontMonthContractsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFuture
	 */
	public $ListFrontMonthContractsResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFuture ListFrontMonthContractsResult
	 * @return XiFuturesTypeListFrontMonthContractsResponse
	 */
	public function __construct($_ListFrontMonthContractsResult = null)
	{
		parent::__construct(array('ListFrontMonthContractsResult'=>new XiFuturesTypeArrayOfFuture($_ListFrontMonthContractsResult)));
	}
	/**
	 * Set ListFrontMonthContractsResult
	 * @param ArrayOfFuture ListFrontMonthContractsResult
	 * @return ArrayOfFuture
	 */
	public function setListFrontMonthContractsResult($_ListFrontMonthContractsResult)
	{
		return ($this->ListFrontMonthContractsResult = $_ListFrontMonthContractsResult);
	}
	/**
	 * Get ListFrontMonthContractsResult
	 * @return XiFuturesTypeArrayOfFuture
	 */
	public function getListFrontMonthContractsResult()
	{
		return $this->ListFrontMonthContractsResult;
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