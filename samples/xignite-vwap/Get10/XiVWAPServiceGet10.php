<?php
/**
 * Class file for XiVWAPServiceGet10
 * @date 08/07/2012
 */
/**
 * Class XiVWAPServiceGet10
 * @date 08/07/2012
 */
class XiVWAPServiceGet10 extends XiVWAPWsdlClass
{
	/**
	 * Method to call Get10MinuteVWAP
	 * Meta informations :
	 * 	- documentation : Returns an intraday VWAP for a security based on trades executed in the last 10 minutes of the 15/20 minutes delayed quote.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGet10MinuteVWAP::getIdentifier()
	 * @uses XiVWAPTypeGet10MinuteVWAP::getIdentifierType()
	 * @param XiVWAPTypeGet10MinuteVWAP Get10MinuteVWAP
	 * @return XiVWAPTypeGet10MinuteVWAPResponse
	 */
	public function Get10MinuteVWAP(XiVWAPTypeGet10MinuteVWAP $_XiVWAPTypeGet10MinuteVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Get10MinuteVWAP(array('Identifier'=>$_XiVWAPTypeGet10MinuteVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGet10MinuteVWAP->getIdentifierType())));
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
	 * @return XiVWAPTypeGet10MinuteVWAPResponse
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