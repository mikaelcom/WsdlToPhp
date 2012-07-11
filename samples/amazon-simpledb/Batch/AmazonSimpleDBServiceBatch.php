<?php
/**
 * Class file for AmazonSimpleDBServiceBatch
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBServiceBatch
 * @date 10/07/2012
 */
class AmazonSimpleDBServiceBatch extends AmazonSimpleDBWsdlClass
{
	/**
	 * Method to call BatchPutAttributes
	 * Meta informations :
	 * 	- documentation : The BatchPutAttributes operation creates or replaces attributes within one or more items. You specify the item name with the Item.X.ItemName parameter. You specify new attributes using a combination of the Item.X.Attribute.Y.Name and Item.X.Attribute.Y.Value parameters. You specify the first attribute for the first item by the parameters Item.0.Attribute.0.Name and Item.0.Attribute.0.Value, the second attribute for the first item by the parameters Item.0.Attribute.1.Name and Item.0.Attribute.1.Value, and so on. Attributes are uniquely identified within an item by their name/value combination. For example, a single item can have the attributes { "first_name", "first_value" } and { "first_name", second_value" }. However, it cannot have two attribute instances where both the Item.X.Attribute.Y.Name and Item.X.Attribute.Y.Value are the same. Optionally, the requestor can supply the Replace parameter for each individual value. Setting this value to true will cause the new attribute value to replace the existing attribute value(s). For example, if an item 'I' has the attributes { 'a', '1' }, { 'b', '2'} and { 'b', '3' } and the requestor does a BacthPutAttributes of {'I', 'b', '4' } with the Replace parameter set to true, the final attributes of the item will be { 'a', '1' } and { 'b', '4' }, replacing the previous values of the 'b' attribute with the new value.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypeBatchPutAttributes::getDomainName()
	 * @uses AmazonSimpleDBTypeBatchPutAttributes::getItem()
	 * @param AmazonSimpleDBTypeBatchPutAttributes BatchPutAttributes
	 * @return AmazonSimpleDBTypeBatchPutAttributesResponse
	 */
	public function BatchPutAttributes(AmazonSimpleDBTypeBatchPutAttributes $_AmazonSimpleDBTypeBatchPutAttributes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BatchPutAttributes(array('DomainName'=>$_AmazonSimpleDBTypeBatchPutAttributes->getDomainName(),'Item'=>$_AmazonSimpleDBTypeBatchPutAttributes->getItem())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call BatchDeleteAttributes
	 * Meta informations :
	 * 	- documentation : Deletes one or more attributes associated with one or more items. If all attributes of an item are deleted, the item is deleted.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypeBatchDeleteAttributes::getDomainName()
	 * @uses AmazonSimpleDBTypeBatchDeleteAttributes::getItem()
	 * @param AmazonSimpleDBTypeBatchDeleteAttributes BatchDeleteAttributes
	 * @return AmazonSimpleDBTypeBatchDeleteAttributesResponse
	 */
	public function BatchDeleteAttributes(AmazonSimpleDBTypeBatchDeleteAttributes $_AmazonSimpleDBTypeBatchDeleteAttributes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BatchDeleteAttributes(array('DomainName'=>$_AmazonSimpleDBTypeBatchDeleteAttributes->getDomainName(),'Item'=>$_AmazonSimpleDBTypeBatchDeleteAttributes->getItem())));
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
	 * @return AmazonSimpleDBTypeBatchDeleteAttributesResponse
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