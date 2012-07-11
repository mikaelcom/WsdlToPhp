<?php
/**
 * Class file for SPCopyServiceGet
 * @date 07/07/2012
 */
/**
 * Class SPCopyServiceGet
 * @date 07/07/2012
 */
class SPCopyServiceGet extends SPCopyWsdlClass
{
	/**
	 * Method to call GetItem
	 * @uses SPCopyWsdlClass::getSoapClient()
	 * @uses SPCopyWsdlClass::setResult()
	 * @uses SPCopyWsdlClass::getResult()
	 * @uses SPCopyWsdlClass::saveLastError()
	 * @uses SPCopyTypeGetItem::getUrl()
	 * @param SPCopyTypeGetItem GetItem
	 * @return SPCopyTypeGetItemResponse
	 */
	public function GetItem(SPCopyTypeGetItem $_SPCopyTypeGetItem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItem(array('Url'=>$_SPCopyTypeGetItem->getUrl())));
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
	 * @return SPCopyTypeGetItemResponse
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