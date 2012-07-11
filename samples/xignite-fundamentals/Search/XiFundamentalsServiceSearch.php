<?php
/**
 * Class file for XiFundamentalsServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsServiceSearch
 * @date 08/07/2012
 */
class XiFundamentalsServiceSearch extends XiFundamentalsWsdlClass
{
	/**
	 * Method to call SearchFundamentals
	 * Meta informations :
	 * 	- documentation : Search fundamental names and description
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeSearchFundamentals::getPattern()
	 * @param XiFundamentalsTypeSearchFundamentals SearchFundamentals
	 * @return XiFundamentalsTypeSearchFundamentalsResponse
	 */
	public function SearchFundamentals(XiFundamentalsTypeSearchFundamentals $_XiFundamentalsTypeSearchFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchFundamentals(array('Pattern'=>$_XiFundamentalsTypeSearchFundamentals->getPattern())));
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
	 * @return XiFundamentalsTypeSearchFundamentalsResponse
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