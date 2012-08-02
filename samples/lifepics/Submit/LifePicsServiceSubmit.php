<?php
/**
 * Class file for LifePicsServiceSubmit
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceSubmit
 * @date 02/08/2012
 */
class LifePicsServiceSubmit extends LifePicsWsdlClass
{
	/**
	 * Method to call SubmitOrder
	 * Meta informations :
	 * 	- documentation : Used for submitting an order for the user's shopping cart
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeSubmitOrder::getSessionID()
	 * @uses LifePicsTypeSubmitOrder::getCartID()
	 * @uses LifePicsTypeSubmitOrder::getPartnerSourceID()
	 * @uses LifePicsTypeSubmitOrder::getBillingAddressXML()
	 * @uses LifePicsTypeSubmitOrder::getPaymentMethod()
	 * @param LifePicsTypeSubmitOrder SubmitOrder
	 * @return LifePicsTypeSubmitOrderResponse
	 */
	public function SubmitOrder(LifePicsTypeSubmitOrder $_LifePicsTypeSubmitOrder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SubmitOrder(array('SessionID'=>$_LifePicsTypeSubmitOrder->getSessionID(),'CartID'=>$_LifePicsTypeSubmitOrder->getCartID(),'PartnerSourceID'=>$_LifePicsTypeSubmitOrder->getPartnerSourceID(),'BillingAddressXML'=>$_LifePicsTypeSubmitOrder->getBillingAddressXML(),'PaymentMethod'=>$_LifePicsTypeSubmitOrder->getPaymentMethod())));
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
	 * @return LifePicsTypeSubmitOrderResponse
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