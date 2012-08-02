<?php
/**
 * Class file for LifePicsTypeUploadFileWatermarkExclusiveTagsSource
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileWatermarkExclusiveTagsSource
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileWatermarkExclusiveTagsSource extends LifePicsWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The PartnerSourceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PartnerSourceID;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UserID;
	/**
	 * The FileBinaryArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $FileBinaryArray;
	/**
	 * The FileStreamSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileStreamSize;
	/**
	 * The Filename
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Filename;
	/**
	 * The Watermark
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Watermark;
	/**
	 * The ExclusiveToDealer
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ExclusiveToDealer;
	/**
	 * The MerchantID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MerchantID;
	/**
	 * The TagsXML
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TagsXML;
	/**
	 * The Rotate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Rotate;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string PartnerSourceID
	 * @param string UserID
	 * @param base64Binary FileBinaryArray
	 * @param string FileStreamSize
	 * @param string Filename
	 * @param boolean Watermark
	 * @param boolean ExclusiveToDealer
	 * @param string MerchantID
	 * @param string TagsXML
	 * @param int Rotate
	 * @return LifePicsTypeUploadFileWatermarkExclusiveTagsSource
	 */
	public function __construct($_SessionID = null,$_PartnerSourceID = null,$_UserID = null,$_FileBinaryArray = null,$_FileStreamSize = null,$_Filename = null,$_Watermark,$_ExclusiveToDealer,$_MerchantID = null,$_TagsXML = null,$_Rotate)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'PartnerSourceID'=>$_PartnerSourceID,'UserID'=>$_UserID,'FileBinaryArray'=>$_FileBinaryArray,'FileStreamSize'=>$_FileStreamSize,'Filename'=>$_Filename,'Watermark'=>$_Watermark,'ExclusiveToDealer'=>$_ExclusiveToDealer,'MerchantID'=>$_MerchantID,'TagsXML'=>$_TagsXML,'Rotate'=>$_Rotate));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set PartnerSourceID
	 * @param string PartnerSourceID
	 * @return string
	 */
	public function setPartnerSourceID($_PartnerSourceID)
	{
		return ($this->PartnerSourceID = $_PartnerSourceID);
	}
	/**
	 * Get PartnerSourceID
	 * @return string
	 */
	public function getPartnerSourceID()
	{
		return $this->PartnerSourceID;
	}
	/**
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set FileBinaryArray
	 * @param base64Binary FileBinaryArray
	 * @return base64Binary
	 */
	public function setFileBinaryArray($_FileBinaryArray)
	{
		return ($this->FileBinaryArray = $_FileBinaryArray);
	}
	/**
	 * Get FileBinaryArray
	 * @return base64Binary
	 */
	public function getFileBinaryArray()
	{
		return $this->FileBinaryArray;
	}
	/**
	 * Set FileStreamSize
	 * @param string FileStreamSize
	 * @return string
	 */
	public function setFileStreamSize($_FileStreamSize)
	{
		return ($this->FileStreamSize = $_FileStreamSize);
	}
	/**
	 * Get FileStreamSize
	 * @return string
	 */
	public function getFileStreamSize()
	{
		return $this->FileStreamSize;
	}
	/**
	 * Set Filename
	 * @param string Filename
	 * @return string
	 */
	public function setFilename($_Filename)
	{
		return ($this->Filename = $_Filename);
	}
	/**
	 * Get Filename
	 * @return string
	 */
	public function getFilename()
	{
		return $this->Filename;
	}
	/**
	 * Set Watermark
	 * @param boolean Watermark
	 * @return boolean
	 */
	public function setWatermark($_Watermark)
	{
		return ($this->Watermark = $_Watermark);
	}
	/**
	 * Get Watermark
	 * @return boolean
	 */
	public function getWatermark()
	{
		return $this->Watermark;
	}
	/**
	 * Set ExclusiveToDealer
	 * @param boolean ExclusiveToDealer
	 * @return boolean
	 */
	public function setExclusiveToDealer($_ExclusiveToDealer)
	{
		return ($this->ExclusiveToDealer = $_ExclusiveToDealer);
	}
	/**
	 * Get ExclusiveToDealer
	 * @return boolean
	 */
	public function getExclusiveToDealer()
	{
		return $this->ExclusiveToDealer;
	}
	/**
	 * Set MerchantID
	 * @param string MerchantID
	 * @return string
	 */
	public function setMerchantID($_MerchantID)
	{
		return ($this->MerchantID = $_MerchantID);
	}
	/**
	 * Get MerchantID
	 * @return string
	 */
	public function getMerchantID()
	{
		return $this->MerchantID;
	}
	/**
	 * Set TagsXML
	 * @param string TagsXML
	 * @return string
	 */
	public function setTagsXML($_TagsXML)
	{
		return ($this->TagsXML = $_TagsXML);
	}
	/**
	 * Get TagsXML
	 * @return string
	 */
	public function getTagsXML()
	{
		return $this->TagsXML;
	}
	/**
	 * Set Rotate
	 * @param int Rotate
	 * @return int
	 */
	public function setRotate($_Rotate)
	{
		return ($this->Rotate = $_Rotate);
	}
	/**
	 * Get Rotate
	 * @return int
	 */
	public function getRotate()
	{
		return $this->Rotate;
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