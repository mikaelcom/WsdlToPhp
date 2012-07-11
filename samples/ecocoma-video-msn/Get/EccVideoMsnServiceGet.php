<?php
/**
 * Class file for EccVideoMsnServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccVideoMsnServiceGet
 * @date 03/07/2012
 */
class EccVideoMsnServiceGet extends EccVideoMsnWsdlClass
{
	/**
	 * Method to call GetVideo
	 * Meta informations :
	 * 	- documentation : List all videos that have the specified keyword from MSN.
	 * @uses EccVideoMsnWsdlClass::getSoapClient()
	 * @uses EccVideoMsnWsdlClass::setResult()
	 * @uses EccVideoMsnWsdlClass::getResult()
	 * @uses EccVideoMsnWsdlClass::saveLastError()
	 * @uses EccVideoMsnTypeGetVideo::getKeyID()
	 * @uses EccVideoMsnTypeGetVideo::getDomainID()
	 * @uses EccVideoMsnTypeGetVideo::getKeyword()
	 * @param EccVideoMsnTypeGetVideo GetVideo
	 * @return EccVideoMsnTypeGetVideoResponse
	 */
	public function GetVideo(EccVideoMsnTypeGetVideo $_EccVideoMsnTypeGetVideo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVideo(array('KeyID'=>$_EccVideoMsnTypeGetVideo->getKeyID(),'DomainID'=>$_EccVideoMsnTypeGetVideo->getDomainID(),'Keyword'=>$_EccVideoMsnTypeGetVideo->getKeyword())));
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
	 * 	- documentation : List and filter all videos that have the specified keyword from MSN.
	 * @uses EccVideoMsnWsdlClass::getSoapClient()
	 * @uses EccVideoMsnWsdlClass::setResult()
	 * @uses EccVideoMsnWsdlClass::getResult()
	 * @uses EccVideoMsnWsdlClass::saveLastError()
	 * @uses EccVideoMsnTypeGetExtendedVideo::getKeyID()
	 * @uses EccVideoMsnTypeGetExtendedVideo::getDomainID()
	 * @uses EccVideoMsnTypeGetExtendedVideo::getKeyword()
	 * @uses EccVideoMsnTypeGetExtendedVideo::getInclude()
	 * @uses EccVideoMsnTypeGetExtendedVideo::getExclude()
	 * @param EccVideoMsnTypeGetExtendedVideo GetExtendedVideo
	 * @return EccVideoMsnTypeGetExtendedVideoResponse
	 */
	public function GetExtendedVideo(EccVideoMsnTypeGetExtendedVideo $_EccVideoMsnTypeGetExtendedVideo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedVideo(array('KeyID'=>$_EccVideoMsnTypeGetExtendedVideo->getKeyID(),'DomainID'=>$_EccVideoMsnTypeGetExtendedVideo->getDomainID(),'Keyword'=>$_EccVideoMsnTypeGetExtendedVideo->getKeyword(),'Include'=>$_EccVideoMsnTypeGetExtendedVideo->getInclude(),'Exclude'=>$_EccVideoMsnTypeGetExtendedVideo->getExclude())));
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
	 * @return EccVideoMsnTypeGetExtendedVideoResponse
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