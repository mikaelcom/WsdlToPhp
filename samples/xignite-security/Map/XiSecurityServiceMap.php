<?php
/**
 * Class file for XiSecurityServiceMap
 * @date 08/07/2012
 */
/**
 * Class XiSecurityServiceMap
 * @date 08/07/2012
 */
class XiSecurityServiceMap extends XiSecurityWsdlClass
{
	/**
	 * Method to call MapSecurity
	 * Meta informations :
	 * 	- documentation : Get the symbol, name, CUSIP, and CIK for a security.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeMapSecurity::getIdentifier()
	 * @uses XiSecurityTypeMapSecurity::getIdentifierType()
	 * @param XiSecurityTypeMapSecurity MapSecurity
	 * @return XiSecurityTypeMapSecurityResponse
	 */
	public function MapSecurity(XiSecurityTypeMapSecurity $_XiSecurityTypeMapSecurity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MapSecurity(array('Identifier'=>$_XiSecurityTypeMapSecurity->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeMapSecurity->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call MapSecurityDetail
	 * Meta informations :
	 * 	- documentation : Get the symbol, name, CUSIP, and CIK, Sector, and Industry for a security.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeMapSecurityDetail::getIdentifier()
	 * @uses XiSecurityTypeMapSecurityDetail::getIdentifierType()
	 * @param XiSecurityTypeMapSecurityDetail MapSecurityDetail
	 * @return XiSecurityTypeMapSecurityDetailResponse
	 */
	public function MapSecurityDetail(XiSecurityTypeMapSecurityDetail $_XiSecurityTypeMapSecurityDetail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MapSecurityDetail(array('Identifier'=>$_XiSecurityTypeMapSecurityDetail->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeMapSecurityDetail->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call MapSecurities
	 * Meta informations :
	 * 	- documentation : Get the symbol, name, CUSIP, and CIK for a list of securities.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeMapSecurities::getIdentifiers()
	 * @uses XiSecurityTypeMapSecurities::getIdentifierType()
	 * @param XiSecurityTypeMapSecurities MapSecurities
	 * @return XiSecurityTypeMapSecuritiesResponse
	 */
	public function MapSecurities(XiSecurityTypeMapSecurities $_XiSecurityTypeMapSecurities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MapSecurities(array('Identifiers'=>$_XiSecurityTypeMapSecurities->getIdentifiers(),'IdentifierType'=>$_XiSecurityTypeMapSecurities->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call MapSecurityDetails
	 * Meta informations :
	 * 	- documentation : Get the symbol, name, CUSIP, and CIK, Sector, and Industry for a list of securities.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeMapSecurityDetails::getIdentifiers()
	 * @uses XiSecurityTypeMapSecurityDetails::getIdentifierType()
	 * @param XiSecurityTypeMapSecurityDetails MapSecurityDetails
	 * @return XiSecurityTypeMapSecurityDetailsResponse
	 */
	public function MapSecurityDetails(XiSecurityTypeMapSecurityDetails $_XiSecurityTypeMapSecurityDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MapSecurityDetails(array('Identifiers'=>$_XiSecurityTypeMapSecurityDetails->getIdentifiers(),'IdentifierType'=>$_XiSecurityTypeMapSecurityDetails->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call MapSymbol
	 * Meta informations :
	 * 	- documentation : Convert a symbol from one methodology to another.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeMapSymbol::getSymbol()
	 * @uses XiSecurityTypeMapSymbol::getFromType()
	 * @uses XiSecurityTypeMapSymbol::getToType()
	 * @param XiSecurityTypeMapSymbol MapSymbol
	 * @return XiSecurityTypeMapSymbolResponse
	 */
	public function MapSymbol(XiSecurityTypeMapSymbol $_XiSecurityTypeMapSymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MapSymbol(array('Symbol'=>$_XiSecurityTypeMapSymbol->getSymbol(),'FromType'=>$_XiSecurityTypeMapSymbol->getFromType(),'ToType'=>$_XiSecurityTypeMapSymbol->getToType())));
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
	 * @return XiSecurityTypeMapSymbolResponse
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