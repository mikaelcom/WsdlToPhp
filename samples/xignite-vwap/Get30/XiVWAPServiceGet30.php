<?php
/**
 * Class file for XiVWAPServiceGet30
 * @date 08/07/2012
 */
/**
 * Class XiVWAPServiceGet30
 * @date 08/07/2012
 */
class XiVWAPServiceGet30 extends XiVWAPWsdlClass
{
	/**
	 * Method to call Get30MinuteVWAP
	 * Meta informations :
	 * 	- documentation : Returns an intraday VWAP for a security based on trades executed in the last 30 minutes of the 15/20 minutes delayed quote.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGet30MinuteVWAP::getIdentifier()
	 * @uses XiVWAPTypeGet30MinuteVWAP::getIdentifierType()
	 * @param XiVWAPTypeGet30MinuteVWAP Get30MinuteVWAP
	 * @return XiVWAPTypeGet30MinuteVWAPResponse
	 */
	public function Get30MinuteVWAP(XiVWAPTypeGet30MinuteVWAP $_XiVWAPTypeGet30MinuteVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Get30MinuteVWAP(array('Identifier'=>$_XiVWAPTypeGet30MinuteVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGet30MinuteVWAP->getIdentifierType())));
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
	 * @return XiVWAPTypeGet30MinuteVWAPResponse
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