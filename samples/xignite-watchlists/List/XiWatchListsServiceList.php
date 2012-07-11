<?php
/**
 * Class file for XiWatchListsServiceList
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsServiceList
 * @date 08/07/2012
 */
class XiWatchListsServiceList extends XiWatchListsWsdlClass
{
	/**
	 * Method to call ListWatchLists
	 * Meta informations :
	 * 	- documentation : List available watchlists.
	 * @uses XiWatchListsWsdlClass::getSoapClient()
	 * @uses XiWatchListsWsdlClass::setResult()
	 * @uses XiWatchListsWsdlClass::getResult()
	 * @uses XiWatchListsWsdlClass::saveLastError()
	 * @uses XiWatchListsTypeListWatchLists::getUsername()
	 * @uses XiWatchListsTypeListWatchLists::getPassword()
	 * @param XiWatchListsTypeListWatchLists ListWatchLists
	 * @return XiWatchListsTypeListWatchListsResponse
	 */
	public function ListWatchLists(XiWatchListsTypeListWatchLists $_XiWatchListsTypeListWatchLists)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListWatchLists(array('Username'=>$_XiWatchListsTypeListWatchLists->getUsername(),'Password'=>$_XiWatchListsTypeListWatchLists->getPassword())));
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
	 * @return XiWatchListsTypeListWatchListsResponse
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