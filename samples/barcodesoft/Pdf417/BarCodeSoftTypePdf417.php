<?php
/**
 * Class file for BarCodeSoftTypePdf417
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypePdf417
 * @date 02/08/2012
 */
class BarCodeSoftTypePdf417 extends BarCodeSoftWsdlClass
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
	 * The MaxRow
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MaxRow;
	/**
	 * The FixedColumn
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $FixedColumn;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Security;
	/**
	 * The CompactMode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $CompactMode;
	/**
	 * The Truncated
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Truncated;
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
	 * @param BarCodeSoftTypeBcsImageFormat ImageFormat
	 * @param BarCodeSoftTypeBcsOrientation Orientation
	 * @param int Resolution
	 * @param int MaxRow
	 * @param int FixedColumn
	 * @param int Security
	 * @param int CompactMode
	 * @param boolean Truncated
	 * @param int Width
	 * @param int Height
	 * @param string strToken
	 * @return BarCodeSoftTypePdf417
	 */
	public function __construct($_textToEncode = null,$_ImageFormat,$_Orientation,$_Resolution,$_MaxRow,$_FixedColumn,$_Security,$_CompactMode,$_Truncated,$_Width,$_Height,$_strToken = null)
	{
		parent::__construct(array('textToEncode'=>$_textToEncode,'ImageFormat'=>$_ImageFormat,'Orientation'=>$_Orientation,'Resolution'=>$_Resolution,'MaxRow'=>$_MaxRow,'FixedColumn'=>$_FixedColumn,'Security'=>$_Security,'CompactMode'=>$_CompactMode,'Truncated'=>$_Truncated,'Width'=>$_Width,'Height'=>$_Height,'strToken'=>$_strToken));
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
	 * Set MaxRow
	 * @param int MaxRow
	 * @return int
	 */
	public function setMaxRow($_MaxRow)
	{
		return ($this->MaxRow = $_MaxRow);
	}
	/**
	 * Get MaxRow
	 * @return int
	 */
	public function getMaxRow()
	{
		return $this->MaxRow;
	}
	/**
	 * Set FixedColumn
	 * @param int FixedColumn
	 * @return int
	 */
	public function setFixedColumn($_FixedColumn)
	{
		return ($this->FixedColumn = $_FixedColumn);
	}
	/**
	 * Get FixedColumn
	 * @return int
	 */
	public function getFixedColumn()
	{
		return $this->FixedColumn;
	}
	/**
	 * Set Security
	 * @param int Security
	 * @return int
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return int
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set CompactMode
	 * @param int CompactMode
	 * @return int
	 */
	public function setCompactMode($_CompactMode)
	{
		return ($this->CompactMode = $_CompactMode);
	}
	/**
	 * Get CompactMode
	 * @return int
	 */
	public function getCompactMode()
	{
		return $this->CompactMode;
	}
	/**
	 * Set Truncated
	 * @param boolean Truncated
	 * @return boolean
	 */
	public function setTruncated($_Truncated)
	{
		return ($this->Truncated = $_Truncated);
	}
	/**
	 * Get Truncated
	 * @return boolean
	 */
	public function getTruncated()
	{
		return $this->Truncated;
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