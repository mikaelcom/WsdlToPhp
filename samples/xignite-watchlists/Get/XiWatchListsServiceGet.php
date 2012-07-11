<?php
/**
 * Class file for XiWatchListsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsServiceGet
 * @date 08/07/2012
 */
class XiWatchListsServiceGet extends XiWatchListsWsdlClass
{
	/**
	 * Method to call GetWatchList
	 * Meta informations :
	 * 	- documentation : Get a watchlist and its content.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeGetWatchList::getUsername()
	 * @uses XiWatchListsTypeGetWatchList::getPassword()
	 * @uses XiWatchListsTypeGetWatchList::getWatchList()
	 * @param XiWatchListsTypeGetWatchList GetWatchList
	 * @return XiWatchListsTypeGetWatchListResponse
	 */
	public function GetWatchList(XiWatchListsTypeGetWatchList $_XiWatchListsTypeGetWatchList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWatchList(array('Username'=>$_XiWatchListsTypeGetWatchList->getUsername(),'Password'=>$_XiWatchListsTypeGetWatchList->getPassword(),'WatchList'=>$_XiWatchListsTypeGetWatchList->getWatchList())));
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
	 * @return XiWatchListsTypeGetWatchListResponse
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