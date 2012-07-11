<?php
/**
 * Class file for EbayTradingServiceExtend
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceExtend
 * @date 04/07/2012
 */
class EbayTradingServiceExtend extends EbayTradingWsdlClass
{
	/**
	 * Method to call ExtendSiteHostedPictures
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeExtendSiteHostedPicturesRequestType::getPictureURL()
	 * @uses EbayTradingTypeExtendSiteHostedPicturesRequestType::getExtensionInDays()
	 * @param EbayTradingTypeExtendSiteHostedPicturesRequestType ExtendSiteHostedPicturesRequestType
	 * @return EbayTradingTypeExtendSiteHostedPicturesResponseType
	 */
	public function ExtendSiteHostedPictures(EbayTradingTypeExtendSiteHostedPicturesRequestType $_EbayTradingTypeExtendSiteHostedPicturesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ExtendSiteHostedPictures(array('PictureURL'=>$_EbayTradingTypeExtendSiteHostedPicturesRequestType->getPictureURL(),'ExtensionInDays'=>$_EbayTradingTypeExtendSiteHostedPicturesRequestType->getExtensionInDays())));
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
	 * @return EbayTradingTypeExtendSiteHostedPicturesResponseType
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