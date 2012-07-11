<?php
/**
 * Class file for XiBATSLastSaleServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleServiceGet
 * @date 08/07/2012
 */
class XiBATSLastSaleServiceGet extends XiBATSLastSaleWsdlClass
{
	/**
	 * Method to call GetLastSale
	 * Meta informations :
	 * 	- documentation : Returns real time stock quote for a given stock ticker
	 * @uses XiBATSLastSaleWsdlClass::getSoapClient()
	 * @uses XiBATSLastSaleWsdlClass::setResult()
	 * @uses XiBATSLastSaleWsdlClass::getResult()
	 * @uses XiBATSLastSaleWsdlClass::saveLastError()
	 * @uses XiBATSLastSaleTypeGetLastSale::getSymbol()
	 * @param XiBATSLastSaleTypeGetLastSale GetLastSale
	 * @return XiBATSLastSaleTypeGetLastSaleResponse
	 */
	public function GetLastSale(XiBATSLastSaleTypeGetLastSale $_XiBATSLastSaleTypeGetLastSale)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSale(array('Symbol'=>$_XiBATSLastSaleTypeGetLastSale->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSaleByIdentifier
	 * Meta informations :
	 * 	- documentation : Returns a real-time quote for a security based on the last trade execution.
	 * @uses XiBATSLastSaleWsdlClass::getSoapClient()
	 * @uses XiBATSLastSaleWsdlClass::setResult()
	 * @uses XiBATSLastSaleWsdlClass::getResult()
	 * @uses XiBATSLastSaleWsdlClass::saveLastError()
	 * @uses XiBATSLastSaleTypeGetLastSaleByIdentifier::getIdentifier()
	 * @uses XiBATSLastSaleTypeGetLastSaleByIdentifier::getIdentifierType()
	 * @param XiBATSLastSaleTypeGetLastSaleByIdentifier GetLastSaleByIdentifier
	 * @return XiBATSLastSaleTypeGetLastSaleByIdentifierResponse
	 */
	public function GetLastSaleByIdentifier(XiBATSLastSaleTypeGetLastSaleByIdentifier $_XiBATSLastSaleTypeGetLastSaleByIdentifier)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSaleByIdentifier(array('Identifier'=>$_XiBATSLastSaleTypeGetLastSaleByIdentifier->getIdentifier(),'IdentifierType'=>$_XiBATSLastSaleTypeGetLastSaleByIdentifier->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSales
	 * Meta informations :
	 * 	- documentation : Returns a collection of real time stock quotes for a comma-separated list of stock quotes.
	 * @uses XiBATSLastSaleWsdlClass::getSoapClient()
	 * @uses XiBATSLastSaleWsdlClass::setResult()
	 * @uses XiBATSLastSaleWsdlClass::getResult()
	 * @uses XiBATSLastSaleWsdlClass::saveLastError()
	 * @uses XiBATSLastSaleTypeGetLastSales::getSymbols()
	 * @param XiBATSLastSaleTypeGetLastSales GetLastSales
	 * @return XiBATSLastSaleTypeGetLastSalesResponse
	 */
	public function GetLastSales(XiBATSLastSaleTypeGetLastSales $_XiBATSLastSaleTypeGetLastSales)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSales(array('Symbols'=>$_XiBATSLastSaleTypeGetLastSales->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSaleByIdentifiers
	 * Meta informations :
	 * 	- documentation : Returns a collection of real time stock quotes for a comma-separated list of stock quotes.
	 * @uses XiBATSLastSaleWsdlClass::getSoapClient()
	 * @uses XiBATSLastSaleWsdlClass::setResult()
	 * @uses XiBATSLastSaleWsdlClass::getResult()
	 * @uses XiBATSLastSaleWsdlClass::saveLastError()
	 * @uses XiBATSLastSaleTypeGetLastSaleByIdentifiers::getIdentifiers()
	 * @uses XiBATSLastSaleTypeGetLastSaleByIdentifiers::getIdentifierType()
	 * @param XiBATSLastSaleTypeGetLastSaleByIdentifiers GetLastSaleByIdentifiers
	 * @return XiBATSLastSaleTypeGetLastSaleByIdentifiersResponse
	 */
	public function GetLastSaleByIdentifiers(XiBATSLastSaleTypeGetLastSaleByIdentifiers $_XiBATSLastSaleTypeGetLastSaleByIdentifiers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSaleByIdentifiers(array('Identifiers'=>$_XiBATSLastSaleTypeGetLastSaleByIdentifiers->getIdentifiers(),'IdentifierType'=>$_XiBATSLastSaleTypeGetLastSaleByIdentifiers->getIdentifierType())));
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
	 * @return XiBATSLastSaleTypeGetLastSaleByIdentifiersResponse
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