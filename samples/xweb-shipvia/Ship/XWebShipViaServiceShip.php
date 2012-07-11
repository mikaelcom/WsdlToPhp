<?php
/**
 * Class file for XWebShipViaServiceShip
 * @date 09/07/2012
 */
/**
 * Class XWebShipViaServiceShip
 * @date 09/07/2012
 */
class XWebShipViaServiceShip extends XWebShipViaWsdlClass
{
	/**
	 * Method to call ShipVia
	 * @uses XWebShipViaWsdlClass::getSoapClient()
	 * @uses XWebShipViaWsdlClass::setResult()
	 * @uses XWebShipViaWsdlClass::getResult()
	 * @uses XWebShipViaWsdlClass::saveLastError()
	 * @uses XWebShipViaTypeShipViaRequest::getRequestShipVia()
	 * @param XWebShipViaTypeShipViaRequest ShipViaRequest
	 * @return XWebShipViaTypeShipViaResponse
	 */
	public function ShipVia(XWebShipViaTypeShipViaRequest $_XWebShipViaTypeShipViaRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ShipVia(array('RequestShipVia'=>$_XWebShipViaTypeShipViaRequest->getRequestShipVia())));
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
	 * @return XWebShipViaTypeShipViaResponse
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