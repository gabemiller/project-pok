<?php
/**
 * Created by PhpStorm.
 * User: G�bor
 * Date: 2015.07.22.
 * Time: 15:21
 */

namespace Admin;

use View;
use Divide\CMS\Quote;
use Validator;
use Response;
use Redirect;
use Config;
use Input;
use Exception;

class QuoteController extends \BaseController
{
    protected $layout = '_backend.master';

    /**
     * Display a listing of the resource.
     * GET /admin\quote
     *
     * @return Response
     */
    public function index() {
        View::share('title', 'Idézetek');

        $this->layout->content = View::make('admin.quote.index')
            ->with('quotes', Quote::all());
    }

    /**
     * Show the form for creating a new resource.
     * GET /admin\quote/create
     *
     * @return Response
     */
    public function create() {
        View::share('title', 'Új idézet');

        $this->layout->content = View::make('admin.quote.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /admin\quote
     *
     * @return Response
     */
    public function store() {


        try {

            $rules = array(
                'quote' => 'required'
            );

            $validation = Validator::make(Input::all(), $rules);

            if ($validation->fails()) {
                return Redirect::back()->withInput()->withErrors($validation->messages());
            }

            $quote = new Quote();


            $quote->quote = Input::get('quote');
            $quote->author = Input::get('author');
            $quote->picture = Input::get('picture');

            if ($quote->save()) {
                return Redirect::back()->with('message', 'Az idézet feltöltése sikerült!');
            } else {
                return Redirect::back()->withInput()->withErrors('Az idézet feltöltése nem sikerült!');
            }
        } catch (Exception $e) {
            if (Config::get('app.debug')) {
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            } else {
                return Redirect::back()->withInput()->withErrors('Az idézet feltöltése nem sikerült!');
            }
        }
    }

    /**
     * Display the specified resource.
     * GET /admin\quote/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        View::share('title', 'Igézet');

        $this->layout->content = View::make('admin.quote.show');
    }

    /**
     * Show the form for editing the specified resource.
     * GET /admin\quote/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        View::share('title', 'Idézet módosítása');

        $this->layout->content = View::make('admin.quote.edit')
            ->with('quote', Quote::find($id));
    }

    /**
     * Update the specified resource in storage.
     * PUT /admin\quote/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {

        try {

            $rules = array(
                'quote' => 'required'
            );

            $validation = Validator::make(Input::all(), $rules);

            if ($validation->fails()) {
                return Redirect::back()->withInput()->withErrors($validation->messages());
            }

            $quote = Quote::find($id);


            $quote->quote = Input::get('quote');
            $quote->author = Input::get('author');
            $quote->picture = Input::get('picture');

            if ($quote->save()) {
                return Redirect::back()->with('message', 'Az idézet módosítása sikerült!');
            } else {
                return Redirect::back()->withInput()->withErrors('Az idézet módosítása nem sikerült!');
            }
        } catch (Exception $e) {
            if (Config::get('app.debug')) {
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            } else {
                return Redirect::back()->withInput()->withErrors('Az idézet módosítása nem sikerült!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /admin\quote/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        try {

            $quote = Quote::find($id);

            if ($quote->delete()) {
                return Response::json(['message' => 'A(z) ' . $id . ' azonosítójú idézet törlése sikerült!', 'status' => true]);
            } else {
                return Response::json(['message' => 'A(z) ' . $id . ' azonosítójú idézet törlése nem sikerült!', 'status' => false]);
            }
        } catch (Exception $e) {
            if (Config::get('app.debug')) {
                return Response::json(['message' => $e->getMessage(), 'status' => false]);
            } else {
                return Response::json(['message' => 'A(z) ' . $id . ' azonosítójú idézet törlése nem sikerült!', 'status' => false]);
            }
        }
    }
}