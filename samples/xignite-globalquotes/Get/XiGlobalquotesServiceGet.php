<?php
/**
 * Class file for XiGlobalquotesServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesServiceGet
 * @date 08/07/2012
 */
class XiGlobalquotesServiceGet extends XiGlobalquotesWsdlClass
{
	/**
	 * Method to call GetGlobalDelayedQuote
	 * Meta informations :
	 * 	- documentation : Returns a delayed quote for a global security.
	 * @uses XiGlobalquotesWsdlClass::getSoapClient()
	 * @uses XiGlobalquotesWsdlClass::setResult()
	 * @uses XiGlobalquotesWsdlClass::getResult()
	 * @uses XiGlobalquotesWsdlClass::saveLastError()
	 * @uses XiGlobalquotesTypeGetGlobalDelayedQuote::getIdentifier()
	 * @uses XiGlobalquotesTypeGetGlobalDelayedQuote::getIdentifierType()
	 * @param XiGlobalquotesTypeGetGlobalDelayedQuote GetGlobalDelayedQuote
	 * @return XiGlobalquotesTypeGetGlobalDelayedQuoteResponse
	 */
	public function GetGlobalDelayedQuote(XiGlobalquotesTypeGetGlobalDelayedQuote $_XiGlobalquotesTypeGetGlobalDelayedQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalDelayedQuote(array('Identifier'=>$_XiGlobalquotesTypeGetGlobalDelayedQuote->getIdentifier(),'IdentifierType'=>$_XiGlobalquotesTypeGetGlobalDelayedQuote->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalDelayedQuotes
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for a collection of global securities.
	 * @uses XiGlobalquotesWsdlClass::getSoapClient()
	 * @uses XiGlobalquotesWsdlClass::setResult()
	 * @uses XiGlobalquotesWsdlClass::getResult()
	 * @uses XiGlobalquotesWsdlClass::saveLastError()
	 * @uses XiGlobalquotesTypeGetGlobalDelayedQuotes::getIdentifiers()
	 * @uses XiGlobalquotesTypeGetGlobalDelayedQuotes::getIdentifierType()
	 * @param XiGlobalquotesTypeGetGlobalDelayedQuotes GetGlobalDelayedQuotes
	 * @return XiGlobalquotesTypeGetGlobalDelayedQuotesResponse
	 */
	public function GetGlobalDelayedQuotes(XiGlobalquotesTypeGetGlobalDelayedQuotes $_XiGlobalquotesTypeGetGlobalDelayedQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalDelayedQuotes(array('Identifiers'=>$_XiGlobalquotesTypeGetGlobalDelayedQuotes->getIdentifiers(),'IdentifierType'=>$_XiGlobalquotesTypeGetGlobalDelayedQuotes->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalTick
	 * Meta informations :
	 * 	- documentation : Returns a single tick for a global security.
	 * @uses XiGlobalquotesWsdlClass::getSoapClient()
	 * @uses XiGlobalquotesWsdlClass::setResult()
	 * @uses XiGlobalquotesWsdlClass::getResult()
	 * @uses XiGlobalquotesWsdlClass::saveLastError()
	 * @uses XiGlobalquotesTypeGetGlobalTick::getIdentifier()
	 * @uses XiGlobalquotesTypeGetGlobalTick::getIdentifierType()
	 * @uses XiGlobalquotesTypeGetGlobalTick::getTime()
	 * @uses XiGlobalquotesTypeGetGlobalTick::getPrecision()
	 * @uses XiGlobalquotesTypeGetGlobalTick::getPeriod()
	 * @param XiGlobalquotesTypeGetGlobalTick GetGlobalTick
	 * @return XiGlobalquotesTypeGetGlobalTickResponse
	 */
	public function GetGlobalTick(XiGlobalquotesTypeGetGlobalTick $_XiGlobalquotesTypeGetGlobalTick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalTick(array('Identifier'=>$_XiGlobalquotesTypeGetGlobalTick->getIdentifier(),'IdentifierType'=>$_XiGlobalquotesTypeGetGlobalTick->getIdentifierType(),'Time'=>$_XiGlobalquotesTypeGetGlobalTick->getTime(),'Precision'=>$_XiGlobalquotesTypeGetGlobalTick->getPrecision(),'Period'=>$_XiGlobalquotesTypeGetGlobalTick->getPeriod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalTicks
	 * Meta informations :
	 * 	- documentation : Returns a set of ticks for a global security.
	 * @uses XiGlobalquotesWsdlClass::getSoapClient()
	 * @uses XiGlobalquotesWsdlClass::setResult()
	 * @uses XiGlobalquotesWsdlClass::getResult()
	 * @uses XiGlobalquotesWsdlClass::saveLastError()
	 * @uses XiGlobalquotesTypeGetGlobalTicks::getIdentifier()
	 * @uses XiGlobalquotesTypeGetGlobalTicks::getIdentifierType()
	 * @uses XiGlobalquotesTypeGetGlobalTicks::getStartTime()
	 * @uses XiGlobalquotesTypeGetGlobalTicks::getEndTime()
	 * @uses XiGlobalquotesTypeGetGlobalTicks::getPrecision()
	 * @uses XiGlobalquotesTypeGetGlobalTicks::getPeriod()
	 * @param XiGlobalquotesTypeGetGlobalTicks GetGlobalTicks
	 * @return XiGlobalquotesTypeGetGlobalTicksResponse
	 */
	public function GetGlobalTicks(XiGlobalquotesTypeGetGlobalTicks $_XiGlobalquotesTypeGetGlobalTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalTicks(array('Identifier'=>$_XiGlobalquotesTypeGetGlobalTicks->getIdentifier(),'IdentifierType'=>$_XiGlobalquotesTypeGetGlobalTicks->getIdentifierType(),'StartTime'=>$_XiGlobalquotesTypeGetGlobalTicks->getStartTime(),'EndTime'=>$_XiGlobalquotesTypeGetGlobalTicks->getEndTime(),'Precision'=>$_XiGlobalquotesTypeGetGlobalTicks->getPrecision(),'Period'=>$_XiGlobalquotesTypeGetGlobalTicks->getPeriod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalDelayedVWAP
	 * Meta informations :
	 * 	- documentation : Returns a delayed VWAP for a global security.
	 * @uses XiGlobalquotesWsdlClass::getSoapClient()
	 * @uses XiGlobalquotesWsdlClass::setResult()
	 * @uses XiGlobalquotesWsdlClass::getResult()
	 * @uses XiGlobalquotesWsdlClass::saveLastError()
	 * @uses XiGlobalquotesTypeGetGlobalDelayedVWAP::getIdentifier()
	 * @uses XiGlobalquotesTypeGetGlobalDelayedVWAP::getIdentifierType()
	 * @param XiGlobalquotesTypeGetGlobalDelayedVWAP GetGlobalDelayedVWAP
	 * @return XiGlobalquotesTypeGetGlobalDelayedVWAPResponse
	 */
	public function GetGlobalDelayedVWAP(XiGlobalquotesTypeGetGlobalDelayedVWAP $_XiGlobalquotesTypeGetGlobalDelayedVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalDelayedVWAP(array('Identifier'=>$_XiGlobalquotesTypeGetGlobalDelayedVWAP->getIdentifier(),'IdentifierType'=>$_XiGlobalquotesTypeGetGlobalDelayedVWAP->getIdentifierType())));
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
	 * @return XiGlobalquotesTypeGetGlobalDelayedVWAPResponse
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