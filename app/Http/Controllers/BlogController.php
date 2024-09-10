<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    
    private function isAdmin()
    {
        return Auth::check() && Auth::user()->is_admin; // Ensure user is authenticated and is an admin
    }
    public function create()
    {
        if (!$this->isAdmin()) {
            return redirect()->route('Adminlogin')->with('error', 'Access denied.'); 
        }
        
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'author' => 'required|string|max:255',
            'publish_date' => 'required|date',
            'image' => 'required|image|max:2048',
            'likes' => 'required|integer|min:0',
            'slug' => 'required|string|max:60',
            'category' => 'required|string|max:255',
            'content' => 'required|string',  // Updated to handle rich text content
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Get the original filename with extension
            $originalFileName = $request->file('image')->getClientOriginalName();
    
            // Generate a unique filename to avoid conflicts
            $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $uniqueFileName = $filename . '_' . time() . '.' . $extension;
    
            // Store the image in the public storage
            $path = $request->file('image')->storeAs('images', $uniqueFileName, 'public');
    
            // Save the path or file name in the database
            $validatedData['image'] = $path;
        }
    
        // Create a new blog entry
        Blog::create($validatedData);
    
        // Redirect to the blog index with a success message
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }
    

    public function index()
    {
        if (!$this->isAdmin()) {
            return redirect()->route('Adminlogin')->with('error', 'Access denied.'); 
        }

        // Retrieve all blogs for display
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function edit(Blog $blog)
    {
        if (!$this->isAdmin()) {
            return redirect()->route('Adminlogin')->with('error', 'Access denied.'); 
        }
        // Return the edit view with the blog data
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
    
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'author' => 'required|string|max:255',
            'publish_date' => 'required|date',
            'image' => 'nullable|image|max:2048',
            'likes' => 'required|integer|min:0',
            'slug' => 'required|string|max:60|unique:blogs,slug,' . $blog->id,
            'category' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Get the original filename with extension
            $originalFileName = $request->file('image')->getClientOriginalName();
    
            // Generate a unique filename to avoid conflicts
            $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $uniqueFileName = $filename . '_' . time() . '.' . $extension;
    
            // Store the image in the public storage
            $path = $request->file('image')->storeAs('images', $uniqueFileName, 'public');
    
            // Save the path or file name in the database
            $validatedData['image'] = $path;
        } else {
            // Preserve existing image if no new image is uploaded
            $validatedData['image'] = $blog->image;
        }
    
        // Update the blog entry with the validated data
        $blog->update($validatedData);
    
        // Redirect to the updated blog post with a success message
        return redirect()->route('blogs.show', $blog->slug)->with('success', 'Blog updated successfully.');
    }
    
    

    public function destroy(Blog $blog)
    {
        // Delete the blog entry
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }

    public function userIndex()
    {
        // Retrieve all blogs
        $blogs = Blog::all();
        
        // Retrieve the page data where 'view_name' equals 'blogs'
        $page = Page::where('view_name', 'blogs')->first();
    
        // Check if the page data exists to avoid errors
        if (!$page) {
            // Handle the case where the page data is not found (optional)
            abort(404, 'Page not found');
        }
    
        // Pass both blogs and page data to the view
        return view('blogs', compact('blogs', 'page'));
    }
    

    public function show($slug)
    {
        // Find the blog by slug
        $blog = Blog::where('slug', $slug)->firstOrFail();
    
        // Extract headings from the content
        $dom = new \DOMDocument();
        @$dom->loadHTML($blog->content); // Suppress warnings with @
        $headings = [];
        
        for ($i = 1; $i <= 6; $i++) {
            $tags = $dom->getElementsByTagName('h' . $i);
            foreach ($tags as $tag) {
                $headings[] = [
                    'level' => $i,
                    'text' => $tag->textContent,
                    'id' => 'header' . count($headings)
                ];
            }
        }
        
        $blog->content = $dom->saveHTML();
    
        // Retrieve the page data where 'view_name' equals 'blog-details'
        $page = Page::where('view_name', 'blogs')->first();
        
        // Check if the page data exists to avoid errors
        if (!$page) {
            // Handle the case where the page data is not found (optional)
            abort(404, 'Page not found');
        }
        
        return view('blog-details', compact('blog', 'headings', 'page'));
    }


    
}
