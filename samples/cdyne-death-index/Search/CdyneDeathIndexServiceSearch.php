<?php
/**
 * Class file for CdyneDeathIndexServiceSearch
 * @date 03/07/2012
 */
/**
 * Class CdyneDeathIndexServiceSearch
 * @date 03/07/2012
 */
class CdyneDeathIndexServiceSearch extends CdyneDeathIndexWsdlClass
{
	/**
	 * Method to call SearchDeceasedInfo
	 * @uses CdyneDeathIndexWsdlClass::getSoapClient()
	 * @uses CdyneDeathIndexWsdlClass::setResult()
	 * @uses CdyneDeathIndexWsdlClass::getResult()
	 * @uses CdyneDeathIndexWsdlClass::saveLastError()
	 * @uses CdyneDeathIndexTypeSearchDeceasedInfo::getLastName()
	 * @uses CdyneDeathIndexTypeSearchDeceasedInfo::getFirstName()
	 * @uses CdyneDeathIndexTypeSearchDeceasedInfo::getStateAbbrev()
	 * @uses CdyneDeathIndexTypeSearchDeceasedInfo::getGreaterThanYear()
	 * @uses CdyneDeathIndexTypeSearchDeceasedInfo::getLicenseKey()
	 * @param CdyneDeathIndexTypeSearchDeceasedInfo SearchDeceasedInfo
	 * @return CdyneDeathIndexTypeSearchDeceasedInfoResponse
	 */
	public function SearchDeceasedInfo(CdyneDeathIndexTypeSearchDeceasedInfo $_CdyneDeathIndexTypeSearchDeceasedInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchDeceasedInfo(array('LastName'=>$_CdyneDeathIndexTypeSearchDeceasedInfo->getLastName(),'FirstName'=>$_CdyneDeathIndexTypeSearchDeceasedInfo->getFirstName(),'StateAbbrev'=>$_CdyneDeathIndexTypeSearchDeceasedInfo->getStateAbbrev(),'GreaterThanYear'=>$_CdyneDeathIndexTypeSearchDeceasedInfo->getGreaterThanYear(),'LicenseKey'=>$_CdyneDeathIndexTypeSearchDeceasedInfo->getLicenseKey())));
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
	 * @return CdyneDeathIndexTypeSearchDeceasedInfoResponse
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