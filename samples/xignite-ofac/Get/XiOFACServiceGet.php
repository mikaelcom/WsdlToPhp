<?php
/**
 * Class file for XiOFACServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiOFACServiceGet
 * @date 08/07/2012
 */
class XiOFACServiceGet extends XiOFACWsdlClass
{
	/**
	 * Method to call GetCriteria
	 * Meta informations :
	 * 	- documentation : Returns a list of valid search criteria.
	 * @uses XiOFACWsdlClass::getSoapClient()
	 * @uses XiOFACWsdlClass::setResult()
	 * @uses XiOFACWsdlClass::getResult()
	 * @uses XiOFACWsdlClass::saveLastError()
	 * @uses XiOFACTypeGetCriteria::getCriteriaType()
	 * @param XiOFACTypeGetCriteria GetCriteria
	 * @return XiOFACTypeGetCriteriaResponse
	 */
	public function GetCriteria(XiOFACTypeGetCriteria $_XiOFACTypeGetCriteria)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCriteria(array('CriteriaType'=>$_XiOFACTypeGetCriteria->getCriteriaType())));
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
	 * @return XiOFACTypeGetCriteriaResponse
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