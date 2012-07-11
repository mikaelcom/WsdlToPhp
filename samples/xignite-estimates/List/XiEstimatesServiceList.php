<?php
/**
 * Class file for XiEstimatesServiceList
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesServiceList
 * @date 08/07/2012
 */
class XiEstimatesServiceList extends XiEstimatesWsdlClass
{
	/**
	 * Method to call ListResearchFields
	 * Meta informations :
	 * 	- documentation : Lists all the Research Fields that are supported by this service.
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @param XiEstimatesTypeListResearchFields ListResearchFields
	 * @return XiEstimatesTypeListResearchFieldsResponse
	 */
	public function ListResearchFields(XiEstimatesTypeListResearchFields $_XiEstimatesTypeListResearchFields)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListResearchFields(array()));
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
	 * @return XiEstimatesTypeListResearchFieldsResponse
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