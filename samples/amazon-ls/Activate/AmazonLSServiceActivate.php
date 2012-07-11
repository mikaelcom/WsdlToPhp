<?php
/**
 * Class file for AmazonLSServiceActivate
 * @date 10/07/2012
 */
/**
 * Class AmazonLSServiceActivate
 * @date 10/07/2012
 */
class AmazonLSServiceActivate extends AmazonLSWsdlClass
{
	/**
	 * Method to call ActivateDesktopProduct
	 * Meta informations :
	 * 	- documentation : Allows a distributed devpay product to retrieve an HMAC key pair and user token that can be subsequently used for an end user against other AWS services.
	 * @uses AmazonLSWsdlClass::getSoapClient()
	 * @uses AmazonLSWsdlClass::setResult()
	 * @uses AmazonLSWsdlClass::getResult()
	 * @uses AmazonLSWsdlClass::saveLastError()
	 * @uses AmazonLSTypeActivateDesktopProduct::getActivationKey()
	 * @uses AmazonLSTypeActivateDesktopProduct::getProductToken()
	 * @uses AmazonLSTypeActivateDesktopProduct::getTokenExpiration()
	 * @param AmazonLSTypeActivateDesktopProduct ActivateDesktopProduct
	 * @return AmazonLSTypeActivateDesktopProductResponse
	 */
	public function ActivateDesktopProduct(AmazonLSTypeActivateDesktopProduct $_AmazonLSTypeActivateDesktopProduct)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ActivateDesktopProduct(array('ActivationKey'=>$_AmazonLSTypeActivateDesktopProduct->getActivationKey(),'ProductToken'=>$_AmazonLSTypeActivateDesktopProduct->getProductToken(),'TokenExpiration'=>$_AmazonLSTypeActivateDesktopProduct->getTokenExpiration())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ActivateHostedProduct
	 * Meta informations :
	 * 	- documentation : Allows a controlled devpay product to retrieve a user token. Note this is an authenticated request, and as such it must be signed.
	 * @uses AmazonLSWsdlClass::getSoapClient()
	 * @uses AmazonLSWsdlClass::setResult()
	 * @uses AmazonLSWsdlClass::getResult()
	 * @uses AmazonLSWsdlClass::saveLastError()
	 * @uses AmazonLSTypeActivateHostedProduct::getActivationKey()
	 * @uses AmazonLSTypeActivateHostedProduct::getProductToken()
	 * @uses AmazonLSTypeActivateHostedProduct::getTokenExpiration()
	 * @param AmazonLSTypeActivateHostedProduct ActivateHostedProduct
	 * @return AmazonLSTypeActivateHostedProductResponse
	 */
	public function ActivateHostedProduct(AmazonLSTypeActivateHostedProduct $_AmazonLSTypeActivateHostedProduct)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ActivateHostedProduct(array('ActivationKey'=>$_AmazonLSTypeActivateHostedProduct->getActivationKey(),'ProductToken'=>$_AmazonLSTypeActivateHostedProduct->getProductToken(),'TokenExpiration'=>$_AmazonLSTypeActivateHostedProduct->getTokenExpiration())));
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
	 * @return AmazonLSTypeActivateHostedProductResponse
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