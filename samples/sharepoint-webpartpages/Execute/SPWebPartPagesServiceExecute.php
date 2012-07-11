<?php
/**
 * Class file for SPWebPartPagesServiceExecute
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceExecute
 * @date 06/07/2012
 */
class SPWebPartPagesServiceExecute extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call ExecuteProxyUpdates
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeExecuteProxyUpdates::getUpdateData()
	 * @param SPWebPartPagesTypeExecuteProxyUpdates ExecuteProxyUpdates
	 * @return SPWebPartPagesTypeExecuteProxyUpdatesResponse
	 */
	public function ExecuteProxyUpdates(SPWebPartPagesTypeExecuteProxyUpdates $_SPWebPartPagesTypeExecuteProxyUpdates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ExecuteProxyUpdates(array('updateData'=>$_SPWebPartPagesTypeExecuteProxyUpdates->getUpdateData())));
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
	 * @return SPWebPartPagesTypeExecuteProxyUpdatesResponse
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