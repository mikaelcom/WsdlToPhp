<?php
/**
 * Class file for XiEnergyServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiEnergyServiceGet
 * @date 08/07/2012
 */
class XiEnergyServiceGet extends XiEnergyWsdlClass
{
	/**
	 * Method to call GetAvailableEnergySwaps
	 * Meta informations :
	 * 	- documentation : List all commodity swaps for which settlement data is available on a given day.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetAvailableEnergySwaps::getAsOfDate()
	 * @param XiEnergyTypeGetAvailableEnergySwaps GetAvailableEnergySwaps
	 * @return XiEnergyTypeGetAvailableEnergySwapsResponse
	 */
	public function GetAvailableEnergySwaps(XiEnergyTypeGetAvailableEnergySwaps $_XiEnergyTypeGetAvailableEnergySwaps)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAvailableEnergySwaps(array('AsOfDate'=>$_XiEnergyTypeGetAvailableEnergySwaps->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAvailableEnergyFutures
	 * Meta informations :
	 * 	- documentation : List all futures for which settlement data is available on a given day.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetAvailableEnergyFutures::getAsOfDate()
	 * @param XiEnergyTypeGetAvailableEnergyFutures GetAvailableEnergyFutures
	 * @return XiEnergyTypeGetAvailableEnergyFuturesResponse
	 */
	public function GetAvailableEnergyFutures(XiEnergyTypeGetAvailableEnergyFutures $_XiEnergyTypeGetAvailableEnergyFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAvailableEnergyFutures(array('AsOfDate'=>$_XiEnergyTypeGetAvailableEnergyFutures->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedEnergySwap
	 * Meta informations :
	 * 	- documentation : Returns a delayed quote for a NYMEX swap contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetDelayedEnergySwap::getSymbol()
	 * @uses XiEnergyTypeGetDelayedEnergySwap::getMonth()
	 * @uses XiEnergyTypeGetDelayedEnergySwap::getYear()
	 * @param XiEnergyTypeGetDelayedEnergySwap GetDelayedEnergySwap
	 * @return XiEnergyTypeGetDelayedEnergySwapResponse
	 */
	public function GetDelayedEnergySwap(XiEnergyTypeGetDelayedEnergySwap $_XiEnergyTypeGetDelayedEnergySwap)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedEnergySwap(array('Symbol'=>$_XiEnergyTypeGetDelayedEnergySwap->getSymbol(),'Month'=>$_XiEnergyTypeGetDelayedEnergySwap->getMonth(),'Year'=>$_XiEnergyTypeGetDelayedEnergySwap->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedEnergyFuture
	 * Meta informations :
	 * 	- documentation : Returns a delayed quote for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetDelayedEnergyFuture::getSymbol()
	 * @uses XiEnergyTypeGetDelayedEnergyFuture::getMonth()
	 * @uses XiEnergyTypeGetDelayedEnergyFuture::getYear()
	 * @param XiEnergyTypeGetDelayedEnergyFuture GetDelayedEnergyFuture
	 * @return XiEnergyTypeGetDelayedEnergyFutureResponse
	 */
	public function GetDelayedEnergyFuture(XiEnergyTypeGetDelayedEnergyFuture $_XiEnergyTypeGetDelayedEnergyFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedEnergyFuture(array('Symbol'=>$_XiEnergyTypeGetDelayedEnergyFuture->getSymbol(),'Month'=>$_XiEnergyTypeGetDelayedEnergyFuture->getMonth(),'Year'=>$_XiEnergyTypeGetDelayedEnergyFuture->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedEnergyFrontFuture
	 * Meta informations :
	 * 	- documentation : Returns a delayed quote for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetDelayedEnergyFrontFuture::getSymbol()
	 * @param XiEnergyTypeGetDelayedEnergyFrontFuture GetDelayedEnergyFrontFuture
	 * @return XiEnergyTypeGetDelayedEnergyFrontFutureResponse
	 */
	public function GetDelayedEnergyFrontFuture(XiEnergyTypeGetDelayedEnergyFrontFuture $_XiEnergyTypeGetDelayedEnergyFrontFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedEnergyFrontFuture(array('Symbol'=>$_XiEnergyTypeGetDelayedEnergyFrontFuture->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllDelayedEnergyFutures
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for all contracts for a commodity.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetAllDelayedEnergyFutures::getSymbol()
	 * @param XiEnergyTypeGetAllDelayedEnergyFutures GetAllDelayedEnergyFutures
	 * @return XiEnergyTypeGetAllDelayedEnergyFuturesResponse
	 */
	public function GetAllDelayedEnergyFutures(XiEnergyTypeGetAllDelayedEnergyFutures $_XiEnergyTypeGetAllDelayedEnergyFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllDelayedEnergyFutures(array('Symbol'=>$_XiEnergyTypeGetAllDelayedEnergyFutures->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopDelayedEnergyFutures
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for a given number of contracts (front-future first) for a commodity.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetTopDelayedEnergyFutures::getSymbol()
	 * @uses XiEnergyTypeGetTopDelayedEnergyFutures::getCount()
	 * @param XiEnergyTypeGetTopDelayedEnergyFutures GetTopDelayedEnergyFutures
	 * @return XiEnergyTypeGetTopDelayedEnergyFuturesResponse
	 */
	public function GetTopDelayedEnergyFutures(XiEnergyTypeGetTopDelayedEnergyFutures $_XiEnergyTypeGetTopDelayedEnergyFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopDelayedEnergyFutures(array('Symbol'=>$_XiEnergyTypeGetTopDelayedEnergyFutures->getSymbol(),'Count'=>$_XiEnergyTypeGetTopDelayedEnergyFutures->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedEnergyFutures
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for multiple future contracts.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetDelayedEnergyFutures::getSymbols()
	 * @uses XiEnergyTypeGetDelayedEnergyFutures::getMonth()
	 * @uses XiEnergyTypeGetDelayedEnergyFutures::getYear()
	 * @param XiEnergyTypeGetDelayedEnergyFutures GetDelayedEnergyFutures
	 * @return XiEnergyTypeGetDelayedEnergyFuturesResponse
	 */
	public function GetDelayedEnergyFutures(XiEnergyTypeGetDelayedEnergyFutures $_XiEnergyTypeGetDelayedEnergyFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedEnergyFutures(array('Symbols'=>$_XiEnergyTypeGetDelayedEnergyFutures->getSymbols(),'Month'=>$_XiEnergyTypeGetDelayedEnergyFutures->getMonth(),'Year'=>$_XiEnergyTypeGetDelayedEnergyFutures->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedEnergyFutureStrip
	 * Meta informations :
	 * 	- documentation : Returns a delayed future strip for a commodity.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetDelayedEnergyFutureStrip::getSymbol()
	 * @uses XiEnergyTypeGetDelayedEnergyFutureStrip::getStripType()
	 * @param XiEnergyTypeGetDelayedEnergyFutureStrip GetDelayedEnergyFutureStrip
	 * @return XiEnergyTypeGetDelayedEnergyFutureStripResponse
	 */
	public function GetDelayedEnergyFutureStrip(XiEnergyTypeGetDelayedEnergyFutureStrip $_XiEnergyTypeGetDelayedEnergyFutureStrip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedEnergyFutureStrip(array('Symbol'=>$_XiEnergyTypeGetDelayedEnergyFutureStrip->getSymbol(),'StripType'=>$_XiEnergyTypeGetDelayedEnergyFutureStrip->getStripType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyFutureStrip
	 * Meta informations :
	 * 	- documentation : Returns a future strip for a commodity.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureStrip::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureStrip::getAsOfDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureStrip::getStripType()
	 * @param XiEnergyTypeGetHistoricalEnergyFutureStrip GetHistoricalEnergyFutureStrip
	 * @return XiEnergyTypeGetHistoricalEnergyFutureStripResponse
	 */
	public function GetHistoricalEnergyFutureStrip(XiEnergyTypeGetHistoricalEnergyFutureStrip $_XiEnergyTypeGetHistoricalEnergyFutureStrip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyFutureStrip(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyFutureStrip->getSymbol(),'AsOfDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureStrip->getAsOfDate(),'StripType'=>$_XiEnergyTypeGetHistoricalEnergyFutureStrip->getStripType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergySwapStrip
	 * Meta informations :
	 * 	- documentation : Returns a future strip for a commodity.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergySwapStrip::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergySwapStrip::getAsOfDate()
	 * @uses XiEnergyTypeGetHistoricalEnergySwapStrip::getStripType()
	 * @param XiEnergyTypeGetHistoricalEnergySwapStrip GetHistoricalEnergySwapStrip
	 * @return XiEnergyTypeGetHistoricalEnergySwapStripResponse
	 */
	public function GetHistoricalEnergySwapStrip(XiEnergyTypeGetHistoricalEnergySwapStrip $_XiEnergyTypeGetHistoricalEnergySwapStrip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergySwapStrip(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergySwapStrip->getSymbol(),'AsOfDate'=>$_XiEnergyTypeGetHistoricalEnergySwapStrip->getAsOfDate(),'StripType'=>$_XiEnergyTypeGetHistoricalEnergySwapStrip->getStripType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedEnergySpot
	 * Meta informations :
	 * 	- documentation : Returns a delayed spot quote for a commodity.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetDelayedEnergySpot::getSymbol()
	 * @param XiEnergyTypeGetDelayedEnergySpot GetDelayedEnergySpot
	 * @return XiEnergyTypeGetDelayedEnergySpotResponse
	 */
	public function GetDelayedEnergySpot(XiEnergyTypeGetDelayedEnergySpot $_XiEnergyTypeGetDelayedEnergySpot)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedEnergySpot(array('Symbol'=>$_XiEnergyTypeGetDelayedEnergySpot->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedEnergySpots
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for multiple commodities.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetDelayedEnergySpots::getSymbols()
	 * @param XiEnergyTypeGetDelayedEnergySpots GetDelayedEnergySpots
	 * @return XiEnergyTypeGetDelayedEnergySpotsResponse
	 */
	public function GetDelayedEnergySpots(XiEnergyTypeGetDelayedEnergySpots $_XiEnergyTypeGetDelayedEnergySpots)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedEnergySpots(array('Symbols'=>$_XiEnergyTypeGetDelayedEnergySpots->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedEnergyFutureBySession
	 * Meta informations :
	 * 	- documentation : Returns a delayed quote for a future contract by exchange session.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetDelayedEnergyFutureBySession::getSymbol()
	 * @uses XiEnergyTypeGetDelayedEnergyFutureBySession::getMonth()
	 * @uses XiEnergyTypeGetDelayedEnergyFutureBySession::getYear()
	 * @uses XiEnergyTypeGetDelayedEnergyFutureBySession::getSession()
	 * @param XiEnergyTypeGetDelayedEnergyFutureBySession GetDelayedEnergyFutureBySession
	 * @return XiEnergyTypeGetDelayedEnergyFutureBySessionResponse
	 */
	public function GetDelayedEnergyFutureBySession(XiEnergyTypeGetDelayedEnergyFutureBySession $_XiEnergyTypeGetDelayedEnergyFutureBySession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedEnergyFutureBySession(array('Symbol'=>$_XiEnergyTypeGetDelayedEnergyFutureBySession->getSymbol(),'Month'=>$_XiEnergyTypeGetDelayedEnergyFutureBySession->getMonth(),'Year'=>$_XiEnergyTypeGetDelayedEnergyFutureBySession->getYear(),'Session'=>$_XiEnergyTypeGetDelayedEnergyFutureBySession->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllDelayedEnergyFuturesBySession
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for all contracts for a commodity by exchange session.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetAllDelayedEnergyFuturesBySession::getSymbol()
	 * @uses XiEnergyTypeGetAllDelayedEnergyFuturesBySession::getSession()
	 * @param XiEnergyTypeGetAllDelayedEnergyFuturesBySession GetAllDelayedEnergyFuturesBySession
	 * @return XiEnergyTypeGetAllDelayedEnergyFuturesBySessionResponse
	 */
	public function GetAllDelayedEnergyFuturesBySession(XiEnergyTypeGetAllDelayedEnergyFuturesBySession $_XiEnergyTypeGetAllDelayedEnergyFuturesBySession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllDelayedEnergyFuturesBySession(array('Symbol'=>$_XiEnergyTypeGetAllDelayedEnergyFuturesBySession->getSymbol(),'Session'=>$_XiEnergyTypeGetAllDelayedEnergyFuturesBySession->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedEnergyFuturesBySession
	 * Meta informations :
	 * 	- documentation : Returns delayed quotes for multiple future contracts by exchange session.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetDelayedEnergyFuturesBySession::getSymbols()
	 * @uses XiEnergyTypeGetDelayedEnergyFuturesBySession::getMonth()
	 * @uses XiEnergyTypeGetDelayedEnergyFuturesBySession::getYear()
	 * @uses XiEnergyTypeGetDelayedEnergyFuturesBySession::getSession()
	 * @param XiEnergyTypeGetDelayedEnergyFuturesBySession GetDelayedEnergyFuturesBySession
	 * @return XiEnergyTypeGetDelayedEnergyFuturesBySessionResponse
	 */
	public function GetDelayedEnergyFuturesBySession(XiEnergyTypeGetDelayedEnergyFuturesBySession $_XiEnergyTypeGetDelayedEnergyFuturesBySession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedEnergyFuturesBySession(array('Symbols'=>$_XiEnergyTypeGetDelayedEnergyFuturesBySession->getSymbols(),'Month'=>$_XiEnergyTypeGetDelayedEnergyFuturesBySession->getMonth(),'Year'=>$_XiEnergyTypeGetDelayedEnergyFuturesBySession->getYear(),'Session'=>$_XiEnergyTypeGetDelayedEnergyFuturesBySession->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyFuture
	 * Meta informations :
	 * 	- documentation : Returns a historical quote for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyFuture::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyFuture::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFuture::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergyFuture::getAsOfDate()
	 * @param XiEnergyTypeGetHistoricalEnergyFuture GetHistoricalEnergyFuture
	 * @return XiEnergyTypeGetHistoricalEnergyFutureResponse
	 */
	public function GetHistoricalEnergyFuture(XiEnergyTypeGetHistoricalEnergyFuture $_XiEnergyTypeGetHistoricalEnergyFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyFuture(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyFuture->getSymbol(),'Month'=>$_XiEnergyTypeGetHistoricalEnergyFuture->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergyFuture->getYear(),'AsOfDate'=>$_XiEnergyTypeGetHistoricalEnergyFuture->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyFutures
	 * Meta informations :
	 * 	- documentation : Returns historical quotes for multiple future contracts.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutures::getSymbols()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutures::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutures::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutures::getAsOfDate()
	 * @param XiEnergyTypeGetHistoricalEnergyFutures GetHistoricalEnergyFutures
	 * @return XiEnergyTypeGetHistoricalEnergyFuturesResponse
	 */
	public function GetHistoricalEnergyFutures(XiEnergyTypeGetHistoricalEnergyFutures $_XiEnergyTypeGetHistoricalEnergyFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyFutures(array('Symbols'=>$_XiEnergyTypeGetHistoricalEnergyFutures->getSymbols(),'Month'=>$_XiEnergyTypeGetHistoricalEnergyFutures->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergyFutures->getYear(),'AsOfDate'=>$_XiEnergyTypeGetHistoricalEnergyFutures->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllHistoricalEnergyFutures
	 * Meta informations :
	 * 	- documentation : Returns historical quotes for all contracts for a commodity as of a specific date.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetAllHistoricalEnergyFutures::getSymbol()
	 * @uses XiEnergyTypeGetAllHistoricalEnergyFutures::getAsOfDate()
	 * @param XiEnergyTypeGetAllHistoricalEnergyFutures GetAllHistoricalEnergyFutures
	 * @return XiEnergyTypeGetAllHistoricalEnergyFuturesResponse
	 */
	public function GetAllHistoricalEnergyFutures(XiEnergyTypeGetAllHistoricalEnergyFutures $_XiEnergyTypeGetAllHistoricalEnergyFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllHistoricalEnergyFutures(array('Symbol'=>$_XiEnergyTypeGetAllHistoricalEnergyFutures->getSymbol(),'AsOfDate'=>$_XiEnergyTypeGetAllHistoricalEnergyFutures->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyFutureRange
	 * Meta informations :
	 * 	- documentation : Returns a range of historical quotes for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureRange::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureRange::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureRange::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureRange::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureRange::getEndDate()
	 * @param XiEnergyTypeGetHistoricalEnergyFutureRange GetHistoricalEnergyFutureRange
	 * @return XiEnergyTypeGetHistoricalEnergyFutureRangeResponse
	 */
	public function GetHistoricalEnergyFutureRange(XiEnergyTypeGetHistoricalEnergyFutureRange $_XiEnergyTypeGetHistoricalEnergyFutureRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyFutureRange(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyFutureRange->getSymbol(),'Month'=>$_XiEnergyTypeGetHistoricalEnergyFutureRange->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergyFutureRange->getYear(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureRange->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergySwap
	 * Meta informations :
	 * 	- documentation : Returns a historical quote for a future swap.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergySwap::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergySwap::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergySwap::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergySwap::getAsOfDate()
	 * @param XiEnergyTypeGetHistoricalEnergySwap GetHistoricalEnergySwap
	 * @return XiEnergyTypeGetHistoricalEnergySwapResponse
	 */
	public function GetHistoricalEnergySwap(XiEnergyTypeGetHistoricalEnergySwap $_XiEnergyTypeGetHistoricalEnergySwap)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergySwap(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergySwap->getSymbol(),'Month'=>$_XiEnergyTypeGetHistoricalEnergySwap->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergySwap->getYear(),'AsOfDate'=>$_XiEnergyTypeGetHistoricalEnergySwap->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergySwapRange
	 * Meta informations :
	 * 	- documentation : Returns a range of historical quotes for a future swap.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergySwapRange::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergySwapRange::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergySwapRange::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergySwapRange::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergySwapRange::getEndDate()
	 * @param XiEnergyTypeGetHistoricalEnergySwapRange GetHistoricalEnergySwapRange
	 * @return XiEnergyTypeGetHistoricalEnergySwapRangeResponse
	 */
	public function GetHistoricalEnergySwapRange(XiEnergyTypeGetHistoricalEnergySwapRange $_XiEnergyTypeGetHistoricalEnergySwapRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergySwapRange(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergySwapRange->getSymbol(),'Month'=>$_XiEnergyTypeGetHistoricalEnergySwapRange->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergySwapRange->getYear(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergySwapRange->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergySwapRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergySwaps
	 * Meta informations :
	 * 	- documentation : Returns historical quotes for multiple future swaps.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergySwaps::getSymbols()
	 * @uses XiEnergyTypeGetHistoricalEnergySwaps::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergySwaps::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergySwaps::getAsOfDate()
	 * @param XiEnergyTypeGetHistoricalEnergySwaps GetHistoricalEnergySwaps
	 * @return XiEnergyTypeGetHistoricalEnergySwapsResponse
	 */
	public function GetHistoricalEnergySwaps(XiEnergyTypeGetHistoricalEnergySwaps $_XiEnergyTypeGetHistoricalEnergySwaps)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergySwaps(array('Symbols'=>$_XiEnergyTypeGetHistoricalEnergySwaps->getSymbols(),'Month'=>$_XiEnergyTypeGetHistoricalEnergySwaps->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergySwaps->getYear(),'AsOfDate'=>$_XiEnergyTypeGetHistoricalEnergySwaps->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllHistoricalEnergySwaps
	 * Meta informations :
	 * 	- documentation : Returns historical quotes for all contracts for a commodity swap as of a specific date.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetAllHistoricalEnergySwaps::getSymbol()
	 * @uses XiEnergyTypeGetAllHistoricalEnergySwaps::getAsOfDate()
	 * @param XiEnergyTypeGetAllHistoricalEnergySwaps GetAllHistoricalEnergySwaps
	 * @return XiEnergyTypeGetAllHistoricalEnergySwapsResponse
	 */
	public function GetAllHistoricalEnergySwaps(XiEnergyTypeGetAllHistoricalEnergySwaps $_XiEnergyTypeGetAllHistoricalEnergySwaps)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllHistoricalEnergySwaps(array('Symbol'=>$_XiEnergyTypeGetAllHistoricalEnergySwaps->getSymbol(),'AsOfDate'=>$_XiEnergyTypeGetAllHistoricalEnergySwaps->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyCommodityRange
	 * Meta informations :
	 * 	- documentation : Returns a range of historical quotes for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityRange::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityRange::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityRange::getEndDate()
	 * @param XiEnergyTypeGetHistoricalEnergyCommodityRange GetHistoricalEnergyCommodityRange
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityRangeResponse
	 */
	public function GetHistoricalEnergyCommodityRange(XiEnergyTypeGetHistoricalEnergyCommodityRange $_XiEnergyTypeGetHistoricalEnergyCommodityRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyCommodityRange(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyCommodityRange->getSymbol(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityRange->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergySpotRange
	 * Meta informations :
	 * 	- documentation : Returns a range of commodity spot prices for a commodity.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergySpotRange::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergySpotRange::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergySpotRange::getEndDate()
	 * @param XiEnergyTypeGetHistoricalEnergySpotRange GetHistoricalEnergySpotRange
	 * @return XiEnergyTypeGetHistoricalEnergySpotRangeResponse
	 */
	public function GetHistoricalEnergySpotRange(XiEnergyTypeGetHistoricalEnergySpotRange $_XiEnergyTypeGetHistoricalEnergySpotRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergySpotRange(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergySpotRange->getSymbol(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergySpotRange->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergySpotRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEnergyTick
	 * Meta informations :
	 * 	- documentation : Returns an intraday tick for a future contract as of a specific time in the day.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetEnergyTick::getSymbol()
	 * @uses XiEnergyTypeGetEnergyTick::getMonth()
	 * @uses XiEnergyTypeGetEnergyTick::getYear()
	 * @uses XiEnergyTypeGetEnergyTick::getTime()
	 * @param XiEnergyTypeGetEnergyTick GetEnergyTick
	 * @return XiEnergyTypeGetEnergyTickResponse
	 */
	public function GetEnergyTick(XiEnergyTypeGetEnergyTick $_XiEnergyTypeGetEnergyTick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEnergyTick(array('Symbol'=>$_XiEnergyTypeGetEnergyTick->getSymbol(),'Month'=>$_XiEnergyTypeGetEnergyTick->getMonth(),'Year'=>$_XiEnergyTypeGetEnergyTick->getYear(),'Time'=>$_XiEnergyTypeGetEnergyTick->getTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEnergyTicks
	 * Meta informations :
	 * 	- documentation : Returns a range of intraday ticks for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetEnergyTicks::getSymbol()
	 * @uses XiEnergyTypeGetEnergyTicks::getMonth()
	 * @uses XiEnergyTypeGetEnergyTicks::getYear()
	 * @uses XiEnergyTypeGetEnergyTicks::getStartTime()
	 * @uses XiEnergyTypeGetEnergyTicks::getEndTime()
	 * @uses XiEnergyTypeGetEnergyTicks::getTickPrecision()
	 * @uses XiEnergyTypeGetEnergyTicks::getTickPeriods()
	 * @param XiEnergyTypeGetEnergyTicks GetEnergyTicks
	 * @return XiEnergyTypeGetEnergyTicksResponse
	 */
	public function GetEnergyTicks(XiEnergyTypeGetEnergyTicks $_XiEnergyTypeGetEnergyTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEnergyTicks(array('Symbol'=>$_XiEnergyTypeGetEnergyTicks->getSymbol(),'Month'=>$_XiEnergyTypeGetEnergyTicks->getMonth(),'Year'=>$_XiEnergyTypeGetEnergyTicks->getYear(),'StartTime'=>$_XiEnergyTypeGetEnergyTicks->getStartTime(),'EndTime'=>$_XiEnergyTypeGetEnergyTicks->getEndTime(),'TickPrecision'=>$_XiEnergyTypeGetEnergyTicks->getTickPrecision(),'TickPeriods'=>$_XiEnergyTypeGetEnergyTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyTicks
	 * Meta informations :
	 * 	- documentation : Returns a historical range of ticks for a security.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyTicks::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyTicks::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergyTicks::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergyTicks::getHistoricalPeriod()
	 * @uses XiEnergyTypeGetHistoricalEnergyTicks::getStartTime()
	 * @uses XiEnergyTypeGetHistoricalEnergyTicks::getEndTime()
	 * @uses XiEnergyTypeGetHistoricalEnergyTicks::getTickPrecision()
	 * @uses XiEnergyTypeGetHistoricalEnergyTicks::getTickPeriods()
	 * @param XiEnergyTypeGetHistoricalEnergyTicks GetHistoricalEnergyTicks
	 * @return XiEnergyTypeGetHistoricalEnergyTicksResponse
	 */
	public function GetHistoricalEnergyTicks(XiEnergyTypeGetHistoricalEnergyTicks $_XiEnergyTypeGetHistoricalEnergyTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyTicks(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyTicks->getSymbol(),'Month'=>$_XiEnergyTypeGetHistoricalEnergyTicks->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergyTicks->getYear(),'HistoricalPeriod'=>$_XiEnergyTypeGetHistoricalEnergyTicks->getHistoricalPeriod(),'StartTime'=>$_XiEnergyTypeGetHistoricalEnergyTicks->getStartTime(),'EndTime'=>$_XiEnergyTypeGetHistoricalEnergyTicks->getEndTime(),'TickPrecision'=>$_XiEnergyTypeGetHistoricalEnergyTicks->getTickPrecision(),'TickPeriods'=>$_XiEnergyTypeGetHistoricalEnergyTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayEnergyFutureChart
	 * Meta informations :
	 * 	- documentation : Get a standard intraday price chart for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChart::getSymbol()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChart::getMonth()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChart::getYear()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChart::getStartTime()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChart::getEndTime()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChart::getStyle()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChart::getWidth()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChart::getHeight()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChart::getPreset()
	 * @param XiEnergyTypeGetIntradayEnergyFutureChart GetIntradayEnergyFutureChart
	 * @return XiEnergyTypeGetIntradayEnergyFutureChartResponse
	 */
	public function GetIntradayEnergyFutureChart(XiEnergyTypeGetIntradayEnergyFutureChart $_XiEnergyTypeGetIntradayEnergyFutureChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayEnergyFutureChart(array('Symbol'=>$_XiEnergyTypeGetIntradayEnergyFutureChart->getSymbol(),'Month'=>$_XiEnergyTypeGetIntradayEnergyFutureChart->getMonth(),'Year'=>$_XiEnergyTypeGetIntradayEnergyFutureChart->getYear(),'StartTime'=>$_XiEnergyTypeGetIntradayEnergyFutureChart->getStartTime(),'EndTime'=>$_XiEnergyTypeGetIntradayEnergyFutureChart->getEndTime(),'Style'=>$_XiEnergyTypeGetIntradayEnergyFutureChart->getStyle(),'Width'=>$_XiEnergyTypeGetIntradayEnergyFutureChart->getWidth(),'Height'=>$_XiEnergyTypeGetIntradayEnergyFutureChart->getHeight(),'Preset'=>$_XiEnergyTypeGetIntradayEnergyFutureChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayEnergyFutureChartBinary
	 * Meta informations :
	 * 	- documentation : Get a standard intraday price chart for a future contract in binary format.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartBinary::getSymbol()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartBinary::getMonth()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartBinary::getYear()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartBinary::getStartTime()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartBinary::getEndTime()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartBinary::getStyle()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartBinary::getWidth()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartBinary::getHeight()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartBinary::getPreset()
	 * @param XiEnergyTypeGetIntradayEnergyFutureChartBinary GetIntradayEnergyFutureChartBinary
	 * @return XiEnergyTypeGetIntradayEnergyFutureChartBinaryResponse
	 */
	public function GetIntradayEnergyFutureChartBinary(XiEnergyTypeGetIntradayEnergyFutureChartBinary $_XiEnergyTypeGetIntradayEnergyFutureChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayEnergyFutureChartBinary(array('Symbol'=>$_XiEnergyTypeGetIntradayEnergyFutureChartBinary->getSymbol(),'Month'=>$_XiEnergyTypeGetIntradayEnergyFutureChartBinary->getMonth(),'Year'=>$_XiEnergyTypeGetIntradayEnergyFutureChartBinary->getYear(),'StartTime'=>$_XiEnergyTypeGetIntradayEnergyFutureChartBinary->getStartTime(),'EndTime'=>$_XiEnergyTypeGetIntradayEnergyFutureChartBinary->getEndTime(),'Style'=>$_XiEnergyTypeGetIntradayEnergyFutureChartBinary->getStyle(),'Width'=>$_XiEnergyTypeGetIntradayEnergyFutureChartBinary->getWidth(),'Height'=>$_XiEnergyTypeGetIntradayEnergyFutureChartBinary->getHeight(),'Preset'=>$_XiEnergyTypeGetIntradayEnergyFutureChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayEnergyFutureChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom intraday price chart for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustom::getSymbol()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustom::getMonth()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustom::getYear()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustom::getStartTime()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustom::getEndTime()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustom::getStyle()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustom::getWidth()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustom::getHeight()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustom::getDesign()
	 * @param XiEnergyTypeGetIntradayEnergyFutureChartCustom GetIntradayEnergyFutureChartCustom
	 * @return XiEnergyTypeGetIntradayEnergyFutureChartCustomResponse
	 */
	public function GetIntradayEnergyFutureChartCustom(XiEnergyTypeGetIntradayEnergyFutureChartCustom $_XiEnergyTypeGetIntradayEnergyFutureChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayEnergyFutureChartCustom(array('Symbol'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustom->getSymbol(),'Month'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustom->getMonth(),'Year'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustom->getYear(),'StartTime'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustom->getStartTime(),'EndTime'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustom->getEndTime(),'Style'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustom->getStyle(),'Width'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustom->getWidth(),'Height'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustom->getHeight(),'Design'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayEnergyFutureChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Get a custom intraday price chart for a future contract in binary format.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary::getSymbol()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary::getMonth()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary::getYear()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary::getStartTime()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary::getEndTime()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary::getStyle()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary::getWidth()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary::getHeight()
	 * @uses XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary::getDesign()
	 * @param XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary GetIntradayEnergyFutureChartCustomBinary
	 * @return XiEnergyTypeGetIntradayEnergyFutureChartCustomBinaryResponse
	 */
	public function GetIntradayEnergyFutureChartCustomBinary(XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary $_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayEnergyFutureChartCustomBinary(array('Symbol'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary->getSymbol(),'Month'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary->getMonth(),'Year'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary->getYear(),'StartTime'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary->getStartTime(),'EndTime'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary->getEndTime(),'Style'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary->getStyle(),'Width'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary->getWidth(),'Height'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary->getHeight(),'Design'=>$_XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyFutureChart
	 * Meta informations :
	 * 	- documentation : Get a standard historical price chart for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChart::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChart::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChart::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChart::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChart::getEndDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChart::getStyle()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChart::getWidth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChart::getHeight()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChart::getPreset()
	 * @param XiEnergyTypeGetHistoricalEnergyFutureChart GetHistoricalEnergyFutureChart
	 * @return XiEnergyTypeGetHistoricalEnergyFutureChartResponse
	 */
	public function GetHistoricalEnergyFutureChart(XiEnergyTypeGetHistoricalEnergyFutureChart $_XiEnergyTypeGetHistoricalEnergyFutureChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyFutureChart(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyFutureChart->getSymbol(),'Month'=>$_XiEnergyTypeGetHistoricalEnergyFutureChart->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergyFutureChart->getYear(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureChart->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureChart->getEndDate(),'Style'=>$_XiEnergyTypeGetHistoricalEnergyFutureChart->getStyle(),'Width'=>$_XiEnergyTypeGetHistoricalEnergyFutureChart->getWidth(),'Height'=>$_XiEnergyTypeGetHistoricalEnergyFutureChart->getHeight(),'Preset'=>$_XiEnergyTypeGetHistoricalEnergyFutureChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyFutureChartBinary
	 * Meta informations :
	 * 	- documentation : Get a standard historical price chart for a future contract in binary format.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartBinary::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartBinary::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartBinary::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartBinary::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartBinary::getEndDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartBinary::getStyle()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartBinary::getWidth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartBinary::getHeight()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartBinary::getPreset()
	 * @param XiEnergyTypeGetHistoricalEnergyFutureChartBinary GetHistoricalEnergyFutureChartBinary
	 * @return XiEnergyTypeGetHistoricalEnergyFutureChartBinaryResponse
	 */
	public function GetHistoricalEnergyFutureChartBinary(XiEnergyTypeGetHistoricalEnergyFutureChartBinary $_XiEnergyTypeGetHistoricalEnergyFutureChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyFutureChartBinary(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartBinary->getSymbol(),'Month'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartBinary->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartBinary->getYear(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartBinary->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartBinary->getEndDate(),'Style'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartBinary->getStyle(),'Width'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartBinary->getWidth(),'Height'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartBinary->getHeight(),'Preset'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyFutureChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom historical chart for a future contract in binary format.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustom::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustom::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustom::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustom::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustom::getEndDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustom::getStyle()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustom::getWidth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustom::getHeight()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustom::getDesign()
	 * @param XiEnergyTypeGetHistoricalEnergyFutureChartCustom GetHistoricalEnergyFutureChartCustom
	 * @return XiEnergyTypeGetHistoricalEnergyFutureChartCustomResponse
	 */
	public function GetHistoricalEnergyFutureChartCustom(XiEnergyTypeGetHistoricalEnergyFutureChartCustom $_XiEnergyTypeGetHistoricalEnergyFutureChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyFutureChartCustom(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustom->getSymbol(),'Month'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustom->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustom->getYear(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustom->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustom->getEndDate(),'Style'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustom->getStyle(),'Width'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustom->getWidth(),'Height'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustom->getHeight(),'Design'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyFutureChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical chart for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary::getMonth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary::getYear()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary::getEndDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary::getStyle()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary::getWidth()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary::getHeight()
	 * @uses XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary::getDesign()
	 * @param XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary GetHistoricalEnergyFutureChartCustomBinary
	 * @return XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinaryResponse
	 */
	public function GetHistoricalEnergyFutureChartCustomBinary(XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary $_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyFutureChartCustomBinary(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary->getSymbol(),'Month'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary->getMonth(),'Year'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary->getYear(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary->getEndDate(),'Style'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary->getStyle(),'Width'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary->getWidth(),'Height'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary->getHeight(),'Design'=>$_XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyCommodityChart
	 * Meta informations :
	 * 	- documentation : Get a historical chart for a commodity.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChart::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChart::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChart::getEndDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChart::getStyle()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChart::getWidth()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChart::getHeight()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChart::getPreset()
	 * @param XiEnergyTypeGetHistoricalEnergyCommodityChart GetHistoricalEnergyCommodityChart
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityChartResponse
	 */
	public function GetHistoricalEnergyCommodityChart(XiEnergyTypeGetHistoricalEnergyCommodityChart $_XiEnergyTypeGetHistoricalEnergyCommodityChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyCommodityChart(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChart->getSymbol(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChart->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChart->getEndDate(),'Style'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChart->getStyle(),'Width'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChart->getWidth(),'Height'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChart->getHeight(),'Preset'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyCommodityChartBinary
	 * Meta informations :
	 * 	- documentation : Get a historical chart for a commodity in binary format.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartBinary::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartBinary::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartBinary::getEndDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartBinary::getStyle()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartBinary::getWidth()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartBinary::getHeight()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartBinary::getPreset()
	 * @param XiEnergyTypeGetHistoricalEnergyCommodityChartBinary GetHistoricalEnergyCommodityChartBinary
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityChartBinaryResponse
	 */
	public function GetHistoricalEnergyCommodityChartBinary(XiEnergyTypeGetHistoricalEnergyCommodityChartBinary $_XiEnergyTypeGetHistoricalEnergyCommodityChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyCommodityChartBinary(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartBinary->getSymbol(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartBinary->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartBinary->getEndDate(),'Style'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartBinary->getStyle(),'Width'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartBinary->getWidth(),'Height'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartBinary->getHeight(),'Preset'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyCommodityChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom historical chart for a commodity in binary format.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustom::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustom::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustom::getEndDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustom::getStyle()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustom::getWidth()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustom::getHeight()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustom::getDesign()
	 * @param XiEnergyTypeGetHistoricalEnergyCommodityChartCustom GetHistoricalEnergyCommodityChartCustom
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityChartCustomResponse
	 */
	public function GetHistoricalEnergyCommodityChartCustom(XiEnergyTypeGetHistoricalEnergyCommodityChartCustom $_XiEnergyTypeGetHistoricalEnergyCommodityChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyCommodityChartCustom(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustom->getSymbol(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustom->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustom->getEndDate(),'Style'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustom->getStyle(),'Width'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustom->getWidth(),'Height'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustom->getHeight(),'Design'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalEnergyCommodityChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical chart for a future contract.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary::getSymbol()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary::getStartDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary::getEndDate()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary::getStyle()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary::getWidth()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary::getHeight()
	 * @uses XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary::getDesign()
	 * @param XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary GetHistoricalEnergyCommodityChartCustomBinary
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinaryResponse
	 */
	public function GetHistoricalEnergyCommodityChartCustomBinary(XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary $_XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalEnergyCommodityChartCustomBinary(array('Symbol'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary->getSymbol(),'StartDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary->getStartDate(),'EndDate'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary->getEndDate(),'Style'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary->getStyle(),'Width'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary->getWidth(),'Height'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary->getHeight(),'Design'=>$_XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary->getDesign())));
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
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetIntradayChartDesign::getPreset()
	 * @param XiEnergyTypeGetIntradayChartDesign GetIntradayChartDesign
	 * @return XiEnergyTypeGetIntradayChartDesignResponse
	 */
	public function GetIntradayChartDesign(XiEnergyTypeGetIntradayChartDesign $_XiEnergyTypeGetIntradayChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayChartDesign(array('Preset'=>$_XiEnergyTypeGetIntradayChartDesign->getPreset())));
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
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetHistoricalChartDesign::getPreset()
	 * @param XiEnergyTypeGetHistoricalChartDesign GetHistoricalChartDesign
	 * @return XiEnergyTypeGetHistoricalChartDesignResponse
	 */
	public function GetHistoricalChartDesign(XiEnergyTypeGetHistoricalChartDesign $_XiEnergyTypeGetHistoricalChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalChartDesign(array('Preset'=>$_XiEnergyTypeGetHistoricalChartDesign->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopEnergyHeadlines
	 * Meta informations :
	 * 	- documentation : Return the top press releases for an industry.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetTopEnergyHeadlines::getCount()
	 * @uses XiEnergyTypeGetTopEnergyHeadlines::getIndustry()
	 * @param XiEnergyTypeGetTopEnergyHeadlines GetTopEnergyHeadlines
	 * @return XiEnergyTypeGetTopEnergyHeadlinesResponse
	 */
	public function GetTopEnergyHeadlines(XiEnergyTypeGetTopEnergyHeadlines $_XiEnergyTypeGetTopEnergyHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopEnergyHeadlines(array('Count'=>$_XiEnergyTypeGetTopEnergyHeadlines->getCount(),'Industry'=>$_XiEnergyTypeGetTopEnergyHeadlines->getIndustry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTodaysEnergyHeadlines
	 * Meta informations :
	 * 	- documentation : Return press releases for today for an industry.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetTodaysEnergyHeadlines::getIndustry()
	 * @param XiEnergyTypeGetTodaysEnergyHeadlines GetTodaysEnergyHeadlines
	 * @return XiEnergyTypeGetTodaysEnergyHeadlinesResponse
	 */
	public function GetTodaysEnergyHeadlines(XiEnergyTypeGetTodaysEnergyHeadlines $_XiEnergyTypeGetTodaysEnergyHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTodaysEnergyHeadlines(array('Industry'=>$_XiEnergyTypeGetTodaysEnergyHeadlines->getIndustry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastEnergyHeadlines
	 * Meta informations :
	 * 	- documentation : Return the last press releases since a certain time for an industry.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetLastEnergyHeadlines::getSinceDate()
	 * @uses XiEnergyTypeGetLastEnergyHeadlines::getIndustry()
	 * @param XiEnergyTypeGetLastEnergyHeadlines GetLastEnergyHeadlines
	 * @return XiEnergyTypeGetLastEnergyHeadlinesResponse
	 */
	public function GetLastEnergyHeadlines(XiEnergyTypeGetLastEnergyHeadlines $_XiEnergyTypeGetLastEnergyHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastEnergyHeadlines(array('SinceDate'=>$_XiEnergyTypeGetLastEnergyHeadlines->getSinceDate(),'Industry'=>$_XiEnergyTypeGetLastEnergyHeadlines->getIndustry())));
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
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetFutureOption::getSymbol()
	 * @uses XiEnergyTypeGetFutureOption::getType()
	 * @uses XiEnergyTypeGetFutureOption::getMonth()
	 * @uses XiEnergyTypeGetFutureOption::getYear()
	 * @uses XiEnergyTypeGetFutureOption::getStrikePrice()
	 * @param XiEnergyTypeGetFutureOption GetFutureOption
	 * @return XiEnergyTypeGetFutureOptionResponse
	 */
	public function GetFutureOption(XiEnergyTypeGetFutureOption $_XiEnergyTypeGetFutureOption)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFutureOption(array('Symbol'=>$_XiEnergyTypeGetFutureOption->getSymbol(),'Type'=>$_XiEnergyTypeGetFutureOption->getType(),'Month'=>$_XiEnergyTypeGetFutureOption->getMonth(),'Year'=>$_XiEnergyTypeGetFutureOption->getYear(),'StrikePrice'=>$_XiEnergyTypeGetFutureOption->getStrikePrice())));
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
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetFutureOptionChain::getSymbol()
	 * @uses XiEnergyTypeGetFutureOptionChain::getMonth()
	 * @uses XiEnergyTypeGetFutureOptionChain::getYear()
	 * @param XiEnergyTypeGetFutureOptionChain GetFutureOptionChain
	 * @return XiEnergyTypeGetFutureOptionChainResponse
	 */
	public function GetFutureOptionChain(XiEnergyTypeGetFutureOptionChain $_XiEnergyTypeGetFutureOptionChain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFutureOptionChain(array('Symbol'=>$_XiEnergyTypeGetFutureOptionChain->getSymbol(),'Month'=>$_XiEnergyTypeGetFutureOptionChain->getMonth(),'Year'=>$_XiEnergyTypeGetFutureOptionChain->getYear())));
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
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @uses XiEnergyTypeGetFutureOptionsByStrikePrice::getSymbol()
	 * @uses XiEnergyTypeGetFutureOptionsByStrikePrice::getType()
	 * @uses XiEnergyTypeGetFutureOptionsByStrikePrice::getYear()
	 * @uses XiEnergyTypeGetFutureOptionsByStrikePrice::getStrikePrices()
	 * @param XiEnergyTypeGetFutureOptionsByStrikePrice GetFutureOptionsByStrikePrice
	 * @return XiEnergyTypeGetFutureOptionsByStrikePriceResponse
	 */
	public function GetFutureOptionsByStrikePrice(XiEnergyTypeGetFutureOptionsByStrikePrice $_XiEnergyTypeGetFutureOptionsByStrikePrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFutureOptionsByStrikePrice(array('Symbol'=>$_XiEnergyTypeGetFutureOptionsByStrikePrice->getSymbol(),'Type'=>$_XiEnergyTypeGetFutureOptionsByStrikePrice->getType(),'Year'=>$_XiEnergyTypeGetFutureOptionsByStrikePrice->getYear(),'StrikePrices'=>$_XiEnergyTypeGetFutureOptionsByStrikePrice->getStrikePrices())));
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
	 * @return XiEnergyTypeGetFutureOptionsByStrikePriceResponse
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