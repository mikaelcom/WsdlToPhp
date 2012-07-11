<?php
/**
 * Class file for XiQuotesServiceList
 * @date 08/07/2012
 */
/**
 * Class XiQuotesServiceList
 * @date 08/07/2012
 */
class XiQuotesServiceList extends XiQuotesWsdlClass
{
	/**
	 * Method to call ListTopExchanges
	 * Meta informations :
	 * 	- documentation : List exchanges for which Tops are available
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeListTopExchanges ListTopExchanges
	 * @return XiQuotesTypeListTopExchangesResponse
	 */
	public function ListTopExchanges(XiQuotesTypeListTopExchanges $_XiQuotesTypeListTopExchanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListTopExchanges(array()));
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
	 * @return XiQuotesTypeListTopExchangesResponse
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