<?php
/**
 * Class file for XiFinancialsServiceList
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsServiceList
 * @date 08/07/2012
 */
class XiFinancialsServiceList extends XiFinancialsWsdlClass
{
	/**
	 * Method to call ListCompanies
	 * Meta informations :
	 * 	- documentation : List all companies for which fundamentals are provided.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeListCompanies::getExchange()
	 * @uses XiFinancialsTypeListCompanies::getStartSymbol()
	 * @uses XiFinancialsTypeListCompanies::getEndSymbol()
	 * @param XiFinancialsTypeListCompanies ListCompanies
	 * @return XiFinancialsTypeListCompaniesResponse
	 */
	public function ListCompanies(XiFinancialsTypeListCompanies $_XiFinancialsTypeListCompanies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListCompanies(array('Exchange'=>$_XiFinancialsTypeListCompanies->getExchange(),'StartSymbol'=>$_XiFinancialsTypeListCompanies->getStartSymbol(),'EndSymbol'=>$_XiFinancialsTypeListCompanies->getEndSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListFinancials
	 * Meta informations :
	 * 	- documentation : List all available financials.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @param XiFinancialsTypeListFinancials ListFinancials
	 * @return XiFinancialsTypeListFinancialsResponse
	 */
	public function ListFinancials(XiFinancialsTypeListFinancials $_XiFinancialsTypeListFinancials)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFinancials(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListRestated
	 * Meta informations :
	 * 	- documentation : List all available financials.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @param XiFinancialsTypeListRestated ListRestated
	 * @return XiFinancialsTypeListRestatedResponse
	 */
	public function ListRestated(XiFinancialsTypeListRestated $_XiFinancialsTypeListRestated)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListRestated(array()));
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
	 * @return XiFinancialsTypeListRestatedResponse
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