<?php
/**
 * Class file for XiGlobalrealtimeoptionsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsServiceGet
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsServiceGet extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * Method to call GetBlackScholesOptionValue
	 * Meta informations :
	 * 	- documentation : Calculates the value of an option using the Black-Scholes formula.
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue::getType()
	 * @uses XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue::getStockPrice()
	 * @uses XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue::getStrikePrice()
	 * @uses XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue::getYearsToMaturity()
	 * @uses XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue::getRiskFreeRate()
	 * @uses XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue::getVolatility()
	 * @param XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue GetBlackScholesOptionValue
	 * @return XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValueResponse
	 */
	public function GetBlackScholesOptionValue(XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue $_XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBlackScholesOptionValue(array('Type'=>$_XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue->getType(),'StockPrice'=>$_XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue->getStockPrice(),'StrikePrice'=>$_XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue->getStrikePrice(),'YearsToMaturity'=>$_XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue->getYearsToMaturity(),'RiskFreeRate'=>$_XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue->getRiskFreeRate(),'Volatility'=>$_XiGlobalrealtimeoptionsTypeGetBlackScholesOptionValue->getVolatility())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain::getIdentifier()
	 * @uses XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain::getIdentifierType()
	 * @uses XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain::getSymbologyType()
	 * @uses XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain::getOptionExchange()
	 * @param XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain GetAllEquityOptionChain
	 * @return XiGlobalrealtimeoptionsTypeGetAllEquityOptionChainResponse
	 */
	public function GetAllEquityOptionChain(XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain $_XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllEquityOptionChain(array('Identifier'=>$_XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain->getIdentifierType(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain->getSymbologyType(),'OptionExchange'=>$_XiGlobalrealtimeoptionsTypeGetAllEquityOptionChain->getOptionExchange())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain::getIdentifier()
	 * @uses XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain::getIdentifierType()
	 * @uses XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain::getSymbologyType()
	 * @uses XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain::getOptionExchange()
	 * @param XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain GetAllExtendedEquityOptionChain
	 * @return XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChainResponse
	 */
	public function GetAllExtendedEquityOptionChain(XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain $_XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllExtendedEquityOptionChain(array('Identifier'=>$_XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain->getIdentifierType(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain->getSymbologyType(),'OptionExchange'=>$_XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChain->getOptionExchange())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionChain::getIdentifier()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionChain::getIdentifierType()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionChain::getMonth()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionChain::getYear()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionChain::getSymbologyType()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionChain::getOptionExchange()
	 * @param XiGlobalrealtimeoptionsTypeGetEquityOptionChain GetEquityOptionChain
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionChainResponse
	 */
	public function GetEquityOptionChain(XiGlobalrealtimeoptionsTypeGetEquityOptionChain $_XiGlobalrealtimeoptionsTypeGetEquityOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOptionChain(array('Identifier'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionChain->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionChain->getIdentifierType(),'Month'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionChain->getMonth(),'Year'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionChain->getYear(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionChain->getSymbologyType(),'OptionExchange'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionChain->getOptionExchange())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain::getIdentifier()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain::getIdentifierType()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain::getMonth()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain::getYear()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain::getSymbologyType()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain::getOptionExchange()
	 * @param XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain GetExtendedEquityOptionChain
	 * @return XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChainResponse
	 */
	public function GetExtendedEquityOptionChain(XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain $_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedEquityOptionChain(array('Identifier'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain->getIdentifierType(),'Month'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain->getMonth(),'Year'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain->getYear(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain->getSymbologyType(),'OptionExchange'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChain->getOptionExchange())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOption::getIdentifier()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOption::getIdentifierType()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOption::getType()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOption::getMonth()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOption::getYear()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOption::getStrikePrice()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOption::getSymbologyType()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOption::getOptionExchange()
	 * @param XiGlobalrealtimeoptionsTypeGetEquityOption GetEquityOption
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionResponse
	 */
	public function GetEquityOption(XiGlobalrealtimeoptionsTypeGetEquityOption $_XiGlobalrealtimeoptionsTypeGetEquityOption)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOption(array('Identifier'=>$_XiGlobalrealtimeoptionsTypeGetEquityOption->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeoptionsTypeGetEquityOption->getIdentifierType(),'Type'=>$_XiGlobalrealtimeoptionsTypeGetEquityOption->getType(),'Month'=>$_XiGlobalrealtimeoptionsTypeGetEquityOption->getMonth(),'Year'=>$_XiGlobalrealtimeoptionsTypeGetEquityOption->getYear(),'StrikePrice'=>$_XiGlobalrealtimeoptionsTypeGetEquityOption->getStrikePrice(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetEquityOption->getSymbologyType(),'OptionExchange'=>$_XiGlobalrealtimeoptionsTypeGetEquityOption->getOptionExchange())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOption::getIdentifier()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOption::getIdentifierType()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOption::getType()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOption::getMonth()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOption::getYear()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOption::getStrikePrice()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOption::getSymbologyType()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOption::getOptionExchange()
	 * @param XiGlobalrealtimeoptionsTypeGetExtendedEquityOption GetExtendedEquityOption
	 * @return XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionResponse
	 */
	public function GetExtendedEquityOption(XiGlobalrealtimeoptionsTypeGetExtendedEquityOption $_XiGlobalrealtimeoptionsTypeGetExtendedEquityOption)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedEquityOption(array('Identifier'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOption->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOption->getIdentifierType(),'Type'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOption->getType(),'Month'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOption->getMonth(),'Year'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOption->getYear(),'StrikePrice'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOption->getStrikePrice(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOption->getSymbologyType(),'OptionExchange'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOption->getOptionExchange())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol::getIdentifier()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol::getIdentifierType()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol::getType()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol::getMonth()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol::getYear()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol::getStrikePrice()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol::getSymbologyType()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol::getOptionExchange()
	 * @param XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol GetEquityOptionSymbol
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionSymbolResponse
	 */
	public function GetEquityOptionSymbol(XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol $_XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOptionSymbol(array('Identifier'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol->getIdentifierType(),'Type'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol->getType(),'Month'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol->getMonth(),'Year'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol->getYear(),'StrikePrice'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol->getStrikePrice(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol->getSymbologyType(),'OptionExchange'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionSymbol->getOptionExchange())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbol::getSymbol()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbol::getSymbologyType()
	 * @param XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbol GetEquityOptionBySymbol
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolResponse
	 */
	public function GetEquityOptionBySymbol(XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbol $_XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOptionBySymbol(array('Symbol'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbol->getSymbol(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbol->getSymbologyType())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbol::getSymbol()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbol::getSymbologyType()
	 * @param XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbol GetExtendedEquityOptionBySymbol
	 * @return XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolResponse
	 */
	public function GetExtendedEquityOptionBySymbol(XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbol $_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedEquityOptionBySymbol(array('Symbol'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbol->getSymbol(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbol->getSymbologyType())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols::getSymbols()
	 * @uses XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols::getSymbologyType()
	 * @param XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols GetEquityOptionBySymbols
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolsResponse
	 */
	public function GetEquityOptionBySymbols(XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols $_XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEquityOptionBySymbols(array('Symbols'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols->getSymbols(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols->getSymbologyType())));
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
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::setResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::getResult()
	 * @uses XiGlobalrealtimeoptionsWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbols::getSymbols()
	 * @uses XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbols::getSymbologyType()
	 * @param XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbols GetExtendedEquityOptionBySymbols
	 * @return XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolsResponse
	 */
	public function GetExtendedEquityOptionBySymbols(XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbols $_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbols)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedEquityOptionBySymbols(array('Symbols'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbols->getSymbols(),'SymbologyType'=>$_XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbols->getSymbologyType())));
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
	 * @return XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolsResponse
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