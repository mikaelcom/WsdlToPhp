<?php
/**
 * Class file for EccGeoCityZipServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccGeoCityZipServiceGet
 * @date 03/07/2012
 */
class EccGeoCityZipServiceGet extends EccGeoCityZipWsdlClass
{
	/**
	 * Method to call GetZipCode
	 * Meta informations :
	 * 	- documentation : Find matching ZIP Code for any given address, city, and state. (United States)
	 * @uses EccGeoCityZipWsdlClass::getSoapClient()
	 * @uses EccGeoCityZipWsdlClass::setResult()
	 * @uses EccGeoCityZipWsdlClass::getResult()
	 * @uses EccGeoCityZipWsdlClass::saveLastError()
	 * @uses EccGeoCityZipTypeGetZipCode::getKeyID()
	 * @uses EccGeoCityZipTypeGetZipCode::getDomainID()
	 * @uses EccGeoCityZipTypeGetZipCode::getCity()
	 * @uses EccGeoCityZipTypeGetZipCode::getState()
	 * @param EccGeoCityZipTypeGetZipCode GetZipCode
	 * @return EccGeoCityZipTypeGetZipCodeResponse
	 */
	public function GetZipCode(EccGeoCityZipTypeGetZipCode $_EccGeoCityZipTypeGetZipCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetZipCode(array('KeyID'=>$_EccGeoCityZipTypeGetZipCode->getKeyID(),'DomainID'=>$_EccGeoCityZipTypeGetZipCode->getDomainID(),'City'=>$_EccGeoCityZipTypeGetZipCode->getCity(),'State'=>$_EccGeoCityZipTypeGetZipCode->getState())));
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
	 * @return EccGeoCityZipTypeGetZipCodeResponse
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