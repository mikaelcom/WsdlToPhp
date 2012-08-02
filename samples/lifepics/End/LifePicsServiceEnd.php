<?php
/**
 * Class file for LifePicsServiceEnd
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceEnd
 * @date 02/08/2012
 */
class LifePicsServiceEnd extends LifePicsWsdlClass
{
	/**
	 * Method to call EndSession
	 * Meta informations :
	 * 	- documentation : Used for ending a session
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeEndSession::getSessionID()
	 * @param LifePicsTypeEndSession EndSession
	 * @return LifePicsTypeEndSessionResponse
	 */
	public function EndSession(LifePicsTypeEndSession $_LifePicsTypeEndSession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EndSession(array('SessionID'=>$_LifePicsTypeEndSession->getSessionID())));
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
	 * @return LifePicsTypeEndSessionResponse
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