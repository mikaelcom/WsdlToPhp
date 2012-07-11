<?php
/**
 * Class file for EbayTradingServiceUpload
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceUpload
 * @date 04/07/2012
 */
class EbayTradingServiceUpload extends EbayTradingWsdlClass
{
	/**
	 * Method to call UploadSiteHostedPictures
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeUploadSiteHostedPicturesRequestType::getPictureName()
	 * @uses EbayTradingTypeUploadSiteHostedPicturesRequestType::getPictureSystemVersion()
	 * @uses EbayTradingTypeUploadSiteHostedPicturesRequestType::getPictureSet()
	 * @uses EbayTradingTypeUploadSiteHostedPicturesRequestType::getPictureData()
	 * @uses EbayTradingTypeUploadSiteHostedPicturesRequestType::getPictureUploadPolicy()
	 * @uses EbayTradingTypeUploadSiteHostedPicturesRequestType::getExternalPictureURL()
	 * @uses EbayTradingTypeUploadSiteHostedPicturesRequestType::getPictureWatermark()
	 * @uses EbayTradingTypeUploadSiteHostedPicturesRequestType::getExtensionInDays()
	 * @param EbayTradingTypeUploadSiteHostedPicturesRequestType UploadSiteHostedPicturesRequestType
	 * @return EbayTradingTypeUploadSiteHostedPicturesResponseType
	 */
	public function UploadSiteHostedPictures(EbayTradingTypeUploadSiteHostedPicturesRequestType $_EbayTradingTypeUploadSiteHostedPicturesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UploadSiteHostedPictures(array('PictureName'=>$_EbayTradingTypeUploadSiteHostedPicturesRequestType->getPictureName(),'PictureSystemVersion'=>$_EbayTradingTypeUploadSiteHostedPicturesRequestType->getPictureSystemVersion(),'PictureSet'=>$_EbayTradingTypeUploadSiteHostedPicturesRequestType->getPictureSet(),'PictureData'=>$_EbayTradingTypeUploadSiteHostedPicturesRequestType->getPictureData(),'PictureUploadPolicy'=>$_EbayTradingTypeUploadSiteHostedPicturesRequestType->getPictureUploadPolicy(),'ExternalPictureURL'=>$_EbayTradingTypeUploadSiteHostedPicturesRequestType->getExternalPictureURL(),'PictureWatermark'=>$_EbayTradingTypeUploadSiteHostedPicturesRequestType->getPictureWatermark(),'ExtensionInDays'=>$_EbayTradingTypeUploadSiteHostedPicturesRequestType->getExtensionInDays())));
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
	 * @return EbayTradingTypeUploadSiteHostedPicturesResponseType
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