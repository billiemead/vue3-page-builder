<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SectionsController extends Controller
{

    /* public $reusableBlocks = [
        [
            'content' => '<section class="inner-banner py-5">
                <div class="w3l-breadcrumb py-lg-5">
                    <div class="container pt-5 pb-sm-4 pb-2">
                        <h4 class="inner-text-title font-weight-bold pt-5">Contact Us</h4>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
                        </ul>
                    </div>
                </div>
            </section>',
            'label' => 'About Us',
            'media' => '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152z"/></svg>',
            'id' => 'about-us'
        ]

    ]; */

    public function uploadHeroImages(Request $request)
    {
        $files = $request->allFiles();
        foreach ($files as $file) {
            $file_name = $file->getClientOriginalName();
            $path = $file->storeAs("hero", $file_name);
        }
    }

    /* public function liveEdit($section_id)
    {
        $content = '<p>
            This is a dummy content we will be getting the content from the database and
            we will be able to edit that content through live editor </p>';
        $blocks = $this->reusableBlocks;
        return Inertia::render('LiveEditor', ['content' => $content, 'blocks' => $blocks]);
    } */
}