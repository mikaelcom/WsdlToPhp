<?php
/**
 * Class file for YMailServiceBatch
 * @date 02/07/2012
 */
/**
 * Class YMailServiceBatch
 * @date 02/07/2012
 */
class YMailServiceBatch extends YMailWsdlClass
{
	/**
	 * Method to call BatchExecute
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeBatchExecute::getCall()
	 * @param YMailTypeBatchExecute BatchExecute
	 * @return YMailTypeBatchExecuteResponse
	 */
	public function BatchExecute(YMailTypeBatchExecute $_YMailTypeBatchExecute)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BatchExecute(array('call'=>$_YMailTypeBatchExecute->getCall())));
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
	 * @return YMailTypeBatchExecuteResponse
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