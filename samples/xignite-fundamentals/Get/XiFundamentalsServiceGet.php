<?php
/**
 * Class file for XiFundamentalsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsServiceGet
 * @date 08/07/2012
 */
class XiFundamentalsServiceGet extends XiFundamentalsWsdlClass
{
	/**
	 * Method to call GetFundamental
	 * Meta informations :
	 * 	- documentation : Get a fundamental value for a security.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetFundamental::getType()
	 * @uses XiFundamentalsTypeGetFundamental::getIdentifier()
	 * @uses XiFundamentalsTypeGetFundamental::getIdentifierType()
	 * @param XiFundamentalsTypeGetFundamental GetFundamental
	 * @return XiFundamentalsTypeGetFundamentalResponse
	 */
	public function GetFundamental(XiFundamentalsTypeGetFundamental $_XiFundamentalsTypeGetFundamental)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundamental(array('Type'=>$_XiFundamentalsTypeGetFundamental->getType(),'Identifier'=>$_XiFundamentalsTypeGetFundamental->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetFundamental->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDatedFundamental
	 * Meta informations :
	 * 	- documentation : Get a fundamental value for a security as of a certain date.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetDatedFundamental::getType()
	 * @uses XiFundamentalsTypeGetDatedFundamental::getIdentifier()
	 * @uses XiFundamentalsTypeGetDatedFundamental::getIdentifierType()
	 * @uses XiFundamentalsTypeGetDatedFundamental::getAsOfDate()
	 * @param XiFundamentalsTypeGetDatedFundamental GetDatedFundamental
	 * @return XiFundamentalsTypeGetDatedFundamentalResponse
	 */
	public function GetDatedFundamental(XiFundamentalsTypeGetDatedFundamental $_XiFundamentalsTypeGetDatedFundamental)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDatedFundamental(array('Type'=>$_XiFundamentalsTypeGetDatedFundamental->getType(),'Identifier'=>$_XiFundamentalsTypeGetDatedFundamental->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetDatedFundamental->getIdentifierType(),'AsOfDate'=>$_XiFundamentalsTypeGetDatedFundamental->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPeriodFundamental
	 * Meta informations :
	 * 	- documentation : Get a fundamental value for a security.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetPeriodFundamental::getType()
	 * @uses XiFundamentalsTypeGetPeriodFundamental::getIdentifier()
	 * @uses XiFundamentalsTypeGetPeriodFundamental::getIdentifierType()
	 * @uses XiFundamentalsTypeGetPeriodFundamental::getStartDate()
	 * @uses XiFundamentalsTypeGetPeriodFundamental::getEndDate()
	 * @param XiFundamentalsTypeGetPeriodFundamental GetPeriodFundamental
	 * @return XiFundamentalsTypeGetPeriodFundamentalResponse
	 */
	public function GetPeriodFundamental(XiFundamentalsTypeGetPeriodFundamental $_XiFundamentalsTypeGetPeriodFundamental)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPeriodFundamental(array('Type'=>$_XiFundamentalsTypeGetPeriodFundamental->getType(),'Identifier'=>$_XiFundamentalsTypeGetPeriodFundamental->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetPeriodFundamental->getIdentifierType(),'StartDate'=>$_XiFundamentalsTypeGetPeriodFundamental->getStartDate(),'EndDate'=>$_XiFundamentalsTypeGetPeriodFundamental->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMultiFundamental
	 * Meta informations :
	 * 	- documentation : Get multiple fundamental values for a security.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetMultiFundamental::getTypes()
	 * @uses XiFundamentalsTypeGetMultiFundamental::getIdentifier()
	 * @uses XiFundamentalsTypeGetMultiFundamental::getIdentifierType()
	 * @param XiFundamentalsTypeGetMultiFundamental GetMultiFundamental
	 * @return XiFundamentalsTypeGetMultiFundamentalResponse
	 */
	public function GetMultiFundamental(XiFundamentalsTypeGetMultiFundamental $_XiFundamentalsTypeGetMultiFundamental)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMultiFundamental(array('Types'=>$_XiFundamentalsTypeGetMultiFundamental->getTypes(),'Identifier'=>$_XiFundamentalsTypeGetMultiFundamental->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetMultiFundamental->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTwoFundamentals
	 * Meta informations :
	 * 	- documentation : Get two fundamental values for a security.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetTwoFundamentals::getType1()
	 * @uses XiFundamentalsTypeGetTwoFundamentals::getType2()
	 * @uses XiFundamentalsTypeGetTwoFundamentals::getIdentifier()
	 * @uses XiFundamentalsTypeGetTwoFundamentals::getIdentifierType()
	 * @param XiFundamentalsTypeGetTwoFundamentals GetTwoFundamentals
	 * @return XiFundamentalsTypeGetTwoFundamentalsResponse
	 */
	public function GetTwoFundamentals(XiFundamentalsTypeGetTwoFundamentals $_XiFundamentalsTypeGetTwoFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTwoFundamentals(array('Type1'=>$_XiFundamentalsTypeGetTwoFundamentals->getType1(),'Type2'=>$_XiFundamentalsTypeGetTwoFundamentals->getType2(),'Identifier'=>$_XiFundamentalsTypeGetTwoFundamentals->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetTwoFundamentals->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetThreeFundamentals
	 * Meta informations :
	 * 	- documentation : Get three fundamental values for a security.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetThreeFundamentals::getType1()
	 * @uses XiFundamentalsTypeGetThreeFundamentals::getType2()
	 * @uses XiFundamentalsTypeGetThreeFundamentals::getType3()
	 * @uses XiFundamentalsTypeGetThreeFundamentals::getIdentifier()
	 * @uses XiFundamentalsTypeGetThreeFundamentals::getIdentifierType()
	 * @param XiFundamentalsTypeGetThreeFundamentals GetThreeFundamentals
	 * @return XiFundamentalsTypeGetThreeFundamentalsResponse
	 */
	public function GetThreeFundamentals(XiFundamentalsTypeGetThreeFundamentals $_XiFundamentalsTypeGetThreeFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetThreeFundamentals(array('Type1'=>$_XiFundamentalsTypeGetThreeFundamentals->getType1(),'Type2'=>$_XiFundamentalsTypeGetThreeFundamentals->getType2(),'Type3'=>$_XiFundamentalsTypeGetThreeFundamentals->getType3(),'Identifier'=>$_XiFundamentalsTypeGetThreeFundamentals->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetThreeFundamentals->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFourFundamentals
	 * Meta informations :
	 * 	- documentation : Get four fundamental values for a security.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetFourFundamentals::getType1()
	 * @uses XiFundamentalsTypeGetFourFundamentals::getType2()
	 * @uses XiFundamentalsTypeGetFourFundamentals::getType3()
	 * @uses XiFundamentalsTypeGetFourFundamentals::getType4()
	 * @uses XiFundamentalsTypeGetFourFundamentals::getIdentifier()
	 * @uses XiFundamentalsTypeGetFourFundamentals::getIdentifierType()
	 * @param XiFundamentalsTypeGetFourFundamentals GetFourFundamentals
	 * @return XiFundamentalsTypeGetFourFundamentalsResponse
	 */
	public function GetFourFundamentals(XiFundamentalsTypeGetFourFundamentals $_XiFundamentalsTypeGetFourFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFourFundamentals(array('Type1'=>$_XiFundamentalsTypeGetFourFundamentals->getType1(),'Type2'=>$_XiFundamentalsTypeGetFourFundamentals->getType2(),'Type3'=>$_XiFundamentalsTypeGetFourFundamentals->getType3(),'Type4'=>$_XiFundamentalsTypeGetFourFundamentals->getType4(),'Identifier'=>$_XiFundamentalsTypeGetFourFundamentals->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetFourFundamentals->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFiveFundamentals
	 * Meta informations :
	 * 	- documentation : Get five fundamental values for a security.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetFiveFundamentals::getType1()
	 * @uses XiFundamentalsTypeGetFiveFundamentals::getType2()
	 * @uses XiFundamentalsTypeGetFiveFundamentals::getType3()
	 * @uses XiFundamentalsTypeGetFiveFundamentals::getType4()
	 * @uses XiFundamentalsTypeGetFiveFundamentals::getType5()
	 * @uses XiFundamentalsTypeGetFiveFundamentals::getIdentifier()
	 * @uses XiFundamentalsTypeGetFiveFundamentals::getIdentifierType()
	 * @param XiFundamentalsTypeGetFiveFundamentals GetFiveFundamentals
	 * @return XiFundamentalsTypeGetFiveFundamentalsResponse
	 */
	public function GetFiveFundamentals(XiFundamentalsTypeGetFiveFundamentals $_XiFundamentalsTypeGetFiveFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFiveFundamentals(array('Type1'=>$_XiFundamentalsTypeGetFiveFundamentals->getType1(),'Type2'=>$_XiFundamentalsTypeGetFiveFundamentals->getType2(),'Type3'=>$_XiFundamentalsTypeGetFiveFundamentals->getType3(),'Type4'=>$_XiFundamentalsTypeGetFiveFundamentals->getType4(),'Type5'=>$_XiFundamentalsTypeGetFiveFundamentals->getType5(),'Identifier'=>$_XiFundamentalsTypeGetFiveFundamentals->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetFiveFundamentals->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundamentalList
	 * Meta informations :
	 * 	- documentation : Get multiple fundamental values for a security.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetFundamentalList::getTypes()
	 * @uses XiFundamentalsTypeGetFundamentalList::getIdentifier()
	 * @uses XiFundamentalsTypeGetFundamentalList::getIdentifierType()
	 * @param XiFundamentalsTypeGetFundamentalList GetFundamentalList
	 * @return XiFundamentalsTypeGetFundamentalListResponse
	 */
	public function GetFundamentalList(XiFundamentalsTypeGetFundamentalList $_XiFundamentalsTypeGetFundamentalList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundamentalList(array('Types'=>$_XiFundamentalsTypeGetFundamentalList->getTypes(),'Identifier'=>$_XiFundamentalsTypeGetFundamentalList->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetFundamentalList->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundamentals
	 * Meta informations :
	 * 	- documentation : Get the same fundamental value across multiple securities.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetFundamentals::getType()
	 * @uses XiFundamentalsTypeGetFundamentals::getIdentifiers()
	 * @uses XiFundamentalsTypeGetFundamentals::getIdentifierType()
	 * @param XiFundamentalsTypeGetFundamentals GetFundamentals
	 * @return XiFundamentalsTypeGetFundamentalsResponse
	 */
	public function GetFundamentals(XiFundamentalsTypeGetFundamentals $_XiFundamentalsTypeGetFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundamentals(array('Type'=>$_XiFundamentalsTypeGetFundamentals->getType(),'Identifiers'=>$_XiFundamentalsTypeGetFundamentals->getIdentifiers(),'IdentifierType'=>$_XiFundamentalsTypeGetFundamentals->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundamentalListAsString
	 * Meta informations :
	 * 	- documentation : Get multiple fundamental values for a security.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeGetFundamentalListAsString::getTypes()
	 * @uses XiFundamentalsTypeGetFundamentalListAsString::getIdentifier()
	 * @uses XiFundamentalsTypeGetFundamentalListAsString::getIdentifierType()
	 * @param XiFundamentalsTypeGetFundamentalListAsString GetFundamentalListAsString
	 * @return XiFundamentalsTypeGetFundamentalListAsStringResponse
	 */
	public function GetFundamentalListAsString(XiFundamentalsTypeGetFundamentalListAsString $_XiFundamentalsTypeGetFundamentalListAsString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundamentalListAsString(array('Types'=>$_XiFundamentalsTypeGetFundamentalListAsString->getTypes(),'Identifier'=>$_XiFundamentalsTypeGetFundamentalListAsString->getIdentifier(),'IdentifierType'=>$_XiFundamentalsTypeGetFundamentalListAsString->getIdentifierType())));
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
	 * @return XiFundamentalsTypeGetFundamentalListAsStringResponse
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