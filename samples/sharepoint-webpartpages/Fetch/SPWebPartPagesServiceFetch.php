<?php
/**
 * Class file for SPWebPartPagesServiceFetch
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceFetch
 * @date 06/07/2012
 */
class SPWebPartPagesServiceFetch extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call FetchLegalWorkflowActions
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @param SPWebPartPagesTypeFetchLegalWorkflowActions FetchLegalWorkflowActions
	 * @return SPWebPartPagesTypeFetchLegalWorkflowActionsResponse
	 */
	public function FetchLegalWorkflowActions(SPWebPartPagesTypeFetchLegalWorkflowActions $_SPWebPartPagesTypeFetchLegalWorkflowActions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FetchLegalWorkflowActions(array()));
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
	 * @return SPWebPartPagesTypeFetchLegalWorkflowActionsResponse
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