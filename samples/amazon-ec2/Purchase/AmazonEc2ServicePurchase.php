<?php
/**
 * Class file for AmazonEc2ServicePurchase
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServicePurchase
 * @date 10/07/2012
 */
class AmazonEc2ServicePurchase extends AmazonEc2WsdlClass
{
	/**
	 * Method to call PurchaseReservedInstancesOffering
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypePurchaseReservedInstancesOfferingType::getReservedInstancesOfferingId()
	 * @uses AmazonEc2TypePurchaseReservedInstancesOfferingType::getInstanceCount()
	 * @param AmazonEc2TypePurchaseReservedInstancesOfferingType PurchaseReservedInstancesOfferingType
	 * @return AmazonEc2TypePurchaseReservedInstancesOfferingResponseType
	 */
	public function PurchaseReservedInstancesOffering(AmazonEc2TypePurchaseReservedInstancesOfferingType $_AmazonEc2TypePurchaseReservedInstancesOfferingType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PurchaseReservedInstancesOffering(array('reservedInstancesOfferingId'=>$_AmazonEc2TypePurchaseReservedInstancesOfferingType->getReservedInstancesOfferingId(),'instanceCount'=>$_AmazonEc2TypePurchaseReservedInstancesOfferingType->getInstanceCount())));
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
	 * @return AmazonEc2TypePurchaseReservedInstancesOfferingResponseType
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