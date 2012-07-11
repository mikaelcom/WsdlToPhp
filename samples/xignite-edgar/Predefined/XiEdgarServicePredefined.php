<?php
/**
 * Class file for XiEdgarServicePredefined
 * @date 08/07/2012
 */
/**
 * Class XiEdgarServicePredefined
 * @date 08/07/2012
 */
class XiEdgarServicePredefined extends XiEdgarWsdlClass
{
	/**
	 * Method to call PredefinedQueryFilings
	 * Meta informations :
	 * 	- documentation : Provide fast query of filing information to all filing data for a company.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypePredefinedQueryFilings::getIdentifier()
	 * @uses XiEdgarTypePredefinedQueryFilings::getIdentifierType()
	 * @uses XiEdgarTypePredefinedQueryFilings::getPredefinedQueryType()
	 * @uses XiEdgarTypePredefinedQueryFilings::getFromDate()
	 * @uses XiEdgarTypePredefinedQueryFilings::getToDate()
	 * @param XiEdgarTypePredefinedQueryFilings PredefinedQueryFilings
	 * @return XiEdgarTypePredefinedQueryFilingsResponse
	 */
	public function PredefinedQueryFilings(XiEdgarTypePredefinedQueryFilings $_XiEdgarTypePredefinedQueryFilings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PredefinedQueryFilings(array('Identifier'=>$_XiEdgarTypePredefinedQueryFilings->getIdentifier(),'IdentifierType'=>$_XiEdgarTypePredefinedQueryFilings->getIdentifierType(),'PredefinedQueryType'=>$_XiEdgarTypePredefinedQueryFilings->getPredefinedQueryType(),'FromDate'=>$_XiEdgarTypePredefinedQueryFilings->getFromDate(),'ToDate'=>$_XiEdgarTypePredefinedQueryFilings->getToDate())));
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
	 * @return XiEdgarTypePredefinedQueryFilingsResponse
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