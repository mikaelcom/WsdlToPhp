<?php
/**
 * Class file for BarCodeSoftTypeQRCode
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeQRCode
 * @date 02/08/2012
 */
class BarCodeSoftTypeQRCode extends BarCodeSoftWsdlClass
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
	 * The EccLevel
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var BarCodeSoftTypeQrcodeErrorLvl
	 */
	public $EccLevel;
	/**
	 * The QRCodeFormat
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var BarCodeSoftTypeQrcodeFormat
	 */
	public $QRCodeFormat;
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
	 * The Size
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Size;
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
	 * @param BarCodeSoftTypeQrcodeErrorLvl EccLevel
	 * @param BarCodeSoftTypeQrcodeFormat QRCodeFormat
	 * @param BarCodeSoftTypeBcsImageFormat ImageFormat
	 * @param BarCodeSoftTypeBcsOrientation Orientation
	 * @param int Resolution
	 * @param int Size
	 * @param string strToken
	 * @return BarCodeSoftTypeQRCode
	 */
	public function __construct($_textToEncode = null,$_EccLevel,$_QRCodeFormat,$_ImageFormat,$_Orientation,$_Resolution,$_Size,$_strToken = null)
	{
		parent::__construct(array('textToEncode'=>$_textToEncode,'EccLevel'=>$_EccLevel,'QRCodeFormat'=>$_QRCodeFormat,'ImageFormat'=>$_ImageFormat,'Orientation'=>$_Orientation,'Resolution'=>$_Resolution,'Size'=>$_Size,'strToken'=>$_strToken));
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
	 * Set EccLevel
	 * @param QrcodeErrorLvl EccLevel
	 * @return QrcodeErrorLvl
	 */
	public function setEccLevel($_EccLevel)
	{
		return ($this->EccLevel = BarCodeSoftTypeQrcodeErrorLvl::valueIsValid($_EccLevel)?$_EccLevel:null);
	}
	/**
	 * Get EccLevel
	 * @return BarCodeSoftTypeQrcodeErrorLvl
	 */
	public function getEccLevel()
	{
		return $this->EccLevel;
	}
	/**
	 * Set QRCodeFormat
	 * @param QrcodeFormat QRCodeFormat
	 * @return QrcodeFormat
	 */
	public function setQRCodeFormat($_QRCodeFormat)
	{
		return ($this->QRCodeFormat = BarCodeSoftTypeQrcodeFormat::valueIsValid($_QRCodeFormat)?$_QRCodeFormat:null);
	}
	/**
	 * Get QRCodeFormat
	 * @return BarCodeSoftTypeQrcodeFormat
	 */
	public function getQRCodeFormat()
	{
		return $this->QRCodeFormat;
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
	 * Set Size
	 * @param int Size
	 * @return int
	 */
	public function setSize($_Size)
	{
		return ($this->Size = $_Size);
	}
	/**
	 * Get Size
	 * @return int
	 */
	public function getSize()
	{
		return $this->Size;
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