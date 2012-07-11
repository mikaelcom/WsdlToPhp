<?php
/**
 * Class file for XiFuturesServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiFuturesServiceGet
 * @date 08/07/2012
 */
class XiFuturesServiceGet extends XiFuturesWsdlClass
{
	/**
	 * Method to call GetFutureSymbol
	 * Meta informations :
	 * 	- documentation : Returns the symbol for a future based on its month and year.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetFutureSymbol::getSymbol()
	 * @uses XiFuturesTypeGetFutureSymbol::getMonth()
	 * @uses XiFuturesTypeGetFutureSymbol::getYear()
	 * @param XiFuturesTypeGetFutureSymbol GetFutureSymbol
	 * @return XiFuturesTypeGetFutureSymbolResponse
	 */
	public function GetFutureSymbol(XiFuturesTypeGetFutureSymbol $_XiFuturesTypeGetFutureSymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFutureSymbol(array('Symbol'=>$_XiFuturesTypeGetFutureSymbol->getSymbol(),'Month'=>$_XiFuturesTypeGetFutureSymbol->getMonth(),'Year'=>$_XiFuturesTypeGetFutureSymbol->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetReverseFutureSymbol
	 * Meta informations :
	 * 	- documentation : Returns the symbol for a future based on its month and year.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetReverseFutureSymbol::getSymbol()
	 * @param XiFuturesTypeGetReverseFutureSymbol GetReverseFutureSymbol
	 * @return XiFuturesTypeGetReverseFutureSymbolResponse
	 */
	public function GetReverseFutureSymbol(XiFuturesTypeGetReverseFutureSymbol $_XiFuturesTypeGetReverseFutureSymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetReverseFutureSymbol(array('Symbol'=>$_XiFuturesTypeGetReverseFutureSymbol->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTerminationSchedule
	 * Meta informations :
	 * 	- documentation : Provide a termination schedule for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetTerminationSchedule::getSymbol()
	 * @uses XiFuturesTypeGetTerminationSchedule::getMonth()
	 * @uses XiFuturesTypeGetTerminationSchedule::getYear()
	 * @param XiFuturesTypeGetTerminationSchedule GetTerminationSchedule
	 * @return XiFuturesTypeGetTerminationScheduleResponse
	 */
	public function GetTerminationSchedule(XiFuturesTypeGetTerminationSchedule $_XiFuturesTypeGetTerminationSchedule)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTerminationSchedule(array('Symbol'=>$_XiFuturesTypeGetTerminationSchedule->getSymbol(),'Month'=>$_XiFuturesTypeGetTerminationSchedule->getMonth(),'Year'=>$_XiFuturesTypeGetTerminationSchedule->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNextFuture
	 * Meta informations :
	 * 	- documentation : Get the next immediate future contract for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetNextFuture::getSymbol()
	 * @param XiFuturesTypeGetNextFuture GetNextFuture
	 * @return XiFuturesTypeGetNextFutureResponse
	 */
	public function GetNextFuture(XiFuturesTypeGetNextFuture $_XiFuturesTypeGetNextFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNextFuture(array('Symbol'=>$_XiFuturesTypeGetNextFuture->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFuture
	 * Meta informations :
	 * 	- documentation : Provide information about a commodity future.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetFuture::getSymbol()
	 * @param XiFuturesTypeGetFuture GetFuture
	 * @return XiFuturesTypeGetFutureResponse
	 */
	public function GetFuture(XiFuturesTypeGetFuture $_XiFuturesTypeGetFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFuture(array('Symbol'=>$_XiFuturesTypeGetFuture->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedSwap
	 * Meta informations :
	 * 	- documentation : Returns a delayed quote for a NYMEX swap contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetDelayedSwap::getSymbol()
	 * @uses XiFuturesTypeGetDelayedSwap::getMonth()
	 * @uses XiFuturesTypeGetDelayedSwap::getYear()
	 * @param XiFuturesTypeGetDelayedSwap GetDelayedSwap
	 * @return XiFuturesTypeGetDelayedSwapResponse
	 */
	public function GetDelayedSwap(XiFuturesTypeGetDelayedSwap $_XiFuturesTypeGetDelayedSwap)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedSwap(array('Symbol'=>$_XiFuturesTypeGetDelayedSwap->getSymbol(),'Month'=>$_XiFuturesTypeGetDelayedSwap->getMonth(),'Year'=>$_XiFuturesTypeGetDelayedSwap->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedFuture
	 * Meta informations :
	 * 	- documentation : Returns a delayed quote for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetDelayedFuture::getSymbol()
	 * @uses XiFuturesTypeGetDelayedFuture::getMonth()
	 * @uses XiFuturesTypeGetDelayedFuture::getYear()
	 * @param XiFuturesTypeGetDelayedFuture GetDelayedFuture
	 * @return XiFuturesTypeGetDelayedFutureResponse
	 */
	public function GetDelayedFuture(XiFuturesTypeGetDelayedFuture $_XiFuturesTypeGetDelayedFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedFuture(array('Symbol'=>$_XiFuturesTypeGetDelayedFuture->getSymbol(),'Month'=>$_XiFuturesTypeGetDelayedFuture->getMonth(),'Year'=>$_XiFuturesTypeGetDelayedFuture->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedFrontFuture
	 * Meta informations :
	 * 	- documentation : Returns a delayed quote for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetDelayedFrontFuture::getSymbol()
	 * @param XiFuturesTypeGetDelayedFrontFuture GetDelayedFrontFuture
	 * @return XiFuturesTypeGetDelayedFrontFutureResponse
	 */
	public function GetDelayedFrontFuture(XiFuturesTypeGetDelayedFrontFuture $_XiFuturesTypeGetDelayedFrontFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedFrontFuture(array('Symbol'=>$_XiFuturesTypeGetDelayedFrontFuture->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllDelayedFutures
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for all contracts for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetAllDelayedFutures::getSymbol()
	 * @param XiFuturesTypeGetAllDelayedFutures GetAllDelayedFutures
	 * @return XiFuturesTypeGetAllDelayedFuturesResponse
	 */
	public function GetAllDelayedFutures(XiFuturesTypeGetAllDelayedFutures $_XiFuturesTypeGetAllDelayedFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllDelayedFutures(array('Symbol'=>$_XiFuturesTypeGetAllDelayedFutures->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopDelayedFutures
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for a given number of contract (front-future first) for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetTopDelayedFutures::getSymbol()
	 * @uses XiFuturesTypeGetTopDelayedFutures::getCount()
	 * @param XiFuturesTypeGetTopDelayedFutures GetTopDelayedFutures
	 * @return XiFuturesTypeGetTopDelayedFuturesResponse
	 */
	public function GetTopDelayedFutures(XiFuturesTypeGetTopDelayedFutures $_XiFuturesTypeGetTopDelayedFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopDelayedFutures(array('Symbol'=>$_XiFuturesTypeGetTopDelayedFutures->getSymbol(),'Count'=>$_XiFuturesTypeGetTopDelayedFutures->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllDelayedSwaps
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for all contracts for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetAllDelayedSwaps::getSymbol()
	 * @param XiFuturesTypeGetAllDelayedSwaps GetAllDelayedSwaps
	 * @return XiFuturesTypeGetAllDelayedSwapsResponse
	 */
	public function GetAllDelayedSwaps(XiFuturesTypeGetAllDelayedSwaps $_XiFuturesTypeGetAllDelayedSwaps)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllDelayedSwaps(array('Symbol'=>$_XiFuturesTypeGetAllDelayedSwaps->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedFutures
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for multiple future contracts.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetDelayedFutures::getSymbols()
	 * @uses XiFuturesTypeGetDelayedFutures::getMonth()
	 * @uses XiFuturesTypeGetDelayedFutures::getYear()
	 * @param XiFuturesTypeGetDelayedFutures GetDelayedFutures
	 * @return XiFuturesTypeGetDelayedFuturesResponse
	 */
	public function GetDelayedFutures(XiFuturesTypeGetDelayedFutures $_XiFuturesTypeGetDelayedFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedFutures(array('Symbols'=>$_XiFuturesTypeGetDelayedFutures->getSymbols(),'Month'=>$_XiFuturesTypeGetDelayedFutures->getMonth(),'Year'=>$_XiFuturesTypeGetDelayedFutures->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedFutureStrip
	 * Meta informations :
	 * 	- documentation : Returns a delayed future strip for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetDelayedFutureStrip::getSymbol()
	 * @uses XiFuturesTypeGetDelayedFutureStrip::getStripType()
	 * @param XiFuturesTypeGetDelayedFutureStrip GetDelayedFutureStrip
	 * @return XiFuturesTypeGetDelayedFutureStripResponse
	 */
	public function GetDelayedFutureStrip(XiFuturesTypeGetDelayedFutureStrip $_XiFuturesTypeGetDelayedFutureStrip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedFutureStrip(array('Symbol'=>$_XiFuturesTypeGetDelayedFutureStrip->getSymbol(),'StripType'=>$_XiFuturesTypeGetDelayedFutureStrip->getStripType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalFutureStrip
	 * Meta informations :
	 * 	- documentation : Returns a future strip for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalFutureStrip::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalFutureStrip::getAsOfDate()
	 * @uses XiFuturesTypeGetHistoricalFutureStrip::getStripType()
	 * @param XiFuturesTypeGetHistoricalFutureStrip GetHistoricalFutureStrip
	 * @return XiFuturesTypeGetHistoricalFutureStripResponse
	 */
	public function GetHistoricalFutureStrip(XiFuturesTypeGetHistoricalFutureStrip $_XiFuturesTypeGetHistoricalFutureStrip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalFutureStrip(array('Symbol'=>$_XiFuturesTypeGetHistoricalFutureStrip->getSymbol(),'AsOfDate'=>$_XiFuturesTypeGetHistoricalFutureStrip->getAsOfDate(),'StripType'=>$_XiFuturesTypeGetHistoricalFutureStrip->getStripType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSwapStrip
	 * Meta informations :
	 * 	- documentation : Returns a future strip for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalSwapStrip::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalSwapStrip::getAsOfDate()
	 * @uses XiFuturesTypeGetHistoricalSwapStrip::getStripType()
	 * @param XiFuturesTypeGetHistoricalSwapStrip GetHistoricalSwapStrip
	 * @return XiFuturesTypeGetHistoricalSwapStripResponse
	 */
	public function GetHistoricalSwapStrip(XiFuturesTypeGetHistoricalSwapStrip $_XiFuturesTypeGetHistoricalSwapStrip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwapStrip(array('Symbol'=>$_XiFuturesTypeGetHistoricalSwapStrip->getSymbol(),'AsOfDate'=>$_XiFuturesTypeGetHistoricalSwapStrip->getAsOfDate(),'StripType'=>$_XiFuturesTypeGetHistoricalSwapStrip->getStripType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedSpot
	 * Meta informations :
	 * 	- documentation : Returns a delayed spot quote for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetDelayedSpot::getSymbol()
	 * @param XiFuturesTypeGetDelayedSpot GetDelayedSpot
	 * @return XiFuturesTypeGetDelayedSpotResponse
	 */
	public function GetDelayedSpot(XiFuturesTypeGetDelayedSpot $_XiFuturesTypeGetDelayedSpot)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedSpot(array('Symbol'=>$_XiFuturesTypeGetDelayedSpot->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedSpots
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for multiple commodities.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetDelayedSpots::getSymbols()
	 * @param XiFuturesTypeGetDelayedSpots GetDelayedSpots
	 * @return XiFuturesTypeGetDelayedSpotsResponse
	 */
	public function GetDelayedSpots(XiFuturesTypeGetDelayedSpots $_XiFuturesTypeGetDelayedSpots)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedSpots(array('Symbols'=>$_XiFuturesTypeGetDelayedSpots->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedFutureBySession
	 * Meta informations :
	 * 	- documentation : Returns a delayed quote for a future contract by exchange session.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetDelayedFutureBySession::getSymbol()
	 * @uses XiFuturesTypeGetDelayedFutureBySession::getMonth()
	 * @uses XiFuturesTypeGetDelayedFutureBySession::getYear()
	 * @uses XiFuturesTypeGetDelayedFutureBySession::getSession()
	 * @param XiFuturesTypeGetDelayedFutureBySession GetDelayedFutureBySession
	 * @return XiFuturesTypeGetDelayedFutureBySessionResponse
	 */
	public function GetDelayedFutureBySession(XiFuturesTypeGetDelayedFutureBySession $_XiFuturesTypeGetDelayedFutureBySession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedFutureBySession(array('Symbol'=>$_XiFuturesTypeGetDelayedFutureBySession->getSymbol(),'Month'=>$_XiFuturesTypeGetDelayedFutureBySession->getMonth(),'Year'=>$_XiFuturesTypeGetDelayedFutureBySession->getYear(),'Session'=>$_XiFuturesTypeGetDelayedFutureBySession->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllDelayedFuturesBySession
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for all contracts for a commodity by exchange session.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetAllDelayedFuturesBySession::getSymbol()
	 * @uses XiFuturesTypeGetAllDelayedFuturesBySession::getSession()
	 * @param XiFuturesTypeGetAllDelayedFuturesBySession GetAllDelayedFuturesBySession
	 * @return XiFuturesTypeGetAllDelayedFuturesBySessionResponse
	 */
	public function GetAllDelayedFuturesBySession(XiFuturesTypeGetAllDelayedFuturesBySession $_XiFuturesTypeGetAllDelayedFuturesBySession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllDelayedFuturesBySession(array('Symbol'=>$_XiFuturesTypeGetAllDelayedFuturesBySession->getSymbol(),'Session'=>$_XiFuturesTypeGetAllDelayedFuturesBySession->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedFuturesBySession
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for multiple future contracts by exchange session.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetDelayedFuturesBySession::getSymbols()
	 * @uses XiFuturesTypeGetDelayedFuturesBySession::getMonth()
	 * @uses XiFuturesTypeGetDelayedFuturesBySession::getYear()
	 * @uses XiFuturesTypeGetDelayedFuturesBySession::getSession()
	 * @param XiFuturesTypeGetDelayedFuturesBySession GetDelayedFuturesBySession
	 * @return XiFuturesTypeGetDelayedFuturesBySessionResponse
	 */
	public function GetDelayedFuturesBySession(XiFuturesTypeGetDelayedFuturesBySession $_XiFuturesTypeGetDelayedFuturesBySession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedFuturesBySession(array('Symbols'=>$_XiFuturesTypeGetDelayedFuturesBySession->getSymbols(),'Month'=>$_XiFuturesTypeGetDelayedFuturesBySession->getMonth(),'Year'=>$_XiFuturesTypeGetDelayedFuturesBySession->getYear(),'Session'=>$_XiFuturesTypeGetDelayedFuturesBySession->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalFuture
	 * Meta informations :
	 * 	- documentation : Returns a historical quote for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalFuture::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalFuture::getMonth()
	 * @uses XiFuturesTypeGetHistoricalFuture::getYear()
	 * @uses XiFuturesTypeGetHistoricalFuture::getAsOfDate()
	 * @param XiFuturesTypeGetHistoricalFuture GetHistoricalFuture
	 * @return XiFuturesTypeGetHistoricalFutureResponse
	 */
	public function GetHistoricalFuture(XiFuturesTypeGetHistoricalFuture $_XiFuturesTypeGetHistoricalFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalFuture(array('Symbol'=>$_XiFuturesTypeGetHistoricalFuture->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalFuture->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalFuture->getYear(),'AsOfDate'=>$_XiFuturesTypeGetHistoricalFuture->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalFutures
	 * Meta informations :
	 * 	- documentation : Returns historical quotes for multiple future contracts.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalFutures::getSymbols()
	 * @uses XiFuturesTypeGetHistoricalFutures::getMonth()
	 * @uses XiFuturesTypeGetHistoricalFutures::getYear()
	 * @uses XiFuturesTypeGetHistoricalFutures::getAsOfDate()
	 * @param XiFuturesTypeGetHistoricalFutures GetHistoricalFutures
	 * @return XiFuturesTypeGetHistoricalFuturesResponse
	 */
	public function GetHistoricalFutures(XiFuturesTypeGetHistoricalFutures $_XiFuturesTypeGetHistoricalFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalFutures(array('Symbols'=>$_XiFuturesTypeGetHistoricalFutures->getSymbols(),'Month'=>$_XiFuturesTypeGetHistoricalFutures->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalFutures->getYear(),'AsOfDate'=>$_XiFuturesTypeGetHistoricalFutures->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllHistoricalFuturesWithStatus
	 * Meta informations :
	 * 	- documentation : Returns historical quotes for all contracts for a commodity as of a specific date including status information.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetAllHistoricalFuturesWithStatus::getSymbol()
	 * @uses XiFuturesTypeGetAllHistoricalFuturesWithStatus::getAsOfDate()
	 * @param XiFuturesTypeGetAllHistoricalFuturesWithStatus GetAllHistoricalFuturesWithStatus
	 * @return XiFuturesTypeGetAllHistoricalFuturesWithStatusResponse
	 */
	public function GetAllHistoricalFuturesWithStatus(XiFuturesTypeGetAllHistoricalFuturesWithStatus $_XiFuturesTypeGetAllHistoricalFuturesWithStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllHistoricalFuturesWithStatus(array('Symbol'=>$_XiFuturesTypeGetAllHistoricalFuturesWithStatus->getSymbol(),'AsOfDate'=>$_XiFuturesTypeGetAllHistoricalFuturesWithStatus->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllHistoricalFutures
	 * Meta informations :
	 * 	- documentation : Returns historical quotes for all contracts for a commodity as of a specific date.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetAllHistoricalFutures::getSymbol()
	 * @uses XiFuturesTypeGetAllHistoricalFutures::getAsOfDate()
	 * @param XiFuturesTypeGetAllHistoricalFutures GetAllHistoricalFutures
	 * @return XiFuturesTypeGetAllHistoricalFuturesResponse
	 */
	public function GetAllHistoricalFutures(XiFuturesTypeGetAllHistoricalFutures $_XiFuturesTypeGetAllHistoricalFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllHistoricalFutures(array('Symbol'=>$_XiFuturesTypeGetAllHistoricalFutures->getSymbol(),'AsOfDate'=>$_XiFuturesTypeGetAllHistoricalFutures->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalFutureRange
	 * Meta informations :
	 * 	- documentation : Returns a range of historical quotes for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalFutureRange::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalFutureRange::getMonth()
	 * @uses XiFuturesTypeGetHistoricalFutureRange::getYear()
	 * @uses XiFuturesTypeGetHistoricalFutureRange::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalFutureRange::getEndDate()
	 * @param XiFuturesTypeGetHistoricalFutureRange GetHistoricalFutureRange
	 * @return XiFuturesTypeGetHistoricalFutureRangeResponse
	 */
	public function GetHistoricalFutureRange(XiFuturesTypeGetHistoricalFutureRange $_XiFuturesTypeGetHistoricalFutureRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalFutureRange(array('Symbol'=>$_XiFuturesTypeGetHistoricalFutureRange->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalFutureRange->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalFutureRange->getYear(),'StartDate'=>$_XiFuturesTypeGetHistoricalFutureRange->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalFutureRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSwap
	 * Meta informations :
	 * 	- documentation : Returns a historical quote for a future swap.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalSwap::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalSwap::getMonth()
	 * @uses XiFuturesTypeGetHistoricalSwap::getYear()
	 * @uses XiFuturesTypeGetHistoricalSwap::getAsOfDate()
	 * @param XiFuturesTypeGetHistoricalSwap GetHistoricalSwap
	 * @return XiFuturesTypeGetHistoricalSwapResponse
	 */
	public function GetHistoricalSwap(XiFuturesTypeGetHistoricalSwap $_XiFuturesTypeGetHistoricalSwap)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwap(array('Symbol'=>$_XiFuturesTypeGetHistoricalSwap->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalSwap->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalSwap->getYear(),'AsOfDate'=>$_XiFuturesTypeGetHistoricalSwap->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSwapRange
	 * Meta informations :
	 * 	- documentation : Returns a range of historical quotes for a future swap.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalSwapRange::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalSwapRange::getMonth()
	 * @uses XiFuturesTypeGetHistoricalSwapRange::getYear()
	 * @uses XiFuturesTypeGetHistoricalSwapRange::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalSwapRange::getEndDate()
	 * @param XiFuturesTypeGetHistoricalSwapRange GetHistoricalSwapRange
	 * @return XiFuturesTypeGetHistoricalSwapRangeResponse
	 */
	public function GetHistoricalSwapRange(XiFuturesTypeGetHistoricalSwapRange $_XiFuturesTypeGetHistoricalSwapRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwapRange(array('Symbol'=>$_XiFuturesTypeGetHistoricalSwapRange->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalSwapRange->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalSwapRange->getYear(),'StartDate'=>$_XiFuturesTypeGetHistoricalSwapRange->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalSwapRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSwaps
	 * Meta informations :
	 * 	- documentation : Returns historical quotes for multiple future swaps.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalSwaps::getSymbols()
	 * @uses XiFuturesTypeGetHistoricalSwaps::getMonth()
	 * @uses XiFuturesTypeGetHistoricalSwaps::getYear()
	 * @uses XiFuturesTypeGetHistoricalSwaps::getAsOfDate()
	 * @param XiFuturesTypeGetHistoricalSwaps GetHistoricalSwaps
	 * @return XiFuturesTypeGetHistoricalSwapsResponse
	 */
	public function GetHistoricalSwaps(XiFuturesTypeGetHistoricalSwaps $_XiFuturesTypeGetHistoricalSwaps)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwaps(array('Symbols'=>$_XiFuturesTypeGetHistoricalSwaps->getSymbols(),'Month'=>$_XiFuturesTypeGetHistoricalSwaps->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalSwaps->getYear(),'AsOfDate'=>$_XiFuturesTypeGetHistoricalSwaps->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllHistoricalSwaps
	 * Meta informations :
	 * 	- documentation : Returns historical quotes for all contracts for a commodity swap as of a specific date.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetAllHistoricalSwaps::getSymbol()
	 * @uses XiFuturesTypeGetAllHistoricalSwaps::getAsOfDate()
	 * @param XiFuturesTypeGetAllHistoricalSwaps GetAllHistoricalSwaps
	 * @return XiFuturesTypeGetAllHistoricalSwapsResponse
	 */
	public function GetAllHistoricalSwaps(XiFuturesTypeGetAllHistoricalSwaps $_XiFuturesTypeGetAllHistoricalSwaps)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllHistoricalSwaps(array('Symbol'=>$_XiFuturesTypeGetAllHistoricalSwaps->getSymbol(),'AsOfDate'=>$_XiFuturesTypeGetAllHistoricalSwaps->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCommodityRange
	 * Meta informations :
	 * 	- documentation : Returns a range of historical quotes for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalCommodityRange::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalCommodityRange::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityRange::getEndDate()
	 * @param XiFuturesTypeGetHistoricalCommodityRange GetHistoricalCommodityRange
	 * @return XiFuturesTypeGetHistoricalCommodityRangeResponse
	 */
	public function GetHistoricalCommodityRange(XiFuturesTypeGetHistoricalCommodityRange $_XiFuturesTypeGetHistoricalCommodityRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCommodityRange(array('Symbol'=>$_XiFuturesTypeGetHistoricalCommodityRange->getSymbol(),'StartDate'=>$_XiFuturesTypeGetHistoricalCommodityRange->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalCommodityRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCommodityMonthlyRange
	 * Meta informations :
	 * 	- documentation : Returns a range of historical quotes for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalCommodityMonthlyRange::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalCommodityMonthlyRange::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityMonthlyRange::getEndDate()
	 * @param XiFuturesTypeGetHistoricalCommodityMonthlyRange GetHistoricalCommodityMonthlyRange
	 * @return XiFuturesTypeGetHistoricalCommodityMonthlyRangeResponse
	 */
	public function GetHistoricalCommodityMonthlyRange(XiFuturesTypeGetHistoricalCommodityMonthlyRange $_XiFuturesTypeGetHistoricalCommodityMonthlyRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCommodityMonthlyRange(array('Symbol'=>$_XiFuturesTypeGetHistoricalCommodityMonthlyRange->getSymbol(),'StartDate'=>$_XiFuturesTypeGetHistoricalCommodityMonthlyRange->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalCommodityMonthlyRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSpotRange
	 * Meta informations :
	 * 	- documentation : Returns a range of commodity spot prices for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalSpotRange::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalSpotRange::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalSpotRange::getEndDate()
	 * @param XiFuturesTypeGetHistoricalSpotRange GetHistoricalSpotRange
	 * @return XiFuturesTypeGetHistoricalSpotRangeResponse
	 */
	public function GetHistoricalSpotRange(XiFuturesTypeGetHistoricalSpotRange $_XiFuturesTypeGetHistoricalSpotRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSpotRange(array('Symbol'=>$_XiFuturesTypeGetHistoricalSpotRange->getSymbol(),'StartDate'=>$_XiFuturesTypeGetHistoricalSpotRange->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalSpotRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSpotMonthlyRange
	 * Meta informations :
	 * 	- documentation : Returns a range of commodity spot prices for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalSpotMonthlyRange::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalSpotMonthlyRange::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalSpotMonthlyRange::getEndDate()
	 * @param XiFuturesTypeGetHistoricalSpotMonthlyRange GetHistoricalSpotMonthlyRange
	 * @return XiFuturesTypeGetHistoricalSpotMonthlyRangeResponse
	 */
	public function GetHistoricalSpotMonthlyRange(XiFuturesTypeGetHistoricalSpotMonthlyRange $_XiFuturesTypeGetHistoricalSpotMonthlyRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSpotMonthlyRange(array('Symbol'=>$_XiFuturesTypeGetHistoricalSpotMonthlyRange->getSymbol(),'StartDate'=>$_XiFuturesTypeGetHistoricalSpotMonthlyRange->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalSpotMonthlyRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTick
	 * Meta informations :
	 * 	- documentation : Returns an intraday tick for a future contract as of a specific time in the day.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetTick::getSymbol()
	 * @uses XiFuturesTypeGetTick::getMonth()
	 * @uses XiFuturesTypeGetTick::getYear()
	 * @uses XiFuturesTypeGetTick::getTime()
	 * @param XiFuturesTypeGetTick GetTick
	 * @return XiFuturesTypeGetTickResponse
	 */
	public function GetTick(XiFuturesTypeGetTick $_XiFuturesTypeGetTick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTick(array('Symbol'=>$_XiFuturesTypeGetTick->getSymbol(),'Month'=>$_XiFuturesTypeGetTick->getMonth(),'Year'=>$_XiFuturesTypeGetTick->getYear(),'Time'=>$_XiFuturesTypeGetTick->getTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTicks
	 * Meta informations :
	 * 	- documentation : Returns a range of intraday ticks for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetTicks::getSymbol()
	 * @uses XiFuturesTypeGetTicks::getMonth()
	 * @uses XiFuturesTypeGetTicks::getYear()
	 * @uses XiFuturesTypeGetTicks::getStartTime()
	 * @uses XiFuturesTypeGetTicks::getEndTime()
	 * @uses XiFuturesTypeGetTicks::getTickPrecision()
	 * @uses XiFuturesTypeGetTicks::getTickPeriods()
	 * @param XiFuturesTypeGetTicks GetTicks
	 * @return XiFuturesTypeGetTicksResponse
	 */
	public function GetTicks(XiFuturesTypeGetTicks $_XiFuturesTypeGetTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTicks(array('Symbol'=>$_XiFuturesTypeGetTicks->getSymbol(),'Month'=>$_XiFuturesTypeGetTicks->getMonth(),'Year'=>$_XiFuturesTypeGetTicks->getYear(),'StartTime'=>$_XiFuturesTypeGetTicks->getStartTime(),'EndTime'=>$_XiFuturesTypeGetTicks->getEndTime(),'TickPrecision'=>$_XiFuturesTypeGetTicks->getTickPrecision(),'TickPeriods'=>$_XiFuturesTypeGetTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalTicks
	 * Meta informations :
	 * 	- documentation : Returns a historical range of ticks for a security.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalTicks::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalTicks::getMonth()
	 * @uses XiFuturesTypeGetHistoricalTicks::getYear()
	 * @uses XiFuturesTypeGetHistoricalTicks::getHistoricalPeriod()
	 * @uses XiFuturesTypeGetHistoricalTicks::getStartTime()
	 * @uses XiFuturesTypeGetHistoricalTicks::getEndTime()
	 * @uses XiFuturesTypeGetHistoricalTicks::getTickPrecision()
	 * @uses XiFuturesTypeGetHistoricalTicks::getTickPeriods()
	 * @param XiFuturesTypeGetHistoricalTicks GetHistoricalTicks
	 * @return XiFuturesTypeGetHistoricalTicksResponse
	 */
	public function GetHistoricalTicks(XiFuturesTypeGetHistoricalTicks $_XiFuturesTypeGetHistoricalTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalTicks(array('Symbol'=>$_XiFuturesTypeGetHistoricalTicks->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalTicks->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalTicks->getYear(),'HistoricalPeriod'=>$_XiFuturesTypeGetHistoricalTicks->getHistoricalPeriod(),'StartTime'=>$_XiFuturesTypeGetHistoricalTicks->getStartTime(),'EndTime'=>$_XiFuturesTypeGetHistoricalTicks->getEndTime(),'TickPrecision'=>$_XiFuturesTypeGetHistoricalTicks->getTickPrecision(),'TickPeriods'=>$_XiFuturesTypeGetHistoricalTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalTicksAsOfDate
	 * Meta informations :
	 * 	- documentation : Returns a historical range of ticks for a security.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalTicksAsOfDate::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalTicksAsOfDate::getMonth()
	 * @uses XiFuturesTypeGetHistoricalTicksAsOfDate::getYear()
	 * @uses XiFuturesTypeGetHistoricalTicksAsOfDate::getAsOfDate()
	 * @uses XiFuturesTypeGetHistoricalTicksAsOfDate::getStartTime()
	 * @uses XiFuturesTypeGetHistoricalTicksAsOfDate::getEndTime()
	 * @uses XiFuturesTypeGetHistoricalTicksAsOfDate::getTickPrecision()
	 * @uses XiFuturesTypeGetHistoricalTicksAsOfDate::getTickPeriods()
	 * @param XiFuturesTypeGetHistoricalTicksAsOfDate GetHistoricalTicksAsOfDate
	 * @return XiFuturesTypeGetHistoricalTicksAsOfDateResponse
	 */
	public function GetHistoricalTicksAsOfDate(XiFuturesTypeGetHistoricalTicksAsOfDate $_XiFuturesTypeGetHistoricalTicksAsOfDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalTicksAsOfDate(array('Symbol'=>$_XiFuturesTypeGetHistoricalTicksAsOfDate->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalTicksAsOfDate->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalTicksAsOfDate->getYear(),'AsOfDate'=>$_XiFuturesTypeGetHistoricalTicksAsOfDate->getAsOfDate(),'StartTime'=>$_XiFuturesTypeGetHistoricalTicksAsOfDate->getStartTime(),'EndTime'=>$_XiFuturesTypeGetHistoricalTicksAsOfDate->getEndTime(),'TickPrecision'=>$_XiFuturesTypeGetHistoricalTicksAsOfDate->getTickPrecision(),'TickPeriods'=>$_XiFuturesTypeGetHistoricalTicksAsOfDate->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayFutureChart
	 * Meta informations :
	 * 	- documentation : Get a standard intraday price chart for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetIntradayFutureChart::getSymbol()
	 * @uses XiFuturesTypeGetIntradayFutureChart::getMonth()
	 * @uses XiFuturesTypeGetIntradayFutureChart::getYear()
	 * @uses XiFuturesTypeGetIntradayFutureChart::getStartTime()
	 * @uses XiFuturesTypeGetIntradayFutureChart::getEndTime()
	 * @uses XiFuturesTypeGetIntradayFutureChart::getStyle()
	 * @uses XiFuturesTypeGetIntradayFutureChart::getWidth()
	 * @uses XiFuturesTypeGetIntradayFutureChart::getHeight()
	 * @uses XiFuturesTypeGetIntradayFutureChart::getPreset()
	 * @param XiFuturesTypeGetIntradayFutureChart GetIntradayFutureChart
	 * @return XiFuturesTypeGetIntradayFutureChartResponse
	 */
	public function GetIntradayFutureChart(XiFuturesTypeGetIntradayFutureChart $_XiFuturesTypeGetIntradayFutureChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayFutureChart(array('Symbol'=>$_XiFuturesTypeGetIntradayFutureChart->getSymbol(),'Month'=>$_XiFuturesTypeGetIntradayFutureChart->getMonth(),'Year'=>$_XiFuturesTypeGetIntradayFutureChart->getYear(),'StartTime'=>$_XiFuturesTypeGetIntradayFutureChart->getStartTime(),'EndTime'=>$_XiFuturesTypeGetIntradayFutureChart->getEndTime(),'Style'=>$_XiFuturesTypeGetIntradayFutureChart->getStyle(),'Width'=>$_XiFuturesTypeGetIntradayFutureChart->getWidth(),'Height'=>$_XiFuturesTypeGetIntradayFutureChart->getHeight(),'Preset'=>$_XiFuturesTypeGetIntradayFutureChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayFutureChartBinary
	 * Meta informations :
	 * 	- documentation : Get a standard intraday price chart for a future contract in binary format.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetIntradayFutureChartBinary::getSymbol()
	 * @uses XiFuturesTypeGetIntradayFutureChartBinary::getMonth()
	 * @uses XiFuturesTypeGetIntradayFutureChartBinary::getYear()
	 * @uses XiFuturesTypeGetIntradayFutureChartBinary::getStartTime()
	 * @uses XiFuturesTypeGetIntradayFutureChartBinary::getEndTime()
	 * @uses XiFuturesTypeGetIntradayFutureChartBinary::getStyle()
	 * @uses XiFuturesTypeGetIntradayFutureChartBinary::getWidth()
	 * @uses XiFuturesTypeGetIntradayFutureChartBinary::getHeight()
	 * @uses XiFuturesTypeGetIntradayFutureChartBinary::getPreset()
	 * @param XiFuturesTypeGetIntradayFutureChartBinary GetIntradayFutureChartBinary
	 * @return XiFuturesTypeGetIntradayFutureChartBinaryResponse
	 */
	public function GetIntradayFutureChartBinary(XiFuturesTypeGetIntradayFutureChartBinary $_XiFuturesTypeGetIntradayFutureChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayFutureChartBinary(array('Symbol'=>$_XiFuturesTypeGetIntradayFutureChartBinary->getSymbol(),'Month'=>$_XiFuturesTypeGetIntradayFutureChartBinary->getMonth(),'Year'=>$_XiFuturesTypeGetIntradayFutureChartBinary->getYear(),'StartTime'=>$_XiFuturesTypeGetIntradayFutureChartBinary->getStartTime(),'EndTime'=>$_XiFuturesTypeGetIntradayFutureChartBinary->getEndTime(),'Style'=>$_XiFuturesTypeGetIntradayFutureChartBinary->getStyle(),'Width'=>$_XiFuturesTypeGetIntradayFutureChartBinary->getWidth(),'Height'=>$_XiFuturesTypeGetIntradayFutureChartBinary->getHeight(),'Preset'=>$_XiFuturesTypeGetIntradayFutureChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayFutureChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom intraday price chart for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustom::getSymbol()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustom::getMonth()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustom::getYear()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustom::getStartTime()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustom::getEndTime()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustom::getStyle()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustom::getWidth()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustom::getHeight()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustom::getDesign()
	 * @param XiFuturesTypeGetIntradayFutureChartCustom GetIntradayFutureChartCustom
	 * @return XiFuturesTypeGetIntradayFutureChartCustomResponse
	 */
	public function GetIntradayFutureChartCustom(XiFuturesTypeGetIntradayFutureChartCustom $_XiFuturesTypeGetIntradayFutureChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayFutureChartCustom(array('Symbol'=>$_XiFuturesTypeGetIntradayFutureChartCustom->getSymbol(),'Month'=>$_XiFuturesTypeGetIntradayFutureChartCustom->getMonth(),'Year'=>$_XiFuturesTypeGetIntradayFutureChartCustom->getYear(),'StartTime'=>$_XiFuturesTypeGetIntradayFutureChartCustom->getStartTime(),'EndTime'=>$_XiFuturesTypeGetIntradayFutureChartCustom->getEndTime(),'Style'=>$_XiFuturesTypeGetIntradayFutureChartCustom->getStyle(),'Width'=>$_XiFuturesTypeGetIntradayFutureChartCustom->getWidth(),'Height'=>$_XiFuturesTypeGetIntradayFutureChartCustom->getHeight(),'Design'=>$_XiFuturesTypeGetIntradayFutureChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayFutureChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Get a custom intraday price chart for a future contract in binary format.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustomBinary::getSymbol()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustomBinary::getMonth()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustomBinary::getYear()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustomBinary::getStartTime()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustomBinary::getEndTime()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustomBinary::getStyle()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustomBinary::getWidth()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustomBinary::getHeight()
	 * @uses XiFuturesTypeGetIntradayFutureChartCustomBinary::getDesign()
	 * @param XiFuturesTypeGetIntradayFutureChartCustomBinary GetIntradayFutureChartCustomBinary
	 * @return XiFuturesTypeGetIntradayFutureChartCustomBinaryResponse
	 */
	public function GetIntradayFutureChartCustomBinary(XiFuturesTypeGetIntradayFutureChartCustomBinary $_XiFuturesTypeGetIntradayFutureChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayFutureChartCustomBinary(array('Symbol'=>$_XiFuturesTypeGetIntradayFutureChartCustomBinary->getSymbol(),'Month'=>$_XiFuturesTypeGetIntradayFutureChartCustomBinary->getMonth(),'Year'=>$_XiFuturesTypeGetIntradayFutureChartCustomBinary->getYear(),'StartTime'=>$_XiFuturesTypeGetIntradayFutureChartCustomBinary->getStartTime(),'EndTime'=>$_XiFuturesTypeGetIntradayFutureChartCustomBinary->getEndTime(),'Style'=>$_XiFuturesTypeGetIntradayFutureChartCustomBinary->getStyle(),'Width'=>$_XiFuturesTypeGetIntradayFutureChartCustomBinary->getWidth(),'Height'=>$_XiFuturesTypeGetIntradayFutureChartCustomBinary->getHeight(),'Design'=>$_XiFuturesTypeGetIntradayFutureChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalFutureChart
	 * Meta informations :
	 * 	- documentation : Get a standard historical price chart for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalFutureChart::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalFutureChart::getMonth()
	 * @uses XiFuturesTypeGetHistoricalFutureChart::getYear()
	 * @uses XiFuturesTypeGetHistoricalFutureChart::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalFutureChart::getEndDate()
	 * @uses XiFuturesTypeGetHistoricalFutureChart::getStyle()
	 * @uses XiFuturesTypeGetHistoricalFutureChart::getWidth()
	 * @uses XiFuturesTypeGetHistoricalFutureChart::getHeight()
	 * @uses XiFuturesTypeGetHistoricalFutureChart::getPreset()
	 * @param XiFuturesTypeGetHistoricalFutureChart GetHistoricalFutureChart
	 * @return XiFuturesTypeGetHistoricalFutureChartResponse
	 */
	public function GetHistoricalFutureChart(XiFuturesTypeGetHistoricalFutureChart $_XiFuturesTypeGetHistoricalFutureChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalFutureChart(array('Symbol'=>$_XiFuturesTypeGetHistoricalFutureChart->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalFutureChart->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalFutureChart->getYear(),'StartDate'=>$_XiFuturesTypeGetHistoricalFutureChart->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalFutureChart->getEndDate(),'Style'=>$_XiFuturesTypeGetHistoricalFutureChart->getStyle(),'Width'=>$_XiFuturesTypeGetHistoricalFutureChart->getWidth(),'Height'=>$_XiFuturesTypeGetHistoricalFutureChart->getHeight(),'Preset'=>$_XiFuturesTypeGetHistoricalFutureChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalFutureChartBinary
	 * Meta informations :
	 * 	- documentation : Get a standard historical price chart for a future contract in binary format.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalFutureChartBinary::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalFutureChartBinary::getMonth()
	 * @uses XiFuturesTypeGetHistoricalFutureChartBinary::getYear()
	 * @uses XiFuturesTypeGetHistoricalFutureChartBinary::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalFutureChartBinary::getEndDate()
	 * @uses XiFuturesTypeGetHistoricalFutureChartBinary::getStyle()
	 * @uses XiFuturesTypeGetHistoricalFutureChartBinary::getWidth()
	 * @uses XiFuturesTypeGetHistoricalFutureChartBinary::getHeight()
	 * @uses XiFuturesTypeGetHistoricalFutureChartBinary::getPreset()
	 * @param XiFuturesTypeGetHistoricalFutureChartBinary GetHistoricalFutureChartBinary
	 * @return XiFuturesTypeGetHistoricalFutureChartBinaryResponse
	 */
	public function GetHistoricalFutureChartBinary(XiFuturesTypeGetHistoricalFutureChartBinary $_XiFuturesTypeGetHistoricalFutureChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalFutureChartBinary(array('Symbol'=>$_XiFuturesTypeGetHistoricalFutureChartBinary->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalFutureChartBinary->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalFutureChartBinary->getYear(),'StartDate'=>$_XiFuturesTypeGetHistoricalFutureChartBinary->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalFutureChartBinary->getEndDate(),'Style'=>$_XiFuturesTypeGetHistoricalFutureChartBinary->getStyle(),'Width'=>$_XiFuturesTypeGetHistoricalFutureChartBinary->getWidth(),'Height'=>$_XiFuturesTypeGetHistoricalFutureChartBinary->getHeight(),'Preset'=>$_XiFuturesTypeGetHistoricalFutureChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalFutureChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom historical chart for a future contract in binary format.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustom::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustom::getMonth()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustom::getYear()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustom::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustom::getEndDate()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustom::getStyle()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustom::getWidth()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustom::getHeight()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustom::getDesign()
	 * @param XiFuturesTypeGetHistoricalFutureChartCustom GetHistoricalFutureChartCustom
	 * @return XiFuturesTypeGetHistoricalFutureChartCustomResponse
	 */
	public function GetHistoricalFutureChartCustom(XiFuturesTypeGetHistoricalFutureChartCustom $_XiFuturesTypeGetHistoricalFutureChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalFutureChartCustom(array('Symbol'=>$_XiFuturesTypeGetHistoricalFutureChartCustom->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalFutureChartCustom->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalFutureChartCustom->getYear(),'StartDate'=>$_XiFuturesTypeGetHistoricalFutureChartCustom->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalFutureChartCustom->getEndDate(),'Style'=>$_XiFuturesTypeGetHistoricalFutureChartCustom->getStyle(),'Width'=>$_XiFuturesTypeGetHistoricalFutureChartCustom->getWidth(),'Height'=>$_XiFuturesTypeGetHistoricalFutureChartCustom->getHeight(),'Design'=>$_XiFuturesTypeGetHistoricalFutureChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalFutureChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical chart for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustomBinary::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustomBinary::getMonth()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustomBinary::getYear()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustomBinary::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustomBinary::getEndDate()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustomBinary::getStyle()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustomBinary::getWidth()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustomBinary::getHeight()
	 * @uses XiFuturesTypeGetHistoricalFutureChartCustomBinary::getDesign()
	 * @param XiFuturesTypeGetHistoricalFutureChartCustomBinary GetHistoricalFutureChartCustomBinary
	 * @return XiFuturesTypeGetHistoricalFutureChartCustomBinaryResponse
	 */
	public function GetHistoricalFutureChartCustomBinary(XiFuturesTypeGetHistoricalFutureChartCustomBinary $_XiFuturesTypeGetHistoricalFutureChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalFutureChartCustomBinary(array('Symbol'=>$_XiFuturesTypeGetHistoricalFutureChartCustomBinary->getSymbol(),'Month'=>$_XiFuturesTypeGetHistoricalFutureChartCustomBinary->getMonth(),'Year'=>$_XiFuturesTypeGetHistoricalFutureChartCustomBinary->getYear(),'StartDate'=>$_XiFuturesTypeGetHistoricalFutureChartCustomBinary->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalFutureChartCustomBinary->getEndDate(),'Style'=>$_XiFuturesTypeGetHistoricalFutureChartCustomBinary->getStyle(),'Width'=>$_XiFuturesTypeGetHistoricalFutureChartCustomBinary->getWidth(),'Height'=>$_XiFuturesTypeGetHistoricalFutureChartCustomBinary->getHeight(),'Design'=>$_XiFuturesTypeGetHistoricalFutureChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCommodityChart
	 * Meta informations :
	 * 	- documentation : Get a historical chart for a commodity.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalCommodityChart::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalCommodityChart::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityChart::getEndDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityChart::getStyle()
	 * @uses XiFuturesTypeGetHistoricalCommodityChart::getWidth()
	 * @uses XiFuturesTypeGetHistoricalCommodityChart::getHeight()
	 * @uses XiFuturesTypeGetHistoricalCommodityChart::getPreset()
	 * @param XiFuturesTypeGetHistoricalCommodityChart GetHistoricalCommodityChart
	 * @return XiFuturesTypeGetHistoricalCommodityChartResponse
	 */
	public function GetHistoricalCommodityChart(XiFuturesTypeGetHistoricalCommodityChart $_XiFuturesTypeGetHistoricalCommodityChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCommodityChart(array('Symbol'=>$_XiFuturesTypeGetHistoricalCommodityChart->getSymbol(),'StartDate'=>$_XiFuturesTypeGetHistoricalCommodityChart->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalCommodityChart->getEndDate(),'Style'=>$_XiFuturesTypeGetHistoricalCommodityChart->getStyle(),'Width'=>$_XiFuturesTypeGetHistoricalCommodityChart->getWidth(),'Height'=>$_XiFuturesTypeGetHistoricalCommodityChart->getHeight(),'Preset'=>$_XiFuturesTypeGetHistoricalCommodityChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCommodityChartBinary
	 * Meta informations :
	 * 	- documentation : Get a historical chart for a commodity in binary format.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartBinary::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartBinary::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartBinary::getEndDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartBinary::getStyle()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartBinary::getWidth()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartBinary::getHeight()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartBinary::getPreset()
	 * @param XiFuturesTypeGetHistoricalCommodityChartBinary GetHistoricalCommodityChartBinary
	 * @return XiFuturesTypeGetHistoricalCommodityChartBinaryResponse
	 */
	public function GetHistoricalCommodityChartBinary(XiFuturesTypeGetHistoricalCommodityChartBinary $_XiFuturesTypeGetHistoricalCommodityChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCommodityChartBinary(array('Symbol'=>$_XiFuturesTypeGetHistoricalCommodityChartBinary->getSymbol(),'StartDate'=>$_XiFuturesTypeGetHistoricalCommodityChartBinary->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalCommodityChartBinary->getEndDate(),'Style'=>$_XiFuturesTypeGetHistoricalCommodityChartBinary->getStyle(),'Width'=>$_XiFuturesTypeGetHistoricalCommodityChartBinary->getWidth(),'Height'=>$_XiFuturesTypeGetHistoricalCommodityChartBinary->getHeight(),'Preset'=>$_XiFuturesTypeGetHistoricalCommodityChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCommodityChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom historical chart for a commodity in binary format.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustom::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustom::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustom::getEndDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustom::getStyle()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustom::getWidth()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustom::getHeight()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustom::getDesign()
	 * @param XiFuturesTypeGetHistoricalCommodityChartCustom GetHistoricalCommodityChartCustom
	 * @return XiFuturesTypeGetHistoricalCommodityChartCustomResponse
	 */
	public function GetHistoricalCommodityChartCustom(XiFuturesTypeGetHistoricalCommodityChartCustom $_XiFuturesTypeGetHistoricalCommodityChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCommodityChartCustom(array('Symbol'=>$_XiFuturesTypeGetHistoricalCommodityChartCustom->getSymbol(),'StartDate'=>$_XiFuturesTypeGetHistoricalCommodityChartCustom->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalCommodityChartCustom->getEndDate(),'Style'=>$_XiFuturesTypeGetHistoricalCommodityChartCustom->getStyle(),'Width'=>$_XiFuturesTypeGetHistoricalCommodityChartCustom->getWidth(),'Height'=>$_XiFuturesTypeGetHistoricalCommodityChartCustom->getHeight(),'Design'=>$_XiFuturesTypeGetHistoricalCommodityChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCommodityChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical chart for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustomBinary::getSymbol()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustomBinary::getStartDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustomBinary::getEndDate()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustomBinary::getStyle()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustomBinary::getWidth()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustomBinary::getHeight()
	 * @uses XiFuturesTypeGetHistoricalCommodityChartCustomBinary::getDesign()
	 * @param XiFuturesTypeGetHistoricalCommodityChartCustomBinary GetHistoricalCommodityChartCustomBinary
	 * @return XiFuturesTypeGetHistoricalCommodityChartCustomBinaryResponse
	 */
	public function GetHistoricalCommodityChartCustomBinary(XiFuturesTypeGetHistoricalCommodityChartCustomBinary $_XiFuturesTypeGetHistoricalCommodityChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCommodityChartCustomBinary(array('Symbol'=>$_XiFuturesTypeGetHistoricalCommodityChartCustomBinary->getSymbol(),'StartDate'=>$_XiFuturesTypeGetHistoricalCommodityChartCustomBinary->getStartDate(),'EndDate'=>$_XiFuturesTypeGetHistoricalCommodityChartCustomBinary->getEndDate(),'Style'=>$_XiFuturesTypeGetHistoricalCommodityChartCustomBinary->getStyle(),'Width'=>$_XiFuturesTypeGetHistoricalCommodityChartCustomBinary->getWidth(),'Height'=>$_XiFuturesTypeGetHistoricalCommodityChartCustomBinary->getHeight(),'Design'=>$_XiFuturesTypeGetHistoricalCommodityChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default settings for the intraday future chart.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetIntradayChartDesign::getPreset()
	 * @param XiFuturesTypeGetIntradayChartDesign GetIntradayChartDesign
	 * @return XiFuturesTypeGetIntradayChartDesignResponse
	 */
	public function GetIntradayChartDesign(XiFuturesTypeGetIntradayChartDesign $_XiFuturesTypeGetIntradayChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayChartDesign(array('Preset'=>$_XiFuturesTypeGetIntradayChartDesign->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default settings for the historical future chart.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetHistoricalChartDesign::getPreset()
	 * @param XiFuturesTypeGetHistoricalChartDesign GetHistoricalChartDesign
	 * @return XiFuturesTypeGetHistoricalChartDesignResponse
	 */
	public function GetHistoricalChartDesign(XiFuturesTypeGetHistoricalChartDesign $_XiFuturesTypeGetHistoricalChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalChartDesign(array('Preset'=>$_XiFuturesTypeGetHistoricalChartDesign->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFutureOption
	 * Meta informations :
	 * 	- documentation : Returns a specific future option.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetFutureOption::getSymbol()
	 * @uses XiFuturesTypeGetFutureOption::getType()
	 * @uses XiFuturesTypeGetFutureOption::getMonth()
	 * @uses XiFuturesTypeGetFutureOption::getYear()
	 * @uses XiFuturesTypeGetFutureOption::getStrikePrice()
	 * @param XiFuturesTypeGetFutureOption GetFutureOption
	 * @return XiFuturesTypeGetFutureOptionResponse
	 */
	public function GetFutureOption(XiFuturesTypeGetFutureOption $_XiFuturesTypeGetFutureOption)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFutureOption(array('Symbol'=>$_XiFuturesTypeGetFutureOption->getSymbol(),'Type'=>$_XiFuturesTypeGetFutureOption->getType(),'Month'=>$_XiFuturesTypeGetFutureOption->getMonth(),'Year'=>$_XiFuturesTypeGetFutureOption->getYear(),'StrikePrice'=>$_XiFuturesTypeGetFutureOption->getStrikePrice())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopIndustryHeadlines
	 * Meta informations :
	 * 	- documentation : Return the top press releases for an industry.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetTopIndustryHeadlines::getCount()
	 * @uses XiFuturesTypeGetTopIndustryHeadlines::getIndustry()
	 * @param XiFuturesTypeGetTopIndustryHeadlines GetTopIndustryHeadlines
	 * @return XiFuturesTypeGetTopIndustryHeadlinesResponse
	 */
	public function GetTopIndustryHeadlines(XiFuturesTypeGetTopIndustryHeadlines $_XiFuturesTypeGetTopIndustryHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopIndustryHeadlines(array('Count'=>$_XiFuturesTypeGetTopIndustryHeadlines->getCount(),'Industry'=>$_XiFuturesTypeGetTopIndustryHeadlines->getIndustry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTodaysIndustryHeadlines
	 * Meta informations :
	 * 	- documentation : Return press releases for today for an industry.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetTodaysIndustryHeadlines::getIndustry()
	 * @param XiFuturesTypeGetTodaysIndustryHeadlines GetTodaysIndustryHeadlines
	 * @return XiFuturesTypeGetTodaysIndustryHeadlinesResponse
	 */
	public function GetTodaysIndustryHeadlines(XiFuturesTypeGetTodaysIndustryHeadlines $_XiFuturesTypeGetTodaysIndustryHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTodaysIndustryHeadlines(array('Industry'=>$_XiFuturesTypeGetTodaysIndustryHeadlines->getIndustry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastIndustryHeadlines
	 * Meta informations :
	 * 	- documentation : Return the last press releases since a certain time for an industry.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetLastIndustryHeadlines::getSinceDate()
	 * @uses XiFuturesTypeGetLastIndustryHeadlines::getIndustry()
	 * @param XiFuturesTypeGetLastIndustryHeadlines GetLastIndustryHeadlines
	 * @return XiFuturesTypeGetLastIndustryHeadlinesResponse
	 */
	public function GetLastIndustryHeadlines(XiFuturesTypeGetLastIndustryHeadlines $_XiFuturesTypeGetLastIndustryHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastIndustryHeadlines(array('SinceDate'=>$_XiFuturesTypeGetLastIndustryHeadlines->getSinceDate(),'Industry'=>$_XiFuturesTypeGetLastIndustryHeadlines->getIndustry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFutureOptionChain
	 * Meta informations :
	 * 	- documentation : Returns an option chain for a future contract.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetFutureOptionChain::getSymbol()
	 * @uses XiFuturesTypeGetFutureOptionChain::getMonth()
	 * @uses XiFuturesTypeGetFutureOptionChain::getYear()
	 * @param XiFuturesTypeGetFutureOptionChain GetFutureOptionChain
	 * @return XiFuturesTypeGetFutureOptionChainResponse
	 */
	public function GetFutureOptionChain(XiFuturesTypeGetFutureOptionChain $_XiFuturesTypeGetFutureOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFutureOptionChain(array('Symbol'=>$_XiFuturesTypeGetFutureOptionChain->getSymbol(),'Month'=>$_XiFuturesTypeGetFutureOptionChain->getMonth(),'Year'=>$_XiFuturesTypeGetFutureOptionChain->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFutureOptionsByStrikePrice
	 * Meta informations :
	 * 	- documentation : Returns an option chain for a future contract matching a list of prices.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeGetFutureOptionsByStrikePrice::getSymbol()
	 * @uses XiFuturesTypeGetFutureOptionsByStrikePrice::getType()
	 * @uses XiFuturesTypeGetFutureOptionsByStrikePrice::getYear()
	 * @uses XiFuturesTypeGetFutureOptionsByStrikePrice::getStrikePrices()
	 * @param XiFuturesTypeGetFutureOptionsByStrikePrice GetFutureOptionsByStrikePrice
	 * @return XiFuturesTypeGetFutureOptionsByStrikePriceResponse
	 */
	public function GetFutureOptionsByStrikePrice(XiFuturesTypeGetFutureOptionsByStrikePrice $_XiFuturesTypeGetFutureOptionsByStrikePrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFutureOptionsByStrikePrice(array('Symbol'=>$_XiFuturesTypeGetFutureOptionsByStrikePrice->getSymbol(),'Type'=>$_XiFuturesTypeGetFutureOptionsByStrikePrice->getType(),'Year'=>$_XiFuturesTypeGetFutureOptionsByStrikePrice->getYear(),'StrikePrices'=>$_XiFuturesTypeGetFutureOptionsByStrikePrice->getStrikePrices())));
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
	 * @return XiFuturesTypeGetFutureOptionsByStrikePriceResponse
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