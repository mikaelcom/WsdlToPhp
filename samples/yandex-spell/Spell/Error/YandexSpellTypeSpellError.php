<?php
/**
 * Class file for YandexSpellTypeSpellError
 * @date 10/07/2012
 */
/**
 * Class YandexSpellTypeSpellError
 * @date 10/07/2012
 */
class YandexSpellTypeSpellError extends YandexSpellWsdlClass
{
	/**
	 * The word
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $word;
	/**
	 * The s
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $s;
	/**
	 * The code
	 * Meta informations :
	 * 	- use : required
	 * @var int
	 */
	public $code;
	/**
	 * The pos
	 * Meta informations :
	 * 	- use : required
	 * @var int
	 */
	public $pos;
	/**
	 * The row
	 * Meta informations :
	 * 	- use : required
	 * @var int
	 */
	public $row;
	/**
	 * The col
	 * Meta informations :
	 * 	- use : required
	 * @var int
	 */
	public $col;
	/**
	 * The len
	 * Meta informations :
	 * 	- use : required
	 * @var int
	 */
	public $len;
	/**
	 * Constructor
	 * @param string word
	 * @param string s
	 * @param int code
	 * @param int pos
	 * @param int row
	 * @param int col
	 * @param int len
	 * @return YandexSpellTypeSpellError
	 */
	public function __construct($_word,$_s = null,$_code = null,$_pos = null,$_row = null,$_col = null,$_len = null)
	{
		parent::__construct(array('word'=>$_word,'s'=>$_s,'code'=>$_code,'pos'=>$_pos,'row'=>$_row,'col'=>$_col,'len'=>$_len));
	}
	/**
	 * Set word
	 * @param string word
	 * @return string
	 */
	public function setWord($_word)
	{
		return ($this->word = $_word);
	}
	/**
	 * Get word
	 * @return string
	 */
	public function getWord()
	{
		return $this->word;
	}
	/**
	 * Set s
	 * @param string s
	 * @return string
	 */
	public function setS($_s)
	{
		return ($this->s = $_s);
	}
	/**
	 * Get s
	 * @return string
	 */
	public function getS()
	{
		return $this->s;
	}
	/**
	 * Set code
	 * @param int code
	 * @return int
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return int
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set pos
	 * @param int pos
	 * @return int
	 */
	public function setPos($_pos)
	{
		return ($this->pos = $_pos);
	}
	/**
	 * Get pos
	 * @return int
	 */
	public function getPos()
	{
		return $this->pos;
	}
	/**
	 * Set row
	 * @param int row
	 * @return int
	 */
	public function setRow($_row)
	{
		return ($this->row = $_row);
	}
	/**
	 * Get row
	 * @return int
	 */
	public function getRow()
	{
		return $this->row;
	}
	/**
	 * Set col
	 * @param int col
	 * @return int
	 */
	public function setCol($_col)
	{
		return ($this->col = $_col);
	}
	/**
	 * Get col
	 * @return int
	 */
	public function getCol()
	{
		return $this->col;
	}
	/**
	 * Set len
	 * @param int len
	 * @return int
	 */
	public function setLen($_len)
	{
		return ($this->len = $_len);
	}
	/**
	 * Get len
	 * @return int
	 */
	public function getLen()
	{
		return $this->len;
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