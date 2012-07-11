<?php
/**
 * Class file for AmazonWebServicesServiceActor
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceActor
 * @date 10/07/2012
 */
class AmazonWebServicesServiceActor extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call ActorSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeActorRequest::getActor()
	 * @uses AmazonWebServicesTypeActorRequest::getPage()
	 * @uses AmazonWebServicesTypeActorRequest::getMode()
	 * @uses AmazonWebServicesTypeActorRequest::getTag()
	 * @uses AmazonWebServicesTypeActorRequest::getType()
	 * @uses AmazonWebServicesTypeActorRequest::getDevtag()
	 * @uses AmazonWebServicesTypeActorRequest::getSort()
	 * @uses AmazonWebServicesTypeActorRequest::getVariations()
	 * @uses AmazonWebServicesTypeActorRequest::getLocale()
	 * @param AmazonWebServicesTypeActorRequest ActorRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function ActorSearchRequest(AmazonWebServicesTypeActorRequest $_AmazonWebServicesTypeActorRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ActorSearchRequest(array('actor'=>$_AmazonWebServicesTypeActorRequest->getActor(),'page'=>$_AmazonWebServicesTypeActorRequest->getPage(),'mode'=>$_AmazonWebServicesTypeActorRequest->getMode(),'tag'=>$_AmazonWebServicesTypeActorRequest->getTag(),'type'=>$_AmazonWebServicesTypeActorRequest->getType(),'devtag'=>$_AmazonWebServicesTypeActorRequest->getDevtag(),'sort'=>$_AmazonWebServicesTypeActorRequest->getSort(),'variations'=>$_AmazonWebServicesTypeActorRequest->getVariations(),'locale'=>$_AmazonWebServicesTypeActorRequest->getLocale())));
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
	 * @return AmazonWebServicesTypeProductInfo
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