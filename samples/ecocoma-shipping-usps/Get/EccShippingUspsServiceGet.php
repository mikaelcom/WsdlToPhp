<?php
/**
 * Class file for EccShippingUspsServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccShippingUspsServiceGet
 * @date 03/07/2012
 */
class EccShippingUspsServiceGet extends EccShippingUspsWsdlClass
{
	/**
	 * Method to call GetUSPSRate
	 * Meta informations :
	 * 	- documentation : Get USPS shipping rate.
	 * @uses EccShippingUspsWsdlClass::getSoapClient()
	 * @uses EccShippingUspsWsdlClass::setResult()
	 * @uses EccShippingUspsWsdlClass::getResult()
	 * @uses EccShippingUspsWsdlClass::saveLastError()
	 * @uses EccShippingUspsTypeGetUSPSRate::getKeyID()
	 * @uses EccShippingUspsTypeGetUSPSRate::getDomainID()
	 * @uses EccShippingUspsTypeGetUSPSRate::getZipOrigination()
	 * @uses EccShippingUspsTypeGetUSPSRate::getZipDestination()
	 * @uses EccShippingUspsTypeGetUSPSRate::getCountry()
	 * @uses EccShippingUspsTypeGetUSPSRate::getPounds()
	 * @uses EccShippingUspsTypeGetUSPSRate::getOunces()
	 * @param EccShippingUspsTypeGetUSPSRate GetUSPSRate
	 * @return EccShippingUspsTypeGetUSPSRateResponse
	 */
	public function GetUSPSRate(EccShippingUspsTypeGetUSPSRate $_EccShippingUspsTypeGetUSPSRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUSPSRate(array('KeyID'=>$_EccShippingUspsTypeGetUSPSRate->getKeyID(),'DomainID'=>$_EccShippingUspsTypeGetUSPSRate->getDomainID(),'ZipOrigination'=>$_EccShippingUspsTypeGetUSPSRate->getZipOrigination(),'ZipDestination'=>$_EccShippingUspsTypeGetUSPSRate->getZipDestination(),'Country'=>$_EccShippingUspsTypeGetUSPSRate->getCountry(),'Pounds'=>$_EccShippingUspsTypeGetUSPSRate->getPounds(),'Ounces'=>$_EccShippingUspsTypeGetUSPSRate->getOunces())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedUSPSRate
	 * Meta informations :
	 * 	- documentation : Get extended USPS shipping rate.
	 * @uses EccShippingUspsWsdlClass::getSoapClient()
	 * @uses EccShippingUspsWsdlClass::setResult()
	 * @uses EccShippingUspsWsdlClass::getResult()
	 * @uses EccShippingUspsWsdlClass::saveLastError()
	 * @uses EccShippingUspsTypeGetExtendedUSPSRate::getKeyID()
	 * @uses EccShippingUspsTypeGetExtendedUSPSRate::getDomainID()
	 * @uses EccShippingUspsTypeGetExtendedUSPSRate::getZipOrigination()
	 * @uses EccShippingUspsTypeGetExtendedUSPSRate::getZipDestination()
	 * @uses EccShippingUspsTypeGetExtendedUSPSRate::getCountry()
	 * @uses EccShippingUspsTypeGetExtendedUSPSRate::getPounds()
	 * @uses EccShippingUspsTypeGetExtendedUSPSRate::getOunces()
	 * @uses EccShippingUspsTypeGetExtendedUSPSRate::getOptions()
	 * @param EccShippingUspsTypeGetExtendedUSPSRate GetExtendedUSPSRate
	 * @return EccShippingUspsTypeGetExtendedUSPSRateResponse
	 */
	public function GetExtendedUSPSRate(EccShippingUspsTypeGetExtendedUSPSRate $_EccShippingUspsTypeGetExtendedUSPSRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedUSPSRate(array('KeyID'=>$_EccShippingUspsTypeGetExtendedUSPSRate->getKeyID(),'DomainID'=>$_EccShippingUspsTypeGetExtendedUSPSRate->getDomainID(),'ZipOrigination'=>$_EccShippingUspsTypeGetExtendedUSPSRate->getZipOrigination(),'ZipDestination'=>$_EccShippingUspsTypeGetExtendedUSPSRate->getZipDestination(),'Country'=>$_EccShippingUspsTypeGetExtendedUSPSRate->getCountry(),'Pounds'=>$_EccShippingUspsTypeGetExtendedUSPSRate->getPounds(),'Ounces'=>$_EccShippingUspsTypeGetExtendedUSPSRate->getOunces(),'Options'=>$_EccShippingUspsTypeGetExtendedUSPSRate->getOptions())));
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
	 * @return EccShippingUspsTypeGetExtendedUSPSRateResponse
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