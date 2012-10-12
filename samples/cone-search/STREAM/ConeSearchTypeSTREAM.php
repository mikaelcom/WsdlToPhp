<?php
/**
 * Class file for ConeSearchTypeSTREAM
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeSTREAM
 * @date 13/10/2012
 */
class ConeSearchTypeSTREAM extends ConeSearchWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * The type
	 * Meta informations :
	 * 	- default : locator
	 * @var ConeSearchTypeSTREAMType
	 */
	public $type;
	/**
	 * The href
	 * @var anyURI
	 */
	public $href;
	/**
	 * The actuate
	 * Meta informations :
	 * 	- default : onRequest
	 * @var ConeSearchTypeSTREAMActuate
	 */
	public $actuate;
	/**
	 * The encoding
	 * Meta informations :
	 * 	- default : none
	 * @var ConeSearchTypeEncodingType
	 */
	public $encoding;
	/**
	 * The expires
	 * @var dateTime
	 */
	public $expires;
	/**
	 * The rights
	 * @var token
	 */
	public $rights;
	/**
	 * Constructor
	 * @param string _
	 * @param ConeSearchTypeSTREAMType type
	 * @param anyURI href
	 * @param ConeSearchTypeSTREAMActuate actuate
	 * @param ConeSearchTypeEncodingType encoding
	 * @param dateTime expires
	 * @param token rights
	 * @return ConeSearchTypeSTREAM
	 */
	public function __construct($__ = null,$_type = 'locator',$_href = null,$_actuate = 'onRequest',$_encoding = 'none',$_expires = null,$_rights = null)
	{
		parent::__construct(array('_'=>$__,'type'=>$_type,'href'=>$_href,'actuate'=>$_actuate,'encoding'=>$_encoding,'expires'=>$_expires,'rights'=>$_rights));
	}
	/**
	 * Set _
	 * @param string _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return string
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set type
	 * @param STREAMType type
	 * @return STREAMType
	 */
	public function setType($_type)
	{
		return ($this->type = ConeSearchTypeSTREAMType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return ConeSearchTypeSTREAMType
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set href
	 * @param anyURI href
	 * @return anyURI
	 */
	public function setHref($_href)
	{
		return ($this->href = $_href);
	}
	/**
	 * Get href
	 * @return anyURI
	 */
	public function getHref()
	{
		return $this->href;
	}
	/**
	 * Set actuate
	 * @param STREAMActuate actuate
	 * @return STREAMActuate
	 */
	public function setActuate($_actuate)
	{
		return ($this->actuate = ConeSearchTypeSTREAMActuate::valueIsValid($_actuate)?$_actuate:null);
	}
	/**
	 * Get actuate
	 * @return ConeSearchTypeSTREAMActuate
	 */
	public function getActuate()
	{
		return $this->actuate;
	}
	/**
	 * Set encoding
	 * @param encodingType encoding
	 * @return encodingType
	 */
	public function setEncoding($_encoding)
	{
		return ($this->encoding = ConeSearchTypeencodingType::valueIsValid($_encoding)?$_encoding:null);
	}
	/**
	 * Get encoding
	 * @return ConeSearchTypeencodingType
	 */
	public function getEncoding()
	{
		return $this->encoding;
	}
	/**
	 * Set expires
	 * @param dateTime expires
	 * @return dateTime
	 */
	public function setExpires($_expires)
	{
		return ($this->expires = $_expires);
	}
	/**
	 * Get expires
	 * @return dateTime
	 */
	public function getExpires()
	{
		return $this->expires;
	}
	/**
	 * Set rights
	 * @param token rights
	 * @return token
	 */
	public function setRights($_rights)
	{
		return ($this->rights = $_rights);
	}
	/**
	 * Get rights
	 * @return token
	 */
	public function getRights()
	{
		return $this->rights;
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