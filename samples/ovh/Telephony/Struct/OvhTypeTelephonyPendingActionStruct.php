<?php
/**
 * Class file for OvhTypeTelephonyPendingActionStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPendingActionStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyPendingActionStruct extends OvhWsdlClass
{
	/**
	 * The dateTodo
	 * @var string
	 */
	public $dateTodo;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The action
	 * @var string
	 */
	public $action;
	/**
	 * Constructor
	 * @param string dateTodo
	 * @param string offer
	 * @param string action
	 * @return OvhTypeTelephonyPendingActionStruct
	 */
	public function __construct($_dateTodo = null,$_offer = null,$_action = null)
	{
		parent::__construct(array('dateTodo'=>$_dateTodo,'offer'=>$_offer,'action'=>$_action));
	}
	/**
	 * Set dateTodo
	 * @param string dateTodo
	 * @return string
	 */
	public function setDateTodo($_dateTodo)
	{
		return ($this->dateTodo = $_dateTodo);
	}
	/**
	 * Get dateTodo
	 * @return string
	 */
	public function getDateTodo()
	{
		return $this->dateTodo;
	}
	/**
	 * Set offer
	 * @param string offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get offer
	 * @return string
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set action
	 * @param string action
	 * @return string
	 */
	public function setAction($_action)
	{
		return ($this->action = $_action);
	}
	/**
	 * Get action
	 * @return string
	 */
	public function getAction()
	{
		return $this->action;
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