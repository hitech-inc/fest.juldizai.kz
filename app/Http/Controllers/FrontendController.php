<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Block;
use App\Models\Backend\TextBlock;
use App\Models\Backend\Photo;

class FrontendController extends Controller
{
    
    public function index(){

    	$red_blocks = TextBlock::all();
    	$text_block1 = Block::where('theme_id','1')->get();
        $text_block2 = Block::where('theme_id','2')->get();
    	$text_block22 = Block::where('theme_id','12')->get();
    	$text_block3 = Block::where('theme_id','3')->first();
    	$phone = Block::where('theme_id','4')->first();
    	$email = Block::where('theme_id','5')->first();
    	$gallery = Photo::orderBy('id','desc')->where('alt','gallery-photos')->get();
    	return view('frontend.index',compact('red_blocks','text_block1','text_block2','text_block3','text_block22','phone','email','gallery'));
    }
}
