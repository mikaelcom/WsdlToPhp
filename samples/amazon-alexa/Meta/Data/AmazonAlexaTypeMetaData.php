<?php
/**
 * Class file for AmazonAlexaTypeMetaData
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeMetaData
 * @date 10/07/2012
 */
class AmazonAlexaTypeMetaData extends AmazonAlexaWsdlClass
{
	/**
	 * The ResultNumber
	 * @var UnsignedIntegerType
	 */
	public $ResultNumber;
	/**
	 * The RequestInfo
	 * @var AmazonAlexaTypeRequestInfo
	 */
	public $RequestInfo;
	/**
	 * The Checksums
	 * @var AmazonAlexaTypeChecksums
	 */
	public $Checksums;
	/**
	 * The Title
	 * @var normalizedString
	 */
	public $Title;
	/**
	 * The OtherUrls
	 * @var AmazonAlexaTypeOtherUrls
	 */
	public $OtherUrls;
	/**
	 * The Images
	 * @var AmazonAlexaTypeImages
	 */
	public $Images;
	/**
	 * The Links
	 * @var AmazonAlexaTypeLinks
	 */
	public $Links;
	/**
	 * Constructor
	 * @param UnsignedIntegerType ResultNumber
	 * @param AmazonAlexaTypeRequestInfo RequestInfo
	 * @param AmazonAlexaTypeChecksums Checksums
	 * @param normalizedString Title
	 * @param AmazonAlexaTypeOtherUrls OtherUrls
	 * @param AmazonAlexaTypeImages Images
	 * @param AmazonAlexaTypeLinks Links
	 * @return AmazonAlexaTypeMetaData
	 */
	public function __construct($_ResultNumber = null,$_RequestInfo = null,$_Checksums = null,$_Title = null,$_OtherUrls = null,$_Images = null,$_Links = null)
	{
		parent::__construct(array('ResultNumber'=>$_ResultNumber,'RequestInfo'=>$_RequestInfo,'Checksums'=>$_Checksums,'Title'=>$_Title,'OtherUrls'=>$_OtherUrls,'Images'=>$_Images,'Links'=>$_Links));
	}
	/**
	 * Set ResultNumber
	 * @param UnsignedIntegerType ResultNumber
	 * @return UnsignedIntegerType
	 */
	public function setResultNumber($_ResultNumber)
	{
		return ($this->ResultNumber = $_ResultNumber);
	}
	/**
	 * Get ResultNumber
	 * @return UnsignedIntegerType
	 */
	public function getResultNumber()
	{
		return $this->ResultNumber;
	}
	/**
	 * Set RequestInfo
	 * @param RequestInfo RequestInfo
	 * @return RequestInfo
	 */
	public function setRequestInfo($_RequestInfo)
	{
		return ($this->RequestInfo = $_RequestInfo);
	}
	/**
	 * Get RequestInfo
	 * @return AmazonAlexaTypeRequestInfo
	 */
	public function getRequestInfo()
	{
		return $this->RequestInfo;
	}
	/**
	 * Set Checksums
	 * @param Checksums Checksums
	 * @return Checksums
	 */
	public function setChecksums($_Checksums)
	{
		return ($this->Checksums = $_Checksums);
	}
	/**
	 * Get Checksums
	 * @return AmazonAlexaTypeChecksums
	 */
	public function getChecksums()
	{
		return $this->Checksums;
	}
	/**
	 * Set Title
	 * @param normalizedString Title
	 * @return normalizedString
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return normalizedString
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set OtherUrls
	 * @param OtherUrls OtherUrls
	 * @return OtherUrls
	 */
	public function setOtherUrls($_OtherUrls)
	{
		return ($this->OtherUrls = $_OtherUrls);
	}
	/**
	 * Get OtherUrls
	 * @return AmazonAlexaTypeOtherUrls
	 */
	public function getOtherUrls()
	{
		return $this->OtherUrls;
	}
	/**
	 * Set Images
	 * @param Images Images
	 * @return Images
	 */
	public function setImages($_Images)
	{
		return ($this->Images = $_Images);
	}
	/**
	 * Get Images
	 * @return AmazonAlexaTypeImages
	 */
	public function getImages()
	{
		return $this->Images;
	}
	/**
	 * Set Links
	 * @param Links Links
	 * @return Links
	 */
	public function setLinks($_Links)
	{
		return ($this->Links = $_Links);
	}
	/**
	 * Get Links
	 * @return AmazonAlexaTypeLinks
	 */
	public function getLinks()
	{
		return $this->Links;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>