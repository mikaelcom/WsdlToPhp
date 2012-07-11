<?php
/**
 * Class file for XiFundsTypeGetNewSymbolsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetNewSymbolsResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetNewSymbolsResponse extends XiFundsWsdlClass
{
	/**
	 * The GetNewSymbolsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfNewFund
	 */
	public $GetNewSymbolsResult;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfNewFund GetNewSymbolsResult
	 * @return XiFundsTypeGetNewSymbolsResponse
	 */
	public function __construct($_GetNewSymbolsResult = null)
	{
		parent::__construct(array('GetNewSymbolsResult'=>new XiFundsTypeArrayOfNewFund($_GetNewSymbolsResult)));
	}
	/**
	 * Set GetNewSymbolsResult
	 * @param ArrayOfNewFund GetNewSymbolsResult
	 * @return ArrayOfNewFund
	 */
	public function setGetNewSymbolsResult($_GetNewSymbolsResult)
	{
		return ($this->GetNewSymbolsResult = $_GetNewSymbolsResult);
	}
	/**
	 * Get GetNewSymbolsResult
	 * @return XiFundsTypeArrayOfNewFund
	 */
	public function getGetNewSymbolsResult()
	{
		return $this->GetNewSymbolsResult;
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