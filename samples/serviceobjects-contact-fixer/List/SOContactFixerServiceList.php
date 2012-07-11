<?php
/**
 * Class file for SOContactFixerServiceList
 * @date 08/07/2012
 */
/**
 * Class SOContactFixerServiceList
 * @date 08/07/2012
 */
class SOContactFixerServiceList extends SOContactFixerWsdlClass
{
	/**
	 * Method to call ListAllCorrections
	 * @uses SOContactFixerWsdlClass::getSoapClient()
	 * @uses SOContactFixerWsdlClass::setResult()
	 * @uses SOContactFixerWsdlClass::getResult()
	 * @uses SOContactFixerWsdlClass::saveLastError()
	 * @uses SOContactFixerTypeListAllCorrections::getLicenseKey()
	 * @param SOContactFixerTypeListAllCorrections ListAllCorrections
	 * @return SOContactFixerTypeListAllCorrectionsResponse
	 */
	public function ListAllCorrections(SOContactFixerTypeListAllCorrections $_SOContactFixerTypeListAllCorrections)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListAllCorrections(array('LicenseKey'=>$_SOContactFixerTypeListAllCorrections->getLicenseKey())));
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
	 * @return SOContactFixerTypeListAllCorrectionsResponse
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