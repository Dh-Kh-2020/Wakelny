<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\category;
use App\Models\User;
use App\Models\Skill;
use App\Models\UserSkills;
use Bavix\Wallet\Models\Transaction;
use Bavix\Wallet\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    function savecategories(Request $request)
    {
        $categories = $request->categories;
        print_r($categories);
        if (blank($categories)) {
            return redirect()->back()->with(['message' => 'يرجى اضافة تخصص جديد', 'type' => 'alert-danger']);
        } else {
            $needToInsert = false;
            // insert if the categories are new
            foreach ($categories  as $value) {
                $findcategory = Usercategories::where('user_id', Auth::id())->where('category_id', $value)->get();

                if ($findcategory->isEmpty()) {
                    $message = ['message' => 'تمت اضافة التخصص بنجاح', 'type' => 'alert-success'];
                    Usercategories::insert(['category_id' => $value, 'user_id' => Auth::id()]);
                } else {
                    $message = ['message' => 'تمت اضافة هذا التخصص مسبقا', 'type' => 'alert-danger'];
                }

                print_r(['category_id' => $value, 'user_id' => Auth::id()]);
            }

            return redirect()->back()->with($message);
        }
    }

    function showSkills()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        $skills = Skill::where('is_active', 1)->get();
        $myskills = UserSkills::join('skills', 'skills.id', '=', 'user_skills.skill_id')->where('user_id', Auth::id())->get(['skills.name', 'user_skills.skill_id']);
        // $myskills = User::with(['skills'])->where('id', Auth::id())->get();
        return view('client.userProfile.editSkills')->with(['item' => $profile, 'skills' => $skills, 'myskills' => $myskills]);
    }
    function saveSkills(Request $request)
    {
        $skills = $request->skills;
        print_r($skills);
        if (blank($skills)) {
            return redirect()->back()->with(['message' => 'يرجى اضافة مهارة جديدة', 'type' => 'alert-danger']);
        } else {
            $needToInsert = false;
            // insert if the skills are new
            foreach ($skills  as $value) {
                $findSkill = UserSkills::where('user_id', Auth::id())->where('skill_id', $value)->get();

                if ($findSkill->isEmpty()) {
                    $message = ['message' => 'لقد تم اضافة المهارة بنجاح', 'type' => 'alert-success'];
                    UserSkills::insert(['skill_id' => $value, 'user_id' => Auth::id()]);
                } else {
                    $message = ['message' => 'هناك مهارة بالفعل', 'type' => 'alert-danger'];
                }

                print_r(['skill_id' => $value, 'user_id' => Auth::id()]);
            }

            return redirect()->back()->with($message);
        }
    }

    function deleteSkill($skill_id)
    {
        $skill = UserSkills::where(['skill_id' => $skill_id, 'user_id' => Auth::id()])->delete();

        return redirect()->back()->with(['message' => 'لقد تم حذف المهارة بنجاح', 'type' => 'alert-danger']);
    }


    //  mywallete view
    function showMyWallet()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        $wallet = Wallet::where('holder_id', Auth::id())->first();
        $transactions = Transaction::select('*', DB::raw('JSON_EXTRACT(`meta`, "$.project_id")'))->where('payable_id', Auth::id())->get();
        return view('client.userProfile.myWallet')->with([
            'item' => $profile,
            'wallet' => $wallet,
            'transactions' => $transactions,
        ]);
    }
}