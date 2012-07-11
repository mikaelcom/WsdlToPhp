<?php
/**
 * Class file for AmazonSimpleDBServiceSelect
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBServiceSelect
 * @date 10/07/2012
 */
class AmazonSimpleDBServiceSelect extends AmazonSimpleDBWsdlClass
{
	/**
	 * Method to call Select
	 * Meta informations :
	 * 	- documentation : The Select operation returns a set of item names and associate attributes that match the query expression. Select operations that run longer than 5 seconds will likely time-out and return a time-out error response.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypeSelect::getSelectExpression()
	 * @uses AmazonSimpleDBTypeSelect::getNextToken()
	 * @uses AmazonSimpleDBTypeSelect::getConsistentRead()
	 * @param AmazonSimpleDBTypeSelect Select
	 * @return AmazonSimpleDBTypeSelectResponse
	 */
	public function Select(AmazonSimpleDBTypeSelect $_AmazonSimpleDBTypeSelect)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Select(array('SelectExpression'=>$_AmazonSimpleDBTypeSelect->getSelectExpression(),'NextToken'=>$_AmazonSimpleDBTypeSelect->getNextToken(),'ConsistentRead'=>$_AmazonSimpleDBTypeSelect->getConsistentRead())));
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
	 * @return AmazonSimpleDBTypeSelectResponse
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