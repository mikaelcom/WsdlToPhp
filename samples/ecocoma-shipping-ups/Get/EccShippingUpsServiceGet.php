<?php
/**
 * Class file for EccShippingUpsServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccShippingUpsServiceGet
 * @date 03/07/2012
 */
class EccShippingUpsServiceGet extends EccShippingUpsWsdlClass
{
	/**
	 * Method to call GetUPSRate
	 * Meta informations :
	 * 	- documentation : Get UPS shipping rate.
	 * @uses EccShippingUpsWsdlClass::getSoapClient()
	 * @uses EccShippingUpsWsdlClass::setResult()
	 * @uses EccShippingUpsWsdlClass::getResult()
	 * @uses EccShippingUpsWsdlClass::saveLastError()
	 * @uses EccShippingUpsTypeGetUPSRate::getKeyID()
	 * @uses EccShippingUpsTypeGetUPSRate::getDomainID()
	 * @uses EccShippingUpsTypeGetUPSRate::getOrigPostal()
	 * @uses EccShippingUpsTypeGetUPSRate::getOrigCountry()
	 * @uses EccShippingUpsTypeGetUPSRate::getDestPostal()
	 * @uses EccShippingUpsTypeGetUPSRate::getDestCountry()
	 * @uses EccShippingUpsTypeGetUPSRate::getWeight()
	 * @uses EccShippingUpsTypeGetUPSRate::getValue()
	 * @param EccShippingUpsTypeGetUPSRate GetUPSRate
	 * @return EccShippingUpsTypeGetUPSRateResponse
	 */
	public function GetUPSRate(EccShippingUpsTypeGetUPSRate $_EccShippingUpsTypeGetUPSRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUPSRate(array('KeyID'=>$_EccShippingUpsTypeGetUPSRate->getKeyID(),'DomainID'=>$_EccShippingUpsTypeGetUPSRate->getDomainID(),'origPostal'=>$_EccShippingUpsTypeGetUPSRate->getOrigPostal(),'origCountry'=>$_EccShippingUpsTypeGetUPSRate->getOrigCountry(),'destPostal'=>$_EccShippingUpsTypeGetUPSRate->getDestPostal(),'destCountry'=>$_EccShippingUpsTypeGetUPSRate->getDestCountry(),'Weight'=>$_EccShippingUpsTypeGetUPSRate->getWeight(),'Value'=>$_EccShippingUpsTypeGetUPSRate->getValue())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedUPSRate
	 * Meta informations :
	 * 	- documentation : Get extended UPS shipping rate.
	 * @uses EccShippingUpsWsdlClass::getSoapClient()
	 * @uses EccShippingUpsWsdlClass::setResult()
	 * @uses EccShippingUpsWsdlClass::getResult()
	 * @uses EccShippingUpsWsdlClass::saveLastError()
	 * @uses EccShippingUpsTypeGetExtendedUPSRate::getKeyID()
	 * @uses EccShippingUpsTypeGetExtendedUPSRate::getDomainID()
	 * @uses EccShippingUpsTypeGetExtendedUPSRate::getOrigPostal()
	 * @uses EccShippingUpsTypeGetExtendedUPSRate::getOrigCountry()
	 * @uses EccShippingUpsTypeGetExtendedUPSRate::getDestPostal()
	 * @uses EccShippingUpsTypeGetExtendedUPSRate::getDestCountry()
	 * @uses EccShippingUpsTypeGetExtendedUPSRate::getWeight()
	 * @uses EccShippingUpsTypeGetExtendedUPSRate::getValue()
	 * @uses EccShippingUpsTypeGetExtendedUPSRate::getOptions()
	 * @param EccShippingUpsTypeGetExtendedUPSRate GetExtendedUPSRate
	 * @return EccShippingUpsTypeGetExtendedUPSRateResponse
	 */
	public function GetExtendedUPSRate(EccShippingUpsTypeGetExtendedUPSRate $_EccShippingUpsTypeGetExtendedUPSRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedUPSRate(array('KeyID'=>$_EccShippingUpsTypeGetExtendedUPSRate->getKeyID(),'DomainID'=>$_EccShippingUpsTypeGetExtendedUPSRate->getDomainID(),'origPostal'=>$_EccShippingUpsTypeGetExtendedUPSRate->getOrigPostal(),'origCountry'=>$_EccShippingUpsTypeGetExtendedUPSRate->getOrigCountry(),'destPostal'=>$_EccShippingUpsTypeGetExtendedUPSRate->getDestPostal(),'destCountry'=>$_EccShippingUpsTypeGetExtendedUPSRate->getDestCountry(),'Weight'=>$_EccShippingUpsTypeGetExtendedUPSRate->getWeight(),'Value'=>$_EccShippingUpsTypeGetExtendedUPSRate->getValue(),'Options'=>$_EccShippingUpsTypeGetExtendedUPSRate->getOptions())));
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
	 * @return EccShippingUpsTypeGetExtendedUPSRateResponse
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