<?php
/**
 * Class file for YMailTypeGetMessageRawHeaderResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeGetMessageRawHeaderResponse
 * @date 02/07/2012
 */
class YMailTypeGetMessageRawHeaderResponse extends YMailWsdlClass
{
	/**
	 * The rawheaders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $rawheaders;
	/**
	 * The error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeErrorCode
	 */
	public $error;
	/**
	 * The total
	 * Meta informations :
	 * 	- use : optional
	 * 	- default : 0
	 * @var unsignedLong
	 */
	public $total;
	/**
	 * Constructor
	 * @param string rawheaders
	 * @param YMailTypeErrorCode error
	 * @param unsignedLong total
	 * @return YMailTypeGetMessageRawHeaderResponse
	 */
	public function __construct($_rawheaders = null,$_error = null,$_total = 0)
	{
		parent::__construct(array('rawheaders'=>$_rawheaders,'error'=>$_error,'total'=>$_total));
	}
	/**
	 * Set rawheaders
	 * @param string rawheaders
	 * @return string
	 */
	public function setRawheaders($_rawheaders)
	{
		return ($this->rawheaders = $_rawheaders);
	}
	/**
	 * Get rawheaders
	 * @return string
	 */
	public function getRawheaders()
	{
		return $this->rawheaders;
	}
	/**
	 * Set error
	 * @param ErrorCode error
	 * @return ErrorCode
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Get error
	 * @return YMailTypeErrorCode
	 */
	public function getError()
	{
		return $this->error;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>