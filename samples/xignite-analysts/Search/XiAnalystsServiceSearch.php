<?php
/**
 * Class file for XiAnalystsServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsServiceSearch
 * @date 08/07/2012
 */
class XiAnalystsServiceSearch extends XiAnalystsWsdlClass
{
	/**
	 * Method to call SearchResearchFields
	 * Meta informations :
	 * 	- documentation : Search Research Field names and description
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeSearchResearchFields::getPattern()
	 * @param XiAnalystsTypeSearchResearchFields SearchResearchFields
	 * @return XiAnalystsTypeSearchResearchFieldsResponse
	 */
	public function SearchResearchFields(XiAnalystsTypeSearchResearchFields $_XiAnalystsTypeSearchResearchFields)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchResearchFields(array('pattern'=>$_XiAnalystsTypeSearchResearchFields->getPattern())));
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
	 * @return XiAnalystsTypeSearchResearchFieldsResponse
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