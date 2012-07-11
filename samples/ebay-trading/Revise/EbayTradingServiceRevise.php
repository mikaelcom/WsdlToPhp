<?php
/**
 * Class file for EbayTradingServiceRevise
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceRevise
 * @date 04/07/2012
 */
class EbayTradingServiceRevise extends EbayTradingWsdlClass
{
	/**
	 * Method to call ReviseCheckoutStatus
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getItemID()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getTransactionID()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getOrderID()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getAmountPaid()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getPaymentMethodUsed()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getCheckoutStatus()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getShippingService()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getShippingIncludedInTax()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getCheckoutMethod()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getInsuranceType()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getPaymentStatus()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getAdjustmentAmount()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getShippingAddress()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getBuyerID()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getShippingInsuranceCost()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getSalesTax()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getShippingCost()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getEncryptedID()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getExternalTransaction()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getMultipleSellerPaymentID()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getCODCost()
	 * @uses EbayTradingTypeReviseCheckoutStatusRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeReviseCheckoutStatusRequestType ReviseCheckoutStatusRequestType
	 * @return EbayTradingTypeReviseCheckoutStatusResponseType
	 */
	public function ReviseCheckoutStatus(EbayTradingTypeReviseCheckoutStatusRequestType $_EbayTradingTypeReviseCheckoutStatusRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseCheckoutStatus(array('ItemID'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getTransactionID(),'OrderID'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getOrderID(),'AmountPaid'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getAmountPaid(),'PaymentMethodUsed'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getPaymentMethodUsed(),'CheckoutStatus'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getCheckoutStatus(),'ShippingService'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getShippingService(),'ShippingIncludedInTax'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getShippingIncludedInTax(),'CheckoutMethod'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getCheckoutMethod(),'InsuranceType'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getInsuranceType(),'PaymentStatus'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getPaymentStatus(),'AdjustmentAmount'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getAdjustmentAmount(),'ShippingAddress'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getShippingAddress(),'BuyerID'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getBuyerID(),'ShippingInsuranceCost'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getShippingInsuranceCost(),'SalesTax'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getSalesTax(),'ShippingCost'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getShippingCost(),'EncryptedID'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getEncryptedID(),'ExternalTransaction'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getExternalTransaction(),'MultipleSellerPaymentID'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getMultipleSellerPaymentID(),'CODCost'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getCODCost(),'OrderLineItemID'=>$_EbayTradingTypeReviseCheckoutStatusRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReviseFixedPriceItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseFixedPriceItemRequestType::getItem()
	 * @uses EbayTradingTypeReviseFixedPriceItemRequestType::getDeletedField()
	 * @param EbayTradingTypeReviseFixedPriceItemRequestType ReviseFixedPriceItemRequestType
	 * @return EbayTradingTypeReviseFixedPriceItemResponseType
	 */
	public function ReviseFixedPriceItem(EbayTradingTypeReviseFixedPriceItemRequestType $_EbayTradingTypeReviseFixedPriceItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseFixedPriceItem(array('Item'=>$_EbayTradingTypeReviseFixedPriceItemRequestType->getItem(),'DeletedField'=>$_EbayTradingTypeReviseFixedPriceItemRequestType->getDeletedField())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReviseInventoryStatus
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseInventoryStatusRequestType::getInventoryStatus()
	 * @param EbayTradingTypeReviseInventoryStatusRequestType ReviseInventoryStatusRequestType
	 * @return EbayTradingTypeReviseInventoryStatusResponseType
	 */
	public function ReviseInventoryStatus(EbayTradingTypeReviseInventoryStatusRequestType $_EbayTradingTypeReviseInventoryStatusRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseInventoryStatus(array('InventoryStatus'=>$_EbayTradingTypeReviseInventoryStatusRequestType->getInventoryStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReviseItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseItemRequestType::getItem()
	 * @uses EbayTradingTypeReviseItemRequestType::getDeletedField()
	 * @uses EbayTradingTypeReviseItemRequestType::getVerifyOnly()
	 * @param EbayTradingTypeReviseItemRequestType ReviseItemRequestType
	 * @return EbayTradingTypeReviseItemResponseType
	 */
	public function ReviseItem(EbayTradingTypeReviseItemRequestType $_EbayTradingTypeReviseItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseItem(array('Item'=>$_EbayTradingTypeReviseItemRequestType->getItem(),'DeletedField'=>$_EbayTradingTypeReviseItemRequestType->getDeletedField(),'VerifyOnly'=>$_EbayTradingTypeReviseItemRequestType->getVerifyOnly())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReviseMyMessages
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseMyMessagesRequestType::getMessageIDs()
	 * @uses EbayTradingTypeReviseMyMessagesRequestType::getAlertIDs()
	 * @uses EbayTradingTypeReviseMyMessagesRequestType::getRead()
	 * @uses EbayTradingTypeReviseMyMessagesRequestType::getFlagged()
	 * @uses EbayTradingTypeReviseMyMessagesRequestType::getFolderID()
	 * @param EbayTradingTypeReviseMyMessagesRequestType ReviseMyMessagesRequestType
	 * @return EbayTradingTypeReviseMyMessagesResponseType
	 */
	public function ReviseMyMessages(EbayTradingTypeReviseMyMessagesRequestType $_EbayTradingTypeReviseMyMessagesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseMyMessages(array('MessageIDs'=>$_EbayTradingTypeReviseMyMessagesRequestType->getMessageIDs(),'AlertIDs'=>$_EbayTradingTypeReviseMyMessagesRequestType->getAlertIDs(),'Read'=>$_EbayTradingTypeReviseMyMessagesRequestType->getRead(),'Flagged'=>$_EbayTradingTypeReviseMyMessagesRequestType->getFlagged(),'FolderID'=>$_EbayTradingTypeReviseMyMessagesRequestType->getFolderID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReviseMyMessagesFolders
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseMyMessagesFoldersRequestType::getOperation()
	 * @uses EbayTradingTypeReviseMyMessagesFoldersRequestType::getFolderID()
	 * @uses EbayTradingTypeReviseMyMessagesFoldersRequestType::getFolderName()
	 * @param EbayTradingTypeReviseMyMessagesFoldersRequestType ReviseMyMessagesFoldersRequestType
	 * @return EbayTradingTypeReviseMyMessagesFoldersResponseType
	 */
	public function ReviseMyMessagesFolders(EbayTradingTypeReviseMyMessagesFoldersRequestType $_EbayTradingTypeReviseMyMessagesFoldersRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseMyMessagesFolders(array('Operation'=>$_EbayTradingTypeReviseMyMessagesFoldersRequestType->getOperation(),'FolderID'=>$_EbayTradingTypeReviseMyMessagesFoldersRequestType->getFolderID(),'FolderName'=>$_EbayTradingTypeReviseMyMessagesFoldersRequestType->getFolderName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReviseSellingManagerInventoryFolder
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseSellingManagerInventoryFolderRequestType::getFolder()
	 * @param EbayTradingTypeReviseSellingManagerInventoryFolderRequestType ReviseSellingManagerInventoryFolderRequestType
	 * @return EbayTradingTypeReviseSellingManagerInventoryFolderResponseType
	 */
	public function ReviseSellingManagerInventoryFolder(EbayTradingTypeReviseSellingManagerInventoryFolderRequestType $_EbayTradingTypeReviseSellingManagerInventoryFolderRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseSellingManagerInventoryFolder(array('Folder'=>$_EbayTradingTypeReviseSellingManagerInventoryFolderRequestType->getFolder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReviseSellingManagerProduct
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseSellingManagerProductRequestType::getSellingManagerProductDetails()
	 * @uses EbayTradingTypeReviseSellingManagerProductRequestType::getSellingManagerFolderDetails()
	 * @uses EbayTradingTypeReviseSellingManagerProductRequestType::getDeletedField()
	 * @uses EbayTradingTypeReviseSellingManagerProductRequestType::getSellingManagerProductSpecifics()
	 * @param EbayTradingTypeReviseSellingManagerProductRequestType ReviseSellingManagerProductRequestType
	 * @return EbayTradingTypeReviseSellingManagerProductResponseType
	 */
	public function ReviseSellingManagerProduct(EbayTradingTypeReviseSellingManagerProductRequestType $_EbayTradingTypeReviseSellingManagerProductRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseSellingManagerProduct(array('SellingManagerProductDetails'=>$_EbayTradingTypeReviseSellingManagerProductRequestType->getSellingManagerProductDetails(),'SellingManagerFolderDetails'=>$_EbayTradingTypeReviseSellingManagerProductRequestType->getSellingManagerFolderDetails(),'DeletedField'=>$_EbayTradingTypeReviseSellingManagerProductRequestType->getDeletedField(),'SellingManagerProductSpecifics'=>$_EbayTradingTypeReviseSellingManagerProductRequestType->getSellingManagerProductSpecifics())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReviseSellingManagerSaleRecord
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseSellingManagerSaleRecordRequestType::getItemID()
	 * @uses EbayTradingTypeReviseSellingManagerSaleRecordRequestType::getTransactionID()
	 * @uses EbayTradingTypeReviseSellingManagerSaleRecordRequestType::getOrderID()
	 * @uses EbayTradingTypeReviseSellingManagerSaleRecordRequestType::getSellingManagerSoldOrder()
	 * @uses EbayTradingTypeReviseSellingManagerSaleRecordRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeReviseSellingManagerSaleRecordRequestType ReviseSellingManagerSaleRecordRequestType
	 * @return EbayTradingTypeReviseSellingManagerSaleRecordResponseType
	 */
	public function ReviseSellingManagerSaleRecord(EbayTradingTypeReviseSellingManagerSaleRecordRequestType $_EbayTradingTypeReviseSellingManagerSaleRecordRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseSellingManagerSaleRecord(array('ItemID'=>$_EbayTradingTypeReviseSellingManagerSaleRecordRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeReviseSellingManagerSaleRecordRequestType->getTransactionID(),'OrderID'=>$_EbayTradingTypeReviseSellingManagerSaleRecordRequestType->getOrderID(),'SellingManagerSoldOrder'=>$_EbayTradingTypeReviseSellingManagerSaleRecordRequestType->getSellingManagerSoldOrder(),'OrderLineItemID'=>$_EbayTradingTypeReviseSellingManagerSaleRecordRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReviseSellingManagerTemplate
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeReviseSellingManagerTemplateRequestType::getSaleTemplateID()
	 * @uses EbayTradingTypeReviseSellingManagerTemplateRequestType::getProductID()
	 * @uses EbayTradingTypeReviseSellingManagerTemplateRequestType::getSaleTemplateName()
	 * @uses EbayTradingTypeReviseSellingManagerTemplateRequestType::getItem()
	 * @uses EbayTradingTypeReviseSellingManagerTemplateRequestType::getDeletedField()
	 * @uses EbayTradingTypeReviseSellingManagerTemplateRequestType::getVerifyOnly()
	 * @param EbayTradingTypeReviseSellingManagerTemplateRequestType ReviseSellingManagerTemplateRequestType
	 * @return EbayTradingTypeReviseSellingManagerTemplateResponseType
	 */
	public function ReviseSellingManagerTemplate(EbayTradingTypeReviseSellingManagerTemplateRequestType $_EbayTradingTypeReviseSellingManagerTemplateRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReviseSellingManagerTemplate(array('SaleTemplateID'=>$_EbayTradingTypeReviseSellingManagerTemplateRequestType->getSaleTemplateID(),'ProductID'=>$_EbayTradingTypeReviseSellingManagerTemplateRequestType->getProductID(),'SaleTemplateName'=>$_EbayTradingTypeReviseSellingManagerTemplateRequestType->getSaleTemplateName(),'Item'=>$_EbayTradingTypeReviseSellingManagerTemplateRequestType->getItem(),'DeletedField'=>$_EbayTradingTypeReviseSellingManagerTemplateRequestType->getDeletedField(),'VerifyOnly'=>$_EbayTradingTypeReviseSellingManagerTemplateRequestType->getVerifyOnly())));
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
	 * @return EbayTradingTypeReviseSellingManagerTemplateResponseType
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