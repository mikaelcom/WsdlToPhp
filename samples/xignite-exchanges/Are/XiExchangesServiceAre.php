<?php
/**
 * Class file for XiExchangesServiceAre
 * @date 08/07/2012
 */
/**
 * Class XiExchangesServiceAre
 * @date 08/07/2012
 */
class XiExchangesServiceAre extends XiExchangesWsdlClass
{
	/**
	 * Method to call AreExchangesOpen
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeAreExchangesOpen::getExchanges()
	 * @param XiExchangesTypeAreExchangesOpen AreExchangesOpen
	 * @return XiExchangesTypeAreExchangesOpenResponse
	 */
	public function AreExchangesOpen(XiExchangesTypeAreExchangesOpen $_XiExchangesTypeAreExchangesOpen)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AreExchangesOpen(array('Exchanges'=>$_XiExchangesTypeAreExchangesOpen->getExchanges())));
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
	 * @return XiExchangesTypeAreExchangesOpenResponse
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