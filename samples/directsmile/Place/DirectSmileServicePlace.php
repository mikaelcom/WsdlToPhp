<?php
/**
 * Class file for DirectSmileServicePlace
 * @date 02/08/2012
 */
/**
 * Class DirectSmileServicePlace
 * @date 02/08/2012
 */
class DirectSmileServicePlace extends DirectSmileWsdlClass
{
	/**
	 * Method to call PlaceOrder
	 * Meta informations :
	 * 	- documentation : Send a JobOrder XML to the Backend, requires a valid session
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypePlaceOrder::getSessionID()
	 * @uses DirectSmileTypePlaceOrder::getImagesXML()
	 * @param DirectSmileTypePlaceOrder PlaceOrder
	 * @return DirectSmileTypePlaceOrderResponse
	 */
	public function PlaceOrder(DirectSmileTypePlaceOrder $_DirectSmileTypePlaceOrder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PlaceOrder(array('SessionID'=>$_DirectSmileTypePlaceOrder->getSessionID(),'ImagesXML'=>$_DirectSmileTypePlaceOrder->getImagesXML())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call PlaceOrderAuth
	 * Meta informations :
	 * 	- documentation : Send a JobOrder XML to the Backend, requires authenticationcode
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypePlaceOrderAuth::getAuthenticationCode()
	 * @uses DirectSmileTypePlaceOrderAuth::getImagesXML()
	 * @param DirectSmileTypePlaceOrderAuth PlaceOrderAuth
	 * @return DirectSmileTypePlaceOrderAuthResponse
	 */
	public function PlaceOrderAuth(DirectSmileTypePlaceOrderAuth $_DirectSmileTypePlaceOrderAuth)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PlaceOrderAuth(array('AuthenticationCode'=>$_DirectSmileTypePlaceOrderAuth->getAuthenticationCode(),'ImagesXML'=>$_DirectSmileTypePlaceOrderAuth->getImagesXML())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call PlaceOrderDSM
	 * Meta informations :
	 * 	- documentation : DirectSmile internal method, simular to PlaceOrder
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypePlaceOrderDSM::getAuthenticationCode()
	 * @uses DirectSmileTypePlaceOrderDSM::getImagesXML()
	 * @param DirectSmileTypePlaceOrderDSM PlaceOrderDSM
	 * @return DirectSmileTypePlaceOrderDSMResponse
	 */
	public function PlaceOrderDSM(DirectSmileTypePlaceOrderDSM $_DirectSmileTypePlaceOrderDSM)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PlaceOrderDSM(array('AuthenticationCode'=>$_DirectSmileTypePlaceOrderDSM->getAuthenticationCode(),'ImagesXML'=>$_DirectSmileTypePlaceOrderDSM->getImagesXML())));
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
	 * @return DirectSmileTypePlaceOrderResponse|DirectSmileTypePlaceOrderAuthResponse|DirectSmileTypePlaceOrderDSMResponse
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