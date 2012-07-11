<?php
/**
 * Class file for SONcoaLiveServiceRun
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveServiceRun
 * @date 06/07/2012
 */
class SONcoaLiveServiceRun extends SONcoaLiveWsdlClass
{
	/**
	 * Method to call RunNCOALive
	 * @uses SONcoaLiveWsdlClass::getSoapClient()
	 * @uses SONcoaLiveWsdlClass::setResult()
	 * @uses SONcoaLiveWsdlClass::getResult()
	 * @uses SONcoaLiveWsdlClass::saveLastError()
	 * @uses SONcoaLiveTypeRunNCOALive::getAddresses()
	 * @uses SONcoaLiveTypeRunNCOALive::getJobId()
	 * @uses SONcoaLiveTypeRunNCOALive::getLicenseKey()
	 * @param SONcoaLiveTypeRunNCOALive RunNCOALive
	 * @return SONcoaLiveTypeRunNCOALiveResponse
	 */
	public function RunNCOALive(SONcoaLiveTypeRunNCOALive $_SONcoaLiveTypeRunNCOALive)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RunNCOALive(array('Addresses'=>$_SONcoaLiveTypeRunNCOALive->getAddresses(),'JobId'=>$_SONcoaLiveTypeRunNCOALive->getJobId(),'LicenseKey'=>$_SONcoaLiveTypeRunNCOALive->getLicenseKey())));
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
	 * @return SONcoaLiveTypeRunNCOALiveResponse
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