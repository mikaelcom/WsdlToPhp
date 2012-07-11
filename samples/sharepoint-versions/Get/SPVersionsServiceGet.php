<?php
/**
 * Class file for SPVersionsServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPVersionsServiceGet
 * @date 06/07/2012
 */
class SPVersionsServiceGet extends SPVersionsWsdlClass
{
	/**
	 * Method to call GetVersions
	 * @uses SPVersionsWsdlClass::getSoapClient()
	 * @uses SPVersionsWsdlClass::setResult()
	 * @uses SPVersionsWsdlClass::getResult()
	 * @uses SPVersionsWsdlClass::saveLastError()
	 * @uses SPVersionsTypeGetVersions::getFileName()
	 * @param SPVersionsTypeGetVersions GetVersions
	 * @return SPVersionsTypeGetVersionsResponse
	 */
	public function GetVersions(SPVersionsTypeGetVersions $_SPVersionsTypeGetVersions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVersions(array('fileName'=>$_SPVersionsTypeGetVersions->getFileName())));
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
	 * @return SPVersionsTypeGetVersionsResponse
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