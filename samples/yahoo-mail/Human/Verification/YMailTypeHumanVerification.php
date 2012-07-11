<?php
/**
 * Class file for YMailTypeHumanVerification
 * @date 02/07/2012
 */
/**
 * Class YMailTypeHumanVerification
 * @date 02/07/2012
 */
class YMailTypeHumanVerification extends YMailWsdlClass
{
	/**
	 * The imageurl
	 * @var string
	 */
	public $imageurl;
	/**
	 * The answer
	 * @var string
	 */
	public $answer;
	/**
	 * Constructor
	 * @param string imageurl
	 * @param string answer
	 * @return YMailTypeHumanVerification
	 */
	public function __construct($_imageurl = null,$_answer = null)
	{
		parent::__construct(array('imageurl'=>$_imageurl,'answer'=>$_answer));
	}
	/**
	 * Set imageurl
	 * @param string imageurl
	 * @return string
	 */
	public function setImageurl($_imageurl)
	{
		return ($this->imageurl = $_imageurl);
	}
	/**
	 * Get imageurl
	 * @return string
	 */
	public function getImageurl()
	{
		return $this->imageurl;
	}
	/**
	 * Set answer
	 * @param string answer
	 * @return string
	 */
	public function setAnswer($_answer)
	{
		return ($this->answer = $_answer);
	}
	/**
	 * Get answer
	 * @return string
	 */
	public function getAnswer()
	{
		return $this->answer;
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