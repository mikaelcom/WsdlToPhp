<?php
/**
 * Class file for SPWebPartPagesServiceAssociate
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceAssociate
 * @date 06/07/2012
 */
class SPWebPartPagesServiceAssociate extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call AssociateWorkflowMarkup
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeAssociateWorkflowMarkup::getConfigUrl()
	 * @uses SPWebPartPagesTypeAssociateWorkflowMarkup::getConfigVersion()
	 * @param SPWebPartPagesTypeAssociateWorkflowMarkup AssociateWorkflowMarkup
	 * @return SPWebPartPagesTypeAssociateWorkflowMarkupResponse
	 */
	public function AssociateWorkflowMarkup(SPWebPartPagesTypeAssociateWorkflowMarkup $_SPWebPartPagesTypeAssociateWorkflowMarkup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AssociateWorkflowMarkup(array('configUrl'=>$_SPWebPartPagesTypeAssociateWorkflowMarkup->getConfigUrl(),'configVersion'=>$_SPWebPartPagesTypeAssociateWorkflowMarkup->getConfigVersion())));
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
	 * @return SPWebPartPagesTypeAssociateWorkflowMarkupResponse
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