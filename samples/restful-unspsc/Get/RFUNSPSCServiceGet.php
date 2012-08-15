<?php
/**
 * Class file for RFUNSPSCServiceGet
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCServiceGet
 * @date 15/08/2012
 */
class RFUNSPSCServiceGet extends RFUNSPSCWsdlClass
{
	/**
	 * Method to call GetDetailsByEGCI
	 * @uses RFUNSPSCWsdlClass::getSoapClient()
	 * @uses RFUNSPSCWsdlClass::setResult()
	 * @uses RFUNSPSCWsdlClass::getResult()
	 * @uses RFUNSPSCWsdlClass::saveLastError()
	 * @uses RFUNSPSCTypeGetDetailsByEGCI::getEGCI()
	 * @param RFUNSPSCTypeGetDetailsByEGCI GetDetailsByEGCI
	 * @return RFUNSPSCTypeGetDetailsByEGCIResponse
	 */
	public function GetDetailsByEGCI(RFUNSPSCTypeGetDetailsByEGCI $_RFUNSPSCTypeGetDetailsByEGCI)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByEGCI(array('EGCI'=>$_RFUNSPSCTypeGetDetailsByEGCI->getEGCI())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetailsBySegment
	 * @uses RFUNSPSCWsdlClass::getSoapClient()
	 * @uses RFUNSPSCWsdlClass::setResult()
	 * @uses RFUNSPSCWsdlClass::getResult()
	 * @uses RFUNSPSCWsdlClass::saveLastError()
	 * @uses RFUNSPSCTypeGetDetailsBySegment::getSegment()
	 * @param RFUNSPSCTypeGetDetailsBySegment GetDetailsBySegment
	 * @return RFUNSPSCTypeGetDetailsBySegmentResponse
	 */
	public function GetDetailsBySegment(RFUNSPSCTypeGetDetailsBySegment $_RFUNSPSCTypeGetDetailsBySegment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsBySegment(array('Segment'=>$_RFUNSPSCTypeGetDetailsBySegment->getSegment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetailsByFamily
	 * @uses RFUNSPSCWsdlClass::getSoapClient()
	 * @uses RFUNSPSCWsdlClass::setResult()
	 * @uses RFUNSPSCWsdlClass::getResult()
	 * @uses RFUNSPSCWsdlClass::saveLastError()
	 * @uses RFUNSPSCTypeGetDetailsByFamily::getFamily()
	 * @param RFUNSPSCTypeGetDetailsByFamily GetDetailsByFamily
	 * @return RFUNSPSCTypeGetDetailsByFamilyResponse
	 */
	public function GetDetailsByFamily(RFUNSPSCTypeGetDetailsByFamily $_RFUNSPSCTypeGetDetailsByFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByFamily(array('Family'=>$_RFUNSPSCTypeGetDetailsByFamily->getFamily())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetailsByClass
	 * @uses RFUNSPSCWsdlClass::getSoapClient()
	 * @uses RFUNSPSCWsdlClass::setResult()
	 * @uses RFUNSPSCWsdlClass::getResult()
	 * @uses RFUNSPSCWsdlClass::saveLastError()
	 * @uses RFUNSPSCTypeGetDetailsByClass::getClass()
	 * @param RFUNSPSCTypeGetDetailsByClass GetDetailsByClass
	 * @return RFUNSPSCTypeGetDetailsByClassResponse
	 */
	public function GetDetailsByClass(RFUNSPSCTypeGetDetailsByClass $_RFUNSPSCTypeGetDetailsByClass)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByClass(array('Class'=>$_RFUNSPSCTypeGetDetailsByClass->getClass())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetailsByCommodity
	 * @uses RFUNSPSCWsdlClass::getSoapClient()
	 * @uses RFUNSPSCWsdlClass::setResult()
	 * @uses RFUNSPSCWsdlClass::getResult()
	 * @uses RFUNSPSCWsdlClass::saveLastError()
	 * @uses RFUNSPSCTypeGetDetailsByCommodity::getCommodity()
	 * @param RFUNSPSCTypeGetDetailsByCommodity GetDetailsByCommodity
	 * @return RFUNSPSCTypeGetDetailsByCommodityResponse
	 */
	public function GetDetailsByCommodity(RFUNSPSCTypeGetDetailsByCommodity $_RFUNSPSCTypeGetDetailsByCommodity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByCommodity(array('Commodity'=>$_RFUNSPSCTypeGetDetailsByCommodity->getCommodity())));
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
	 * @return RFUNSPSCTypeGetDetailsByEGCIResponse|RFUNSPSCTypeGetDetailsBySegmentResponse|RFUNSPSCTypeGetDetailsByFamilyResponse|RFUNSPSCTypeGetDetailsByClassResponse|RFUNSPSCTypeGetDetailsByCommodityResponse
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