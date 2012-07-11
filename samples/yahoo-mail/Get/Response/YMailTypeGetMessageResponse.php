<?php
/**
 * Class file for YMailTypeGetMessageResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeGetMessageResponse
 * @date 02/07/2012
 */
class YMailTypeGetMessageResponse extends YMailWsdlClass
{
	/**
	 * The total
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : 0
	 * @var unsignedLong
	 */
	public $total;
	/**
	 * The folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeFolderData
	 */
	public $folder;
	/**
	 * The message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeMessage
	 */
	public $message;
	/**
	 * The header
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeHeader
	 */
	public $header;
	/**
	 * The code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeErrorCode
	 */
	public $code;
	/**
	 * Constructor
	 * @param unsignedLong total
	 * @param YMailTypeFolderData folder
	 * @param YMailTypeMessage message
	 * @param YMailTypeHeader header
	 * @param YMailTypeErrorCode code
	 * @return YMailTypeGetMessageResponse
	 */
	public function __construct($_total = 0,$_folder = null,$_message = null,$_header = null,$_code = null)
	{
		parent::__construct(array('total'=>$_total,'folder'=>$_folder,'message'=>$_message,'header'=>$_header,'code'=>$_code));
	}
	/**
	 * Set total
	 * @param unsignedLong total
	 * @return unsignedLong
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get total
	 * @return unsignedLong
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set folder
	 * @param FolderData folder
	 * @return FolderData
	 */
	public function setFolder($_folder)
	{
		return ($this->folder = $_folder);
	}
	/**
	 * Get folder
	 * @return YMailTypeFolderData
	 */
	public function getFolder()
	{
		return $this->folder;
	}
	/**
	 * Set message
	 * @param Message message
	 * @return Message
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return YMailTypeMessage
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set header
	 * @param Header header
	 * @return Header
	 */
	public function setHeader($_header)
	{
		return ($this->header = $_header);
	}
	/**
	 * Get header
	 * @return YMailTypeHeader
	 */
	public function getHeader()
	{
		return $this->header;
	}
	/**
	 * Set code
	 * @param ErrorCode code
	 * @return ErrorCode
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return YMailTypeErrorCode
	 */
	public function getCode()
	{
		return $this->code;
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