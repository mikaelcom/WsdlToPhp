<?php
/**
 * Class file for XiAnalystsServiceList
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsServiceList
 * @date 08/07/2012
 */
class XiAnalystsServiceList extends XiAnalystsWsdlClass
{
	/**
	 * Method to call ListResearchFields
	 * Meta informations :
	 * 	- documentation : Lists all the Research Fields that are supported by this service.
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @param XiAnalystsTypeListResearchFields ListResearchFields
	 * @return XiAnalystsTypeListResearchFieldsResponse
	 */
	public function ListResearchFields(XiAnalystsTypeListResearchFields $_XiAnalystsTypeListResearchFields)
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
	 * @return XiAnalystsTypeListResearchFieldsResponse
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