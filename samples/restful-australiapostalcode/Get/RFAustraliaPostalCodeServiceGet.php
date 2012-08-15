<?php
/**
 * Class file for RFAustraliaPostalCodeServiceGet
 * @date 15/08/2012
 */
/**
 * Class RFAustraliaPostalCodeServiceGet
 * @date 15/08/2012
 */
class RFAustraliaPostalCodeServiceGet extends RFAustraliaPostalCodeWsdlClass
{
	/**
	 * Method to call GetPostCodeDetailByPostCode
	 * @uses RFAustraliaPostalCodeWsdlClass::getSoapClient()
	 * @uses RFAustraliaPostalCodeWsdlClass::setResult()
	 * @uses RFAustraliaPostalCodeWsdlClass::getResult()
	 * @uses RFAustraliaPostalCodeWsdlClass::saveLastError()
	 * @uses RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCode::getRequest()
	 * @param RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCode GetPostCodeDetailByPostCode
	 * @return RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCodeResponse
	 */
	public function GetPostCodeDetailByPostCode(RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCode $_RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPostCodeDetailByPostCode(array('request'=>$_RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCode->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPostCodeDetailsByPlaceName
	 * @uses RFAustraliaPostalCodeWsdlClass::getSoapClient()
	 * @uses RFAustraliaPostalCodeWsdlClass::setResult()
	 * @uses RFAustraliaPostalCodeWsdlClass::getResult()
	 * @uses RFAustraliaPostalCodeWsdlClass::saveLastError()
	 * @uses RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName::getRequest()
	 * @param RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName GetPostCodeDetailsByPlaceName
	 * @return RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceNameResponse
	 */
	public function GetPostCodeDetailsByPlaceName(RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName $_RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPostCodeDetailsByPlaceName(array('request'=>$_RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName->getRequest())));
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
	 * @return RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCodeResponse|RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceNameResponse
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