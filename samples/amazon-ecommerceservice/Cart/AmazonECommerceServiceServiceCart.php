<?php
/**
 * Class file for AmazonECommerceServiceServiceCart
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceServiceCart
 * @date 10/07/2012
 */
class AmazonECommerceServiceServiceCart extends AmazonECommerceServiceWsdlClass
{
	/**
	 * Method to call CartGet
	 * @uses AmazonECommerceServiceWsdlClass::getSoapClient()
	 * @uses AmazonECommerceServiceWsdlClass::setResult()
	 * @uses AmazonECommerceServiceWsdlClass::getResult()
	 * @uses AmazonECommerceServiceWsdlClass::saveLastError()
	 * @uses AmazonECommerceServiceTypeCartGet::getMarketplaceDomain()
	 * @uses AmazonECommerceServiceTypeCartGet::getAWSAccessKeyId()
	 * @uses AmazonECommerceServiceTypeCartGet::getAssociateTag()
	 * @uses AmazonECommerceServiceTypeCartGet::getValidate()
	 * @uses AmazonECommerceServiceTypeCartGet::getXMLEscaping()
	 * @uses AmazonECommerceServiceTypeCartGet::getShared()
	 * @uses AmazonECommerceServiceTypeCartGet::getRequest()
	 * @param AmazonECommerceServiceTypeCartGet CartGet
	 * @return AmazonECommerceServiceTypeCartGetResponse
	 */
	public function CartGet(AmazonECommerceServiceTypeCartGet $_AmazonECommerceServiceTypeCartGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CartGet(array('MarketplaceDomain'=>$_AmazonECommerceServiceTypeCartGet->getMarketplaceDomain(),'AWSAccessKeyId'=>$_AmazonECommerceServiceTypeCartGet->getAWSAccessKeyId(),'AssociateTag'=>$_AmazonECommerceServiceTypeCartGet->getAssociateTag(),'Validate'=>$_AmazonECommerceServiceTypeCartGet->getValidate(),'XMLEscaping'=>$_AmazonECommerceServiceTypeCartGet->getXMLEscaping(),'Shared'=>$_AmazonECommerceServiceTypeCartGet->getShared(),'Request'=>$_AmazonECommerceServiceTypeCartGet->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CartCreate
	 * @uses AmazonECommerceServiceWsdlClass::getSoapClient()
	 * @uses AmazonECommerceServiceWsdlClass::setResult()
	 * @uses AmazonECommerceServiceWsdlClass::getResult()
	 * @uses AmazonECommerceServiceWsdlClass::saveLastError()
	 * @uses AmazonECommerceServiceTypeCartCreate::getMarketplaceDomain()
	 * @uses AmazonECommerceServiceTypeCartCreate::getAWSAccessKeyId()
	 * @uses AmazonECommerceServiceTypeCartCreate::getAssociateTag()
	 * @uses AmazonECommerceServiceTypeCartCreate::getValidate()
	 * @uses AmazonECommerceServiceTypeCartCreate::getXMLEscaping()
	 * @uses AmazonECommerceServiceTypeCartCreate::getShared()
	 * @uses AmazonECommerceServiceTypeCartCreate::getRequest()
	 * @param AmazonECommerceServiceTypeCartCreate CartCreate
	 * @return AmazonECommerceServiceTypeCartCreateResponse
	 */
	public function CartCreate(AmazonECommerceServiceTypeCartCreate $_AmazonECommerceServiceTypeCartCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CartCreate(array('MarketplaceDomain'=>$_AmazonECommerceServiceTypeCartCreate->getMarketplaceDomain(),'AWSAccessKeyId'=>$_AmazonECommerceServiceTypeCartCreate->getAWSAccessKeyId(),'AssociateTag'=>$_AmazonECommerceServiceTypeCartCreate->getAssociateTag(),'Validate'=>$_AmazonECommerceServiceTypeCartCreate->getValidate(),'XMLEscaping'=>$_AmazonECommerceServiceTypeCartCreate->getXMLEscaping(),'Shared'=>$_AmazonECommerceServiceTypeCartCreate->getShared(),'Request'=>$_AmazonECommerceServiceTypeCartCreate->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CartAdd
	 * @uses AmazonECommerceServiceWsdlClass::getSoapClient()
	 * @uses AmazonECommerceServiceWsdlClass::setResult()
	 * @uses AmazonECommerceServiceWsdlClass::getResult()
	 * @uses AmazonECommerceServiceWsdlClass::saveLastError()
	 * @uses AmazonECommerceServiceTypeCartAdd::getMarketplaceDomain()
	 * @uses AmazonECommerceServiceTypeCartAdd::getAWSAccessKeyId()
	 * @uses AmazonECommerceServiceTypeCartAdd::getAssociateTag()
	 * @uses AmazonECommerceServiceTypeCartAdd::getValidate()
	 * @uses AmazonECommerceServiceTypeCartAdd::getXMLEscaping()
	 * @uses AmazonECommerceServiceTypeCartAdd::getShared()
	 * @uses AmazonECommerceServiceTypeCartAdd::getRequest()
	 * @param AmazonECommerceServiceTypeCartAdd CartAdd
	 * @return AmazonECommerceServiceTypeCartAddResponse
	 */
	public function CartAdd(AmazonECommerceServiceTypeCartAdd $_AmazonECommerceServiceTypeCartAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CartAdd(array('MarketplaceDomain'=>$_AmazonECommerceServiceTypeCartAdd->getMarketplaceDomain(),'AWSAccessKeyId'=>$_AmazonECommerceServiceTypeCartAdd->getAWSAccessKeyId(),'AssociateTag'=>$_AmazonECommerceServiceTypeCartAdd->getAssociateTag(),'Validate'=>$_AmazonECommerceServiceTypeCartAdd->getValidate(),'XMLEscaping'=>$_AmazonECommerceServiceTypeCartAdd->getXMLEscaping(),'Shared'=>$_AmazonECommerceServiceTypeCartAdd->getShared(),'Request'=>$_AmazonECommerceServiceTypeCartAdd->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CartModify
	 * @uses AmazonECommerceServiceWsdlClass::getSoapClient()
	 * @uses AmazonECommerceServiceWsdlClass::setResult()
	 * @uses AmazonECommerceServiceWsdlClass::getResult()
	 * @uses AmazonECommerceServiceWsdlClass::saveLastError()
	 * @uses AmazonECommerceServiceTypeCartModify::getMarketplaceDomain()
	 * @uses AmazonECommerceServiceTypeCartModify::getAWSAccessKeyId()
	 * @uses AmazonECommerceServiceTypeCartModify::getAssociateTag()
	 * @uses AmazonECommerceServiceTypeCartModify::getValidate()
	 * @uses AmazonECommerceServiceTypeCartModify::getXMLEscaping()
	 * @uses AmazonECommerceServiceTypeCartModify::getShared()
	 * @uses AmazonECommerceServiceTypeCartModify::getRequest()
	 * @param AmazonECommerceServiceTypeCartModify CartModify
	 * @return AmazonECommerceServiceTypeCartModifyResponse
	 */
	public function CartModify(AmazonECommerceServiceTypeCartModify $_AmazonECommerceServiceTypeCartModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CartModify(array('MarketplaceDomain'=>$_AmazonECommerceServiceTypeCartModify->getMarketplaceDomain(),'AWSAccessKeyId'=>$_AmazonECommerceServiceTypeCartModify->getAWSAccessKeyId(),'AssociateTag'=>$_AmazonECommerceServiceTypeCartModify->getAssociateTag(),'Validate'=>$_AmazonECommerceServiceTypeCartModify->getValidate(),'XMLEscaping'=>$_AmazonECommerceServiceTypeCartModify->getXMLEscaping(),'Shared'=>$_AmazonECommerceServiceTypeCartModify->getShared(),'Request'=>$_AmazonECommerceServiceTypeCartModify->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CartClear
	 * @uses AmazonECommerceServiceWsdlClass::getSoapClient()
	 * @uses AmazonECommerceServiceWsdlClass::setResult()
	 * @uses AmazonECommerceServiceWsdlClass::getResult()
	 * @uses AmazonECommerceServiceWsdlClass::saveLastError()
	 * @uses AmazonECommerceServiceTypeCartClear::getMarketplaceDomain()
	 * @uses AmazonECommerceServiceTypeCartClear::getAWSAccessKeyId()
	 * @uses AmazonECommerceServiceTypeCartClear::getAssociateTag()
	 * @uses AmazonECommerceServiceTypeCartClear::getValidate()
	 * @uses AmazonECommerceServiceTypeCartClear::getXMLEscaping()
	 * @uses AmazonECommerceServiceTypeCartClear::getShared()
	 * @uses AmazonECommerceServiceTypeCartClear::getRequest()
	 * @param AmazonECommerceServiceTypeCartClear CartClear
	 * @return AmazonECommerceServiceTypeCartClearResponse
	 */
	public function CartClear(AmazonECommerceServiceTypeCartClear $_AmazonECommerceServiceTypeCartClear)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CartClear(array('MarketplaceDomain'=>$_AmazonECommerceServiceTypeCartClear->getMarketplaceDomain(),'AWSAccessKeyId'=>$_AmazonECommerceServiceTypeCartClear->getAWSAccessKeyId(),'AssociateTag'=>$_AmazonECommerceServiceTypeCartClear->getAssociateTag(),'Validate'=>$_AmazonECommerceServiceTypeCartClear->getValidate(),'XMLEscaping'=>$_AmazonECommerceServiceTypeCartClear->getXMLEscaping(),'Shared'=>$_AmazonECommerceServiceTypeCartClear->getShared(),'Request'=>$_AmazonECommerceServiceTypeCartClear->getRequest())));
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
	 * @return AmazonECommerceServiceTypeCartClearResponse
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