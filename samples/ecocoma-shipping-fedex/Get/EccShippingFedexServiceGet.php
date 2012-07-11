<?php
/**
 * Class file for EccShippingFedexServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccShippingFedexServiceGet
 * @date 03/07/2012
 */
class EccShippingFedexServiceGet extends EccShippingFedexWsdlClass
{
	/**
	 * Method to call GetFedExRate
	 * Meta informations :
	 * 	- documentation : Get FedEx shipping rate.
	 * @uses EccShippingFedexWsdlClass::getSoapClient()
	 * @uses EccShippingFedexWsdlClass::setResult()
	 * @uses EccShippingFedexWsdlClass::getResult()
	 * @uses EccShippingFedexWsdlClass::saveLastError()
	 * @uses EccShippingFedexTypeGetFedExRate::getKeyID()
	 * @uses EccShippingFedexTypeGetFedExRate::getDomainID()
	 * @uses EccShippingFedexTypeGetFedExRate::getServiceType()
	 * @uses EccShippingFedexTypeGetFedExRate::getSenderPostalCode()
	 * @uses EccShippingFedexTypeGetFedExRate::getSenderCountryCode()
	 * @uses EccShippingFedexTypeGetFedExRate::getRecipientPostalCode()
	 * @uses EccShippingFedexTypeGetFedExRate::getRecipientCountryCode()
	 * @uses EccShippingFedexTypeGetFedExRate::getTotalPackageWeight()
	 * @uses EccShippingFedexTypeGetFedExRate::getDeclaredValue()
	 * @param EccShippingFedexTypeGetFedExRate GetFedExRate
	 * @return EccShippingFedexTypeGetFedExRateResponse
	 */
	public function GetFedExRate(EccShippingFedexTypeGetFedExRate $_EccShippingFedexTypeGetFedExRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFedExRate(array('KeyID'=>$_EccShippingFedexTypeGetFedExRate->getKeyID(),'DomainID'=>$_EccShippingFedexTypeGetFedExRate->getDomainID(),'ServiceType'=>$_EccShippingFedexTypeGetFedExRate->getServiceType(),'SenderPostalCode'=>$_EccShippingFedexTypeGetFedExRate->getSenderPostalCode(),'SenderCountryCode'=>$_EccShippingFedexTypeGetFedExRate->getSenderCountryCode(),'RecipientPostalCode'=>$_EccShippingFedexTypeGetFedExRate->getRecipientPostalCode(),'RecipientCountryCode'=>$_EccShippingFedexTypeGetFedExRate->getRecipientCountryCode(),'TotalPackageWeight'=>$_EccShippingFedexTypeGetFedExRate->getTotalPackageWeight(),'DeclaredValue'=>$_EccShippingFedexTypeGetFedExRate->getDeclaredValue())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedFedExRate
	 * Meta informations :
	 * 	- documentation : Get extended FedEx shipping rate.
	 * @uses EccShippingFedexWsdlClass::getSoapClient()
	 * @uses EccShippingFedexWsdlClass::setResult()
	 * @uses EccShippingFedexWsdlClass::getResult()
	 * @uses EccShippingFedexWsdlClass::saveLastError()
	 * @uses EccShippingFedexTypeGetExtendedFedExRate::getKeyID()
	 * @uses EccShippingFedexTypeGetExtendedFedExRate::getDomainID()
	 * @uses EccShippingFedexTypeGetExtendedFedExRate::getSenderPostalCode()
	 * @uses EccShippingFedexTypeGetExtendedFedExRate::getSenderCountryCode()
	 * @uses EccShippingFedexTypeGetExtendedFedExRate::getRecipientPostalCode()
	 * @uses EccShippingFedexTypeGetExtendedFedExRate::getRecipientCountryCode()
	 * @uses EccShippingFedexTypeGetExtendedFedExRate::getTotalPackageWeight()
	 * @uses EccShippingFedexTypeGetExtendedFedExRate::getDeclaredValue()
	 * @uses EccShippingFedexTypeGetExtendedFedExRate::getOptions()
	 * @param EccShippingFedexTypeGetExtendedFedExRate GetExtendedFedExRate
	 * @return EccShippingFedexTypeGetExtendedFedExRateResponse
	 */
	public function GetExtendedFedExRate(EccShippingFedexTypeGetExtendedFedExRate $_EccShippingFedexTypeGetExtendedFedExRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedFedExRate(array('KeyID'=>$_EccShippingFedexTypeGetExtendedFedExRate->getKeyID(),'DomainID'=>$_EccShippingFedexTypeGetExtendedFedExRate->getDomainID(),'SenderPostalCode'=>$_EccShippingFedexTypeGetExtendedFedExRate->getSenderPostalCode(),'SenderCountryCode'=>$_EccShippingFedexTypeGetExtendedFedExRate->getSenderCountryCode(),'RecipientPostalCode'=>$_EccShippingFedexTypeGetExtendedFedExRate->getRecipientPostalCode(),'RecipientCountryCode'=>$_EccShippingFedexTypeGetExtendedFedExRate->getRecipientCountryCode(),'TotalPackageWeight'=>$_EccShippingFedexTypeGetExtendedFedExRate->getTotalPackageWeight(),'DeclaredValue'=>$_EccShippingFedexTypeGetExtendedFedExRate->getDeclaredValue(),'options'=>$_EccShippingFedexTypeGetExtendedFedExRate->getOptions())));
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
	 * @return EccShippingFedexTypeGetExtendedFedExRateResponse
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