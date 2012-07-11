<?php
/**
 * Class file for CdyneDeathIndexServiceDeceased
 * @date 03/07/2012
 */
/**
 * Class CdyneDeathIndexServiceDeceased
 * @date 03/07/2012
 */
class CdyneDeathIndexServiceDeceased extends CdyneDeathIndexWsdlClass
{
	/**
	 * Method to call DeceasedBySSN
	 * @uses CdyneDeathIndexWsdlClass::getSoapClient()
	 * @uses CdyneDeathIndexWsdlClass::setResult()
	 * @uses CdyneDeathIndexWsdlClass::getResult()
	 * @uses CdyneDeathIndexWsdlClass::saveLastError()
	 * @uses CdyneDeathIndexTypeDeceasedBySSN::getSsn()
	 * @uses CdyneDeathIndexTypeDeceasedBySSN::getLicenseKey()
	 * @param CdyneDeathIndexTypeDeceasedBySSN DeceasedBySSN
	 * @return CdyneDeathIndexTypeDeceasedBySSNResponse
	 */
	public function DeceasedBySSN(CdyneDeathIndexTypeDeceasedBySSN $_CdyneDeathIndexTypeDeceasedBySSN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeceasedBySSN(array('ssn'=>$_CdyneDeathIndexTypeDeceasedBySSN->getSsn(),'LicenseKey'=>$_CdyneDeathIndexTypeDeceasedBySSN->getLicenseKey())));
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
	 * @return CdyneDeathIndexTypeDeceasedBySSNResponse
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