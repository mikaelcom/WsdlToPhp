<?php
/**
 * Class file for XiGlobalFundamentalsServiceList
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsServiceList
 * @date 08/07/2012
 */
class XiGlobalFundamentalsServiceList extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * Method to call ListFundamentals
	 * Meta informations :
	 * 	- documentation : List all available fundamentals.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @param XiGlobalFundamentalsTypeListFundamentals ListFundamentals
	 * @return XiGlobalFundamentalsTypeListFundamentalsResponse
	 */
	public function ListFundamentals(XiGlobalFundamentalsTypeListFundamentals $_XiGlobalFundamentalsTypeListFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFundamentals(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListCompanies
	 * Meta informations :
	 * 	- documentation : List all companies for which global fundamentals are provided.
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeListCompanies::getExchange()
	 * @uses XiGlobalFundamentalsTypeListCompanies::getStartSymbol()
	 * @uses XiGlobalFundamentalsTypeListCompanies::getEndSymbol()
	 * @param XiGlobalFundamentalsTypeListCompanies ListCompanies
	 * @return XiGlobalFundamentalsTypeListCompaniesResponse
	 */
	public function ListCompanies(XiGlobalFundamentalsTypeListCompanies $_XiGlobalFundamentalsTypeListCompanies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListCompanies(array('Exchange'=>$_XiGlobalFundamentalsTypeListCompanies->getExchange(),'StartSymbol'=>$_XiGlobalFundamentalsTypeListCompanies->getStartSymbol(),'EndSymbol'=>$_XiGlobalFundamentalsTypeListCompanies->getEndSymbol())));
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
	 * @return XiGlobalFundamentalsTypeListCompaniesResponse
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