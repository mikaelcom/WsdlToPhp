<?php
/**
 * Class file for SPWebPartPagesServiceValidate
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceValidate
 * @date 06/07/2012
 */
class SPWebPartPagesServiceValidate extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call ValidateWorkflowMarkupAndCreateSupportObjects
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects::getWorkflowMarkupText()
	 * @uses SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects::getRulesText()
	 * @uses SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects::getConfigBlob()
	 * @uses SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects::getFlag()
	 * @param SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects ValidateWorkflowMarkupAndCreateSupportObjects
	 * @return SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjectsResponse
	 */
	public function ValidateWorkflowMarkupAndCreateSupportObjects(SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects $_SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateWorkflowMarkupAndCreateSupportObjects(array('workflowMarkupText'=>$_SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects->getWorkflowMarkupText(),'rulesText'=>$_SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects->getRulesText(),'configBlob'=>$_SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects->getConfigBlob(),'flag'=>$_SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects->getFlag())));
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
	 * @return SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjectsResponse
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