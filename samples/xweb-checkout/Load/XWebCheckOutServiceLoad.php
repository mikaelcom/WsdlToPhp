<?php
/**
 * Class file for XWebCheckOutServiceLoad
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutServiceLoad
 * @date 09/07/2012
 */
class XWebCheckOutServiceLoad extends XWebCheckOutWsdlClass
{
	/**
	 * Method to call LoadOrder
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeLoadOrderRequest::getOrder_ID()
	 * @param XWebCheckOutTypeLoadOrderRequest LoadOrderRequest
	 * @return XWebCheckOutTypeLoadOrderResponse
	 */
	public function LoadOrder(XWebCheckOutTypeLoadOrderRequest $_XWebCheckOutTypeLoadOrderRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadOrder(array('Order_ID'=>$_XWebCheckOutTypeLoadOrderRequest->getOrder_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadBaskets
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebCheckOutTypeLoadBasketsResponse
	 */
	public function LoadBaskets(XWebCheckOutTypeUNKNOWN $_XWebCheckOutTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadBaskets(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadBasketsPaged
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeLoadBasketsPagedRequest::getPage_Number()
	 * @uses XWebCheckOutTypeLoadBasketsPagedRequest::getPage_Size()
	 * @param XWebCheckOutTypeLoadBasketsPagedRequest LoadBasketsPagedRequest
	 * @return XWebCheckOutTypeLoadBasketsPagedResponse
	 */
	public function LoadBasketsPaged(XWebCheckOutTypeLoadBasketsPagedRequest $_XWebCheckOutTypeLoadBasketsPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadBasketsPaged(array('Page_Number'=>$_XWebCheckOutTypeLoadBasketsPagedRequest->getPage_Number(),'Page_Size'=>$_XWebCheckOutTypeLoadBasketsPagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadReceipts
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebCheckOutTypeLoadReceiptsResponse
	 */
	public function LoadReceipts(XWebCheckOutTypeUNKNOWN $_XWebCheckOutTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadReceipts(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadReceiptsPaged
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeLoadReceiptsPagedRequest::getPage_Number()
	 * @uses XWebCheckOutTypeLoadReceiptsPagedRequest::getPage_Size()
	 * @param XWebCheckOutTypeLoadReceiptsPagedRequest LoadReceiptsPagedRequest
	 * @return XWebCheckOutTypeLoadReceiptsPagedResponse
	 */
	public function LoadReceiptsPaged(XWebCheckOutTypeLoadReceiptsPagedRequest $_XWebCheckOutTypeLoadReceiptsPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadReceiptsPaged(array('Page_Number'=>$_XWebCheckOutTypeLoadReceiptsPagedRequest->getPage_Number(),'Page_Size'=>$_XWebCheckOutTypeLoadReceiptsPagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadReceiptsByShopper
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeLoadReceiptsByShopperRequest::getShopper_ID()
	 * @param XWebCheckOutTypeLoadReceiptsByShopperRequest LoadReceiptsByShopperRequest
	 * @return XWebCheckOutTypeLoadReceiptsByShopperResponse
	 */
	public function LoadReceiptsByShopper(XWebCheckOutTypeLoadReceiptsByShopperRequest $_XWebCheckOutTypeLoadReceiptsByShopperRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadReceiptsByShopper(array('Shopper_ID'=>$_XWebCheckOutTypeLoadReceiptsByShopperRequest->getShopper_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadReceiptsByShopperPaged
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeLoadReceiptsByShopperPagedRequest::getShopper_ID()
	 * @uses XWebCheckOutTypeLoadReceiptsByShopperPagedRequest::getPage_Number()
	 * @uses XWebCheckOutTypeLoadReceiptsByShopperPagedRequest::getPage_Size()
	 * @param XWebCheckOutTypeLoadReceiptsByShopperPagedRequest LoadReceiptsByShopperPagedRequest
	 * @return XWebCheckOutTypeLoadReceiptsByShopperPagedResponse
	 */
	public function LoadReceiptsByShopperPaged(XWebCheckOutTypeLoadReceiptsByShopperPagedRequest $_XWebCheckOutTypeLoadReceiptsByShopperPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadReceiptsByShopperPaged(array('Shopper_ID'=>$_XWebCheckOutTypeLoadReceiptsByShopperPagedRequest->getShopper_ID(),'Page_Number'=>$_XWebCheckOutTypeLoadReceiptsByShopperPagedRequest->getPage_Number(),'Page_Size'=>$_XWebCheckOutTypeLoadReceiptsByShopperPagedRequest->getPage_Size())));
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
	 * @return XWebCheckOutTypeLoadReceiptsByShopperPagedResponse
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