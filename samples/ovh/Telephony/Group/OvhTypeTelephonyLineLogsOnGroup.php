<?php
/**
 * Class file for OvhTypeTelephonyLineLogsOnGroup
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineLogsOnGroup
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineLogsOnGroup extends OvhWsdlClass
{
	/**
	 * The group
	 * @var string
	 */
	public $group;
	/**
	 * The pagingStart
	 * @var int
	 */
	public $pagingStart;
	/**
	 * The pagingLimit
	 * @var int
	 */
	public $pagingLimit;
	/**
	 * Constructor
	 * @param string group
	 * @param int pagingStart
	 * @param int pagingLimit
	 * @return OvhTypeTelephonyLineLogsOnGroup
	 */
	public function __construct($_group = null,$_pagingStart = null,$_pagingLimit = null)
	{
		parent::__construct(array('group'=>$_group,'pagingStart'=>$_pagingStart,'pagingLimit'=>$_pagingLimit));
	}
	/**
	 * Set group
	 * @param string group
	 * @return string
	 */
	public function setGroup($_group)
	{
		return ($this->group = $_group);
	}
	/**
	 * Get group
	 * @return string
	 */
	public function getGroup()
	{
		return $this->group;
	}
	/**
	 * Set pagingStart
	 * @param int pagingStart
	 * @return int
	 */
	public function setPagingStart($_pagingStart)
	{
		return ($this->pagingStart = $_pagingStart);
	}
	/**
	 * Get pagingStart
	 * @return int
	 */
	public function getPagingStart()
	{
		return $this->pagingStart;
	}
	/**
	 * Set pagingLimit
	 * @param int pagingLimit
	 * @return int
	 */
	public function setPagingLimit($_pagingLimit)
	{
		return ($this->pagingLimit = $_pagingLimit);
	}
	/**
	 * Get pagingLimit
	 * @return int
	 */
	public function getPagingLimit()
	{
		return $this->pagingLimit;
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