<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
    	$request->validate([
    		'name'=>'required',
    		'phone'=>'required',
    		'age'=>'required'
    	]);

    	$message=new Message();
    	$message->name=$request->name;
    	$message->phone=$request->phone;
    	$message->age=$request->age;
    	$message->save();

    	return response()->json(['success'=>'message sent']);
    }

    public function contact(Request $request)
    {
        $request->validate([
            'msg'=>'required',
        ]);

        $message=new Message();
        $message->name=$request->name;
        $message->phone=$request->phone;
        $message->email=$request->email;
        $message->message=$request->msg;
        $message->save();
        return response()->json(['success'=>'message sent']);
    }

    public function send_resume(Request $request)
    {

        $zayafka=new \App\Resume();
        if ($request->hasFile('resume')) {
        $file = $request->file('resume');
        $name = str_slug('resume_'.$request->name).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('storage/'), $name);
        $zayafka->resume = $name;
        }

        $zayafka->name=$request->name;
        $zayafka->phone=$request->phone;
        $zayafka->email=$request->email;
        $zayafka->job_name=$request->job_name;
        $zayafka->save();

        return back()->with(['flash'=>'qabul qilindi']);
    }

    public function getJob(Request $request)
    {
        $job=\App\Job::withTranslation(\App::getLocale())->find($request->id);
        $res=view('ajax.getJob', compact('job'));
        return $res;

    }

    public function getFaq(Request $request)
    {
        $faqs=\App\Faq::withTranslation(\App::getLocale())->where('category_id', $request->id)->get();
        $res=view('ajax.getFaq', compact('faqs'));
        return $res;

    }

    public function getStudent(Request $request)
    {
        $students=\App\Student::where('name', 'LIKE', '%'.$request->key.'%')->get();
        $res=view('ajax.getStudent', compact('students'));
        return $res;

    }

    public function getStudentsByAge(Request $request)
    {
        $students=\App\Student::where('group_id', $request->group)
        ->where('age', $request->age)
        ->get();
        $res=view('ajax.getStudent', compact('students'));
        return $res;
    }

    public function getTrener(Request $request)
    {
        $treners=\App\Worker::where('name', 'LIKE', '%'.$request->key.'%')->get();
        $res=view('ajax.getTrener', compact('treners'));
        return $res;
    }

    public function getTrenersByAge(Request $request)
    {
        $treners=\App\Worker::where('group_id', $request->group)
        ->where('age_category', $request->age)
        ->get();
        $res=view('ajax.getTrener', compact('treners'));
        return $res;
    }

    public function getFeature(Request $request)
    {
        $fea=\App\Feature::withTranslation(\App::getLocale())->find($request->id);

        $res=view('ajax.getFeature', compact('fea'));
        return $res;
    }
}