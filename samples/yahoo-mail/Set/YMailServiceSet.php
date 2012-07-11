<?php
/**
 * Class file for YMailServiceSet
 * @date 02/07/2012
 */
/**
 * Class YMailServiceSet
 * @date 02/07/2012
 */
class YMailServiceSet extends YMailWsdlClass
{
	/**
	 * Method to call SetUserData
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeSetUserData::getSetdata()
	 * @param YMailTypeSetUserData SetUserData
	 * @return YMailTypeSetUserDataResponse
	 */
	public function SetUserData(YMailTypeSetUserData $_YMailTypeSetUserData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetUserData(array('setdata'=>$_YMailTypeSetUserData->getSetdata())));
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
	 * @return YMailTypeSetUserDataResponse
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