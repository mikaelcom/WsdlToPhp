<?php
/**
 * Class file for XiVWAPServiceGet60
 * @date 08/07/2012
 */
/**
 * Class XiVWAPServiceGet60
 * @date 08/07/2012
 */
class XiVWAPServiceGet60 extends XiVWAPWsdlClass
{
	/**
	 * Method to call Get60MinuteVWAP
	 * Meta informations :
	 * 	- documentation : Returns an intraday VWAP for a security based on trades executed in the last hour of the 15/20 minutes delayed quote.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGet60MinuteVWAP::getIdentifier()
	 * @uses XiVWAPTypeGet60MinuteVWAP::getIdentifierType()
	 * @param XiVWAPTypeGet60MinuteVWAP Get60MinuteVWAP
	 * @return XiVWAPTypeGet60MinuteVWAPResponse
	 */
	public function Get60MinuteVWAP(XiVWAPTypeGet60MinuteVWAP $_XiVWAPTypeGet60MinuteVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Get60MinuteVWAP(array('Identifier'=>$_XiVWAPTypeGet60MinuteVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGet60MinuteVWAP->getIdentifierType())));
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
	 * @return XiVWAPTypeGet60MinuteVWAPResponse
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