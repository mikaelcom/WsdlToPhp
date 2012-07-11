<?php
/**
 * Class file for XiGlobalrealtimeServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeServiceGet
 * @date 08/07/2012
 */
class XiGlobalrealtimeServiceGet extends XiGlobalrealtimeWsdlClass
{
	/**
	 * Method to call GetGlobalRealTimeQuote
	 * Meta informations :
	 * 	- documentation : Returns a realtime quote for a global security.
	 * @uses XiGlobalrealtimeWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeWsdlClass::setResult()
	 * @uses XiGlobalrealtimeWsdlClass::getResult()
	 * @uses XiGlobalrealtimeWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeTypeGetGlobalRealTimeQuote::getIdentifier()
	 * @uses XiGlobalrealtimeTypeGetGlobalRealTimeQuote::getIdentifierType()
	 * @param XiGlobalrealtimeTypeGetGlobalRealTimeQuote GetGlobalRealTimeQuote
	 * @return XiGlobalrealtimeTypeGetGlobalRealTimeQuoteResponse
	 */
	public function GetGlobalRealTimeQuote(XiGlobalrealtimeTypeGetGlobalRealTimeQuote $_XiGlobalrealtimeTypeGetGlobalRealTimeQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalRealTimeQuote(array('Identifier'=>$_XiGlobalrealtimeTypeGetGlobalRealTimeQuote->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeTypeGetGlobalRealTimeQuote->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalRealTimeQuotes
	 * Meta informations :
	 * 	- documentation : Returns realtime quotes for a collection of global securities.
	 * @uses XiGlobalrealtimeWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeWsdlClass::setResult()
	 * @uses XiGlobalrealtimeWsdlClass::getResult()
	 * @uses XiGlobalrealtimeWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeTypeGetGlobalRealTimeQuotes::getIdentifiers()
	 * @uses XiGlobalrealtimeTypeGetGlobalRealTimeQuotes::getIdentifierType()
	 * @param XiGlobalrealtimeTypeGetGlobalRealTimeQuotes GetGlobalRealTimeQuotes
	 * @return XiGlobalrealtimeTypeGetGlobalRealTimeQuotesResponse
	 */
	public function GetGlobalRealTimeQuotes(XiGlobalrealtimeTypeGetGlobalRealTimeQuotes $_XiGlobalrealtimeTypeGetGlobalRealTimeQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalRealTimeQuotes(array('Identifiers'=>$_XiGlobalrealtimeTypeGetGlobalRealTimeQuotes->getIdentifiers(),'IdentifierType'=>$_XiGlobalrealtimeTypeGetGlobalRealTimeQuotes->getIdentifierType())));
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
	 * @uses XiGlobalrealtimeWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeWsdlClass::setResult()
	 * @uses XiGlobalrealtimeWsdlClass::getResult()
	 * @uses XiGlobalrealtimeWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeTypeGetGlobalTick::getIdentifier()
	 * @uses XiGlobalrealtimeTypeGetGlobalTick::getIdentifierType()
	 * @uses XiGlobalrealtimeTypeGetGlobalTick::getTime()
	 * @uses XiGlobalrealtimeTypeGetGlobalTick::getPrecision()
	 * @uses XiGlobalrealtimeTypeGetGlobalTick::getPeriod()
	 * @param XiGlobalrealtimeTypeGetGlobalTick GetGlobalTick
	 * @return XiGlobalrealtimeTypeGetGlobalTickResponse
	 */
	public function GetGlobalTick(XiGlobalrealtimeTypeGetGlobalTick $_XiGlobalrealtimeTypeGetGlobalTick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalTick(array('Identifier'=>$_XiGlobalrealtimeTypeGetGlobalTick->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeTypeGetGlobalTick->getIdentifierType(),'Time'=>$_XiGlobalrealtimeTypeGetGlobalTick->getTime(),'Precision'=>$_XiGlobalrealtimeTypeGetGlobalTick->getPrecision(),'Period'=>$_XiGlobalrealtimeTypeGetGlobalTick->getPeriod())));
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
	 * @uses XiGlobalrealtimeWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeWsdlClass::setResult()
	 * @uses XiGlobalrealtimeWsdlClass::getResult()
	 * @uses XiGlobalrealtimeWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeTypeGetGlobalTicks::getIdentifier()
	 * @uses XiGlobalrealtimeTypeGetGlobalTicks::getIdentifierType()
	 * @uses XiGlobalrealtimeTypeGetGlobalTicks::getStartTime()
	 * @uses XiGlobalrealtimeTypeGetGlobalTicks::getEndTime()
	 * @uses XiGlobalrealtimeTypeGetGlobalTicks::getPrecision()
	 * @uses XiGlobalrealtimeTypeGetGlobalTicks::getPeriod()
	 * @param XiGlobalrealtimeTypeGetGlobalTicks GetGlobalTicks
	 * @return XiGlobalrealtimeTypeGetGlobalTicksResponse
	 */
	public function GetGlobalTicks(XiGlobalrealtimeTypeGetGlobalTicks $_XiGlobalrealtimeTypeGetGlobalTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalTicks(array('Identifier'=>$_XiGlobalrealtimeTypeGetGlobalTicks->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeTypeGetGlobalTicks->getIdentifierType(),'StartTime'=>$_XiGlobalrealtimeTypeGetGlobalTicks->getStartTime(),'EndTime'=>$_XiGlobalrealtimeTypeGetGlobalTicks->getEndTime(),'Precision'=>$_XiGlobalrealtimeTypeGetGlobalTicks->getPrecision(),'Period'=>$_XiGlobalrealtimeTypeGetGlobalTicks->getPeriod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalRealTimeVWAP
	 * Meta informations :
	 * 	- documentation : Returns a realtime VWAP for a global security.
	 * @uses XiGlobalrealtimeWsdlClass::getSoapClient()
	 * @uses XiGlobalrealtimeWsdlClass::setResult()
	 * @uses XiGlobalrealtimeWsdlClass::getResult()
	 * @uses XiGlobalrealtimeWsdlClass::saveLastError()
	 * @uses XiGlobalrealtimeTypeGetGlobalRealTimeVWAP::getIdentifier()
	 * @uses XiGlobalrealtimeTypeGetGlobalRealTimeVWAP::getIdentifierType()
	 * @param XiGlobalrealtimeTypeGetGlobalRealTimeVWAP GetGlobalRealTimeVWAP
	 * @return XiGlobalrealtimeTypeGetGlobalRealTimeVWAPResponse
	 */
	public function GetGlobalRealTimeVWAP(XiGlobalrealtimeTypeGetGlobalRealTimeVWAP $_XiGlobalrealtimeTypeGetGlobalRealTimeVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalRealTimeVWAP(array('Identifier'=>$_XiGlobalrealtimeTypeGetGlobalRealTimeVWAP->getIdentifier(),'IdentifierType'=>$_XiGlobalrealtimeTypeGetGlobalRealTimeVWAP->getIdentifierType())));
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
	 * @return XiGlobalrealtimeTypeGetGlobalRealTimeVWAPResponse
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