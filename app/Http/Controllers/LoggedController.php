<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 6/30/16
 * Time: 2:21 PM
 */

namespace App\Http\Controllers;

use App\User;
use Auth;

use App\Article;
use Input;
use Redirect;
use Session;
use Validator;

class LoggedController extends Controller
{
    public function index (){
        $data = ['title' => 'Мой дневничок!<3',
            'pagetitle' => 'Здравствуй, дневничок, сегодня ВОШЁЛ...',
            'articles' => Article::latest()->paginate(5),
            'count' => Article::count()];

        return view('pages.larticles.loggedind', $data);
    }

    public function logout (){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }

    public function edit($id){
        $data = ['title' => 'Мой дневничок!<3',
            'pagetitle' => '...передумал...',
            'article' => Article::find($id)];
        return view('pages.larticles.edit', $data);
    }

    public function destroy($id){
        $article = Article::find($id);
        if ( ! $article ) {
            Session::flash('message', 'Нет записи');
        } else {
            $article->delete();
            Session::flash('message', 'Удалили воспоминание...');
        };
        return Redirect::to('/main/');
    }

    public function create(){
        $rules = array(
            'title' => 'required',
            'text' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('main/')->withErrors($validator);
        } else {
            $article = new Article;
            $article->title = Input::get('title');
            $article->text = Input::get('text');
            $article->save();

            Session::flash('message', 'Добавили запись');
            return Redirect::to('main/');
        }
    }

    public function show($id){
        $data = ['title' => 'Мой дневничок!<3',
            'pagetitle' => '...посмотрел запись...',
            'article' => Article::find($id)];
        return view('pages.larticles.show', $data);
    }

    public function update($id){
        $rules = array(
            'title' => 'required',
            'text' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('/main/article/' . $id . '/edit')->withErrors($validator);
        } else {
            $article = Article::find($id);
            $article->title = Input::get('title');
            $article->text = Input::get('text');
            $article->save();

            Session::flash('message', 'Изменили запись');
            return Redirect::to('/main/');
        }
    }
}