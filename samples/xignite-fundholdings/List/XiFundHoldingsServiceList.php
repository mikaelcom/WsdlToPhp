<?php
/**
 * Class file for XiFundHoldingsServiceList
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsServiceList
 * @date 08/07/2012
 */
class XiFundHoldingsServiceList extends XiFundHoldingsWsdlClass
{
	/**
	 * Method to call ListFunds
	 * Meta informations :
	 * 	- documentation : Lists all funds by symbol range.
	 * @uses XiFundHoldingsWsdlClass::getSoapClient()
	 * @uses XiFundHoldingsWsdlClass::setResult()
	 * @uses XiFundHoldingsWsdlClass::getResult()
	 * @uses XiFundHoldingsWsdlClass::saveLastError()
	 * @uses XiFundHoldingsTypeListFunds::getStartSymbol()
	 * @uses XiFundHoldingsTypeListFunds::getEndSymbol()
	 * @param XiFundHoldingsTypeListFunds ListFunds
	 * @return XiFundHoldingsTypeListFundsResponse
	 */
	public function ListFunds(XiFundHoldingsTypeListFunds $_XiFundHoldingsTypeListFunds)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFunds(array('StartSymbol'=>$_XiFundHoldingsTypeListFunds->getStartSymbol(),'EndSymbol'=>$_XiFundHoldingsTypeListFunds->getEndSymbol())));
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
	 * @return XiFundHoldingsTypeListFundsResponse
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