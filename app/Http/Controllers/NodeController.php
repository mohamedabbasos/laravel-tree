<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Node;

class NodeController extends Controller
{
    //

    public function store(Request $request)
    {

        // Do validation 

        $input = $request->all();


        Node::create([
            "name" => $input["name"],
            "parent_id" => $input["parent_id"],
            "type" => $input["type"],
            "department_name" => isset($input["department_name"])?$input["department_name"]:null ,
            "programming_language" => isset($input["programming_language"])?$input["programming_language"]:null ,

        ]);
        
    }

    public function show(Request $request, $id)
    {

        $node = Node::with('children')->findOrFail($id);

        return response()->json(['node' => $node]);
        
    }

    public function changeNodeParentId(Request $request, $id)
    {
        $node = Node::findOrFail($id);

        $node->parent_id = $request->parent_id;

        $node->save();

        return response()->json($node);

    
    }


    

}
