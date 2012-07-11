<?php
/**
 * Class file for XiEstimatesServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesServiceSearch
 * @date 08/07/2012
 */
class XiEstimatesServiceSearch extends XiEstimatesWsdlClass
{
	/**
	 * Method to call SearchResearchFields
	 * Meta informations :
	 * 	- documentation : Search Research Field names and description
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeSearchResearchFields::getPattern()
	 * @param XiEstimatesTypeSearchResearchFields SearchResearchFields
	 * @return XiEstimatesTypeSearchResearchFieldsResponse
	 */
	public function SearchResearchFields(XiEstimatesTypeSearchResearchFields $_XiEstimatesTypeSearchResearchFields)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchResearchFields(array('pattern'=>$_XiEstimatesTypeSearchResearchFields->getPattern())));
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
	 * @return XiEstimatesTypeSearchResearchFieldsResponse
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