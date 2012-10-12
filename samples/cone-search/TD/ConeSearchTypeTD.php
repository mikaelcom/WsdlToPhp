<?php
/**
 * Class file for ConeSearchTypeTD
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeTD
 * @date 13/10/2012
 */
class ConeSearchTypeTD extends ConeSearchWsdlClass
{
	/**
	 * The encoding
	 * @var ConeSearchTypeEncodingType
	 */
	public $encoding;
	/**
	 * Constructor
	 * @param ConeSearchTypeEncodingType encoding
	 * @return ConeSearchTypeTD
	 */
	public function __construct($_encoding = null)
	{
		parent::__construct(array('encoding'=>$_encoding));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>