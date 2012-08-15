<?php
/**
 * Class file for RFUSAZipCodeServiceGet
 * @date 15/08/2012
 */
/**
 * Class RFUSAZipCodeServiceGet
 * @date 15/08/2012
 */
class RFUSAZipCodeServiceGet extends RFUSAZipCodeWsdlClass
{
	/**
	 * Method to call GetPostCodeDetailByPostCode
	 * @uses RFUSAZipCodeWsdlClass::getSoapClient()
	 * @uses RFUSAZipCodeWsdlClass::setResult()
	 * @uses RFUSAZipCodeWsdlClass::getResult()
	 * @uses RFUSAZipCodeWsdlClass::saveLastError()
	 * @uses RFUSAZipCodeTypeGetPostCodeDetailByPostCode::getRequest()
	 * @param RFUSAZipCodeTypeGetPostCodeDetailByPostCode GetPostCodeDetailByPostCode
	 * @return RFUSAZipCodeTypeGetPostCodeDetailByPostCodeResponse
	 */
	public function GetPostCodeDetailByPostCode(RFUSAZipCodeTypeGetPostCodeDetailByPostCode $_RFUSAZipCodeTypeGetPostCodeDetailByPostCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPostCodeDetailByPostCode(array('request'=>$_RFUSAZipCodeTypeGetPostCodeDetailByPostCode->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPostCodeDetailsByPlaceName
	 * @uses RFUSAZipCodeWsdlClass::getSoapClient()
	 * @uses RFUSAZipCodeWsdlClass::setResult()
	 * @uses RFUSAZipCodeWsdlClass::getResult()
	 * @uses RFUSAZipCodeWsdlClass::saveLastError()
	 * @uses RFUSAZipCodeTypeGetPostCodeDetailsByPlaceName::getRequest()
	 * @param RFUSAZipCodeTypeGetPostCodeDetailsByPlaceName GetPostCodeDetailsByPlaceName
	 * @return RFUSAZipCodeTypeGetPostCodeDetailsByPlaceNameResponse
	 */
	public function GetPostCodeDetailsByPlaceName(RFUSAZipCodeTypeGetPostCodeDetailsByPlaceName $_RFUSAZipCodeTypeGetPostCodeDetailsByPlaceName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPostCodeDetailsByPlaceName(array('request'=>$_RFUSAZipCodeTypeGetPostCodeDetailsByPlaceName->getRequest())));
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
	 * @return RFUSAZipCodeTypeGetPostCodeDetailByPostCodeResponse|RFUSAZipCodeTypeGetPostCodeDetailsByPlaceNameResponse
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