<?php

namespace App\Http\Controllers\Backend;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Testimonials;

use App\Http\Controllers\Controller;


class TestimonyController extends BackendController {
    public function index(Request $request) {
      $testimony = Testimonials::orderBy('Person')->paginate($this->limit);

        return view("backend.testimony.index", compact('testimony'));
      }

      public function create()
    {
      $testimony = new Testimonials();
      
        return view("backend.testimony.create", compact('testimony'));
    }

    public function store(Requests\TestimonyStoreRequest $request)
    {
      Testimonials::create($request->all());
        return redirect("/backend/testimony")->with("message", "New testimony was created successfully!");
    }

    public function edit($id)
    {
      $testimony = Testimonials::findOrFail($id);

        return view("backend.testimony.edit", compact('testimony'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\TestimonyUpdateRequest $request, $id)
    {
      Testimonials::findOrFail($id)->update($request->all());

        return redirect("/backend/testimony")->with("message", "Testimony was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $testimony = Testimonials::findOrFail($id);
        $testimony->delete();

        return redirect("/backend/testimony")->with("message", "Testimony was deleted successfully!");
    }
}