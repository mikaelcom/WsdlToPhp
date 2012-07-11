<?php
/**
 * Class file for XiFundsTypeGetSymbolsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetSymbolsResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetSymbolsResponse extends XiFundsWsdlClass
{
	/**
	 * The GetSymbolsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeSymbolList
	 */
	public $GetSymbolsResult;
	/**
	 * Constructor
	 * @param XiFundsTypeSymbolList GetSymbolsResult
	 * @return XiFundsTypeGetSymbolsResponse
	 */
	public function __construct($_GetSymbolsResult = null)
	{
		parent::__construct(array('GetSymbolsResult'=>$_GetSymbolsResult));
	}
	/**
	 * Set GetSymbolsResult
	 * @param SymbolList GetSymbolsResult
	 * @return SymbolList
	 */
	public function setGetSymbolsResult($_GetSymbolsResult)
	{
		return ($this->GetSymbolsResult = $_GetSymbolsResult);
	}
	/**
	 * Get GetSymbolsResult
	 * @return XiFundsTypeSymbolList
	 */
	public function getGetSymbolsResult()
	{
		return $this->GetSymbolsResult;
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