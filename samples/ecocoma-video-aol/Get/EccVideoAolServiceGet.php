<?php
/**
 * Class file for EccVideoAolServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccVideoAolServiceGet
 * @date 03/07/2012
 */
class EccVideoAolServiceGet extends EccVideoAolWsdlClass
{
	/**
	 * Method to call GetVideo
	 * Meta informations :
	 * 	- documentation : Return the set of video results that match the submitted query from AOL.
	 * @uses EccVideoAolWsdlClass::getSoapClient()
	 * @uses EccVideoAolWsdlClass::setResult()
	 * @uses EccVideoAolWsdlClass::getResult()
	 * @uses EccVideoAolWsdlClass::saveLastError()
	 * @uses EccVideoAolTypeGetVideo::getKeyID()
	 * @uses EccVideoAolTypeGetVideo::getDomainID()
	 * @uses EccVideoAolTypeGetVideo::getKeyword()
	 * @param EccVideoAolTypeGetVideo GetVideo
	 * @return EccVideoAolTypeGetVideoResponse
	 */
	public function GetVideo(EccVideoAolTypeGetVideo $_EccVideoAolTypeGetVideo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVideo(array('KeyID'=>$_EccVideoAolTypeGetVideo->getKeyID(),'DomainID'=>$_EccVideoAolTypeGetVideo->getDomainID(),'Keyword'=>$_EccVideoAolTypeGetVideo->getKeyword())));
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
	 * 	- documentation : Return and filter the set of video results that match the submitted query from AOL.
	 * @uses EccVideoAolWsdlClass::getSoapClient()
	 * @uses EccVideoAolWsdlClass::setResult()
	 * @uses EccVideoAolWsdlClass::getResult()
	 * @uses EccVideoAolWsdlClass::saveLastError()
	 * @uses EccVideoAolTypeGetExtendedVideo::getKeyID()
	 * @uses EccVideoAolTypeGetExtendedVideo::getDomainID()
	 * @uses EccVideoAolTypeGetExtendedVideo::getKeyword()
	 * @uses EccVideoAolTypeGetExtendedVideo::getInclude()
	 * @uses EccVideoAolTypeGetExtendedVideo::getExclude()
	 * @param EccVideoAolTypeGetExtendedVideo GetExtendedVideo
	 * @return EccVideoAolTypeGetExtendedVideoResponse
	 */
	public function GetExtendedVideo(EccVideoAolTypeGetExtendedVideo $_EccVideoAolTypeGetExtendedVideo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedVideo(array('KeyID'=>$_EccVideoAolTypeGetExtendedVideo->getKeyID(),'DomainID'=>$_EccVideoAolTypeGetExtendedVideo->getDomainID(),'Keyword'=>$_EccVideoAolTypeGetExtendedVideo->getKeyword(),'Include'=>$_EccVideoAolTypeGetExtendedVideo->getInclude(),'Exclude'=>$_EccVideoAolTypeGetExtendedVideo->getExclude())));
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
	 * @return EccVideoAolTypeGetExtendedVideoResponse
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