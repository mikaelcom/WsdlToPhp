<?php
/**
 * Class file for RFBibleASVServiceGet
 * @date 15/08/2012
 */
/**
 * Class RFBibleASVServiceGet
 * @date 15/08/2012
 */
class RFBibleASVServiceGet extends RFBibleASVWsdlClass
{
	/**
	 * Method to call GetVerses
	 * @uses RFBibleASVWsdlClass::getSoapClient()
	 * @uses RFBibleASVWsdlClass::setResult()
	 * @uses RFBibleASVWsdlClass::getResult()
	 * @uses RFBibleASVWsdlClass::saveLastError()
	 * @uses RFBibleASVTypeGetVerses::getBookName()
	 * @uses RFBibleASVTypeGetVerses::getChapter()
	 * @uses RFBibleASVTypeGetVerses::getFromVerse()
	 * @uses RFBibleASVTypeGetVerses::getToVerse()
	 * @param RFBibleASVTypeGetVerses GetVerses
	 * @return RFBibleASVTypeGetVersesResponse
	 */
	public function GetVerses(RFBibleASVTypeGetVerses $_RFBibleASVTypeGetVerses)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVerses(array('bookName'=>$_RFBibleASVTypeGetVerses->getBookName(),'chapter'=>$_RFBibleASVTypeGetVerses->getChapter(),'fromVerse'=>$_RFBibleASVTypeGetVerses->getFromVerse(),'toVerse'=>$_RFBibleASVTypeGetVerses->getToVerse())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetVerse
	 * @uses RFBibleASVWsdlClass::getSoapClient()
	 * @uses RFBibleASVWsdlClass::setResult()
	 * @uses RFBibleASVWsdlClass::getResult()
	 * @uses RFBibleASVWsdlClass::saveLastError()
	 * @uses RFBibleASVTypeGetVerse::getBookName()
	 * @uses RFBibleASVTypeGetVerse::getChapter()
	 * @uses RFBibleASVTypeGetVerse::getVerse()
	 * @param RFBibleASVTypeGetVerse GetVerse
	 * @return RFBibleASVTypeGetVerseResponse
	 */
	public function GetVerse(RFBibleASVTypeGetVerse $_RFBibleASVTypeGetVerse)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVerse(array('bookName'=>$_RFBibleASVTypeGetVerse->getBookName(),'chapter'=>$_RFBibleASVTypeGetVerse->getChapter(),'verse'=>$_RFBibleASVTypeGetVerse->getVerse())));
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
	 * @return RFBibleASVTypeGetVersesResponse|RFBibleASVTypeGetVerseResponse
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