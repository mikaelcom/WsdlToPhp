<?php
/**
 * Class file for XiBATSLastSaleServiceList
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleServiceList
 * @date 08/07/2012
 */
class XiBATSLastSaleServiceList extends XiBATSLastSaleWsdlClass
{
	/**
	 * Method to call ListTradedSymbols
	 * Meta informations :
	 * 	- documentation : Returns all symbols and names that are traded recently
	 * @uses XiBATSLastSaleWsdlClass::getSoapClient()
	 * @uses XiBATSLastSaleWsdlClass::setResult()
	 * @uses XiBATSLastSaleWsdlClass::getResult()
	 * @uses XiBATSLastSaleWsdlClass::saveLastError()
	 * @uses XiBATSLastSaleTypeListTradedSymbols::getNumOfDays()
	 * @uses XiBATSLastSaleTypeListTradedSymbols::getStartSymbol()
	 * @uses XiBATSLastSaleTypeListTradedSymbols::getEndSymbol()
	 * @param XiBATSLastSaleTypeListTradedSymbols ListTradedSymbols
	 * @return XiBATSLastSaleTypeListTradedSymbolsResponse
	 */
	public function ListTradedSymbols(XiBATSLastSaleTypeListTradedSymbols $_XiBATSLastSaleTypeListTradedSymbols)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListTradedSymbols(array('NumOfDays'=>$_XiBATSLastSaleTypeListTradedSymbols->getNumOfDays(),'StartSymbol'=>$_XiBATSLastSaleTypeListTradedSymbols->getStartSymbol(),'EndSymbol'=>$_XiBATSLastSaleTypeListTradedSymbols->getEndSymbol())));
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
	 * @return XiBATSLastSaleTypeListTradedSymbolsResponse
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