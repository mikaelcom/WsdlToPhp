<?php
/**
 * Class file for SPImagingServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPImagingServiceGet
 * @date 06/07/2012
 */
class SPImagingServiceGet extends SPImagingWsdlClass
{
	/**
	 * Method to call GetItemsXMLData
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeGetItemsXMLData::getStrListName()
	 * @uses SPImagingTypeGetItemsXMLData::getStrFolder()
	 * @uses SPImagingTypeGetItemsXMLData::getItemFileNames()
	 * @param SPImagingTypeGetItemsXMLData GetItemsXMLData
	 * @return SPImagingTypeGetItemsXMLDataResponse
	 */
	public function GetItemsXMLData(SPImagingTypeGetItemsXMLData $_SPImagingTypeGetItemsXMLData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItemsXMLData(array('strListName'=>$_SPImagingTypeGetItemsXMLData->getStrListName(),'strFolder'=>$_SPImagingTypeGetItemsXMLData->getStrFolder(),'itemFileNames'=>$_SPImagingTypeGetItemsXMLData->getItemFileNames())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetItemsByIds
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeGetItemsByIds::getStrListName()
	 * @uses SPImagingTypeGetItemsByIds::getIds()
	 * @param SPImagingTypeGetItemsByIds GetItemsByIds
	 * @return SPImagingTypeGetItemsByIdsResponse
	 */
	public function GetItemsByIds(SPImagingTypeGetItemsByIds $_SPImagingTypeGetItemsByIds)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItemsByIds(array('strListName'=>$_SPImagingTypeGetItemsByIds->getStrListName(),'ids'=>$_SPImagingTypeGetItemsByIds->getIds())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListItems
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeGetListItems::getStrListName()
	 * @uses SPImagingTypeGetListItems::getStrFolder()
	 * @param SPImagingTypeGetListItems GetListItems
	 * @return SPImagingTypeGetListItemsResponse
	 */
	public function GetListItems(SPImagingTypeGetListItems $_SPImagingTypeGetListItems)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListItems(array('strListName'=>$_SPImagingTypeGetListItems->getStrListName(),'strFolder'=>$_SPImagingTypeGetListItems->getStrFolder())));
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
	 * @return SPImagingTypeGetListItemsResponse
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