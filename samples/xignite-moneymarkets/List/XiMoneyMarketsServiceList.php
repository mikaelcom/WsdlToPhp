<?php
/**
 * Class file for XiMoneyMarketsServiceList
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsServiceList
 * @date 08/07/2012
 */
class XiMoneyMarketsServiceList extends XiMoneyMarketsWsdlClass
{
	/**
	 * Method to call ListRates
	 * Meta informations :
	 * 	- documentation : List supported interest rates.
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @param XiMoneyMarketsTypeListRates ListRates
	 * @return XiMoneyMarketsTypeListRatesResponse
	 */
	public function ListRates(XiMoneyMarketsTypeListRates $_XiMoneyMarketsTypeListRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListRates(array()));
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
	 * @return XiMoneyMarketsTypeListRatesResponse
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