<?php
/**
 * Class file for XiGlobalFundamentalsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsServiceGet
 * @date 08/07/2012
 */
class XiGlobalFundamentalsServiceGet extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * Method to call GetFundamental
	 * Meta informations :
	 * 	- documentation : Get a global fundamental value for a security.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetFundamental::getType()
	 * @uses XiGlobalFundamentalsTypeGetFundamental::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetFundamental::getIdentifierType()
	 * @param XiGlobalFundamentalsTypeGetFundamental GetFundamental
	 * @return XiGlobalFundamentalsTypeGetFundamentalResponse
	 */
	public function GetFundamental(XiGlobalFundamentalsTypeGetFundamental $_XiGlobalFundamentalsTypeGetFundamental)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundamental(array('Type'=>$_XiGlobalFundamentalsTypeGetFundamental->getType(),'Identifier'=>$_XiGlobalFundamentalsTypeGetFundamental->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetFundamental->getIdentifierType())));
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
	 * 	- documentation : Get a global fundamental value for a security as of a certain date.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetDatedFundamental::getType()
	 * @uses XiGlobalFundamentalsTypeGetDatedFundamental::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetDatedFundamental::getIdentifierType()
	 * @uses XiGlobalFundamentalsTypeGetDatedFundamental::getAsOfDate()
	 * @param XiGlobalFundamentalsTypeGetDatedFundamental GetDatedFundamental
	 * @return XiGlobalFundamentalsTypeGetDatedFundamentalResponse
	 */
	public function GetDatedFundamental(XiGlobalFundamentalsTypeGetDatedFundamental $_XiGlobalFundamentalsTypeGetDatedFundamental)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDatedFundamental(array('Type'=>$_XiGlobalFundamentalsTypeGetDatedFundamental->getType(),'Identifier'=>$_XiGlobalFundamentalsTypeGetDatedFundamental->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetDatedFundamental->getIdentifierType(),'AsOfDate'=>$_XiGlobalFundamentalsTypeGetDatedFundamental->getAsOfDate())));
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
	 * 	- documentation : Get a global fundamental value for a security.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetPeriodFundamental::getType()
	 * @uses XiGlobalFundamentalsTypeGetPeriodFundamental::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetPeriodFundamental::getIdentifierType()
	 * @uses XiGlobalFundamentalsTypeGetPeriodFundamental::getStartDate()
	 * @uses XiGlobalFundamentalsTypeGetPeriodFundamental::getEndDate()
	 * @param XiGlobalFundamentalsTypeGetPeriodFundamental GetPeriodFundamental
	 * @return XiGlobalFundamentalsTypeGetPeriodFundamentalResponse
	 */
	public function GetPeriodFundamental(XiGlobalFundamentalsTypeGetPeriodFundamental $_XiGlobalFundamentalsTypeGetPeriodFundamental)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPeriodFundamental(array('Type'=>$_XiGlobalFundamentalsTypeGetPeriodFundamental->getType(),'Identifier'=>$_XiGlobalFundamentalsTypeGetPeriodFundamental->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetPeriodFundamental->getIdentifierType(),'StartDate'=>$_XiGlobalFundamentalsTypeGetPeriodFundamental->getStartDate(),'EndDate'=>$_XiGlobalFundamentalsTypeGetPeriodFundamental->getEndDate())));
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
	 * 	- documentation : Get multiple global fundamental values for a security.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetMultiFundamental::getTypes()
	 * @uses XiGlobalFundamentalsTypeGetMultiFundamental::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetMultiFundamental::getIdentifierType()
	 * @param XiGlobalFundamentalsTypeGetMultiFundamental GetMultiFundamental
	 * @return XiGlobalFundamentalsTypeGetMultiFundamentalResponse
	 */
	public function GetMultiFundamental(XiGlobalFundamentalsTypeGetMultiFundamental $_XiGlobalFundamentalsTypeGetMultiFundamental)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMultiFundamental(array('Types'=>$_XiGlobalFundamentalsTypeGetMultiFundamental->getTypes(),'Identifier'=>$_XiGlobalFundamentalsTypeGetMultiFundamental->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetMultiFundamental->getIdentifierType())));
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
	 * 	- documentation : Get two global fundamental values for a security.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetTwoFundamentals::getType1()
	 * @uses XiGlobalFundamentalsTypeGetTwoFundamentals::getType2()
	 * @uses XiGlobalFundamentalsTypeGetTwoFundamentals::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetTwoFundamentals::getIdentifierType()
	 * @param XiGlobalFundamentalsTypeGetTwoFundamentals GetTwoFundamentals
	 * @return XiGlobalFundamentalsTypeGetTwoFundamentalsResponse
	 */
	public function GetTwoFundamentals(XiGlobalFundamentalsTypeGetTwoFundamentals $_XiGlobalFundamentalsTypeGetTwoFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTwoFundamentals(array('Type1'=>$_XiGlobalFundamentalsTypeGetTwoFundamentals->getType1(),'Type2'=>$_XiGlobalFundamentalsTypeGetTwoFundamentals->getType2(),'Identifier'=>$_XiGlobalFundamentalsTypeGetTwoFundamentals->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetTwoFundamentals->getIdentifierType())));
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
	 * 	- documentation : Get three global fundamental values for a security.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetThreeFundamentals::getType1()
	 * @uses XiGlobalFundamentalsTypeGetThreeFundamentals::getType2()
	 * @uses XiGlobalFundamentalsTypeGetThreeFundamentals::getType3()
	 * @uses XiGlobalFundamentalsTypeGetThreeFundamentals::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetThreeFundamentals::getIdentifierType()
	 * @param XiGlobalFundamentalsTypeGetThreeFundamentals GetThreeFundamentals
	 * @return XiGlobalFundamentalsTypeGetThreeFundamentalsResponse
	 */
	public function GetThreeFundamentals(XiGlobalFundamentalsTypeGetThreeFundamentals $_XiGlobalFundamentalsTypeGetThreeFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetThreeFundamentals(array('Type1'=>$_XiGlobalFundamentalsTypeGetThreeFundamentals->getType1(),'Type2'=>$_XiGlobalFundamentalsTypeGetThreeFundamentals->getType2(),'Type3'=>$_XiGlobalFundamentalsTypeGetThreeFundamentals->getType3(),'Identifier'=>$_XiGlobalFundamentalsTypeGetThreeFundamentals->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetThreeFundamentals->getIdentifierType())));
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
	 * 	- documentation : Get four global fundamental values for a security.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetFourFundamentals::getType1()
	 * @uses XiGlobalFundamentalsTypeGetFourFundamentals::getType2()
	 * @uses XiGlobalFundamentalsTypeGetFourFundamentals::getType3()
	 * @uses XiGlobalFundamentalsTypeGetFourFundamentals::getType4()
	 * @uses XiGlobalFundamentalsTypeGetFourFundamentals::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetFourFundamentals::getIdentifierType()
	 * @param XiGlobalFundamentalsTypeGetFourFundamentals GetFourFundamentals
	 * @return XiGlobalFundamentalsTypeGetFourFundamentalsResponse
	 */
	public function GetFourFundamentals(XiGlobalFundamentalsTypeGetFourFundamentals $_XiGlobalFundamentalsTypeGetFourFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFourFundamentals(array('Type1'=>$_XiGlobalFundamentalsTypeGetFourFundamentals->getType1(),'Type2'=>$_XiGlobalFundamentalsTypeGetFourFundamentals->getType2(),'Type3'=>$_XiGlobalFundamentalsTypeGetFourFundamentals->getType3(),'Type4'=>$_XiGlobalFundamentalsTypeGetFourFundamentals->getType4(),'Identifier'=>$_XiGlobalFundamentalsTypeGetFourFundamentals->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetFourFundamentals->getIdentifierType())));
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
	 * 	- documentation : Get five global fundamental values for a security.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetFiveFundamentals::getType1()
	 * @uses XiGlobalFundamentalsTypeGetFiveFundamentals::getType2()
	 * @uses XiGlobalFundamentalsTypeGetFiveFundamentals::getType3()
	 * @uses XiGlobalFundamentalsTypeGetFiveFundamentals::getType4()
	 * @uses XiGlobalFundamentalsTypeGetFiveFundamentals::getType5()
	 * @uses XiGlobalFundamentalsTypeGetFiveFundamentals::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetFiveFundamentals::getIdentifierType()
	 * @param XiGlobalFundamentalsTypeGetFiveFundamentals GetFiveFundamentals
	 * @return XiGlobalFundamentalsTypeGetFiveFundamentalsResponse
	 */
	public function GetFiveFundamentals(XiGlobalFundamentalsTypeGetFiveFundamentals $_XiGlobalFundamentalsTypeGetFiveFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFiveFundamentals(array('Type1'=>$_XiGlobalFundamentalsTypeGetFiveFundamentals->getType1(),'Type2'=>$_XiGlobalFundamentalsTypeGetFiveFundamentals->getType2(),'Type3'=>$_XiGlobalFundamentalsTypeGetFiveFundamentals->getType3(),'Type4'=>$_XiGlobalFundamentalsTypeGetFiveFundamentals->getType4(),'Type5'=>$_XiGlobalFundamentalsTypeGetFiveFundamentals->getType5(),'Identifier'=>$_XiGlobalFundamentalsTypeGetFiveFundamentals->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetFiveFundamentals->getIdentifierType())));
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
	 * 	- documentation : Get multiple global fundamental values for a security.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetFundamentalList::getTypes()
	 * @uses XiGlobalFundamentalsTypeGetFundamentalList::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetFundamentalList::getIdentifierType()
	 * @param XiGlobalFundamentalsTypeGetFundamentalList GetFundamentalList
	 * @return XiGlobalFundamentalsTypeGetFundamentalListResponse
	 */
	public function GetFundamentalList(XiGlobalFundamentalsTypeGetFundamentalList $_XiGlobalFundamentalsTypeGetFundamentalList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundamentalList(array('Types'=>$_XiGlobalFundamentalsTypeGetFundamentalList->getTypes(),'Identifier'=>$_XiGlobalFundamentalsTypeGetFundamentalList->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetFundamentalList->getIdentifierType())));
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
	 * 	- documentation : Get the same global fundamental value across multiple securities.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetFundamentals::getType()
	 * @uses XiGlobalFundamentalsTypeGetFundamentals::getIdentifiers()
	 * @uses XiGlobalFundamentalsTypeGetFundamentals::getIdentifierType()
	 * @param XiGlobalFundamentalsTypeGetFundamentals GetFundamentals
	 * @return XiGlobalFundamentalsTypeGetFundamentalsResponse
	 */
	public function GetFundamentals(XiGlobalFundamentalsTypeGetFundamentals $_XiGlobalFundamentalsTypeGetFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundamentals(array('Type'=>$_XiGlobalFundamentalsTypeGetFundamentals->getType(),'Identifiers'=>$_XiGlobalFundamentalsTypeGetFundamentals->getIdentifiers(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetFundamentals->getIdentifierType())));
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
	 * 	- documentation : Get multiple global fundamental values for a security.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeGetFundamentalListAsString::getTypes()
	 * @uses XiGlobalFundamentalsTypeGetFundamentalListAsString::getIdentifier()
	 * @uses XiGlobalFundamentalsTypeGetFundamentalListAsString::getIdentifierType()
	 * @param XiGlobalFundamentalsTypeGetFundamentalListAsString GetFundamentalListAsString
	 * @return XiGlobalFundamentalsTypeGetFundamentalListAsStringResponse
	 */
	public function GetFundamentalListAsString(XiGlobalFundamentalsTypeGetFundamentalListAsString $_XiGlobalFundamentalsTypeGetFundamentalListAsString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundamentalListAsString(array('Types'=>$_XiGlobalFundamentalsTypeGetFundamentalListAsString->getTypes(),'Identifier'=>$_XiGlobalFundamentalsTypeGetFundamentalListAsString->getIdentifier(),'IdentifierType'=>$_XiGlobalFundamentalsTypeGetFundamentalListAsString->getIdentifierType())));
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
	 * @return XiGlobalFundamentalsTypeGetFundamentalListAsStringResponse
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