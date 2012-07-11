<?php
/**
 * Class file for EccVideoServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccVideoServiceGet
 * @date 03/07/2012
 */
class EccVideoServiceGet extends EccVideoWsdlClass
{
	/**
	 * Method to call GetVideo
	 * Meta informations :
	 * 	- documentation : List all videos that have the specified keyword from Google, MSN, Yahoo, AOL.
	 * @uses EccVideoWsdlClass::getSoapClient()
	 * @uses EccVideoWsdlClass::setResult()
	 * @uses EccVideoWsdlClass::getResult()
	 * @uses EccVideoWsdlClass::saveLastError()
	 * @uses EccVideoTypeGetVideo::getKeyID()
	 * @uses EccVideoTypeGetVideo::getDomainID()
	 * @uses EccVideoTypeGetVideo::getKeyword()
	 * @param EccVideoTypeGetVideo GetVideo
	 * @return EccVideoTypeGetVideoResponse
	 */
	public function GetVideo(EccVideoTypeGetVideo $_EccVideoTypeGetVideo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVideo(array('KeyID'=>$_EccVideoTypeGetVideo->getKeyID(),'DomainID'=>$_EccVideoTypeGetVideo->getDomainID(),'Keyword'=>$_EccVideoTypeGetVideo->getKeyword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedVideo
	 * Meta informations :
	 * 	- documentation : List and filter all videos that have the specified keyword from Google, MSN, Yahoo, AOL.
	 * @uses EccVideoWsdlClass::getSoapClient()
	 * @uses EccVideoWsdlClass::setResult()
	 * @uses EccVideoWsdlClass::getResult()
	 * @uses EccVideoWsdlClass::saveLastError()
	 * @uses EccVideoTypeGetExtendedVideo::getKeyID()
	 * @uses EccVideoTypeGetExtendedVideo::getDomainID()
	 * @uses EccVideoTypeGetExtendedVideo::getKeyword()
	 * @uses EccVideoTypeGetExtendedVideo::getInclude()
	 * @uses EccVideoTypeGetExtendedVideo::getExclude()
	 * @param EccVideoTypeGetExtendedVideo GetExtendedVideo
	 * @return EccVideoTypeGetExtendedVideoResponse
	 */
	public function GetExtendedVideo(EccVideoTypeGetExtendedVideo $_EccVideoTypeGetExtendedVideo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedVideo(array('KeyID'=>$_EccVideoTypeGetExtendedVideo->getKeyID(),'DomainID'=>$_EccVideoTypeGetExtendedVideo->getDomainID(),'Keyword'=>$_EccVideoTypeGetExtendedVideo->getKeyword(),'Include'=>$_EccVideoTypeGetExtendedVideo->getInclude(),'Exclude'=>$_EccVideoTypeGetExtendedVideo->getExclude())));
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
	 * @return EccVideoTypeGetExtendedVideoResponse
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