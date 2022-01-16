<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Resources\Posts\PostCollection;
use App\Models\Models\Posts\Subject;

class SubjectController extends Controller
{
    public function show(Subject $subject)
    {
        return new PostCollection($subject->posts);
    }
}
