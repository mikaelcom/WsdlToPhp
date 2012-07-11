<?php
/**
 * Class file for YMailTypeGetUserDataResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeGetUserDataResponse
 * @date 02/07/2012
 */
class YMailTypeGetUserDataResponse extends YMailWsdlClass
{
	/**
	 * The data
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var YMailTypeUserData
	 */
	public $data;
	/**
	 * Constructor
	 * @param YMailTypeUserData data
	 * @return YMailTypeGetUserDataResponse
	 */
	public function __construct($_data)
	{
		parent::__construct(array('data'=>$_data));
	}
	/**
	 * Set data
	 * @param UserData data
	 * @return UserData
	 */
	public function setData($_data)
	{
		return ($this->data = $_data);
	}
	/**
	 * Get data
	 * @return YMailTypeUserData
	 */
	public function getData()
	{
		return $this->data;
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