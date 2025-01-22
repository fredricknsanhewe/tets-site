<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('admin.sections.index', compact('sections'));
    }
    public function logout(Request $request){
        // Log the user out of the application
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out successfully.');
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