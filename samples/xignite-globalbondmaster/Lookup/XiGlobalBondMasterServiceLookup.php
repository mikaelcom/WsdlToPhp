<?php
/**
 * Class file for XiGlobalBondMasterServiceLookup
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterServiceLookup
 * @date 08/07/2012
 */
class XiGlobalBondMasterServiceLookup extends XiGlobalBondMasterWsdlClass
{
	/**
	 * Method to call LookupBondsByIssuer
	 * Meta informations :
	 * 	- documentation : This service returns identifiers and basic details about all bonds issued by particular Issuer (Non US data). Result includes bond issue details of up to 500 bonds issued by Issuer ordered (descending) by maturity date. Optional input fields can be used to refine the query.
	 * @uses XiGlobalBondMasterWsdlClass::getSoapClient()
	 * @uses XiGlobalBondMasterWsdlClass::setResult()
	 * @uses XiGlobalBondMasterWsdlClass::getResult()
	 * @uses XiGlobalBondMasterWsdlClass::saveLastError()
	 * @uses XiGlobalBondMasterTypeLookupBondsByIssuer::getIssuerName()
	 * @uses XiGlobalBondMasterTypeLookupBondsByIssuer::getDomicile()
	 * @uses XiGlobalBondMasterTypeLookupBondsByIssuer::getCurrency()
	 * @uses XiGlobalBondMasterTypeLookupBondsByIssuer::getStartMaturityDate()
	 * @uses XiGlobalBondMasterTypeLookupBondsByIssuer::getEndMaturityDate()
	 * @uses XiGlobalBondMasterTypeLookupBondsByIssuer::getStartCouponRate()
	 * @uses XiGlobalBondMasterTypeLookupBondsByIssuer::getEndCouponRate()
	 * @uses XiGlobalBondMasterTypeLookupBondsByIssuer::getIncludeNonactive()
	 * @param XiGlobalBondMasterTypeLookupBondsByIssuer LookupBondsByIssuer
	 * @return XiGlobalBondMasterTypeLookupBondsByIssuerResponse
	 */
	public function LookupBondsByIssuer(XiGlobalBondMasterTypeLookupBondsByIssuer $_XiGlobalBondMasterTypeLookupBondsByIssuer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupBondsByIssuer(array('IssuerName'=>$_XiGlobalBondMasterTypeLookupBondsByIssuer->getIssuerName(),'Domicile'=>$_XiGlobalBondMasterTypeLookupBondsByIssuer->getDomicile(),'Currency'=>$_XiGlobalBondMasterTypeLookupBondsByIssuer->getCurrency(),'StartMaturityDate'=>$_XiGlobalBondMasterTypeLookupBondsByIssuer->getStartMaturityDate(),'EndMaturityDate'=>$_XiGlobalBondMasterTypeLookupBondsByIssuer->getEndMaturityDate(),'StartCouponRate'=>$_XiGlobalBondMasterTypeLookupBondsByIssuer->getStartCouponRate(),'EndCouponRate'=>$_XiGlobalBondMasterTypeLookupBondsByIssuer->getEndCouponRate(),'IncludeNonactive'=>$_XiGlobalBondMasterTypeLookupBondsByIssuer->getIncludeNonactive())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LookupBondsByName
	 * Meta informations :
	 * 	- documentation : This web method returns instrument identifiers and basic details for all Bonds where the name provided in the input fully or partially matches the bond description.
	 * @uses XiGlobalBondMasterWsdlClass::getSoapClient()
	 * @uses XiGlobalBondMasterWsdlClass::setResult()
	 * @uses XiGlobalBondMasterWsdlClass::getResult()
	 * @uses XiGlobalBondMasterWsdlClass::saveLastError()
	 * @uses XiGlobalBondMasterTypeLookupBondsByName::getName()
	 * @uses XiGlobalBondMasterTypeLookupBondsByName::getStartMaturityDate()
	 * @uses XiGlobalBondMasterTypeLookupBondsByName::getEndMaturityDate()
	 * @uses XiGlobalBondMasterTypeLookupBondsByName::getStartCouponRate()
	 * @uses XiGlobalBondMasterTypeLookupBondsByName::getEndCouponRate()
	 * @uses XiGlobalBondMasterTypeLookupBondsByName::getIncludeNonactive()
	 * @param XiGlobalBondMasterTypeLookupBondsByName LookupBondsByName
	 * @return XiGlobalBondMasterTypeLookupBondsByNameResponse
	 */
	public function LookupBondsByName(XiGlobalBondMasterTypeLookupBondsByName $_XiGlobalBondMasterTypeLookupBondsByName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupBondsByName(array('Name'=>$_XiGlobalBondMasterTypeLookupBondsByName->getName(),'StartMaturityDate'=>$_XiGlobalBondMasterTypeLookupBondsByName->getStartMaturityDate(),'EndMaturityDate'=>$_XiGlobalBondMasterTypeLookupBondsByName->getEndMaturityDate(),'StartCouponRate'=>$_XiGlobalBondMasterTypeLookupBondsByName->getStartCouponRate(),'EndCouponRate'=>$_XiGlobalBondMasterTypeLookupBondsByName->getEndCouponRate(),'IncludeNonactive'=>$_XiGlobalBondMasterTypeLookupBondsByName->getIncludeNonactive())));
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
	 * @return XiGlobalBondMasterTypeLookupBondsByNameResponse
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