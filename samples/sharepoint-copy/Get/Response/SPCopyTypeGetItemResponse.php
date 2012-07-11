<?php
/**
 * Class file for SPCopyTypeGetItemResponse
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeGetItemResponse
 * @date 07/07/2012
 */
class SPCopyTypeGetItemResponse extends SPCopyWsdlClass
{
	/**
	 * The GetItemResult
	 * @var unsignedInt
	 */
	public $GetItemResult;
	/**
	 * The Fields
	 * @var SPCopyTypeFieldInformationCollection
	 */
	public $Fields;
	/**
	 * The Stream
	 * @var base64Binary
	 */
	public $Stream;
	/**
	 * Constructor
	 * @param unsignedInt GetItemResult
	 * @param SPCopyTypeFieldInformationCollection Fields
	 * @param base64Binary Stream
	 * @return SPCopyTypeGetItemResponse
	 */
	public function __construct($_GetItemResult = null,$_Fields = null,$_Stream = null)
	{
		parent::__construct(array('GetItemResult'=>$_GetItemResult,'Fields'=>$_Fields,'Stream'=>$_Stream));
	}
	/**
	 * Set GetItemResult
	 * @param unsignedInt GetItemResult
	 * @return unsignedInt
	 */
	public function setGetItemResult($_GetItemResult)
	{
		return ($this->GetItemResult = $_GetItemResult);
	}
	/**
	 * Get GetItemResult
	 * @return unsignedInt
	 */
	public function getGetItemResult()
	{
		return $this->GetItemResult;
	}
	/**
	 * Set Fields
	 * @param FieldInformationCollection Fields
	 * @return FieldInformationCollection
	 */
	public function setFields($_Fields)
	{
		return ($this->Fields = $_Fields);
	}
	/**
	 * Get Fields
	 * @return SPCopyTypeFieldInformationCollection
	 */
	public function getFields()
	{
		return $this->Fields;
	}
	/**
	 * Set Stream
	 * @param base64Binary Stream
	 * @return base64Binary
	 */
	public function setStream($_Stream)
	{
		return ($this->Stream = $_Stream);
	}
	/**
	 * Get Stream
	 * @return base64Binary
	 */
	public function getStream()
	{
		return $this->Stream;
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