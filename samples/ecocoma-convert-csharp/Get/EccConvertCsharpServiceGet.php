<?php
/**
 * Class file for EccConvertCsharpServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccConvertCsharpServiceGet
 * @date 03/07/2012
 */
class EccConvertCsharpServiceGet extends EccConvertCsharpWsdlClass
{
	/**
	 * Method to call GetVB
	 * Meta informations :
	 * 	- documentation : Convert your C# code to its equivalent in VB.NET.
	 * @uses EccConvertCsharpWsdlClass::getSoapClient()
	 * @uses EccConvertCsharpWsdlClass::setResult()
	 * @uses EccConvertCsharpWsdlClass::getResult()
	 * @uses EccConvertCsharpWsdlClass::saveLastError()
	 * @uses EccConvertCsharpTypeGetVB::getKeyID()
	 * @uses EccConvertCsharpTypeGetVB::getDomainID()
	 * @uses EccConvertCsharpTypeGetVB::getCode()
	 * @param EccConvertCsharpTypeGetVB GetVB
	 * @return EccConvertCsharpTypeGetVBResponse
	 */
	public function GetVB(EccConvertCsharpTypeGetVB $_EccConvertCsharpTypeGetVB)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVB(array('KeyID'=>$_EccConvertCsharpTypeGetVB->getKeyID(),'DomainID'=>$_EccConvertCsharpTypeGetVB->getDomainID(),'Code'=>$_EccConvertCsharpTypeGetVB->getCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCsharp
	 * Meta informations :
	 * 	- documentation : Convert your VB.NET code to its equivalent in C#.
	 * @uses EccConvertCsharpWsdlClass::getSoapClient()
	 * @uses EccConvertCsharpWsdlClass::setResult()
	 * @uses EccConvertCsharpWsdlClass::getResult()
	 * @uses EccConvertCsharpWsdlClass::saveLastError()
	 * @uses EccConvertCsharpTypeGetCsharp::getKeyID()
	 * @uses EccConvertCsharpTypeGetCsharp::getDomainID()
	 * @uses EccConvertCsharpTypeGetCsharp::getCode()
	 * @param EccConvertCsharpTypeGetCsharp GetCsharp
	 * @return EccConvertCsharpTypeGetCsharpResponse
	 */
	public function GetCsharp(EccConvertCsharpTypeGetCsharp $_EccConvertCsharpTypeGetCsharp)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCsharp(array('KeyID'=>$_EccConvertCsharpTypeGetCsharp->getKeyID(),'DomainID'=>$_EccConvertCsharpTypeGetCsharp->getDomainID(),'Code'=>$_EccConvertCsharpTypeGetCsharp->getCode())));
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
	 * @return EccConvertCsharpTypeGetCsharpResponse
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