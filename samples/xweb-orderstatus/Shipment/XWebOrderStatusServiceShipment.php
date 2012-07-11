<?php
/**
 * Class file for XWebOrderStatusServiceShipment
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusServiceShipment
 * @date 09/07/2012
 */
class XWebOrderStatusServiceShipment extends XWebOrderStatusWsdlClass
{
	/**
	 * Method to call ShipmentStatus
	 * @uses XWebOrderStatusWsdlClass::getSoapClient()
	 * @uses XWebOrderStatusWsdlClass::setResult()
	 * @uses XWebOrderStatusWsdlClass::getResult()
	 * @uses XWebOrderStatusWsdlClass::saveLastError()
	 * @uses XWebOrderStatusTypeShipmentStatusRequest::getRequestShipmentStatus()
	 * @param XWebOrderStatusTypeShipmentStatusRequest ShipmentStatusRequest
	 * @return XWebOrderStatusTypeShipmentStatusResponse
	 */
	public function ShipmentStatus(XWebOrderStatusTypeShipmentStatusRequest $_XWebOrderStatusTypeShipmentStatusRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ShipmentStatus(array('RequestShipmentStatus'=>$_XWebOrderStatusTypeShipmentStatusRequest->getRequestShipmentStatus())));
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
	 * @return XWebOrderStatusTypeShipmentStatusResponse
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