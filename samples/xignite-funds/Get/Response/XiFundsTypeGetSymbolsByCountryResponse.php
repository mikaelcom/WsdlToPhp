<?php
/**
 * Class file for XiFundsTypeGetSymbolsByCountryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetSymbolsByCountryResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetSymbolsByCountryResponse extends XiFundsWsdlClass
{
	/**
	 * The GetSymbolsByCountryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeSymbolList
	 */
	public $GetSymbolsByCountryResult;
	/**
	 * Constructor
	 * @param XiFundsTypeSymbolList GetSymbolsByCountryResult
	 * @return XiFundsTypeGetSymbolsByCountryResponse
	 */
	public function __construct($_GetSymbolsByCountryResult = null)
	{
		parent::__construct(array('GetSymbolsByCountryResult'=>$_GetSymbolsByCountryResult));
	}
	/**
	 * Set GetSymbolsByCountryResult
	 * @param SymbolList GetSymbolsByCountryResult
	 * @return SymbolList
	 */
	public function setGetSymbolsByCountryResult($_GetSymbolsByCountryResult)
	{
		return ($this->GetSymbolsByCountryResult = $_GetSymbolsByCountryResult);
	}
	/**
	 * Get GetSymbolsByCountryResult
	 * @return XiFundsTypeSymbolList
	 */
	public function getGetSymbolsByCountryResult()
	{
		return $this->GetSymbolsByCountryResult;
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