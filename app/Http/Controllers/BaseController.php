<?php 
namespace App\Http\Controllers;
use Session;
class BaseController extends Controller {
	private $user;
	public function __construct()
	{
	}
	#BASE PUBLIC VIEW
	public function baseView($Childview,$Data)
	{
		\Blade::setRawTags('[[', ']]');
		\Blade::setContentTags('[[[', ']]]');
		\Blade::setEscapedContentTags('[[[', ']]]');
		$Data['ChildView'] = $Childview;
		return view('bases.body', $Data);
	}
	#ONLY MEMBER CAN'T ACCESS
	public function onlyMember()
	{
		if(Session::has('userlogin')==false){return redirect('/');}//login page
	}
}