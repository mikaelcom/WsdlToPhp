<?php
/**
 * Class file for YMailTypeGetMessage
 * @date 02/07/2012
 */
/**
 * Class YMailTypeGetMessage
 * @date 02/07/2012
 */
class YMailTypeGetMessage extends YMailWsdlClass
{
	/**
	 * The truncateAt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : 0
	 * @var unsignedInt
	 */
	public $truncateAt;
	/**
	 * The fid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var string
	 */
	public $fid;
	/**
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $mid;
	/**
	 * The message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeMidRequest
	 */
	public $message;
	/**
	 * The charsetHint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $charsetHint;
	/**
	 * Constructor
	 * @param unsignedInt truncateAt
	 * @param string fid
	 * @param string mid
	 * @param YMailTypeMidRequest message
	 * @param string charsetHint
	 * @return YMailTypeGetMessage
	 */
	public function __construct($_truncateAt = 0,$_fid,$_mid = null,$_message = null,$_charsetHint = null)
	{
		parent::__construct(array('truncateAt'=>$_truncateAt,'fid'=>$_fid,'mid'=>$_mid,'message'=>$_message,'charsetHint'=>$_charsetHint));
	}
	/**
	 * Set truncateAt
	 * @param unsignedInt truncateAt
	 * @return unsignedInt
	 */
	public function setTruncateAt($_truncateAt)
	{
		return ($this->truncateAt = $_truncateAt);
	}
	/**
	 * Get truncateAt
	 * @return unsignedInt
	 */
	public function getTruncateAt()
	{
		return $this->truncateAt;
	}
	/**
	 * Set fid
	 * @param string fid
	 * @return string
	 */
	public function setFid($_fid)
	{
		return ($this->fid = $_fid);
	}
	/**
	 * Get fid
	 * @return string
	 */
	public function getFid()
	{
		return $this->fid;
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
	 * Set message
	 * @param MidRequest message
	 * @return MidRequest
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return YMailTypeMidRequest
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set charsetHint
	 * @param string charsetHint
	 * @return string
	 */
	public function setCharsetHint($_charsetHint)
	{
		return ($this->charsetHint = $_charsetHint);
	}
	/**
	 * Get charsetHint
	 * @return string
	 */
	public function getCharsetHint()
	{
		return $this->charsetHint;
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