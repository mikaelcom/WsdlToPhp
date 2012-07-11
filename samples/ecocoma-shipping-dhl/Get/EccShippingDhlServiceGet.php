<?php
/**
 * Class file for EccShippingDhlServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccShippingDhlServiceGet
 * @date 03/07/2012
 */
class EccShippingDhlServiceGet extends EccShippingDhlWsdlClass
{
	/**
	 * Method to call GetDHLRate
	 * Meta informations :
	 * 	- documentation : Get DHL shipping rate.
	 * @uses EccShippingDhlWsdlClass::getSoapClient()
	 * @uses EccShippingDhlWsdlClass::setResult()
	 * @uses EccShippingDhlWsdlClass::getResult()
	 * @uses EccShippingDhlWsdlClass::saveLastError()
	 * @uses EccShippingDhlTypeGetDHLRate::getKeyID()
	 * @uses EccShippingDhlTypeGetDHLRate::getDomainID()
	 * @uses EccShippingDhlTypeGetDHLRate::getSenderAddress()
	 * @uses EccShippingDhlTypeGetDHLRate::getSenderCity()
	 * @uses EccShippingDhlTypeGetDHLRate::getSenderState()
	 * @uses EccShippingDhlTypeGetDHLRate::getSenderPostalCode()
	 * @uses EccShippingDhlTypeGetDHLRate::getSenderCountry()
	 * @uses EccShippingDhlTypeGetDHLRate::getReceiverCity()
	 * @uses EccShippingDhlTypeGetDHLRate::getReceiverState()
	 * @uses EccShippingDhlTypeGetDHLRate::getReceiverPostalCode()
	 * @uses EccShippingDhlTypeGetDHLRate::getReceiverCountry()
	 * @uses EccShippingDhlTypeGetDHLRate::getWeight()
	 * @uses EccShippingDhlTypeGetDHLRate::getProtectionValue()
	 * @param EccShippingDhlTypeGetDHLRate GetDHLRate
	 * @return EccShippingDhlTypeGetDHLRateResponse
	 */
	public function GetDHLRate(EccShippingDhlTypeGetDHLRate $_EccShippingDhlTypeGetDHLRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDHLRate(array('KeyID'=>$_EccShippingDhlTypeGetDHLRate->getKeyID(),'DomainID'=>$_EccShippingDhlTypeGetDHLRate->getDomainID(),'SenderAddress'=>$_EccShippingDhlTypeGetDHLRate->getSenderAddress(),'SenderCity'=>$_EccShippingDhlTypeGetDHLRate->getSenderCity(),'SenderState'=>$_EccShippingDhlTypeGetDHLRate->getSenderState(),'SenderPostalCode'=>$_EccShippingDhlTypeGetDHLRate->getSenderPostalCode(),'SenderCountry'=>$_EccShippingDhlTypeGetDHLRate->getSenderCountry(),'ReceiverCity'=>$_EccShippingDhlTypeGetDHLRate->getReceiverCity(),'ReceiverState'=>$_EccShippingDhlTypeGetDHLRate->getReceiverState(),'ReceiverPostalCode'=>$_EccShippingDhlTypeGetDHLRate->getReceiverPostalCode(),'ReceiverCountry'=>$_EccShippingDhlTypeGetDHLRate->getReceiverCountry(),'Weight'=>$_EccShippingDhlTypeGetDHLRate->getWeight(),'ProtectionValue'=>$_EccShippingDhlTypeGetDHLRate->getProtectionValue())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedDHLRate
	 * Meta informations :
	 * 	- documentation : Get extended DHL shipping rate.
	 * @uses EccShippingDhlWsdlClass::getSoapClient()
	 * @uses EccShippingDhlWsdlClass::setResult()
	 * @uses EccShippingDhlWsdlClass::getResult()
	 * @uses EccShippingDhlWsdlClass::saveLastError()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getKeyID()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getDomainID()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getSenderAddress()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getSenderCity()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getSenderState()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getSenderPostalCode()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getSenderCountry()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getReceiverCity()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getReceiverState()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getReceiverPostalCode()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getReceiverCountry()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getWeight()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getProtectionValue()
	 * @uses EccShippingDhlTypeGetExtendedDHLRate::getOptions()
	 * @param EccShippingDhlTypeGetExtendedDHLRate GetExtendedDHLRate
	 * @return EccShippingDhlTypeGetExtendedDHLRateResponse
	 */
	public function GetExtendedDHLRate(EccShippingDhlTypeGetExtendedDHLRate $_EccShippingDhlTypeGetExtendedDHLRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedDHLRate(array('KeyID'=>$_EccShippingDhlTypeGetExtendedDHLRate->getKeyID(),'DomainID'=>$_EccShippingDhlTypeGetExtendedDHLRate->getDomainID(),'SenderAddress'=>$_EccShippingDhlTypeGetExtendedDHLRate->getSenderAddress(),'SenderCity'=>$_EccShippingDhlTypeGetExtendedDHLRate->getSenderCity(),'SenderState'=>$_EccShippingDhlTypeGetExtendedDHLRate->getSenderState(),'SenderPostalCode'=>$_EccShippingDhlTypeGetExtendedDHLRate->getSenderPostalCode(),'SenderCountry'=>$_EccShippingDhlTypeGetExtendedDHLRate->getSenderCountry(),'ReceiverCity'=>$_EccShippingDhlTypeGetExtendedDHLRate->getReceiverCity(),'ReceiverState'=>$_EccShippingDhlTypeGetExtendedDHLRate->getReceiverState(),'ReceiverPostalCode'=>$_EccShippingDhlTypeGetExtendedDHLRate->getReceiverPostalCode(),'ReceiverCountry'=>$_EccShippingDhlTypeGetExtendedDHLRate->getReceiverCountry(),'Weight'=>$_EccShippingDhlTypeGetExtendedDHLRate->getWeight(),'ProtectionValue'=>$_EccShippingDhlTypeGetExtendedDHLRate->getProtectionValue(),'Options'=>$_EccShippingDhlTypeGetExtendedDHLRate->getOptions())));
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
	 * @return EccShippingDhlTypeGetExtendedDHLRateResponse
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