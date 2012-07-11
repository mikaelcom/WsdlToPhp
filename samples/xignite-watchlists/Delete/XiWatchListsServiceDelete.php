<?php
/**
 * Class file for XiWatchListsServiceDelete
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsServiceDelete
 * @date 08/07/2012
 */
class XiWatchListsServiceDelete extends XiWatchListsWsdlClass
{
	/**
	 * Method to call DeleteWatchList
	 * Meta informations :
	 * 	- documentation : Delete a watchlist.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeDeleteWatchList::getUsername()
	 * @uses XiWatchListsTypeDeleteWatchList::getPassword()
	 * @uses XiWatchListsTypeDeleteWatchList::getIdentifier()
	 * @param XiWatchListsTypeDeleteWatchList DeleteWatchList
	 * @return XiWatchListsTypeDeleteWatchListResponse
	 */
	public function DeleteWatchList(XiWatchListsTypeDeleteWatchList $_XiWatchListsTypeDeleteWatchList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteWatchList(array('Username'=>$_XiWatchListsTypeDeleteWatchList->getUsername(),'Password'=>$_XiWatchListsTypeDeleteWatchList->getPassword(),'Identifier'=>$_XiWatchListsTypeDeleteWatchList->getIdentifier())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteWatchListItem
	 * Meta informations :
	 * 	- documentation : Delete a watchlist item.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeDeleteWatchListItem::getUsername()
	 * @uses XiWatchListsTypeDeleteWatchListItem::getPassword()
	 * @uses XiWatchListsTypeDeleteWatchListItem::getWatchList()
	 * @uses XiWatchListsTypeDeleteWatchListItem::getSymbol()
	 * @param XiWatchListsTypeDeleteWatchListItem DeleteWatchListItem
	 * @return XiWatchListsTypeDeleteWatchListItemResponse
	 */
	public function DeleteWatchListItem(XiWatchListsTypeDeleteWatchListItem $_XiWatchListsTypeDeleteWatchListItem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteWatchListItem(array('Username'=>$_XiWatchListsTypeDeleteWatchListItem->getUsername(),'Password'=>$_XiWatchListsTypeDeleteWatchListItem->getPassword(),'WatchList'=>$_XiWatchListsTypeDeleteWatchListItem->getWatchList(),'Symbol'=>$_XiWatchListsTypeDeleteWatchListItem->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteWatchListRate
	 * Meta informations :
	 * 	- documentation : Delete an interest rate from a watchlist.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeDeleteWatchListRate::getUsername()
	 * @uses XiWatchListsTypeDeleteWatchListRate::getPassword()
	 * @uses XiWatchListsTypeDeleteWatchListRate::getWatchList()
	 * @uses XiWatchListsTypeDeleteWatchListRate::getRateType()
	 * @uses XiWatchListsTypeDeleteWatchListRate::getCurrency()
	 * @uses XiWatchListsTypeDeleteWatchListRate::getPeriodType()
	 * @param XiWatchListsTypeDeleteWatchListRate DeleteWatchListRate
	 * @return XiWatchListsTypeDeleteWatchListRateResponse
	 */
	public function DeleteWatchListRate(XiWatchListsTypeDeleteWatchListRate $_XiWatchListsTypeDeleteWatchListRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteWatchListRate(array('Username'=>$_XiWatchListsTypeDeleteWatchListRate->getUsername(),'Password'=>$_XiWatchListsTypeDeleteWatchListRate->getPassword(),'WatchList'=>$_XiWatchListsTypeDeleteWatchListRate->getWatchList(),'RateType'=>$_XiWatchListsTypeDeleteWatchListRate->getRateType(),'Currency'=>$_XiWatchListsTypeDeleteWatchListRate->getCurrency(),'PeriodType'=>$_XiWatchListsTypeDeleteWatchListRate->getPeriodType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteWatchListMetal
	 * Meta informations :
	 * 	- documentation : Delete an interest rate from a watchlist.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeDeleteWatchListMetal::getUsername()
	 * @uses XiWatchListsTypeDeleteWatchListMetal::getPassword()
	 * @uses XiWatchListsTypeDeleteWatchListMetal::getWatchList()
	 * @uses XiWatchListsTypeDeleteWatchListMetal::getLondonFixing()
	 * @uses XiWatchListsTypeDeleteWatchListMetal::getCurrency()
	 * @param XiWatchListsTypeDeleteWatchListMetal DeleteWatchListMetal
	 * @return XiWatchListsTypeDeleteWatchListMetalResponse
	 */
	public function DeleteWatchListMetal(XiWatchListsTypeDeleteWatchListMetal $_XiWatchListsTypeDeleteWatchListMetal)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteWatchListMetal(array('Username'=>$_XiWatchListsTypeDeleteWatchListMetal->getUsername(),'Password'=>$_XiWatchListsTypeDeleteWatchListMetal->getPassword(),'WatchList'=>$_XiWatchListsTypeDeleteWatchListMetal->getWatchList(),'LondonFixing'=>$_XiWatchListsTypeDeleteWatchListMetal->getLondonFixing(),'Currency'=>$_XiWatchListsTypeDeleteWatchListMetal->getCurrency())));
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
	 * @return XiWatchListsTypeDeleteWatchListMetalResponse
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