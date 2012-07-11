<?php
/**
 * Class file for EbayTradingServiceSave
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceSave
 * @date 04/07/2012
 */
class EbayTradingServiceSave extends EbayTradingWsdlClass
{
	/**
	 * Method to call SaveItemToSellingManagerTemplate
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSaveItemToSellingManagerTemplateRequestType::getItemID()
	 * @uses EbayTradingTypeSaveItemToSellingManagerTemplateRequestType::getProductID()
	 * @uses EbayTradingTypeSaveItemToSellingManagerTemplateRequestType::getTemplateName()
	 * @param EbayTradingTypeSaveItemToSellingManagerTemplateRequestType SaveItemToSellingManagerTemplateRequestType
	 * @return EbayTradingTypeSaveItemToSellingManagerTemplateResponseType
	 */
	public function SaveItemToSellingManagerTemplate(EbayTradingTypeSaveItemToSellingManagerTemplateRequestType $_EbayTradingTypeSaveItemToSellingManagerTemplateRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SaveItemToSellingManagerTemplate(array('ItemID'=>$_EbayTradingTypeSaveItemToSellingManagerTemplateRequestType->getItemID(),'ProductID'=>$_EbayTradingTypeSaveItemToSellingManagerTemplateRequestType->getProductID(),'TemplateName'=>$_EbayTradingTypeSaveItemToSellingManagerTemplateRequestType->getTemplateName())));
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
	 * @return EbayTradingTypeSaveItemToSellingManagerTemplateResponseType
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