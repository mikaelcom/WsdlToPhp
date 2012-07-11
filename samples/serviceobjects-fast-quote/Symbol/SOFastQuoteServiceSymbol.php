<?php
/**
 * Class file for SOFastQuoteServiceSymbol
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteServiceSymbol
 * @date 08/07/2012
 */
class SOFastQuoteServiceSymbol extends SOFastQuoteWsdlClass
{
	/**
	 * Method to call SymbolLookup
	 * Meta informations :
	 * 	- documentation : Returns a symbol based on a CompanyName or IndexName.</br>Enter any part of the CompanyName or IndexName and SecurityType.</br>Possible Possible Security Type are are 'Stock' or 'Index'.
	 * @uses SOFastQuoteWsdlClass::getSoapClient()
	 * @uses SOFastQuoteWsdlClass::setResult()
	 * @uses SOFastQuoteWsdlClass::getResult()
	 * @uses SOFastQuoteWsdlClass::saveLastError()
	 * @uses SOFastQuoteTypeSymbolLookup::getName()
	 * @uses SOFastQuoteTypeSymbolLookup::getSecurityType()
	 * @uses SOFastQuoteTypeSymbolLookup::getLicenseKey()
	 * @param SOFastQuoteTypeSymbolLookup SymbolLookup
	 * @return SOFastQuoteTypeSymbolLookupResponse
	 */
	public function SymbolLookup(SOFastQuoteTypeSymbolLookup $_SOFastQuoteTypeSymbolLookup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SymbolLookup(array('Name'=>$_SOFastQuoteTypeSymbolLookup->getName(),'SecurityType'=>$_SOFastQuoteTypeSymbolLookup->getSecurityType(),'LicenseKey'=>$_SOFastQuoteTypeSymbolLookup->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return SOFastQuoteTypeSymbolLookupResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>