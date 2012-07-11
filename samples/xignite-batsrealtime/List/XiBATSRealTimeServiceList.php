<?php
/**
 * Class file for XiBATSRealTimeServiceList
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeServiceList
 * @date 08/07/2012
 */
class XiBATSRealTimeServiceList extends XiBATSRealTimeWsdlClass
{
	/**
	 * Method to call ListTradedSymbols
	 * Meta informations :
	 * 	- documentation : Returns all symbols and names that are traded recently
	 * @uses XiBATSRealTimeWsdlClass::getSoapClient()
	 * @uses XiBATSRealTimeWsdlClass::setResult()
	 * @uses XiBATSRealTimeWsdlClass::getResult()
	 * @uses XiBATSRealTimeWsdlClass::saveLastError()
	 * @uses XiBATSRealTimeTypeListTradedSymbols::getNumOfDays()
	 * @uses XiBATSRealTimeTypeListTradedSymbols::getStartSymbol()
	 * @uses XiBATSRealTimeTypeListTradedSymbols::getEndSymbol()
	 * @param XiBATSRealTimeTypeListTradedSymbols ListTradedSymbols
	 * @return XiBATSRealTimeTypeListTradedSymbolsResponse
	 */
	public function ListTradedSymbols(XiBATSRealTimeTypeListTradedSymbols $_XiBATSRealTimeTypeListTradedSymbols)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListTradedSymbols(array('NumOfDays'=>$_XiBATSRealTimeTypeListTradedSymbols->getNumOfDays(),'StartSymbol'=>$_XiBATSRealTimeTypeListTradedSymbols->getStartSymbol(),'EndSymbol'=>$_XiBATSRealTimeTypeListTradedSymbols->getEndSymbol())));
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
	 * @return XiBATSRealTimeTypeListTradedSymbolsResponse
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