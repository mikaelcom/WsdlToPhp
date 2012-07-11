<?php
/**
 * Class file for EbayTradingServiceRemove
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceRemove
 * @date 04/07/2012
 */
class EbayTradingServiceRemove extends EbayTradingWsdlClass
{
	/**
	 * Method to call RemoveFromWatchList
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeRemoveFromWatchListRequestType::getItemID()
	 * @uses EbayTradingTypeRemoveFromWatchListRequestType::getRemoveAllItems()
	 * @uses EbayTradingTypeRemoveFromWatchListRequestType::getVariationKey()
	 * @param EbayTradingTypeRemoveFromWatchListRequestType RemoveFromWatchListRequestType
	 * @return EbayTradingTypeRemoveFromWatchListResponseType
	 */
	public function RemoveFromWatchList(EbayTradingTypeRemoveFromWatchListRequestType $_EbayTradingTypeRemoveFromWatchListRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveFromWatchList(array('ItemID'=>$_EbayTradingTypeRemoveFromWatchListRequestType->getItemID(),'RemoveAllItems'=>$_EbayTradingTypeRemoveFromWatchListRequestType->getRemoveAllItems(),'VariationKey'=>$_EbayTradingTypeRemoveFromWatchListRequestType->getVariationKey())));
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
	 * @return EbayTradingTypeRemoveFromWatchListResponseType
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