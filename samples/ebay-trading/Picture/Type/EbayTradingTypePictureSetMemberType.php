<?php
/**
 * Class file for EbayTradingTypePictureSetMemberType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureSetMemberType
 * Documentation : URL and size information for each generated and stored size. This data is provided for use in application previews of pictures. This data is used for display control for specific pictures in the generated imageset. This container is supplied for all generated pictures.
 * @date 04/07/2012
 */
class EbayTradingTypePictureSetMemberType extends EbayTradingWsdlClass
{
	/**
	 * The MemberURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for the picture.
	 * @var anyURI
	 */
	public $MemberURL;
	/**
	 * The PictureHeight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Height of the picture in pixels.
	 * @var int
	 */
	public $PictureHeight;
	/**
	 * The PictureWidth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Width of the picture in pixels.
	 * @var int
	 */
	public $PictureWidth;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param anyURI MemberURL
	 * @param int PictureHeight
	 * @param int PictureWidth
	 * @param DOMDocument any
	 * @return EbayTradingTypePictureSetMemberType
	 */
	public function __construct($_MemberURL = null,$_PictureHeight = null,$_PictureWidth = null,$_any = null)
	{
		parent::__construct(array('MemberURL'=>$_MemberURL,'PictureHeight'=>$_PictureHeight,'PictureWidth'=>$_PictureWidth,'any'=>$_any));
	}
	/**
	 * Set MemberURL
	 * @param anyURI MemberURL
	 * @return anyURI
	 */
	public function setMemberURL($_MemberURL)
	{
		return ($this->MemberURL = $_MemberURL);
	}
	/**
	 * Get MemberURL
	 * @return anyURI
	 */
	public function getMemberURL()
	{
		return $this->MemberURL;
	}
	/**
	 * Set PictureHeight
	 * @param int PictureHeight
	 * @return int
	 */
	public function setPictureHeight($_PictureHeight)
	{
		return ($this->PictureHeight = $_PictureHeight);
	}
	/**
	 * Get PictureHeight
	 * @return int
	 */
	public function getPictureHeight()
	{
		return $this->PictureHeight;
	}
	/**
	 * Set PictureWidth
	 * @param int PictureWidth
	 * @return int
	 */
	public function setPictureWidth($_PictureWidth)
	{
		return ($this->PictureWidth = $_PictureWidth);
	}
	/**
	 * Get PictureWidth
	 * @return int
	 */
	public function getPictureWidth()
	{
		return $this->PictureWidth;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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