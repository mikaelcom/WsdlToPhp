<?php
/**
 * Class file for RFHCPCSServiceGet
 * @date 15/08/2012
 */
/**
 * Class RFHCPCSServiceGet
 * @date 15/08/2012
 */
class RFHCPCSServiceGet extends RFHCPCSWsdlClass
{
	/**
	 * Method to call GetDetailsByCode
	 * @uses RFHCPCSWsdlClass::getSoapClient()
	 * @uses RFHCPCSWsdlClass::setResult()
	 * @uses RFHCPCSWsdlClass::getResult()
	 * @uses RFHCPCSWsdlClass::saveLastError()
	 * @uses RFHCPCSTypeGetDetailsByCode::getRequest()
	 * @param RFHCPCSTypeGetDetailsByCode GetDetailsByCode
	 * @return RFHCPCSTypeGetDetailsByCodeResponse
	 */
	public function GetDetailsByCode(RFHCPCSTypeGetDetailsByCode $_RFHCPCSTypeGetDetailsByCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByCode(array('request'=>$_RFHCPCSTypeGetDetailsByCode->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetailsByDescription
	 * @uses RFHCPCSWsdlClass::getSoapClient()
	 * @uses RFHCPCSWsdlClass::setResult()
	 * @uses RFHCPCSWsdlClass::getResult()
	 * @uses RFHCPCSWsdlClass::saveLastError()
	 * @uses RFHCPCSTypeGetDetailsByDescription::getRequest()
	 * @param RFHCPCSTypeGetDetailsByDescription GetDetailsByDescription
	 * @return RFHCPCSTypeGetDetailsByDescriptionResponse
	 */
	public function GetDetailsByDescription(RFHCPCSTypeGetDetailsByDescription $_RFHCPCSTypeGetDetailsByDescription)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByDescription(array('request'=>$_RFHCPCSTypeGetDetailsByDescription->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetailsBySeqNmber
	 * @uses RFHCPCSWsdlClass::getSoapClient()
	 * @uses RFHCPCSWsdlClass::setResult()
	 * @uses RFHCPCSWsdlClass::getResult()
	 * @uses RFHCPCSWsdlClass::saveLastError()
	 * @uses RFHCPCSTypeGetDetailsBySeqNmber::getRequest()
	 * @param RFHCPCSTypeGetDetailsBySeqNmber GetDetailsBySeqNmber
	 * @return RFHCPCSTypeGetDetailsBySeqNmberResponse
	 */
	public function GetDetailsBySeqNmber(RFHCPCSTypeGetDetailsBySeqNmber $_RFHCPCSTypeGetDetailsBySeqNmber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsBySeqNmber(array('request'=>$_RFHCPCSTypeGetDetailsBySeqNmber->getRequest())));
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
	 * @return RFHCPCSTypeGetDetailsByCodeResponse|RFHCPCSTypeGetDetailsByDescriptionResponse|RFHCPCSTypeGetDetailsBySeqNmberResponse
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