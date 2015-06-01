<?php
/*
 * Copyright (c) 2011 Imajiku -- http://imajiku.com
 * AUTHORS:
 *   Agung Hari Wijaya
 *   a9un9hari@gmail.com
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
* Wait, this is  beta version. :)
*
* @package     CodeIgniter
* @subpackage  Model
* @category    General Model
* @author      Agung Hari Wijaya <a9un9hari@gmail.com><a9un9hari.com>
*/
class General_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	public function find($table, $where = NULL, $field = NULL, $limit = NULL, $orderby = NULL, $join = FALSE, $like = FALSE)
	{
		if(!empty($join))
		{
			if(is_array($join))
			{
				foreach($join as $row)
				{
					$val_1    = $row[0];
					$val_2    = $row[1];
					$val_3    = $row[2];
					$this->db->join($val_1,$val_2,$val_3);
				}
			}
			else
			{
				return FALSE;
			}
		}
		if(!empty($like))
		{
			if(is_array($like))
			{
				$val_1	= $like[0];
				$val_2	= $like[1];
				$val_3	= $like[2];
				$this->db->like($val_1,$val_2,$val_3);
			}
		}
		if(!empty($orderby))
		{
			if(is_array($orderby))
			{
				$val_1	= $orderby[0];
				$val_2	= $orderby[1];
				$this->db->order_by($val_1,$val_2);
			}
			else
			{
				$this->db->order_by($orderby);
			}
		}
		if (! empty($limit))
		{
			if(is_array($limit))
			{
				$this->db->limit($limit[1],$limit[0]);
			}
			else
			{
				$this->db->limit($limit);
			}
		}
		if ( empty($field))
		{
			if (! empty($where))
			{
				$this->db->where($where);
			}
			$query = $this->db->get($table);
			if ($query->num_rows() < 1)
			{
				$query->free_result();
				return FALSE;
			}
			else
			{
				$ret = $query;
				return $ret;
			}
		}
		else
		{
			$this->db->select($field);
			if (! empty($where))
			{
				$this->db->where($where);
			}
			$query = $this->db->get($table);
			if ($query->num_rows() < 1)
			{
				$query->free_result();
				return FALSE;
			}
			else
			{
				$ret = $query;
				return $ret;
			}
		}
	}
	public function total($table,$where=null,$field=null)
	{
		if(empty($field))
		{
			if(!empty($where))
			{
				$this->db->where($where);
			}
			$query = $this->db->get($table);
			return $query->num_rows();
		}
		else
		{
			$this->db->select($field);
			if(!empty($where))
			{
				$this->db->where($where);
			}
			$query = $this->db->get($table);
			return $query->num_rows();
		}
	}
	public function delete($table,$where=null)
	{
		if(!empty($where))
		{
			$this->db->where($where);
		}
		if(!empty($table))
		{
			return $this->db->delete($table); 
		}
		else
		{
			return FALSE;
		}
	}
	function write($table,$data)
	{
		if($table == FALSE || $data == FALSE)
		{
			return FALSE;
		}
		else
		{
			if(!is_array($data))
			{
				return FALSE;
			}
			else
			{
				$insert = $this->db->insert($table, $data);
				return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
			}
		}
	}
	function replace($table,$data,$where)
	{
		if($table == FALSE || $data == FALSE || $where == FALSE)
		{
			return FALSE;
		}
		else
		{
			if(!is_array($data)){
				return FALSE;
			}
			else
			{
				$this->db->where($where);
				$update = $this->db->update($table, $data);
				return TRUE;
			}
		}
	}
}
?>