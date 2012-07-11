<?php
/**
 * Class file for XiFundHoldingsServiceLookup
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsServiceLookup
 * @date 08/07/2012
 */
class XiFundHoldingsServiceLookup extends XiFundHoldingsWsdlClass
{
	/**
	 * Method to call LookupFund
	 * Meta informations :
	 * 	- documentation : Lookup a fund by name.
	 * @uses XiFundHoldingsWsdlClass::getSoapClient()
	 * @uses XiFundHoldingsWsdlClass::setResult()
	 * @uses XiFundHoldingsWsdlClass::getResult()
	 * @uses XiFundHoldingsWsdlClass::saveLastError()
	 * @uses XiFundHoldingsTypeLookupFund::getName()
	 * @param XiFundHoldingsTypeLookupFund LookupFund
	 * @return XiFundHoldingsTypeLookupFundResponse
	 */
	public function LookupFund(XiFundHoldingsTypeLookupFund $_XiFundHoldingsTypeLookupFund)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupFund(array('Name'=>$_XiFundHoldingsTypeLookupFund->getName())));
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
	 * @return XiFundHoldingsTypeLookupFundResponse
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