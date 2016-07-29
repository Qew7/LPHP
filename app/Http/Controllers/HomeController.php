<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Auth;

use App\Article;
use Input;
use Redirect;
use Request;
use Session;
use Validator;

class HomeController extends Controller
{
    //
    public function createProject(){

    }

    public function  bigBold(){
        $data = ['projects' => Project::latest()];
        return view('bigbold', $data);
    }

    public function getRegister(){
         return view('auth.register');
    }

    public function getLogin(){
        return view('auth.login');
    }

    public function login(){
        $data = Request::input();

        $email    = $data[ 'email' ];
//        $remember = $data[ 'remember' ];
        $password = $data[ 'password' ];

        if (! Auth::attempt(['email' => $email, 'password' => $password])){
            Session::flash( 'auth', [
                'status' => 'danger',
                'message' => trans('auth.failure')
            ] );
        }
        return redirect()->back()->withInput();
    }

    public function index (){
        $data = ['title' => 'Мой дневничок!<3',
                'pagetitle' => 'Здравствуй, дневничок, сегодня я...',
                'articles' => Article::latest()->paginate(5),
                'count' => Article::count()];

        return view('pages.articles.index', $data);
    }

    public function edit($id){
        $data = ['title' => 'Мой дневничок!<3',
                'pagetitle' => '...передумал...',
                'article' => Article::find($id)];
        return view('pages.articles.edit', $data);
    }

    public function destroy($id){
        $article = Article::find($id);
        if ( ! $article ) {
            Session::flash('message', 'Нет записи');
        } else {
            $article->delete();
            Session::flash('message', 'Удалили воспоминание...');
        };
        return Redirect::to('/');
    }

    public function create(){
        $rules = array(
            'title' => 'required',
            'text' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('/')->withErrors($validator);
        } else {
            $article = new Article;
            $article->title = Input::get('title');
            $article->text = Input::get('text');
            $article->save();

            Session::flash('message', 'Добавили запись');
            return Redirect::to('/');
        }
    }

    public function show($id){
        $data = ['title' => 'Мой дневничок!<3',
                'pagetitle' => '...посмотрел запись...',
                'article' => Article::find($id)];
        return view('pages.articles.show', $data);
    }

    public function update($id){
        $rules = array(
            'title' => 'required',
            'text' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('article/' . $id . '/edit')->withErrors($validator);
        } else {
            $article = Article::find($id);
            $article->title = Input::get('title');
            $article->text = Input::get('text');
            $article->save();

            Session::flash('message', 'Изменили запись');
            return Redirect::to('/');
        }
    }
}