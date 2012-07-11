<?php
/**
 * Class file for SPSearchServiceStatus
 * @date 06/07/2012
 */
/**
 * Class SPSearchServiceStatus
 * @date 06/07/2012
 */
class SPSearchServiceStatus extends SPSearchWsdlClass
{
	/**
	 * Method to call Status
	 * @uses SPSearchWsdlClass::getSoapClient()
	 * @uses SPSearchWsdlClass::setResult()
	 * @uses SPSearchWsdlClass::getResult()
	 * @uses SPSearchWsdlClass::saveLastError()
	 * @param SPSearchTypeStatus Status
	 * @return SPSearchTypeStatusResponse
	 */
	public function Status(SPSearchTypeStatus $_SPSearchTypeStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Status(array()));
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
	 * @return SPSearchTypeStatusResponse
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