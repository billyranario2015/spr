<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ExamController extends Controller {

	public function examLists()
	{
		return view( 'profile.exams' );
	}
	public function confirmExam()
	{
		return view( 'profile.begin-exam' );
	}
	public function questions()
	{
		return view( 'profile.exam-questions' );
	}
	public function confirmSubmit()
	{
		return view( 'profile.confirm-submit' );
	}
	public function result()
	{
		return view( 'profile.result' );
	}
	public function showTakenExam() 
	{
		return view( 'profile.taken-exams' );	
	}
}
