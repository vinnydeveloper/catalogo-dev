<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillController extends Controller
{
    public function viewForm(Request $request){
        return view('registerSkill');
    }

    public function create(Request $request){
        $newSkill = new Skill();
        $newSkill->name = $request->nameSkill;
        $newSkill->description = $request->descriptionSkill;
        $newSkill->save();
        
        return redirect('/skill/cadastro');   
    }
}
