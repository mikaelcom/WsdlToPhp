<?php
/**
 * Class file for XiInsiderTypeFootnote
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeFootnote
 * @date 08/07/2012
 */
class XiInsiderTypeFootnote extends XiInsiderWsdlClass
{
	/**
	 * The text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $text;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param string text
	 * @param string id
	 * @return XiInsiderTypeFootnote
	 */
	public function __construct($_text = null,$_id = null)
	{
		parent::__construct(array('text'=>$_text,'id'=>$_id));
	}
	/**
	 * Set text
	 * @param string text
	 * @return string
	 */
	public function setText($_text)
	{
		return ($this->text = $_text);
	}
	/**
	 * Get text
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}
	/**
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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