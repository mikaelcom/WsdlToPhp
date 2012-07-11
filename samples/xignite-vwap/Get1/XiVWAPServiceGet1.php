<?php
/**
 * Class file for XiVWAPServiceGet1
 * @date 08/07/2012
 */
/**
 * Class XiVWAPServiceGet1
 * @date 08/07/2012
 */
class XiVWAPServiceGet1 extends XiVWAPWsdlClass
{
	/**
	 * Method to call Get1MinuteVWAP
	 * Meta informations :
	 * 	- documentation : Returns an intraday VWAP for a security based on trades executed in the last 1 minute of the 15/20 minutes delayed quote.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGet1MinuteVWAP::getIdentifier()
	 * @uses XiVWAPTypeGet1MinuteVWAP::getIdentifierType()
	 * @param XiVWAPTypeGet1MinuteVWAP Get1MinuteVWAP
	 * @return XiVWAPTypeGet1MinuteVWAPResponse
	 */
	public function Get1MinuteVWAP(XiVWAPTypeGet1MinuteVWAP $_XiVWAPTypeGet1MinuteVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Get1MinuteVWAP(array('Identifier'=>$_XiVWAPTypeGet1MinuteVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGet1MinuteVWAP->getIdentifierType())));
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
	 * @return XiVWAPTypeGet1MinuteVWAPResponse
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