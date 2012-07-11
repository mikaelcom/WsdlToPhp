<?php
/**
 * Class file for XiEnergyServiceList
 * @date 08/07/2012
 */
/**
 * Class XiEnergyServiceList
 * @date 08/07/2012
 */
class XiEnergyServiceList extends XiEnergyWsdlClass
{
	/**
	 * Method to call ListEnergySwaps
	 * Meta informations :
	 * 	- documentation : List all commodity swaps and the exchange on which they are traded.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @param XiEnergyTypeListEnergySwaps ListEnergySwaps
	 * @return XiEnergyTypeListEnergySwapsResponse
	 */
	public function ListEnergySwaps(XiEnergyTypeListEnergySwaps $_XiEnergyTypeListEnergySwaps)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListEnergySwaps(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListEnergyFutures
	 * Meta informations :
	 * 	- documentation : List all commodity futures and the exchange on which they are traded.
	 * @uses XiEnergyWsdlClass::getSoapClient()
	 * @uses XiEnergyWsdlClass::setResult()
	 * @uses XiEnergyWsdlClass::getResult()
	 * @uses XiEnergyWsdlClass::saveLastError()
	 * @param XiEnergyTypeListEnergyFutures ListEnergyFutures
	 * @return XiEnergyTypeListEnergyFuturesResponse
	 */
	public function ListEnergyFutures(XiEnergyTypeListEnergyFutures $_XiEnergyTypeListEnergyFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListEnergyFutures(array()));
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
	 * @return XiEnergyTypeListEnergyFuturesResponse
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