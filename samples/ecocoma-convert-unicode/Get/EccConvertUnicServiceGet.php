<?php
/**
 * Class file for EccConvertUnicServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccConvertUnicServiceGet
 * @date 03/07/2012
 */
class EccConvertUnicServiceGet extends EccConvertUnicWsdlClass
{
	/**
	 * Method to call GetUtf8
	 * Meta informations :
	 * 	- documentation : Convert a text from its unicode version to its characters version.
	 * @uses EccConvertUnicWsdlClass::getSoapClient()
	 * @uses EccConvertUnicWsdlClass::setResult()
	 * @uses EccConvertUnicWsdlClass::getResult()
	 * @uses EccConvertUnicWsdlClass::saveLastError()
	 * @uses EccConvertUnicTypeGetUtf8::getKeyID()
	 * @uses EccConvertUnicTypeGetUtf8::getDomainID()
	 * @uses EccConvertUnicTypeGetUtf8::getSource()
	 * @param EccConvertUnicTypeGetUtf8 GetUtf8
	 * @return EccConvertUnicTypeGetUtf8Response
	 */
	public function GetUtf8(EccConvertUnicTypeGetUtf8 $_EccConvertUnicTypeGetUtf8)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUtf8(array('KeyID'=>$_EccConvertUnicTypeGetUtf8->getKeyID(),'DomainID'=>$_EccConvertUnicTypeGetUtf8->getDomainID(),'Source'=>$_EccConvertUnicTypeGetUtf8->getSource())));
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
	 * 	- documentation : Get the unicode version of a text written in utf8 characters.
	 * @uses EccConvertUnicWsdlClass::getSoapClient()
	 * @uses EccConvertUnicWsdlClass::setResult()
	 * @uses EccConvertUnicWsdlClass::getResult()
	 * @uses EccConvertUnicWsdlClass::saveLastError()
	 * @uses EccConvertUnicTypeGetUnicode::getKeyID()
	 * @uses EccConvertUnicTypeGetUnicode::getDomainID()
	 * @uses EccConvertUnicTypeGetUnicode::getSource()
	 * @param EccConvertUnicTypeGetUnicode GetUnicode
	 * @return EccConvertUnicTypeGetUnicodeResponse
	 */
	public function GetUnicode(EccConvertUnicTypeGetUnicode $_EccConvertUnicTypeGetUnicode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUnicode(array('KeyID'=>$_EccConvertUnicTypeGetUnicode->getKeyID(),'DomainID'=>$_EccConvertUnicTypeGetUnicode->getDomainID(),'Source'=>$_EccConvertUnicTypeGetUnicode->getSource())));
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
	 * @return EccConvertUnicTypeGetUnicodeResponse
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