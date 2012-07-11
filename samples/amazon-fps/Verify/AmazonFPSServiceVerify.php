<?php
/**
 * Class file for AmazonFPSServiceVerify
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServiceVerify
 * @date 10/07/2012
 */
class AmazonFPSServiceVerify extends AmazonFPSWsdlClass
{
	/**
	 * Method to call VerifySignature
	 * Meta informations :
	 * 	- documentation : Verify the signature that FPS sent in IPN or callback urls.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeVerifySignature::getUrlEndPoint()
	 * @uses AmazonFPSTypeVerifySignature::getHttpParameters()
	 * @param AmazonFPSTypeVerifySignature VerifySignature
	 * @return AmazonFPSTypeVerifySignatureResponse
	 */
	public function VerifySignature(AmazonFPSTypeVerifySignature $_AmazonFPSTypeVerifySignature)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifySignature(array('UrlEndPoint'=>$_AmazonFPSTypeVerifySignature->getUrlEndPoint(),'HttpParameters'=>$_AmazonFPSTypeVerifySignature->getHttpParameters())));
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
	 * @return AmazonFPSTypeVerifySignatureResponse
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