<?php
/**
 * Class file for SOFastQuoteTypeSymbolLookupResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteTypeSymbolLookupResponse
 * @date 08/07/2012
 */
class SOFastQuoteTypeSymbolLookupResponse extends SOFastQuoteWsdlClass
{
	/**
	 * The SymbolLookupResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastQuoteTypeSymbol
	 */
	public $SymbolLookupResult;
	/**
	 * Constructor
	 * @param SOFastQuoteTypeSymbol SymbolLookupResult
	 * @return SOFastQuoteTypeSymbolLookupResponse
	 */
	public function __construct($_SymbolLookupResult = null)
	{
		parent::__construct(array('SymbolLookupResult'=>$_SymbolLookupResult));
	}
	/**
	 * Set SymbolLookupResult
	 * @param Symbol SymbolLookupResult
	 * @return Symbol
	 */
	public function setSymbolLookupResult($_SymbolLookupResult)
	{
		return ($this->SymbolLookupResult = $_SymbolLookupResult);
	}
	/**
	 * Get SymbolLookupResult
	 * @return SOFastQuoteTypeSymbol
	 */
	public function getSymbolLookupResult()
	{
		return $this->SymbolLookupResult;
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