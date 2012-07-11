<?php
/**
 * Class file for OvhTypeTelephonyLineListReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineListReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineListReturn extends OvhWsdlClass
{
	/**
	 * The link
	 * @var OvhTypeMyArrayOfTelephonyLineStructType
	 */
	public $link;
	/**
	 * The alias
	 * @var OvhTypeMyArrayOfTelephonyLineStructType
	 */
	public $alias;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyLineStructType link
	 * @param OvhTypeMyArrayOfTelephonyLineStructType alias
	 * @return OvhTypeTelephonyLineListReturn
	 */
	public function __construct($_link = null,$_alias = null)
	{
		parent::__construct(array('link'=>new OvhTypeMyArrayOfTelephonyLineStructType($_link),'alias'=>new OvhTypeMyArrayOfTelephonyLineStructType($_alias)));
	}
	/**
	 * Set link
	 * @param MyArrayOfTelephonyLineStructType link
	 * @return MyArrayOfTelephonyLineStructType
	 */
	public function setLink($_link)
	{
		return ($this->link = $_link);
	}
	/**
	 * Get link
	 * @return OvhTypeMyArrayOfTelephonyLineStructType
	 */
	public function getLink()
	{
		return $this->link;
	}
	/**
	 * Set alias
	 * @param MyArrayOfTelephonyLineStructType alias
	 * @return MyArrayOfTelephonyLineStructType
	 */
	public function setAlias($_alias)
	{
		return ($this->alias = $_alias);
	}
	/**
	 * Get alias
	 * @return OvhTypeMyArrayOfTelephonyLineStructType
	 */
	public function getAlias()
	{
		return $this->alias;
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