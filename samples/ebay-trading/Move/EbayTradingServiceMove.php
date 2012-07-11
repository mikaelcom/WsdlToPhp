<?php
/**
 * Class file for EbayTradingServiceMove
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceMove
 * @date 04/07/2012
 */
class EbayTradingServiceMove extends EbayTradingWsdlClass
{
	/**
	 * Method to call MoveSellingManagerInventoryFolder
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeMoveSellingManagerInventoryFolderRequestType::getFolderID()
	 * @uses EbayTradingTypeMoveSellingManagerInventoryFolderRequestType::getNewParentFolderID()
	 * @param EbayTradingTypeMoveSellingManagerInventoryFolderRequestType MoveSellingManagerInventoryFolderRequestType
	 * @return EbayTradingTypeMoveSellingManagerInventoryFolderResponseType
	 */
	public function MoveSellingManagerInventoryFolder(EbayTradingTypeMoveSellingManagerInventoryFolderRequestType $_EbayTradingTypeMoveSellingManagerInventoryFolderRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MoveSellingManagerInventoryFolder(array('FolderID'=>$_EbayTradingTypeMoveSellingManagerInventoryFolderRequestType->getFolderID(),'NewParentFolderID'=>$_EbayTradingTypeMoveSellingManagerInventoryFolderRequestType->getNewParentFolderID())));
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
	 * @return EbayTradingTypeMoveSellingManagerInventoryFolderResponseType
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