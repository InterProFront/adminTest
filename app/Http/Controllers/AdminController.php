<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
    }

    public function getIndex(){
        return view('back.layout');
    }
    public function getString(){
        $block = $this->extract->getBlock('solo_widgets');
        return view('back.blocks.string',[
           'solo_widgets'=> $block
        ]);
    }
    public function getText(){
        $block = $this->extract->getBlock('solo_widgets');
        return view('back.blocks.text',[
            'solo_widgets'=> $block
        ]);
    }
    public function getTextEditor(){
        $block = $this->extract->getBlock('solo_widgets');
        return view('back.blocks.textarea',[
            'solo_widgets'=> $block
        ]);
    }
    public function getInt(){}
    public function getFloat(){}
    public function getImage(){}
    public function getLink(){}
    public function getBool(){}
    public function getSlug(){}
}
