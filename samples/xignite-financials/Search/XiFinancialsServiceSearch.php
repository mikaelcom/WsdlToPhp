<?php
/**
 * Class file for XiFinancialsServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsServiceSearch
 * @date 08/07/2012
 */
class XiFinancialsServiceSearch extends XiFinancialsWsdlClass
{
	/**
	 * Method to call SearchFinancials
	 * Meta informations :
	 * 	- documentation : Search fundamental names and description
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeSearchFinancials::getPattern()
	 * @param XiFinancialsTypeSearchFinancials SearchFinancials
	 * @return XiFinancialsTypeSearchFinancialsResponse
	 */
	public function SearchFinancials(XiFinancialsTypeSearchFinancials $_XiFinancialsTypeSearchFinancials)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchFinancials(array('Pattern'=>$_XiFinancialsTypeSearchFinancials->getPattern())));
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
	 * @return XiFinancialsTypeSearchFinancialsResponse
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