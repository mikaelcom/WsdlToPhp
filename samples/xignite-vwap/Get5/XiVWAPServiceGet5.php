<?php
/**
 * Class file for XiVWAPServiceGet5
 * @date 08/07/2012
 */
/**
 * Class XiVWAPServiceGet5
 * @date 08/07/2012
 */
class XiVWAPServiceGet5 extends XiVWAPWsdlClass
{
	/**
	 * Method to call Get5MinuteVWAP
	 * Meta informations :
	 * 	- documentation : Returns an intraday VWAP for a security based on trades executed in the last 5 minutes of the 15/20 minutes delayed quote.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGet5MinuteVWAP::getIdentifier()
	 * @uses XiVWAPTypeGet5MinuteVWAP::getIdentifierType()
	 * @param XiVWAPTypeGet5MinuteVWAP Get5MinuteVWAP
	 * @return XiVWAPTypeGet5MinuteVWAPResponse
	 */
	public function Get5MinuteVWAP(XiVWAPTypeGet5MinuteVWAP $_XiVWAPTypeGet5MinuteVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Get5MinuteVWAP(array('Identifier'=>$_XiVWAPTypeGet5MinuteVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGet5MinuteVWAP->getIdentifierType())));
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
	 * @return XiVWAPTypeGet5MinuteVWAPResponse
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