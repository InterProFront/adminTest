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
    public function getInt(){
        $block = $this->extract->getBlock('solo_widgets');
        return view('back.blocks.int',[
            'solo_widgets'=> $block
        ]);
    }
    public function getFloat(){
        $block = $this->extract->getBlock('solo_widgets');
        return view('back.blocks.float',[
            'solo_widgets'=> $block
        ]);
    }
    public function getImage(){
        $block = $this->extract->getBlock('solo_widgets');
        return view('back.blocks.image',[
            'solo_widgets'=> $block
        ]);
    }
    public function getLink(){
        $block = $this->extract->getBlock('solo_widgets');
        $country = $this->extract->selectGroup('country')->get();
        return view('back.blocks.link',[
            'solo_widgets'=> $block,
            'country'   => $country
        ]);
    }
    public function getBool(){
        $block = $this->extract->getBlock('solo_widgets');

        return view('back.blocks.bool',[
            'solo_widgets'=> $block,
        ]);
    }


    public function getFile(){
        $block = $this->extract->getBlock('solo_widgets');
        return view('back.blocks.file', [
            'file' => $block
        ]);
    }


    public function Links(){
            $block = $this->extract->getBlock('group_for_links');
        return view('back.blocks.links',[
            'links' => $block
        ]);
    }

    public function multiUpload(){
        $block = $this->extract->getBlock('image_widget');
        return view('back.blocks.multiupload',[
            'img' => $block
        ]);
    }
}
