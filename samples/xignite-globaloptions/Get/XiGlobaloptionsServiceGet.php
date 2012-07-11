<?php
/**
 * Class file for XiGlobaloptionsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsServiceGet
 * @date 08/07/2012
 */
class XiGlobaloptionsServiceGet extends XiGlobaloptionsWsdlClass
{
	/**
	 * Method to call GetBlackScholesOptionValue
	 * Meta informations :
	 * 	- documentation : Calculates the value of an option using the Black-Scholes formula.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetBlackScholesOptionValue::getType()
	 * @uses XiGlobaloptionsTypeGetBlackScholesOptionValue::getStockPrice()
	 * @uses XiGlobaloptionsTypeGetBlackScholesOptionValue::getStrikePrice()
	 * @uses XiGlobaloptionsTypeGetBlackScholesOptionValue::getYearsToMaturity()
	 * @uses XiGlobaloptionsTypeGetBlackScholesOptionValue::getRiskFreeRate()
	 * @uses XiGlobaloptionsTypeGetBlackScholesOptionValue::getVolatility()
	 * @param XiGlobaloptionsTypeGetBlackScholesOptionValue GetBlackScholesOptionValue
	 * @return XiGlobaloptionsTypeGetBlackScholesOptionValueResponse
	 */
	public function GetBlackScholesOptionValue(XiGlobaloptionsTypeGetBlackScholesOptionValue $_XiGlobaloptionsTypeGetBlackScholesOptionValue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBlackScholesOptionValue(array('Type'=>$_XiGlobaloptionsTypeGetBlackScholesOptionValue->getType(),'StockPrice'=>$_XiGlobaloptionsTypeGetBlackScholesOptionValue->getStockPrice(),'StrikePrice'=>$_XiGlobaloptionsTypeGetBlackScholesOptionValue->getStrikePrice(),'YearsToMaturity'=>$_XiGlobaloptionsTypeGetBlackScholesOptionValue->getYearsToMaturity(),'RiskFreeRate'=>$_XiGlobaloptionsTypeGetBlackScholesOptionValue->getRiskFreeRate(),'Volatility'=>$_XiGlobaloptionsTypeGetBlackScholesOptionValue->getVolatility())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllEquityOptionChain
	 * Meta informations :
	 * 	- documentation : Returns options chains for an equity.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetAllEquityOptionChain::getIdentifier()
	 * @uses XiGlobaloptionsTypeGetAllEquityOptionChain::getIdentifierType()
	 * @uses XiGlobaloptionsTypeGetAllEquityOptionChain::getSymbologyType()
	 * @uses XiGlobaloptionsTypeGetAllEquityOptionChain::getOptionExchange()
	 * @param XiGlobaloptionsTypeGetAllEquityOptionChain GetAllEquityOptionChain
	 * @return XiGlobaloptionsTypeGetAllEquityOptionChainResponse
	 */
	public function GetAllEquityOptionChain(XiGlobaloptionsTypeGetAllEquityOptionChain $_XiGlobaloptionsTypeGetAllEquityOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllEquityOptionChain(array('Identifier'=>$_XiGlobaloptionsTypeGetAllEquityOptionChain->getIdentifier(),'IdentifierType'=>$_XiGlobaloptionsTypeGetAllEquityOptionChain->getIdentifierType(),'SymbologyType'=>$_XiGlobaloptionsTypeGetAllEquityOptionChain->getSymbologyType(),'OptionExchange'=>$_XiGlobaloptionsTypeGetAllEquityOptionChain->getOptionExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllExtendedEquityOptionChain
	 * Meta informations :
	 * 	- documentation : Returns extended options chains for an equity.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetAllExtendedEquityOptionChain::getIdentifier()
	 * @uses XiGlobaloptionsTypeGetAllExtendedEquityOptionChain::getIdentifierType()
	 * @uses XiGlobaloptionsTypeGetAllExtendedEquityOptionChain::getSymbologyType()
	 * @uses XiGlobaloptionsTypeGetAllExtendedEquityOptionChain::getOptionExchange()
	 * @param XiGlobaloptionsTypeGetAllExtendedEquityOptionChain GetAllExtendedEquityOptionChain
	 * @return XiGlobaloptionsTypeGetAllExtendedEquityOptionChainResponse
	 */
	public function GetAllExtendedEquityOptionChain(XiGlobaloptionsTypeGetAllExtendedEquityOptionChain $_XiGlobaloptionsTypeGetAllExtendedEquityOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllExtendedEquityOptionChain(array('Identifier'=>$_XiGlobaloptionsTypeGetAllExtendedEquityOptionChain->getIdentifier(),'IdentifierType'=>$_XiGlobaloptionsTypeGetAllExtendedEquityOptionChain->getIdentifierType(),'SymbologyType'=>$_XiGlobaloptionsTypeGetAllExtendedEquityOptionChain->getSymbologyType(),'OptionExchange'=>$_XiGlobaloptionsTypeGetAllExtendedEquityOptionChain->getOptionExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEquityOptionChain
	 * Meta informations :
	 * 	- documentation : Returns options chain for an equity.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetEquityOptionChain::getIdentifier()
	 * @uses XiGlobaloptionsTypeGetEquityOptionChain::getIdentifierType()
	 * @uses XiGlobaloptionsTypeGetEquityOptionChain::getMonth()
	 * @uses XiGlobaloptionsTypeGetEquityOptionChain::getYear()
	 * @uses XiGlobaloptionsTypeGetEquityOptionChain::getSymbologyType()
	 * @uses XiGlobaloptionsTypeGetEquityOptionChain::getOptionExchange()
	 * @param XiGlobaloptionsTypeGetEquityOptionChain GetEquityOptionChain
	 * @return XiGlobaloptionsTypeGetEquityOptionChainResponse
	 */
	public function GetEquityOptionChain(XiGlobaloptionsTypeGetEquityOptionChain $_XiGlobaloptionsTypeGetEquityOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOptionChain(array('Identifier'=>$_XiGlobaloptionsTypeGetEquityOptionChain->getIdentifier(),'IdentifierType'=>$_XiGlobaloptionsTypeGetEquityOptionChain->getIdentifierType(),'Month'=>$_XiGlobaloptionsTypeGetEquityOptionChain->getMonth(),'Year'=>$_XiGlobaloptionsTypeGetEquityOptionChain->getYear(),'SymbologyType'=>$_XiGlobaloptionsTypeGetEquityOptionChain->getSymbologyType(),'OptionExchange'=>$_XiGlobaloptionsTypeGetEquityOptionChain->getOptionExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedEquityOptionChain
	 * Meta informations :
	 * 	- documentation : Returns extended options chain for an equity.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionChain::getIdentifier()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionChain::getIdentifierType()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionChain::getMonth()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionChain::getYear()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionChain::getSymbologyType()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionChain::getOptionExchange()
	 * @param XiGlobaloptionsTypeGetExtendedEquityOptionChain GetExtendedEquityOptionChain
	 * @return XiGlobaloptionsTypeGetExtendedEquityOptionChainResponse
	 */
	public function GetExtendedEquityOptionChain(XiGlobaloptionsTypeGetExtendedEquityOptionChain $_XiGlobaloptionsTypeGetExtendedEquityOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedEquityOptionChain(array('Identifier'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionChain->getIdentifier(),'IdentifierType'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionChain->getIdentifierType(),'Month'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionChain->getMonth(),'Year'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionChain->getYear(),'SymbologyType'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionChain->getSymbologyType(),'OptionExchange'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionChain->getOptionExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEquityOption
	 * Meta informations :
	 * 	- documentation : Returns a specific equity option.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetEquityOption::getIdentifier()
	 * @uses XiGlobaloptionsTypeGetEquityOption::getIdentifierType()
	 * @uses XiGlobaloptionsTypeGetEquityOption::getType()
	 * @uses XiGlobaloptionsTypeGetEquityOption::getMonth()
	 * @uses XiGlobaloptionsTypeGetEquityOption::getYear()
	 * @uses XiGlobaloptionsTypeGetEquityOption::getStrikePrice()
	 * @uses XiGlobaloptionsTypeGetEquityOption::getSymbologyType()
	 * @uses XiGlobaloptionsTypeGetEquityOption::getOptionExchange()
	 * @param XiGlobaloptionsTypeGetEquityOption GetEquityOption
	 * @return XiGlobaloptionsTypeGetEquityOptionResponse
	 */
	public function GetEquityOption(XiGlobaloptionsTypeGetEquityOption $_XiGlobaloptionsTypeGetEquityOption)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOption(array('Identifier'=>$_XiGlobaloptionsTypeGetEquityOption->getIdentifier(),'IdentifierType'=>$_XiGlobaloptionsTypeGetEquityOption->getIdentifierType(),'Type'=>$_XiGlobaloptionsTypeGetEquityOption->getType(),'Month'=>$_XiGlobaloptionsTypeGetEquityOption->getMonth(),'Year'=>$_XiGlobaloptionsTypeGetEquityOption->getYear(),'StrikePrice'=>$_XiGlobaloptionsTypeGetEquityOption->getStrikePrice(),'SymbologyType'=>$_XiGlobaloptionsTypeGetEquityOption->getSymbologyType(),'OptionExchange'=>$_XiGlobaloptionsTypeGetEquityOption->getOptionExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedEquityOption
	 * Meta informations :
	 * 	- documentation : Returns a specific equity extended option.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOption::getIdentifier()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOption::getIdentifierType()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOption::getType()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOption::getMonth()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOption::getYear()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOption::getStrikePrice()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOption::getSymbologyType()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOption::getOptionExchange()
	 * @param XiGlobaloptionsTypeGetExtendedEquityOption GetExtendedEquityOption
	 * @return XiGlobaloptionsTypeGetExtendedEquityOptionResponse
	 */
	public function GetExtendedEquityOption(XiGlobaloptionsTypeGetExtendedEquityOption $_XiGlobaloptionsTypeGetExtendedEquityOption)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedEquityOption(array('Identifier'=>$_XiGlobaloptionsTypeGetExtendedEquityOption->getIdentifier(),'IdentifierType'=>$_XiGlobaloptionsTypeGetExtendedEquityOption->getIdentifierType(),'Type'=>$_XiGlobaloptionsTypeGetExtendedEquityOption->getType(),'Month'=>$_XiGlobaloptionsTypeGetExtendedEquityOption->getMonth(),'Year'=>$_XiGlobaloptionsTypeGetExtendedEquityOption->getYear(),'StrikePrice'=>$_XiGlobaloptionsTypeGetExtendedEquityOption->getStrikePrice(),'SymbologyType'=>$_XiGlobaloptionsTypeGetExtendedEquityOption->getSymbologyType(),'OptionExchange'=>$_XiGlobaloptionsTypeGetExtendedEquityOption->getOptionExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEquityOptionSymbol
	 * Meta informations :
	 * 	- documentation : Returns the symbol for an equity option based on month, year and strike price.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetEquityOptionSymbol::getIdentifier()
	 * @uses XiGlobaloptionsTypeGetEquityOptionSymbol::getIdentifierType()
	 * @uses XiGlobaloptionsTypeGetEquityOptionSymbol::getType()
	 * @uses XiGlobaloptionsTypeGetEquityOptionSymbol::getMonth()
	 * @uses XiGlobaloptionsTypeGetEquityOptionSymbol::getYear()
	 * @uses XiGlobaloptionsTypeGetEquityOptionSymbol::getStrikePrice()
	 * @uses XiGlobaloptionsTypeGetEquityOptionSymbol::getSymbologyType()
	 * @uses XiGlobaloptionsTypeGetEquityOptionSymbol::getOptionExchange()
	 * @param XiGlobaloptionsTypeGetEquityOptionSymbol GetEquityOptionSymbol
	 * @return XiGlobaloptionsTypeGetEquityOptionSymbolResponse
	 */
	public function GetEquityOptionSymbol(XiGlobaloptionsTypeGetEquityOptionSymbol $_XiGlobaloptionsTypeGetEquityOptionSymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOptionSymbol(array('Identifier'=>$_XiGlobaloptionsTypeGetEquityOptionSymbol->getIdentifier(),'IdentifierType'=>$_XiGlobaloptionsTypeGetEquityOptionSymbol->getIdentifierType(),'Type'=>$_XiGlobaloptionsTypeGetEquityOptionSymbol->getType(),'Month'=>$_XiGlobaloptionsTypeGetEquityOptionSymbol->getMonth(),'Year'=>$_XiGlobaloptionsTypeGetEquityOptionSymbol->getYear(),'StrikePrice'=>$_XiGlobaloptionsTypeGetEquityOptionSymbol->getStrikePrice(),'SymbologyType'=>$_XiGlobaloptionsTypeGetEquityOptionSymbol->getSymbologyType(),'OptionExchange'=>$_XiGlobaloptionsTypeGetEquityOptionSymbol->getOptionExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEquityOptionBySymbol
	 * Meta informations :
	 * 	- documentation : Returns a specific equity option.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetEquityOptionBySymbol::getSymbol()
	 * @uses XiGlobaloptionsTypeGetEquityOptionBySymbol::getSymbologyType()
	 * @param XiGlobaloptionsTypeGetEquityOptionBySymbol GetEquityOptionBySymbol
	 * @return XiGlobaloptionsTypeGetEquityOptionBySymbolResponse
	 */
	public function GetEquityOptionBySymbol(XiGlobaloptionsTypeGetEquityOptionBySymbol $_XiGlobaloptionsTypeGetEquityOptionBySymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOptionBySymbol(array('Symbol'=>$_XiGlobaloptionsTypeGetEquityOptionBySymbol->getSymbol(),'SymbologyType'=>$_XiGlobaloptionsTypeGetEquityOptionBySymbol->getSymbologyType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedEquityOptionBySymbol
	 * Meta informations :
	 * 	- documentation : Returns a specific equity extended option.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionBySymbol::getSymbol()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionBySymbol::getSymbologyType()
	 * @param XiGlobaloptionsTypeGetExtendedEquityOptionBySymbol GetExtendedEquityOptionBySymbol
	 * @return XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolResponse
	 */
	public function GetExtendedEquityOptionBySymbol(XiGlobaloptionsTypeGetExtendedEquityOptionBySymbol $_XiGlobaloptionsTypeGetExtendedEquityOptionBySymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedEquityOptionBySymbol(array('Symbol'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionBySymbol->getSymbol(),'SymbologyType'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionBySymbol->getSymbologyType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEquityOptionBySymbols
	 * Meta informations :
	 * 	- documentation : Returns an array of specific equity options.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetEquityOptionBySymbols::getSymbols()
	 * @uses XiGlobaloptionsTypeGetEquityOptionBySymbols::getSymbologyType()
	 * @param XiGlobaloptionsTypeGetEquityOptionBySymbols GetEquityOptionBySymbols
	 * @return XiGlobaloptionsTypeGetEquityOptionBySymbolsResponse
	 */
	public function GetEquityOptionBySymbols(XiGlobaloptionsTypeGetEquityOptionBySymbols $_XiGlobaloptionsTypeGetEquityOptionBySymbols)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOptionBySymbols(array('Symbols'=>$_XiGlobaloptionsTypeGetEquityOptionBySymbols->getSymbols(),'SymbologyType'=>$_XiGlobaloptionsTypeGetEquityOptionBySymbols->getSymbologyType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedEquityOptionBySymbols
	 * Meta informations :
	 * 	- documentation : Returns an array of specific equity extended options.
	 * @uses XiGlobaloptionsWsdlClass::getSoapClient()
	 * @uses XiGlobaloptionsWsdlClass::setResult()
	 * @uses XiGlobaloptionsWsdlClass::getResult()
	 * @uses XiGlobaloptionsWsdlClass::saveLastError()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionBySymbols::getSymbols()
	 * @uses XiGlobaloptionsTypeGetExtendedEquityOptionBySymbols::getSymbologyType()
	 * @param XiGlobaloptionsTypeGetExtendedEquityOptionBySymbols GetExtendedEquityOptionBySymbols
	 * @return XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolsResponse
	 */
	public function GetExtendedEquityOptionBySymbols(XiGlobaloptionsTypeGetExtendedEquityOptionBySymbols $_XiGlobaloptionsTypeGetExtendedEquityOptionBySymbols)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedEquityOptionBySymbols(array('Symbols'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionBySymbols->getSymbols(),'SymbologyType'=>$_XiGlobaloptionsTypeGetExtendedEquityOptionBySymbols->getSymbologyType())));
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
	 * @return XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolsResponse
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