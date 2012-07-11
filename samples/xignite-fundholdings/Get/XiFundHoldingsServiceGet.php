<?php
/**
 * Class file for XiFundHoldingsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsServiceGet
 * @date 08/07/2012
 */
class XiFundHoldingsServiceGet extends XiFundHoldingsWsdlClass
{
	/**
	 * Method to call GetIncreasedHoldings
	 * Meta informations :
	 * 	- documentation : Returns holdings by order of increasing position.
	 * @uses XiFundHoldingsWsdlClass::getSoapClient()
	 * @uses XiFundHoldingsWsdlClass::setResult()
	 * @uses XiFundHoldingsWsdlClass::getResult()
	 * @uses XiFundHoldingsWsdlClass::saveLastError()
	 * @uses XiFundHoldingsTypeGetIncreasedHoldings::getIdentifier()
	 * @uses XiFundHoldingsTypeGetIncreasedHoldings::getIdentifierType()
	 * @uses XiFundHoldingsTypeGetIncreasedHoldings::getCount()
	 * @param XiFundHoldingsTypeGetIncreasedHoldings GetIncreasedHoldings
	 * @return XiFundHoldingsTypeGetIncreasedHoldingsResponse
	 */
	public function GetIncreasedHoldings(XiFundHoldingsTypeGetIncreasedHoldings $_XiFundHoldingsTypeGetIncreasedHoldings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIncreasedHoldings(array('Identifier'=>$_XiFundHoldingsTypeGetIncreasedHoldings->getIdentifier(),'IdentifierType'=>$_XiFundHoldingsTypeGetIncreasedHoldings->getIdentifierType(),'Count'=>$_XiFundHoldingsTypeGetIncreasedHoldings->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopHoldings
	 * Meta informations :
	 * 	- documentation : Returns latest top holding information for a fund.
	 * @uses XiFundHoldingsWsdlClass::getSoapClient()
	 * @uses XiFundHoldingsWsdlClass::setResult()
	 * @uses XiFundHoldingsWsdlClass::getResult()
	 * @uses XiFundHoldingsWsdlClass::saveLastError()
	 * @uses XiFundHoldingsTypeGetTopHoldings::getIdentifier()
	 * @uses XiFundHoldingsTypeGetTopHoldings::getIdentifierType()
	 * @uses XiFundHoldingsTypeGetTopHoldings::getTopType()
	 * @param XiFundHoldingsTypeGetTopHoldings GetTopHoldings
	 * @return XiFundHoldingsTypeGetTopHoldingsResponse
	 */
	public function GetTopHoldings(XiFundHoldingsTypeGetTopHoldings $_XiFundHoldingsTypeGetTopHoldings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopHoldings(array('Identifier'=>$_XiFundHoldingsTypeGetTopHoldings->getIdentifier(),'IdentifierType'=>$_XiFundHoldingsTypeGetTopHoldings->getIdentifierType(),'TopType'=>$_XiFundHoldingsTypeGetTopHoldings->getTopType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIncreasedHolders
	 * Meta informations :
	 * 	- documentation : Returns holders by order of increasing position.
	 * @uses XiFundHoldingsWsdlClass::getSoapClient()
	 * @uses XiFundHoldingsWsdlClass::setResult()
	 * @uses XiFundHoldingsWsdlClass::getResult()
	 * @uses XiFundHoldingsWsdlClass::saveLastError()
	 * @uses XiFundHoldingsTypeGetIncreasedHolders::getIdentifier()
	 * @uses XiFundHoldingsTypeGetIncreasedHolders::getIdentifierType()
	 * @uses XiFundHoldingsTypeGetIncreasedHolders::getCount()
	 * @param XiFundHoldingsTypeGetIncreasedHolders GetIncreasedHolders
	 * @return XiFundHoldingsTypeGetIncreasedHoldersResponse
	 */
	public function GetIncreasedHolders(XiFundHoldingsTypeGetIncreasedHolders $_XiFundHoldingsTypeGetIncreasedHolders)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIncreasedHolders(array('Identifier'=>$_XiFundHoldingsTypeGetIncreasedHolders->getIdentifier(),'IdentifierType'=>$_XiFundHoldingsTypeGetIncreasedHolders->getIdentifierType(),'Count'=>$_XiFundHoldingsTypeGetIncreasedHolders->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopHolders
	 * Meta informations :
	 * 	- documentation : Returns latest top holder information for a security.
	 * @uses XiFundHoldingsWsdlClass::getSoapClient()
	 * @uses XiFundHoldingsWsdlClass::setResult()
	 * @uses XiFundHoldingsWsdlClass::getResult()
	 * @uses XiFundHoldingsWsdlClass::saveLastError()
	 * @uses XiFundHoldingsTypeGetTopHolders::getIdentifier()
	 * @uses XiFundHoldingsTypeGetTopHolders::getIdentifierType()
	 * @uses XiFundHoldingsTypeGetTopHolders::getTopType()
	 * @param XiFundHoldingsTypeGetTopHolders GetTopHolders
	 * @return XiFundHoldingsTypeGetTopHoldersResponse
	 */
	public function GetTopHolders(XiFundHoldingsTypeGetTopHolders $_XiFundHoldingsTypeGetTopHolders)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopHolders(array('Identifier'=>$_XiFundHoldingsTypeGetTopHolders->getIdentifier(),'IdentifierType'=>$_XiFundHoldingsTypeGetTopHolders->getIdentifierType(),'TopType'=>$_XiFundHoldingsTypeGetTopHolders->getTopType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestHoldings
	 * Meta informations :
	 * 	- documentation : Returns latest holding information for a fund.
	 * @uses XiFundHoldingsWsdlClass::getSoapClient()
	 * @uses XiFundHoldingsWsdlClass::setResult()
	 * @uses XiFundHoldingsWsdlClass::getResult()
	 * @uses XiFundHoldingsWsdlClass::saveLastError()
	 * @uses XiFundHoldingsTypeGetLatestHoldings::getIdentifier()
	 * @uses XiFundHoldingsTypeGetLatestHoldings::getIdentifierType()
	 * @uses XiFundHoldingsTypeGetLatestHoldings::getCount()
	 * @param XiFundHoldingsTypeGetLatestHoldings GetLatestHoldings
	 * @return XiFundHoldingsTypeGetLatestHoldingsResponse
	 */
	public function GetLatestHoldings(XiFundHoldingsTypeGetLatestHoldings $_XiFundHoldingsTypeGetLatestHoldings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestHoldings(array('Identifier'=>$_XiFundHoldingsTypeGetLatestHoldings->getIdentifier(),'IdentifierType'=>$_XiFundHoldingsTypeGetLatestHoldings->getIdentifierType(),'Count'=>$_XiFundHoldingsTypeGetLatestHoldings->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestHolders
	 * Meta informations :
	 * 	- documentation : Returns latest holder information for a security.
	 * @uses XiFundHoldingsWsdlClass::getSoapClient()
	 * @uses XiFundHoldingsWsdlClass::setResult()
	 * @uses XiFundHoldingsWsdlClass::getResult()
	 * @uses XiFundHoldingsWsdlClass::saveLastError()
	 * @uses XiFundHoldingsTypeGetLatestHolders::getIdentifier()
	 * @uses XiFundHoldingsTypeGetLatestHolders::getIdentifierType()
	 * @uses XiFundHoldingsTypeGetLatestHolders::getCount()
	 * @param XiFundHoldingsTypeGetLatestHolders GetLatestHolders
	 * @return XiFundHoldingsTypeGetLatestHoldersResponse
	 */
	public function GetLatestHolders(XiFundHoldingsTypeGetLatestHolders $_XiFundHoldingsTypeGetLatestHolders)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestHolders(array('Identifier'=>$_XiFundHoldingsTypeGetLatestHolders->getIdentifier(),'IdentifierType'=>$_XiFundHoldingsTypeGetLatestHolders->getIdentifierType(),'Count'=>$_XiFundHoldingsTypeGetLatestHolders->getCount())));
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
	 * @return XiFundHoldingsTypeGetLatestHoldersResponse
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