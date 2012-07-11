<?php
/**
 * Class file for XiStatisticsTypeArrayOfTopic
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeArrayOfTopic
 * @date 08/07/2012
 */
class XiStatisticsTypeArrayOfTopic extends XiStatisticsWsdlClass
{
	/**
	 * The Topic
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiStatisticsTypeTopic
	 */
	public $Topic;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopic Topic
	 * @return XiStatisticsTypeArrayOfTopic
	 */
	public function __construct($_Topic = null)
	{
		parent::__construct(array('Topic'=>$_Topic));
	}
	/**
	 * Set Topic
	 * @param Topic Topic
	 * @return Topic
	 */
	public function setTopic($_Topic)
	{
		return ($this->Topic = $_Topic);
	}
	/**
	 * Get Topic
	 * @return XiStatisticsTypeTopic
	 */
	public function getTopic()
	{
		return $this->Topic;
	}
	/**
	 * Returns the current element
	 * @see XiStatisticsWsdlClass::current()
	 * @return XiStatisticsTypeTopic
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiStatisticsWsdlClass::item()
	 * @param int
	 * @return XiStatisticsTypeTopic
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiStatisticsWsdlClass::first()
	 * @return XiStatisticsTypeTopic
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiStatisticsWsdlClass::last()
	 * @return XiStatisticsTypeTopic
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiStatisticsWsdlClass::offsetGet()
	 * @param int
	 * @return XiStatisticsTypeTopic
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Topic'
	 */
	public function getAttributeName()
	{
		return 'Topic';
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