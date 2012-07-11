<?php
/**
 * Class file for EccConvertChineseServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccConvertChineseServiceGet
 * @date 03/07/2012
 */
class EccConvertChineseServiceGet extends EccConvertChineseWsdlClass
{
	/**
	 * Method to call GetSimplifiedChinese
	 * Meta informations :
	 * 	- documentation : Convert a chinese text from traditional to simplified characters.
	 * @uses EccConvertChineseWsdlClass::getSoapClient()
	 * @uses EccConvertChineseWsdlClass::setResult()
	 * @uses EccConvertChineseWsdlClass::getResult()
	 * @uses EccConvertChineseWsdlClass::saveLastError()
	 * @uses EccConvertChineseTypeGetSimplifiedChinese::getKeyID()
	 * @uses EccConvertChineseTypeGetSimplifiedChinese::getDomainID()
	 * @uses EccConvertChineseTypeGetSimplifiedChinese::getSource()
	 * @param EccConvertChineseTypeGetSimplifiedChinese GetSimplifiedChinese
	 * @return EccConvertChineseTypeGetSimplifiedChineseResponse
	 */
	public function GetSimplifiedChinese(EccConvertChineseTypeGetSimplifiedChinese $_EccConvertChineseTypeGetSimplifiedChinese)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSimplifiedChinese(array('KeyID'=>$_EccConvertChineseTypeGetSimplifiedChinese->getKeyID(),'DomainID'=>$_EccConvertChineseTypeGetSimplifiedChinese->getDomainID(),'Source'=>$_EccConvertChineseTypeGetSimplifiedChinese->getSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTraditionalChinese
	 * Meta informations :
	 * 	- documentation : Convert a chinese text from simplified to traditional characters.
	 * @uses EccConvertChineseWsdlClass::getSoapClient()
	 * @uses EccConvertChineseWsdlClass::setResult()
	 * @uses EccConvertChineseWsdlClass::getResult()
	 * @uses EccConvertChineseWsdlClass::saveLastError()
	 * @uses EccConvertChineseTypeGetTraditionalChinese::getKeyID()
	 * @uses EccConvertChineseTypeGetTraditionalChinese::getDomainID()
	 * @uses EccConvertChineseTypeGetTraditionalChinese::getSource()
	 * @param EccConvertChineseTypeGetTraditionalChinese GetTraditionalChinese
	 * @return EccConvertChineseTypeGetTraditionalChineseResponse
	 */
	public function GetTraditionalChinese(EccConvertChineseTypeGetTraditionalChinese $_EccConvertChineseTypeGetTraditionalChinese)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTraditionalChinese(array('KeyID'=>$_EccConvertChineseTypeGetTraditionalChinese->getKeyID(),'DomainID'=>$_EccConvertChineseTypeGetTraditionalChinese->getDomainID(),'Source'=>$_EccConvertChineseTypeGetTraditionalChinese->getSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChinese
	 * Meta informations :
	 * 	- documentation : Convert a chinese text from its unicode version to its characters version.
	 * @uses EccConvertChineseWsdlClass::getSoapClient()
	 * @uses EccConvertChineseWsdlClass::setResult()
	 * @uses EccConvertChineseWsdlClass::getResult()
	 * @uses EccConvertChineseWsdlClass::saveLastError()
	 * @uses EccConvertChineseTypeGetChinese::getKeyID()
	 * @uses EccConvertChineseTypeGetChinese::getDomainID()
	 * @uses EccConvertChineseTypeGetChinese::getSource()
	 * @param EccConvertChineseTypeGetChinese GetChinese
	 * @return EccConvertChineseTypeGetChineseResponse
	 */
	public function GetChinese(EccConvertChineseTypeGetChinese $_EccConvertChineseTypeGetChinese)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChinese(array('KeyID'=>$_EccConvertChineseTypeGetChinese->getKeyID(),'DomainID'=>$_EccConvertChineseTypeGetChinese->getDomainID(),'Source'=>$_EccConvertChineseTypeGetChinese->getSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUnicode
	 * Meta informations :
	 * 	- documentation : Get the unicode version of a text written in chinese characters.
	 * @uses EccConvertChineseWsdlClass::getSoapClient()
	 * @uses EccConvertChineseWsdlClass::setResult()
	 * @uses EccConvertChineseWsdlClass::getResult()
	 * @uses EccConvertChineseWsdlClass::saveLastError()
	 * @uses EccConvertChineseTypeGetUnicode::getKeyID()
	 * @uses EccConvertChineseTypeGetUnicode::getDomainID()
	 * @uses EccConvertChineseTypeGetUnicode::getSource()
	 * @param EccConvertChineseTypeGetUnicode GetUnicode
	 * @return EccConvertChineseTypeGetUnicodeResponse
	 */
	public function GetUnicode(EccConvertChineseTypeGetUnicode $_EccConvertChineseTypeGetUnicode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUnicode(array('KeyID'=>$_EccConvertChineseTypeGetUnicode->getKeyID(),'DomainID'=>$_EccConvertChineseTypeGetUnicode->getDomainID(),'Source'=>$_EccConvertChineseTypeGetUnicode->getSource())));
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
	 * @return EccConvertChineseTypeGetUnicodeResponse
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