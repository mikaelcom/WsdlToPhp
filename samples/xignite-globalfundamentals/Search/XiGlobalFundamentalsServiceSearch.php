<?php
/**
 * Class file for XiGlobalFundamentalsServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsServiceSearch
 * @date 08/07/2012
 */
class XiGlobalFundamentalsServiceSearch extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * Method to call SearchFundamentals
	 * Meta informations :
	 * 	- documentation : Search global fundamental names and description
	 * @uses XiGlobalFundamentalsWsdlClass::getSoapClient()
	 * @uses XiGlobalFundamentalsWsdlClass::setResult()
	 * @uses XiGlobalFundamentalsWsdlClass::getResult()
	 * @uses XiGlobalFundamentalsWsdlClass::saveLastError()
	 * @uses XiGlobalFundamentalsTypeSearchFundamentals::getPattern()
	 * @param XiGlobalFundamentalsTypeSearchFundamentals SearchFundamentals
	 * @return XiGlobalFundamentalsTypeSearchFundamentalsResponse
	 */
	public function SearchFundamentals(XiGlobalFundamentalsTypeSearchFundamentals $_XiGlobalFundamentalsTypeSearchFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchFundamentals(array('Pattern'=>$_XiGlobalFundamentalsTypeSearchFundamentals->getPattern())));
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
	 * @return XiGlobalFundamentalsTypeSearchFundamentalsResponse
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