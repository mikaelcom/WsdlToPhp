<?php
/**
 * Class file for BarCodeSoftTypeAztec
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeAztec
 * @date 02/08/2012
 */
class BarCodeSoftTypeAztec extends BarCodeSoftWsdlClass
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
	 * The nFormat
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var BarCodeSoftTypeAztecTargetSize
	 */
	public $nFormat;
	/**
	 * The ErrorLevel
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var BarCodeSoftTypeAztecErrorLevel
	 */
	public $ErrorLevel;
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
	 * @param BarCodeSoftTypeBcsImageFormat ImageFormat
	 * @param BarCodeSoftTypeBcsOrientation Orientation
	 * @param int Resolution
	 * @param BarCodeSoftTypeAztecTargetSize nFormat
	 * @param BarCodeSoftTypeAztecErrorLevel ErrorLevel
	 * @param int Size
	 * @param string strToken
	 * @return BarCodeSoftTypeAztec
	 */
	public function __construct($_textToEncode = null,$_ImageFormat,$_Orientation,$_Resolution,$_nFormat,$_ErrorLevel,$_Size,$_strToken = null)
	{
		parent::__construct(array('textToEncode'=>$_textToEncode,'ImageFormat'=>$_ImageFormat,'Orientation'=>$_Orientation,'Resolution'=>$_Resolution,'nFormat'=>$_nFormat,'ErrorLevel'=>$_ErrorLevel,'Size'=>$_Size,'strToken'=>$_strToken));
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
	 * Set nFormat
	 * @param AztecTargetSize nFormat
	 * @return AztecTargetSize
	 */
	public function setNFormat($_nFormat)
	{
		return ($this->nFormat = BarCodeSoftTypeAztecTargetSize::valueIsValid($_nFormat)?$_nFormat:null);
	}
	/**
	 * Get nFormat
	 * @return BarCodeSoftTypeAztecTargetSize
	 */
	public function getNFormat()
	{
		return $this->nFormat;
	}
	/**
	 * Set ErrorLevel
	 * @param AztecErrorLevel ErrorLevel
	 * @return AztecErrorLevel
	 */
	public function setErrorLevel($_ErrorLevel)
	{
		return ($this->ErrorLevel = BarCodeSoftTypeAztecErrorLevel::valueIsValid($_ErrorLevel)?$_ErrorLevel:null);
	}
	/**
	 * Get ErrorLevel
	 * @return BarCodeSoftTypeAztecErrorLevel
	 */
	public function getErrorLevel()
	{
		return $this->ErrorLevel;
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