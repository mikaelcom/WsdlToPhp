<?php
/**
 * Class file for XiSecurityServiceLookup
 * @date 08/07/2012
 */
/**
 * Class XiSecurityServiceLookup
 * @date 08/07/2012
 */
class XiSecurityServiceLookup extends XiSecurityWsdlClass
{
	/**
	 * Method to call LookupBond
	 * Meta informations :
	 * 	- documentation : Lookup basic bond information by CUSIP.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeLookupBond::getCUSIP()
	 * @param XiSecurityTypeLookupBond LookupBond
	 * @return XiSecurityTypeLookupBondResponse
	 */
	public function LookupBond(XiSecurityTypeLookupBond $_XiSecurityTypeLookupBond)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupBond(array('CUSIP'=>$_XiSecurityTypeLookupBond->getCUSIP())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call Lookup
	 * Meta informations :
	 * 	- documentation : Returns the Name, Symbol, Category and Exchange for a list of stocks, funds or indexes matching an expression.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeLookup::getName()
	 * @uses XiSecurityTypeLookup::getType()
	 * @param XiSecurityTypeLookup Lookup
	 * @return XiSecurityTypeLookupResponse
	 */
	public function Lookup(XiSecurityTypeLookup $_XiSecurityTypeLookup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Lookup(array('Name'=>$_XiSecurityTypeLookup->getName(),'Type'=>$_XiSecurityTypeLookup->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LookupByExchange
	 * Meta informations :
	 * 	- documentation : Returns the Name, Symbol, Category and Exchange for a list of stocks, funds or indexes matching an expression.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeLookupByExchange::getName()
	 * @uses XiSecurityTypeLookupByExchange::getExchange()
	 * @param XiSecurityTypeLookupByExchange LookupByExchange
	 * @return XiSecurityTypeLookupByExchangeResponse
	 */
	public function LookupByExchange(XiSecurityTypeLookupByExchange $_XiSecurityTypeLookupByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupByExchange(array('Name'=>$_XiSecurityTypeLookupByExchange->getName(),'Exchange'=>$_XiSecurityTypeLookupByExchange->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LookupByExchanges
	 * Meta informations :
	 * 	- documentation : Returns the Name, Symbol, Category and Exchange for a list of stocks, funds or indexes matching an expression.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeLookupByExchanges::getName()
	 * @uses XiSecurityTypeLookupByExchanges::getExchanges()
	 * @param XiSecurityTypeLookupByExchanges LookupByExchanges
	 * @return XiSecurityTypeLookupByExchangesResponse
	 */
	public function LookupByExchanges(XiSecurityTypeLookupByExchanges $_XiSecurityTypeLookupByExchanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupByExchanges(array('Name'=>$_XiSecurityTypeLookupByExchanges->getName(),'Exchanges'=>$_XiSecurityTypeLookupByExchanges->getExchanges())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LookupStock
	 * Meta informations :
	 * 	- documentation : Returns the Name, Symbol, Category and Exchange for a list of stocks matching an expression.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeLookupStock::getName()
	 * @param XiSecurityTypeLookupStock LookupStock
	 * @return XiSecurityTypeLookupStockResponse
	 */
	public function LookupStock(XiSecurityTypeLookupStock $_XiSecurityTypeLookupStock)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupStock(array('Name'=>$_XiSecurityTypeLookupStock->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LookupFund
	 * Meta informations :
	 * 	- documentation : Returns the Name, Symbol, Category and Exchange for a list of funds matching an expression.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeLookupFund::getName()
	 * @param XiSecurityTypeLookupFund LookupFund
	 * @return XiSecurityTypeLookupFundResponse
	 */
	public function LookupFund(XiSecurityTypeLookupFund $_XiSecurityTypeLookupFund)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupFund(array('Name'=>$_XiSecurityTypeLookupFund->getName())));
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
	 * @return XiSecurityTypeLookupFundResponse
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