<?php
/**
 * Class file for SOFastQuoteTypeSymbol
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteTypeSymbol
 * @date 08/07/2012
 */
class SOFastQuoteTypeSymbol extends SOFastQuoteWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastQuoteTypeErr
	 */
	public $Error;
	/**
	 * The SymbolElements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOFastQuoteTypeSymbolElements
	 */
	public $SymbolElements;
	/**
	 * Constructor
	 * @param SOFastQuoteTypeErr Error
	 * @param SOFastQuoteTypeSymbolElements SymbolElements
	 * @return SOFastQuoteTypeSymbol
	 */
	public function __construct($_Error = null,$_SymbolElements = null)
	{
		parent::__construct(array('Error'=>$_Error,'SymbolElements'=>$_SymbolElements));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOFastQuoteTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set SymbolElements
	 * @param SymbolElements SymbolElements
	 * @return SymbolElements
	 */
	public function setSymbolElements($_SymbolElements)
	{
		return ($this->SymbolElements = $_SymbolElements);
	}
	/**
	 * Get SymbolElements
	 * @return SOFastQuoteTypeSymbolElements
	 */
	public function getSymbolElements()
	{
		return $this->SymbolElements;
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