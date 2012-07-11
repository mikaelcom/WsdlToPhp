<?php
/**
 * Class file for XiRealTimeServiceIs
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeServiceIs
 * @date 08/07/2012
 */
class XiRealTimeServiceIs extends XiRealTimeWsdlClass
{
	/**
	 * Method to call IsTraded
	 * Meta informations :
	 * 	- documentation : Deprecated
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeIsTraded::getExchange()
	 * @uses XiRealTimeTypeIsTraded::getSymbol()
	 * @param XiRealTimeTypeIsTraded IsTraded
	 * @return XiRealTimeTypeIsTradedResponse
	 */
	public function IsTraded(XiRealTimeTypeIsTraded $_XiRealTimeTypeIsTraded)
	{
		try
		{
			$this->setResult(self::getSoapClient()->IsTraded(array('Exchange'=>$_XiRealTimeTypeIsTraded->getExchange(),'Symbol'=>$_XiRealTimeTypeIsTraded->getSymbol())));
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
	 * @return XiRealTimeTypeIsTradedResponse
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