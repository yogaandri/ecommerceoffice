<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * AUTHORS:
 *   Afri Yosela Putri
 *   afri_yosela@yahoo.com
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
* MW Auth modified to integrate easily with Codeigniter
* Wait, this is  beta version. :)
*
* @package     CodeIgniter
* @subpackage  Libraries
* @category    Auth
* @author      Afri Yosela <afri_yosela@yahoo.com>
*/
class MW_auth
{
	function __construct() 
	{
		$this->ci =& get_instance();
	}
	function login($identity,$password)
	{
		return $this->ci->mw_auth_model->login($identity,$password);
	}
	function login_petugas($identity,$password)
	{
		return $this->ci->mw_auth_model->login_petugas($identity,$password);
	}
		
	function logged_in()
	{
		if($this->ci->session->userdata('logged_in') && $this->ci->session->userdata('username') && $this->ci->session->userdata('logged_in') == TRUE){
			return TRUE;
		}else{
			return FALSE;
		}
	}	
	function logged_in_petugas()
	{
		if($this->ci->session->userdata('logged_in_petugas') && $this->ci->session->userdata('username') && $this->ci->session->userdata('logged_in_petugas') == TRUE){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	function info_user($field,$value)
	{
		$identity = 'username';
		return $this->ci->mw_auth_model->info_user($field,$value,$identity);
	}
	function require_authentication()
	{
		if (!logged_in()) {
			redirect(site_url('admin/login'));
		exit;
		}
	}
	function require_authentication_petugas()
	{
		if (!logged_in_petugas()) {
			redirect(site_url('petugas/login'));
		exit;
		}
	}
	function cek_access($permission)
	{
		if ($this->ci->session->userdata('usertype')==$permission) {
			TRUE;
		}
		else
		{
			FALSE;
		}
	}
	function logout()
	{
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('logged_in');
		$this->ci->session->sess_destroy();
		return TRUE;
	}
	function logout_petugas()
	{
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('logged_in_petugas');
		$this->ci->session->unset_userdata('id_keluar');
		$this->ci->session->sess_destroy();
		return TRUE;
	}
}