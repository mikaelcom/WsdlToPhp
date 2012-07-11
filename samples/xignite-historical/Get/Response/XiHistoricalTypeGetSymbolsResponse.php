<?php
/**
 * Class file for XiHistoricalTypeGetSymbolsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetSymbolsResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetSymbolsResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetSymbolsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeSymbolList
	 */
	public $GetSymbolsResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSymbolList GetSymbolsResult
	 * @return XiHistoricalTypeGetSymbolsResponse
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
	 * @return XiHistoricalTypeSymbolList
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