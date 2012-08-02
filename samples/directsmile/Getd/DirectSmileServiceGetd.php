<?php
/**
 * Class file for DirectSmileServiceGetd
 * @date 02/08/2012
 */
/**
 * Class DirectSmileServiceGetd
 * @date 02/08/2012
 */
class DirectSmileServiceGetd extends DirectSmileWsdlClass
{
	/**
	 * Method to call GetdHttUrl
	 * Meta informations :
	 * 	- documentation : Returns an URl to Html Document Template. The SessionID parameter is included to stay backward compatible, it is not used in the method.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeGetdHttUrl::getSID()
	 * @uses DirectSmileTypeGetdHttUrl::getDHttAlias()
	 * @param DirectSmileTypeGetdHttUrl GetdHttUrl
	 * @return DirectSmileTypeGetdHttUrlResponse
	 */
	public function GetdHttUrl(DirectSmileTypeGetdHttUrl $_DirectSmileTypeGetdHttUrl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetdHttUrl(array('SID'=>$_DirectSmileTypeGetdHttUrl->getSID(),'dHttAlias'=>$_DirectSmileTypeGetdHttUrl->getDHttAlias())));
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
	 * @return DirectSmileTypeGetdHttUrlResponse
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