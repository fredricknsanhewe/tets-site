<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('admin.sections.index', compact('sections'));
    }

    public function edit(Section $section)
    {
        return view('admin.sections.edit',compact('section'));
    }

    public function create()
    {
        return view('admin.sections.create');
    }

    public function update(Request $request, Section $section)
{
    // Save the updated features back as JSON
    $section->content = json_encode($request->content);
    $section->save();

    return redirect()->route('admin.sections.index')->with('success', 'Section updated successfully.');
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'content' => 'required|array',
    ]);

    $contentArray = [];
    foreach ($request->content as $item) {
        $contentArray[$item['key']] = $item['value'];
    }

    Section::create([
        'name' => $request->name,
        'content' => json_encode($contentArray),
    ]);

    return redirect()->route('admin.sections.index')->with('success', 'Section created successfully.');
}

}
?>