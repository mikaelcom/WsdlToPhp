<?php
/**
 * Class file for XiEdgarServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiEdgarServiceSearch
 * @date 08/07/2012
 */
class XiEdgarServiceSearch extends XiEdgarWsdlClass
{
	/**
	 * Method to call SearchFilings
	 * Meta informations :
	 * 	- documentation : Search filings by company. This operation directly queries the SEC database and returns detailed information about the company.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeSearchFilings::getIdentifier()
	 * @uses XiEdgarTypeSearchFilings::getIdentifierType()
	 * @uses XiEdgarTypeSearchFilings::getForm()
	 * @uses XiEdgarTypeSearchFilings::getOwnershipForms()
	 * @uses XiEdgarTypeSearchFilings::getPriorToDate()
	 * @uses XiEdgarTypeSearchFilings::getOutputType()
	 * @param XiEdgarTypeSearchFilings SearchFilings
	 * @return XiEdgarTypeSearchFilingsResponse
	 */
	public function SearchFilings(XiEdgarTypeSearchFilings $_XiEdgarTypeSearchFilings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchFilings(array('Identifier'=>$_XiEdgarTypeSearchFilings->getIdentifier(),'IdentifierType'=>$_XiEdgarTypeSearchFilings->getIdentifierType(),'Form'=>$_XiEdgarTypeSearchFilings->getForm(),'OwnershipForms'=>$_XiEdgarTypeSearchFilings->getOwnershipForms(),'PriorToDate'=>$_XiEdgarTypeSearchFilings->getPriorToDate(),'OutputType'=>$_XiEdgarTypeSearchFilings->getOutputType())));
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
	 * @return XiEdgarTypeSearchFilingsResponse
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