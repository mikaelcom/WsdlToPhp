<?php
/**
 * Class file for XiWatchListsServiceAdd
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsServiceAdd
 * @date 08/07/2012
 */
class XiWatchListsServiceAdd extends XiWatchListsWsdlClass
{
	/**
	 * Method to call AddWatchList
	 * Meta informations :
	 * 	- documentation : Add a new watchlist.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeAddWatchList::getUsername()
	 * @uses XiWatchListsTypeAddWatchList::getPassword()
	 * @uses XiWatchListsTypeAddWatchList::getIdentifier()
	 * @uses XiWatchListsTypeAddWatchList::getName()
	 * @uses XiWatchListsTypeAddWatchList::getDescription()
	 * @uses XiWatchListsTypeAddWatchList::getType()
	 * @param XiWatchListsTypeAddWatchList AddWatchList
	 * @return XiWatchListsTypeAddWatchListResponse
	 */
	public function AddWatchList(XiWatchListsTypeAddWatchList $_XiWatchListsTypeAddWatchList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddWatchList(array('Username'=>$_XiWatchListsTypeAddWatchList->getUsername(),'Password'=>$_XiWatchListsTypeAddWatchList->getPassword(),'Identifier'=>$_XiWatchListsTypeAddWatchList->getIdentifier(),'Name'=>$_XiWatchListsTypeAddWatchList->getName(),'Description'=>$_XiWatchListsTypeAddWatchList->getDescription(),'Type'=>$_XiWatchListsTypeAddWatchList->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddWatchListItem
	 * Meta informations :
	 * 	- documentation : Add an item to a watchlist.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeAddWatchListItem::getUsername()
	 * @uses XiWatchListsTypeAddWatchListItem::getPassword()
	 * @uses XiWatchListsTypeAddWatchListItem::getWatchList()
	 * @uses XiWatchListsTypeAddWatchListItem::getSymbol()
	 * @param XiWatchListsTypeAddWatchListItem AddWatchListItem
	 * @return XiWatchListsTypeAddWatchListItemResponse
	 */
	public function AddWatchListItem(XiWatchListsTypeAddWatchListItem $_XiWatchListsTypeAddWatchListItem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddWatchListItem(array('Username'=>$_XiWatchListsTypeAddWatchListItem->getUsername(),'Password'=>$_XiWatchListsTypeAddWatchListItem->getPassword(),'WatchList'=>$_XiWatchListsTypeAddWatchListItem->getWatchList(),'Symbol'=>$_XiWatchListsTypeAddWatchListItem->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddWatchListItems
	 * Meta informations :
	 * 	- documentation : Add several items to a watchlist.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeAddWatchListItems::getUsername()
	 * @uses XiWatchListsTypeAddWatchListItems::getPassword()
	 * @uses XiWatchListsTypeAddWatchListItems::getWatchList()
	 * @uses XiWatchListsTypeAddWatchListItems::getSymbols()
	 * @param XiWatchListsTypeAddWatchListItems AddWatchListItems
	 * @return XiWatchListsTypeAddWatchListItemsResponse
	 */
	public function AddWatchListItems(XiWatchListsTypeAddWatchListItems $_XiWatchListsTypeAddWatchListItems)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddWatchListItems(array('Username'=>$_XiWatchListsTypeAddWatchListItems->getUsername(),'Password'=>$_XiWatchListsTypeAddWatchListItems->getPassword(),'WatchList'=>$_XiWatchListsTypeAddWatchListItems->getWatchList(),'Symbols'=>$_XiWatchListsTypeAddWatchListItems->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddWatchListRate
	 * Meta informations :
	 * 	- documentation : Add an interest rate to a watchlist.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeAddWatchListRate::getUsername()
	 * @uses XiWatchListsTypeAddWatchListRate::getPassword()
	 * @uses XiWatchListsTypeAddWatchListRate::getWatchList()
	 * @uses XiWatchListsTypeAddWatchListRate::getRateType()
	 * @uses XiWatchListsTypeAddWatchListRate::getCurrency()
	 * @uses XiWatchListsTypeAddWatchListRate::getPeriodType()
	 * @param XiWatchListsTypeAddWatchListRate AddWatchListRate
	 * @return XiWatchListsTypeAddWatchListRateResponse
	 */
	public function AddWatchListRate(XiWatchListsTypeAddWatchListRate $_XiWatchListsTypeAddWatchListRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddWatchListRate(array('Username'=>$_XiWatchListsTypeAddWatchListRate->getUsername(),'Password'=>$_XiWatchListsTypeAddWatchListRate->getPassword(),'WatchList'=>$_XiWatchListsTypeAddWatchListRate->getWatchList(),'RateType'=>$_XiWatchListsTypeAddWatchListRate->getRateType(),'Currency'=>$_XiWatchListsTypeAddWatchListRate->getCurrency(),'PeriodType'=>$_XiWatchListsTypeAddWatchListRate->getPeriodType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddWatchListMetal
	 * Meta informations :
	 * 	- documentation : Add an interest rate to a watchlist.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeAddWatchListMetal::getUsername()
	 * @uses XiWatchListsTypeAddWatchListMetal::getPassword()
	 * @uses XiWatchListsTypeAddWatchListMetal::getWatchList()
	 * @uses XiWatchListsTypeAddWatchListMetal::getLondonFixing()
	 * @uses XiWatchListsTypeAddWatchListMetal::getCurrency()
	 * @param XiWatchListsTypeAddWatchListMetal AddWatchListMetal
	 * @return XiWatchListsTypeAddWatchListMetalResponse
	 */
	public function AddWatchListMetal(XiWatchListsTypeAddWatchListMetal $_XiWatchListsTypeAddWatchListMetal)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddWatchListMetal(array('Username'=>$_XiWatchListsTypeAddWatchListMetal->getUsername(),'Password'=>$_XiWatchListsTypeAddWatchListMetal->getPassword(),'WatchList'=>$_XiWatchListsTypeAddWatchListMetal->getWatchList(),'LondonFixing'=>$_XiWatchListsTypeAddWatchListMetal->getLondonFixing(),'Currency'=>$_XiWatchListsTypeAddWatchListMetal->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddWatchListCurrency
	 * Meta informations :
	 * 	- documentation : Add an interest rate to a watchlist.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeAddWatchListCurrency::getUsername()
	 * @uses XiWatchListsTypeAddWatchListCurrency::getPassword()
	 * @uses XiWatchListsTypeAddWatchListCurrency::getWatchList()
	 * @uses XiWatchListsTypeAddWatchListCurrency::getCurrency()
	 * @param XiWatchListsTypeAddWatchListCurrency AddWatchListCurrency
	 * @return XiWatchListsTypeAddWatchListCurrencyResponse
	 */
	public function AddWatchListCurrency(XiWatchListsTypeAddWatchListCurrency $_XiWatchListsTypeAddWatchListCurrency)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddWatchListCurrency(array('Username'=>$_XiWatchListsTypeAddWatchListCurrency->getUsername(),'Password'=>$_XiWatchListsTypeAddWatchListCurrency->getPassword(),'WatchList'=>$_XiWatchListsTypeAddWatchListCurrency->getWatchList(),'Currency'=>$_XiWatchListsTypeAddWatchListCurrency->getCurrency())));
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
	 * @return XiWatchListsTypeAddWatchListCurrencyResponse
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