<?php
/**
 * Class file for AmazonSimpleDBServicePut
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBServicePut
 * @date 10/07/2012
 */
class AmazonSimpleDBServicePut extends AmazonSimpleDBWsdlClass
{
	/**
	 * Method to call PutAttributes
	 * Meta informations :
	 * 	- documentation : The PutAttributes operation creates or replaces attributes within an item. You specify new attributes using a combination of the Attribute.X.Name and Attribute.X.Value parameters. You specify the first attribute by the parameters Attribute.0.Name and Attribute.0.Value, the second attribute by the parameters Attribute.1.Name and Attribute.1.Value, and so on. Attributes are uniquely identified within an item by their name/value combination. For example, a single item can have the attributes { "first_name", "first_value" } and { "first_name", second_value" }. However, it cannot have two attribute instances where both the Attribute.X.Name and Attribute.X.Value are the same. Optionally, the requestor can supply the Replace parameter for each individual value. Setting this value to true will cause the new attribute value to replace the existing attribute value(s). For example, if an item has the attributes { 'a', '1' }, { 'b', '2'} and { 'b', '3' } and the requestor does a PutAttributes of { 'b', '4' } with the Replace parameter set to true, the final attributes of the item will be { 'a', '1' } and { 'b', '4' }, replacing the previous values of the 'b' attribute with the new value.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypePutAttributes::getDomainName()
	 * @uses AmazonSimpleDBTypePutAttributes::getItemName()
	 * @uses AmazonSimpleDBTypePutAttributes::getAttribute()
	 * @uses AmazonSimpleDBTypePutAttributes::getExpected()
	 * @param AmazonSimpleDBTypePutAttributes PutAttributes
	 * @return AmazonSimpleDBTypePutAttributesResponse
	 */
	public function PutAttributes(AmazonSimpleDBTypePutAttributes $_AmazonSimpleDBTypePutAttributes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PutAttributes(array('DomainName'=>$_AmazonSimpleDBTypePutAttributes->getDomainName(),'ItemName'=>$_AmazonSimpleDBTypePutAttributes->getItemName(),'Attribute'=>$_AmazonSimpleDBTypePutAttributes->getAttribute(),'Expected'=>$_AmazonSimpleDBTypePutAttributes->getExpected())));
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
	 * @return AmazonSimpleDBTypePutAttributesResponse
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