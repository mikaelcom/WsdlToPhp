<?php
/**
 * Class file for XiIndexComponentsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsServiceGet
 * @date 08/07/2012
 */
class XiIndexComponentsServiceGet extends XiIndexComponentsWsdlClass
{
	/**
	 * Method to call GetIndexComponents
	 * Meta informations :
	 * 	- documentation : Returns the components, or the constituants of an index.
	 * @uses XiIndexComponentsWsdlClass::getSoapClient()
	 * @uses XiIndexComponentsWsdlClass::setResult()
	 * @uses XiIndexComponentsWsdlClass::getResult()
	 * @uses XiIndexComponentsWsdlClass::saveLastError()
	 * @uses XiIndexComponentsTypeGetIndexComponents::getIdentifier()
	 * @uses XiIndexComponentsTypeGetIndexComponents::getIdentifierType()
	 * @param XiIndexComponentsTypeGetIndexComponents GetIndexComponents
	 * @return XiIndexComponentsTypeGetIndexComponentsResponse
	 */
	public function GetIndexComponents(XiIndexComponentsTypeGetIndexComponents $_XiIndexComponentsTypeGetIndexComponents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIndexComponents(array('Identifier'=>$_XiIndexComponentsTypeGetIndexComponents->getIdentifier(),'IdentifierType'=>$_XiIndexComponentsTypeGetIndexComponents->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPricedIndexComponents
	 * Meta informations :
	 * 	- documentation : Returns the priced components, or the constituants of an index.
	 * @uses XiIndexComponentsWsdlClass::getSoapClient()
	 * @uses XiIndexComponentsWsdlClass::setResult()
	 * @uses XiIndexComponentsWsdlClass::getResult()
	 * @uses XiIndexComponentsWsdlClass::saveLastError()
	 * @uses XiIndexComponentsTypeGetPricedIndexComponents::getIdentifier()
	 * @uses XiIndexComponentsTypeGetPricedIndexComponents::getIdentifierType()
	 * @uses XiIndexComponentsTypeGetPricedIndexComponents::getAsOfDate()
	 * @param XiIndexComponentsTypeGetPricedIndexComponents GetPricedIndexComponents
	 * @return XiIndexComponentsTypeGetPricedIndexComponentsResponse
	 */
	public function GetPricedIndexComponents(XiIndexComponentsTypeGetPricedIndexComponents $_XiIndexComponentsTypeGetPricedIndexComponents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPricedIndexComponents(array('Identifier'=>$_XiIndexComponentsTypeGetPricedIndexComponents->getIdentifier(),'IdentifierType'=>$_XiIndexComponentsTypeGetPricedIndexComponents->getIdentifierType(),'AsOfDate'=>$_XiIndexComponentsTypeGetPricedIndexComponents->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPricedIndexComponentsSubset
	 * Meta informations :
	 * 	- documentation : Returns a subset of the priced components, or the constituants of an index.
	 * @uses XiIndexComponentsWsdlClass::getSoapClient()
	 * @uses XiIndexComponentsWsdlClass::setResult()
	 * @uses XiIndexComponentsWsdlClass::getResult()
	 * @uses XiIndexComponentsWsdlClass::saveLastError()
	 * @uses XiIndexComponentsTypeGetPricedIndexComponentsSubset::getIdentifier()
	 * @uses XiIndexComponentsTypeGetPricedIndexComponentsSubset::getIdentifierType()
	 * @uses XiIndexComponentsTypeGetPricedIndexComponentsSubset::getAsOfDate()
	 * @uses XiIndexComponentsTypeGetPricedIndexComponentsSubset::getStartIndex()
	 * @uses XiIndexComponentsTypeGetPricedIndexComponentsSubset::getEndIndex()
	 * @param XiIndexComponentsTypeGetPricedIndexComponentsSubset GetPricedIndexComponentsSubset
	 * @return XiIndexComponentsTypeGetPricedIndexComponentsSubsetResponse
	 */
	public function GetPricedIndexComponentsSubset(XiIndexComponentsTypeGetPricedIndexComponentsSubset $_XiIndexComponentsTypeGetPricedIndexComponentsSubset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPricedIndexComponentsSubset(array('Identifier'=>$_XiIndexComponentsTypeGetPricedIndexComponentsSubset->getIdentifier(),'IdentifierType'=>$_XiIndexComponentsTypeGetPricedIndexComponentsSubset->getIdentifierType(),'AsOfDate'=>$_XiIndexComponentsTypeGetPricedIndexComponentsSubset->getAsOfDate(),'StartIndex'=>$_XiIndexComponentsTypeGetPricedIndexComponentsSubset->getStartIndex(),'EndIndex'=>$_XiIndexComponentsTypeGetPricedIndexComponentsSubset->getEndIndex())));
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
	 * @return XiIndexComponentsTypeGetPricedIndexComponentsSubsetResponse
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