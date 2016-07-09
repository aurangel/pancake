<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Http\Requests\TagCreateRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class TagController extends Controller
{
    protected $fields = [
        'tag' => '',
        'title' => '',
        'subtitle' => '',
        'meta_description' => '',
        'page_image' => '',
        'layout' => 'blog.layouts.index',
        'reverse_direction' => 0,
    ];

    public function index()
    {
        $tags = Tag::all();

        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        $data = [];

        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }

        return view('admin.tag.create', $data);
    }

    /**
     * Store the newly created tag in the database.
     *
     * @param TagCreateRequest $request
     * @return Response
     */
    public function store(TagCreateRequest $request)
    {
        $tag = new Tag();
        foreach (array_keys($this->fields) as $field) {
            $tag->$field = $request->get($field);
        }
        $tag->save();

        return redirect('/pancake/admin/tag')->withSuccess("The tag '$tag->tag' was created");
    }

    /**
     * Show the form for editing a tag
     *
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        $data = ['id' => $id];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $tag->$field);
        }

        return view('admin.tag.edit', $data);
    }

    /**
     * Update the tag in storage
     *
     * @param TagUpdateRequest $request
     * @param $id
     * @return mixed
     */
    public function update(TagUpdateRequest $request, $id)
    {
        $tag = Tag::findOrFail($id);
        foreach (array_keys(array_except($this->fields, ['tag'])) as $field) {
            $tag->$field = $request->get($field);
        }
        $tag->save();

        return redirect("/pancake/admin/tag/$id/edit")->withSuccess("Changes saved.");
    }

    /**
     * Delete the tag
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect('/pancake/admin/tag')->withSuccess("The '$tag->tag' tag has been deleted.");
    }
}
