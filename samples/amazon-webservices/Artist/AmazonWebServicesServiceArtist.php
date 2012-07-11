<?php
/**
 * Class file for AmazonWebServicesServiceArtist
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceArtist
 * @date 10/07/2012
 */
class AmazonWebServicesServiceArtist extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call ArtistSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeArtistRequest::getArtist()
	 * @uses AmazonWebServicesTypeArtistRequest::getPage()
	 * @uses AmazonWebServicesTypeArtistRequest::getMode()
	 * @uses AmazonWebServicesTypeArtistRequest::getTag()
	 * @uses AmazonWebServicesTypeArtistRequest::getType()
	 * @uses AmazonWebServicesTypeArtistRequest::getDevtag()
	 * @uses AmazonWebServicesTypeArtistRequest::getSort()
	 * @uses AmazonWebServicesTypeArtistRequest::getVariations()
	 * @uses AmazonWebServicesTypeArtistRequest::getLocale()
	 * @param AmazonWebServicesTypeArtistRequest ArtistRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function ArtistSearchRequest(AmazonWebServicesTypeArtistRequest $_AmazonWebServicesTypeArtistRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ArtistSearchRequest(array('artist'=>$_AmazonWebServicesTypeArtistRequest->getArtist(),'page'=>$_AmazonWebServicesTypeArtistRequest->getPage(),'mode'=>$_AmazonWebServicesTypeArtistRequest->getMode(),'tag'=>$_AmazonWebServicesTypeArtistRequest->getTag(),'type'=>$_AmazonWebServicesTypeArtistRequest->getType(),'devtag'=>$_AmazonWebServicesTypeArtistRequest->getDevtag(),'sort'=>$_AmazonWebServicesTypeArtistRequest->getSort(),'variations'=>$_AmazonWebServicesTypeArtistRequest->getVariations(),'locale'=>$_AmazonWebServicesTypeArtistRequest->getLocale())));
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