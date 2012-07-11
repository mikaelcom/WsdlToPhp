<?php
/**
 * Class file for EbayTradingServiceRelist
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceRelist
 * @date 04/07/2012
 */
class EbayTradingServiceRelist extends EbayTradingWsdlClass
{
	/**
	 * Method to call RelistFixedPriceItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeRelistFixedPriceItemRequestType::getItem()
	 * @uses EbayTradingTypeRelistFixedPriceItemRequestType::getDeletedField()
	 * @param EbayTradingTypeRelistFixedPriceItemRequestType RelistFixedPriceItemRequestType
	 * @return EbayTradingTypeRelistFixedPriceItemResponseType
	 */
	public function RelistFixedPriceItem(EbayTradingTypeRelistFixedPriceItemRequestType $_EbayTradingTypeRelistFixedPriceItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RelistFixedPriceItem(array('Item'=>$_EbayTradingTypeRelistFixedPriceItemRequestType->getItem(),'DeletedField'=>$_EbayTradingTypeRelistFixedPriceItemRequestType->getDeletedField())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RelistItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeRelistItemRequestType::getItem()
	 * @uses EbayTradingTypeRelistItemRequestType::getDeletedField()
	 * @param EbayTradingTypeRelistItemRequestType RelistItemRequestType
	 * @return EbayTradingTypeRelistItemResponseType
	 */
	public function RelistItem(EbayTradingTypeRelistItemRequestType $_EbayTradingTypeRelistItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RelistItem(array('Item'=>$_EbayTradingTypeRelistItemRequestType->getItem(),'DeletedField'=>$_EbayTradingTypeRelistItemRequestType->getDeletedField())));
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
	 * @return EbayTradingTypeRelistItemResponseType
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