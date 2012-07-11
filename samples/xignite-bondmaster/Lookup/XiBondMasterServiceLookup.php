<?php
/**
 * Class file for XiBondMasterServiceLookup
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterServiceLookup
 * @date 08/07/2012
 */
class XiBondMasterServiceLookup extends XiBondMasterWsdlClass
{
	/**
	 * Method to call LookupBondsByIssuer
	 * Meta informations :
	 * 	- documentation : This service returns identifiers and basic issue details for bonds issued by a particular Issuer. Result includes bond issue details of up to 500 bonds issued by issuer ordered (descending) by maturity date. Optional input fields can be used to refine the query.
	 * @uses XiBondMasterWsdlClass::getSoapClient()
	 * @uses XiBondMasterWsdlClass::setResult()
	 * @uses XiBondMasterWsdlClass::getResult()
	 * @uses XiBondMasterWsdlClass::saveLastError()
	 * @uses XiBondMasterTypeLookupBondsByIssuer::getIssuerName()
	 * @uses XiBondMasterTypeLookupBondsByIssuer::getStartMaturityDate()
	 * @uses XiBondMasterTypeLookupBondsByIssuer::getEndMaturityDate()
	 * @uses XiBondMasterTypeLookupBondsByIssuer::getStartCouponRate()
	 * @uses XiBondMasterTypeLookupBondsByIssuer::getEndCouponRate()
	 * @uses XiBondMasterTypeLookupBondsByIssuer::getIncludeNonactive()
	 * @param XiBondMasterTypeLookupBondsByIssuer LookupBondsByIssuer
	 * @return XiBondMasterTypeLookupBondsByIssuerResponse
	 */
	public function LookupBondsByIssuer(XiBondMasterTypeLookupBondsByIssuer $_XiBondMasterTypeLookupBondsByIssuer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupBondsByIssuer(array('IssuerName'=>$_XiBondMasterTypeLookupBondsByIssuer->getIssuerName(),'StartMaturityDate'=>$_XiBondMasterTypeLookupBondsByIssuer->getStartMaturityDate(),'EndMaturityDate'=>$_XiBondMasterTypeLookupBondsByIssuer->getEndMaturityDate(),'StartCouponRate'=>$_XiBondMasterTypeLookupBondsByIssuer->getStartCouponRate(),'EndCouponRate'=>$_XiBondMasterTypeLookupBondsByIssuer->getEndCouponRate(),'IncludeNonactive'=>$_XiBondMasterTypeLookupBondsByIssuer->getIncludeNonactive())));
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
	 * 	- documentation : This service returns identifiers and basic issue details for all Bonds where the short name provided in the input fully or partially matches the bond short name.
	 * @uses XiBondMasterWsdlClass::getSoapClient()
	 * @uses XiBondMasterWsdlClass::setResult()
	 * @uses XiBondMasterWsdlClass::getResult()
	 * @uses XiBondMasterWsdlClass::saveLastError()
	 * @uses XiBondMasterTypeLookupBondsByName::getName()
	 * @uses XiBondMasterTypeLookupBondsByName::getStartMaturityDate()
	 * @uses XiBondMasterTypeLookupBondsByName::getEndMaturityDate()
	 * @uses XiBondMasterTypeLookupBondsByName::getStartCouponRate()
	 * @uses XiBondMasterTypeLookupBondsByName::getEndCouponRate()
	 * @uses XiBondMasterTypeLookupBondsByName::getIncludeNonactive()
	 * @param XiBondMasterTypeLookupBondsByName LookupBondsByName
	 * @return XiBondMasterTypeLookupBondsByNameResponse
	 */
	public function LookupBondsByName(XiBondMasterTypeLookupBondsByName $_XiBondMasterTypeLookupBondsByName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupBondsByName(array('Name'=>$_XiBondMasterTypeLookupBondsByName->getName(),'StartMaturityDate'=>$_XiBondMasterTypeLookupBondsByName->getStartMaturityDate(),'EndMaturityDate'=>$_XiBondMasterTypeLookupBondsByName->getEndMaturityDate(),'StartCouponRate'=>$_XiBondMasterTypeLookupBondsByName->getStartCouponRate(),'EndCouponRate'=>$_XiBondMasterTypeLookupBondsByName->getEndCouponRate(),'IncludeNonactive'=>$_XiBondMasterTypeLookupBondsByName->getIncludeNonactive())));
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
	 * @return XiBondMasterTypeLookupBondsByNameResponse
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