<?php
/**
 * Class file for BarCodeSoftTypeUPCE
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeUPCE
 * @date 02/08/2012
 */
class BarCodeSoftTypeUPCE extends BarCodeSoftWsdlClass
{
	/**
	 * The textToEncode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $textToEncode;
	/**
	 * The strAddon
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $strAddon;
	/**
	 * The ImageFormat
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var BarCodeSoftTypeBcsImageFormat
	 */
	public $ImageFormat;
	/**
	 * The Orientation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var BarCodeSoftTypeBcsOrientation
	 */
	public $Orientation;
	/**
	 * The Resolution
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Resolution;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Width;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Height;
	/**
	 * The strToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $strToken;
	/**
	 * Constructor
	 * @param string textToEncode
	 * @param string strAddon
	 * @param BarCodeSoftTypeBcsImageFormat ImageFormat
	 * @param BarCodeSoftTypeBcsOrientation Orientation
	 * @param int Resolution
	 * @param int Width
	 * @param int Height
	 * @param string strToken
	 * @return BarCodeSoftTypeUPCE
	 */
	public function __construct($_textToEncode = null,$_strAddon = null,$_ImageFormat,$_Orientation,$_Resolution,$_Width,$_Height,$_strToken = null)
	{
		parent::__construct(array('textToEncode'=>$_textToEncode,'strAddon'=>$_strAddon,'ImageFormat'=>$_ImageFormat,'Orientation'=>$_Orientation,'Resolution'=>$_Resolution,'Width'=>$_Width,'Height'=>$_Height,'strToken'=>$_strToken));
	}
	/**
	 * Set textToEncode
	 * @param string textToEncode
	 * @return string
	 */
	public function setTextToEncode($_textToEncode)
	{
		return ($this->textToEncode = $_textToEncode);
	}
	/**
	 * Get textToEncode
	 * @return string
	 */
	public function getTextToEncode()
	{
		return $this->textToEncode;
	}
	/**
	 * Set strAddon
	 * @param string strAddon
	 * @return string
	 */
	public function setStrAddon($_strAddon)
	{
		return ($this->strAddon = $_strAddon);
	}
	/**
	 * Get strAddon
	 * @return string
	 */
	public function getStrAddon()
	{
		return $this->strAddon;
	}
	/**
	 * Set ImageFormat
	 * @param BcsImageFormat ImageFormat
	 * @return BcsImageFormat
	 */
	public function setImageFormat($_ImageFormat)
	{
		return ($this->ImageFormat = BarCodeSoftTypeBcsImageFormat::valueIsValid($_ImageFormat)?$_ImageFormat:null);
	}
	/**
	 * Get ImageFormat
	 * @return BarCodeSoftTypeBcsImageFormat
	 */
	public function getImageFormat()
	{
		return $this->ImageFormat;
	}
	/**
	 * Set Orientation
	 * @param BcsOrientation Orientation
	 * @return BcsOrientation
	 */
	public function setOrientation($_Orientation)
	{
		return ($this->Orientation = BarCodeSoftTypeBcsOrientation::valueIsValid($_Orientation)?$_Orientation:null);
	}
	/**
	 * Get Orientation
	 * @return BarCodeSoftTypeBcsOrientation
	 */
	public function getOrientation()
	{
		return $this->Orientation;
	}
	/**
	 * Set Resolution
	 * @param int Resolution
	 * @return int
	 */
	public function setResolution($_Resolution)
	{
		return ($this->Resolution = $_Resolution);
	}
	/**
	 * Get Resolution
	 * @return int
	 */
	public function getResolution()
	{
		return $this->Resolution;
	}
	/**
	 * Set Width
	 * @param int Width
	 * @return int
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return int
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set Height
	 * @param int Height
	 * @return int
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return int
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set strToken
	 * @param string strToken
	 * @return string
	 */
	public function setStrToken($_strToken)
	{
		return ($this->strToken = $_strToken);
	}
	/**
	 * Get strToken
	 * @return string
	 */
	public function getStrToken()
	{
		return $this->strToken;
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