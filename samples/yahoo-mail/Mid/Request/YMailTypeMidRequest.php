<?php
/**
 * Class file for YMailTypeMidRequest
 * @date 02/07/2012
 */
/**
 * Class YMailTypeMidRequest
 * @date 02/07/2012
 */
class YMailTypeMidRequest extends YMailWsdlClass
{
	/**
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $mid;
	/**
	 * The blockImages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : none
	 * @var YMailTypeImageBlockOption
	 */
	public $blockImages;
	/**
	 * The restrictCSS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : false
	 * @var boolean
	 */
	public $restrictCSS;
	/**
	 * The imgReplacementURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : 
	 * @var string
	 */
	public $imgReplacementURL;
	/**
	 * The expandCIDReferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : false
	 * @var boolean
	 */
	public $expandCIDReferences;
	/**
	 * The enableWarnings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : false
	 * @var boolean
	 */
	public $enableWarnings;
	/**
	 * Constructor
	 * @param string mid
	 * @param YMailTypeImageBlockOption blockImages
	 * @param boolean restrictCSS
	 * @param string imgReplacementURL
	 * @param boolean expandCIDReferences
	 * @param boolean enableWarnings
	 * @return YMailTypeMidRequest
	 */
	public function __construct($_mid,$_blockImages = 'none',$_restrictCSS = false,$_imgReplacementURL = '',$_expandCIDReferences = false,$_enableWarnings = false)
	{
		parent::__construct(array('mid'=>$_mid,'blockImages'=>$_blockImages,'restrictCSS'=>$_restrictCSS,'imgReplacementURL'=>$_imgReplacementURL,'expandCIDReferences'=>$_expandCIDReferences,'enableWarnings'=>$_enableWarnings));
	}
	/**
	 * Set mid
	 * @param string mid
	 * @return string
	 */
	public function setMid($_mid)
	{
		return ($this->mid = $_mid);
	}
	/**
	 * Get mid
	 * @return string
	 */
	public function getMid()
	{
		return $this->mid;
	}
	/**
	 * Set blockImages
	 * @param ImageBlockOption blockImages
	 * @return ImageBlockOption
	 */
	public function setBlockImages($_blockImages)
	{
		return ($this->blockImages = YMailTypeImageBlockOption::valueIsValid($_blockImages)?$_blockImages:null);
	}
	/**
	 * Get blockImages
	 * @return YMailTypeImageBlockOption
	 */
	public function getBlockImages()
	{
		return $this->blockImages;
	}
	/**
	 * Set restrictCSS
	 * @param boolean restrictCSS
	 * @return boolean
	 */
	public function setRestrictCSS($_restrictCSS)
	{
		return ($this->restrictCSS = $_restrictCSS);
	}
	/**
	 * Get restrictCSS
	 * @return boolean
	 */
	public function getRestrictCSS()
	{
		return $this->restrictCSS;
	}
	/**
	 * Set imgReplacementURL
	 * @param string imgReplacementURL
	 * @return string
	 */
	public function setImgReplacementURL($_imgReplacementURL)
	{
		return ($this->imgReplacementURL = $_imgReplacementURL);
	}
	/**
	 * Get imgReplacementURL
	 * @return string
	 */
	public function getImgReplacementURL()
	{
		return $this->imgReplacementURL;
	}
	/**
	 * Set expandCIDReferences
	 * @param boolean expandCIDReferences
	 * @return boolean
	 */
	public function setExpandCIDReferences($_expandCIDReferences)
	{
		return ($this->expandCIDReferences = $_expandCIDReferences);
	}
	/**
	 * Get expandCIDReferences
	 * @return boolean
	 */
	public function getExpandCIDReferences()
	{
		return $this->expandCIDReferences;
	}
	/**
	 * Set enableWarnings
	 * @param boolean enableWarnings
	 * @return boolean
	 */
	public function setEnableWarnings($_enableWarnings)
	{
		return ($this->enableWarnings = $_enableWarnings);
	}
	/**
	 * Get enableWarnings
	 * @return boolean
	 */
	public function getEnableWarnings()
	{
		return $this->enableWarnings;
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